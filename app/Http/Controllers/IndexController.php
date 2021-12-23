<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\models\policy;
use App\models\detail;
class IndexController extends Controller
{
    function userindex()
    {
        $data = array(
            'list' => DB::table('details')->get()
        );
        return view('user/userindex', $data);
    }
    function add(Request $request)
    {

        $request->validate([

            'name' => 'required',
            'birth' => 'required',
            'gender' => 'required',
            'smoking' => 'required',
            'income' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:details',
            'city' => 'required'
        ]);
        $query = DB::table('details')->insert([
            'name' => $request->input('name'),
            'birth' => $request->input('birth'),
            'gender' => $request->input('gender'),
            'smoking' => $request->input('smoking'),
            'income' => $request->input('income'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'city' => $request->input('city')
        ]);

        if ($query) {
            return back()->with('success', 'Date have been saved successfuly');
        } else {
            return back()->with('fail', 'something went wrong');
        }
    }
    function compare()
    {
        $data = array(
            'list' => DB::table('policies')->get()
        );
        return view('user/compare', $data);
    }
    public function searchByprice(Request $req)
    {
        $list=policy::where('investmoney','>=',$req->min)->where('investmoney','<=',$req->max)->get();
        return view('user/compare',compact('list'));
    }
        // MARKETLINKED PAGE CONTROLLER// 

 function marketlinked()
 {
     $data = array(
         'list' => DB::table('marketlinkeds')->get()
     );
     return view('user/marketlinked', $data);
 }
 function invest($id)
 {
     $row = DB::table('policies')
         ->where('id', $id)
         ->first();
     $data = [
         'Info' => $row 
     ];
     return view('user/invest', $data);
 }
 function header()
 { 
     return view('user/header');
 }
 function abc()
 { 
    $data = array(
        'list' => DB::table('policies')->get()
    );
    return view('user/abc', $data);

 }
}
