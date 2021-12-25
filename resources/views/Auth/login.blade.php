<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <title>Login</title>
</head>
<style>
    body {
        background-color: #EBEAEF
    }

    .container {
        flex-wrap: wrap
    }

    .card {
        border: none;
        border-radius: 10px;
        background-color: blue;
        width: 350px;
        margin-top: -60px
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: blue;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: .25rem;
    }

    p.mb-1 {
        font-size: 25px;
        color: #9FB7FD
    }

    .btn-primary {
        border: none;
        background: #5777DE;
        margin-bottom: 60px
    }

    .btn-primary small {
        color: #ffffff;
    }

    .btn-primary span {
        font-size: 13px
    }

    .card.two {
        border-top-right-radius: 60px;
        border-top-left-radius: 0
    }

    .form-group {
        position: relative;
        margin-bottom: 2rem
    }

    .form-control {
        border: none;
        border-radius: 0;
        outline: 0;
        border-bottom: 1.5px solid #E6EBEE
    }

    .form-control:focus {
        box-shadow: none;
        border-radius: 0;
        border-bottom: 2px solid #8A97A8
    }

    .form-control-placeholder {
        position: absolute;
        top: 15px;
        left: 10px;
        transition: all 200ms;
        opacity: 0.5;
        font-size: 80%
    }

    .form-control:focus+.form-control-placeholder,
    .form-control:valid+.form-control-placeholder {
        font-size: 80%;
        transform: translate3d(0, -90%, 0);
        opacity: 1;
        top: 10px;
        color: #8B92AC
    }

    .btn-block {
        border: none;
        border-radius: 8px;
        background-color: #506CCF;
        padding: 10px 0 12px
    }

    .btn-block:focus {
        box-shadow: none
    }

    .btn-block span {
        font-size: 15px;
        color: #D0E6FF
    }

    .p-5 {
        padding: 3rem !important;
        background-color: #011a41;
    }

    div#btnid {
        border: none;
        background: none;
    }
</style>
<body>
    @include('user/header')

    <div class="container d-flex justify-content-center">
        <div class="d-flex flex-column justify-content-between">
            <div class="card mt-3 p-5" style="background-color:#1a3a6c">
                <div id="btnid" class="btn btn-primary btn-lg">
                    <h4>Login</h4>
                </div>
            </div>
            <form action="{{url('login')}}" method="Post">

                @csrf
                <div class="card two bg-white px-5 py-4 mb-3">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Email" name="email" value="{{old('Email')}}" required>
                        <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Enter Password" name="password" value="{{old('password')}}" required>
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg mt-1 mb-2" type="submit"><a href="userindex">
                            <span>Login<i class="fas fa-long-arrow-alt-right ml-2"></i></span></a></button>
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    <div class="form-group" style="text-align:center">
                    <span style="color:blue">New User?<a href="Registration"  style="color:red">RegisterHere</a></span>
                    </div>
                </div>
        </div>
    </div>
</body>

</html>