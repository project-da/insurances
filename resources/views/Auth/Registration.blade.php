<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegisterHere</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto:300,400');

    * {
        margin: 0;
        padding: 0
    }

    a,
    a:hover {
        text-decoration: none;
    }

    .myform-area {
        overflow: hidden;
        padding: 60px 0;
        background: #f4fffe;
        position: relative;
        padding-top: 100px;
        padding-bottom: 100px;
    }

    .myform-area .form-area {
        position: relative;
        background: #35517a;
        width: 100%;
        height: 400px;
        overflow: hidden;
        box-shadow: 0 0 40px 0 #e1e1e1;
    }

    .myform-area .form-area .form-content,
    .myform-area .form-area .form-input {
        position: relative;
        width: 50%;
        height: 100%;
        float: left;
        box-sizing: border-box;
    }

    .myform-area .form-area .form-content {
        width: 50%;
        padding: 40px 30px;
    }

    .myform-area .form-area .form-content h2 {
        color: #fff;
    }

    .myform-area .form-area .form-content p {
        color: #fff;
    }

    .myform-area .form-area .form-content ul {
        margin-top: 50px;
    }

    .myform-area .form-area .form-content ul li {
        display: inline-block;
        margin-right: 10px;
    }

    .myform-area .form-area .form-content a i {
        margin-right: 10px;
    }

    .myform-area .form-area .form-content .facebook {
        display: block;
        padding: 10px 20px;
        background: #3B579D;
        color: #fff;
        font-size: 15px;
        text-transform: capitalize;
        border-radius: 4px;
        border: 1px solid #3B579D;
        -webkit-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
    }

    .myform-area .form-area .form-content .facebook:hover,
    .myform-area .form-area .form-content .facebook:focus {
        background: transparent;
    }

    .myform-area .form-area .form-content .twitter {
        display: block;
        padding: 10px 20px;
        background: #00ACED;
        color: #fff;
        font-size: 15px;
        text-transform: capitalize;
        border-radius: 4px;
        border: 1px solid #00ACED;
        -webkit-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
    }

    .myform-area .form-area .form-content .twitter:hover,
    .myform-area .form-area .form-content .twitter:focus {
        background: transparent;
    }

    .myform-area .form-area .form-input {
        background-color: white;
        position: relative;
        overflow: hidden;
        box-shadow: 0 0 40px 0 #e1e1e1;
    }

    .myform-area .form-area .form-input {
        width: 50%;
        background: #fff;
        padding: 40px 30px;
    }

    .myform-area .form-area .form-input h2 {
        margin-bottom: 20px;
        color: #07315B;
    }

    .myform-area .form-area .form-input input {
        position: relative;
        height: 60px;
        padding: 20px 0;
    }

    .myform-area .form-area .form-input textarea {
        height: 120px;
        padding: 20px 0;
    }

    .myform-area .form-area .form-input input,
    .myform-area .form-area .form-input textarea {
        text-transform: capitalize;
        width: 100%;
        box-sizing: border-box;
        outline: none;
        border: none;
        border-bottom: 2px solid #e1e1e1;
        color: #07315B;
    }

    .myform-area .form-area .form-input form .form-group {
        position: relative;
    }

    .myform-area .form-area .form-input form .form-group label {
        position: absolute;
        text-transform: capitalize;
        top: 20px;
        left: 0;
        pointer-events: none;
        font-size: 14px;
        color: #595959;
        margin-bottom: 0;
        transition: all .6s;
    }

    .myform-area .form-area .form-input input:focus~label,
    .myform-area .form-area .form-input textarea:focus~label,
    .myform-area .form-area .form-input input:valid~label,
    .myform-area .form-area .form-input textarea:valid~label {
        top: -5px;
        opacity: 0;
        left: 0;
        color: rgba(103, 58, 183);
        font-size: 12px;
        color: #07315B;
        font-weight: bold;
    }

    .myform-area .form-area .form-input input:focus,
    .myform-area .form-area .form-input textarea:focus,
    .myform-area .form-area .form-input input:valid,
    .myform-area .form-area .form-input textarea:valid {
        border-bottom: 2px solid rgba(103, 58, 183);
    }

    .myform-area .form-area .form-text {
        margin-top: 30px;
    }

    .myform-area .form-area .form-text span a {
        color: rgba(103, 58, 183);
    }

    .myform-area .form-area .myform-button {
        margin-top: 30px;
    }

    .myform-area .form-area .myform-button .myform-btn {
        width: 100%;
        height: 50px;
        font-size: 17px;
        background: #2c466a;
        border: none;
        border-radius: 50px;
        color: #fff;
        cursor: pointer;
        -webkit-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
    }

    .myform-area .form-area .myform-button .myform-btn:hover {
        background: #07315B;
    }

    a.loghere {
        text-align: center;
        margin-left: 38%;

    }
</style>

<body>

    <br>

    <section class="myform-area">
        <div class="container">
            <div class="row justify-content-center">
                <h2 style="text-align:center">New User?
                    Welcome!<br> Register Now To Use Free Research Tools.</h2>
                <div class="col-lg-8">
                    <div class="form-area login-form">
                        <div class="form-content">
                            <h2>Investment<br>Benifits</h2>
                            <p>One of the few places where this is especially true is when it comes to managing your portfolio. Investment advisors and Research analysts can be hired at a cost, but it’s usually a no brainer for most of us when it comes to ‘fee’ & ‘free’. However, We must all remember that there are no free lunches in the world & we get what we pay for.</p>

                        </div>
                        <div class="form-input">
                        <form action="{{url('post-registration')}}" method="POST" id="regForm">
                                @csrf
                                <div class="form-group">
                                    <input type="text" id="" name="name" autocomplete="off" required=""  autofocus>
                                    <label>User Name</label>
                                    @if ($errors->has('name'))
                                    <span class="error">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="text" id="" name="email" autocomplete="off" required=""  autofocus>
                                    <label>User Email</label>
                                    @if ($errors->has('email'))
                                    <span class="error">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="password" id="" name="password" required=""  autofocus>
                                    <label>password</label>
                                    @if ($errors->has('password'))
                                    <span class="error">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="myform-button">
                                    <button type="submit" class="myform-btn">Register</button>
                                </div>
                                <hr>
                                <a href="login" class="loghere">Sign in here</a>
                                @if(Session::has('success'))
                                <div class="alert alert-success">{{Session::get('success')}}</div>
                                @endif
                                @if(Session::has('fail'))
                                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
</body>

</html>