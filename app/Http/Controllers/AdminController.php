<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\policy;
use App\models\detail;
use App\Models\userlogin;
use Session;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    function adminindex()
    {
        $policy = DB::table('policies')->count();
        $leads =  DB::table('details')->count();
      
      
        return view('admin/adminindex',compact('policy','leads'));
    }
    function sidebar()
    {
        return view('admin/sidebar');
    }
function adminPolicy()
    {
        return view('admin/adminpolicy');
    }
    public function addpolicy(Request $request)
{
    $add = new policy;
    $add->name = $request->input('name');
    $add->investmoney = $request->input('investmoney');
    $add->youGive = $request->input('youGive');
    $add->YouGet = $request->input('YouGet');
    $add->years = $request->input('years');
    if($request->hasfile('image'))
    {
        $file = $request->file('image');
        $extention = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move('uploads/images/', $filename);
        $add->image = $filename;
    }
    $add->save();
    return redirect()->back()->with('status','Student Image Added Successfully');
}
function policydata()
{
    $data = array(
        'list' => DB::table('policies')->get()
    );
    return view('admin/allpolicies', $data);
}
function action(Request $request)
{
    if ($request->ajax()) {
        if ($request->action == 'edit') {
            $data = array(
                'name' => $request->name,
                'investmoney' => $request->investmoney,
                'youGive' => $request->youGive,
                'youGet' => $request->youGet,
                'years' => $request->years
            );
            DB::table('policies')
                ->where('id', $request->id)
                ->update($data);
        }
        if ($request->action == 'delete') {
            DB::table('policies')
                ->where('id', $request->id)
                ->delete();
        }
        return request()->json($request);
    }
}

function adminuser()
{
    return view('admin/adminuser');
}


function leads()
{
    $data = array(
        'list' => DB::table('Details')->get()
    );
    return view('admin/leads', $data);
}  
       /*--------login-----*/
    function adminlogin()
    {
        return view('login/adminlogin');
    }
    public function loginuser(Request $request)
    {
        $request->validate([
            'Email' => 'required|Email',
            'password' => 'required|min:8|max:12'
        ]);
        $user = userlogin::where('Email', '=', $request->Email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect('adminindex');
            } else {
                return back()->with('fail', 'Password not matches.');
            }
        } else {
            return back()->with('fail', 'This email is not registered.');
        }
    }
    /*-------login end---*/
    /*-------register-----*/
    function adminregister()
    {
        return view('login/adminregister');
    }
    public function registeruser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mobileNo' => 'required',
            'Email' => 'required|Email|unique:userlogins',
            'password' => 'required|min:8|max:12'
        ]);
        $user = new userlogin();
        $user->name = $request->name;
        $user->mobileNo = $request->mobileNo;
        $user->Email = $request->Email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if ($res) {
            return back()->with('success', 'you have registered seccessfuly');
        } else {
            return back()->with('fail', 'something wrong');
        }
    }
    function user()
    {
        return view('admin/user');
    }
    public function showLoginForm()
    {

        if (!session()->has('login.adminlogin')) {

            $prev = url()->previous();
            $url_one = 'login.adminlogin';
            $url_two = 'admin.adminindex';

            if ($prev == $url_one or $prev == $url_two) {
                session(['login.adminlogin' => 'admin.adminindex']);
            } else {
                session(['login.adminlogin' => url()->previous()]);
            }
        }

        return view('login/adminlogin');
    }
  
}
