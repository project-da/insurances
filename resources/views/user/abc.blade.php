<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <!-- Import jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- Import popper.js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <!-- Import javascript cdn -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS stylesheet -->

    <title>Document</title>
</head>
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 199px;
    position: fixed;
    z-index: 1;
    top: 56px;
    left: 0;
    background-color: whitesmoke;
    overflow-x: hidden;
    padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
    margin-left: 173px;
    font-size: 28px;
    padding: 0px 50px;
}

tbody {
    font-size: 61%;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.sidenav {
    padding: 0px 10px 0 15px;
}
input[type="text"] {
    width: 64%;
    border: hidden;
}
input.view {
    border: hidden;
}
</style>
<body>
    @include('user/header')
    
<div class="sidenav">
 <br><br>
<span class="name mt-2"> <strong> Invested Amount per month </strong> </span><br><br>
                <!-- Navigation links in sidebar-->

                <form action="/compare" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="min" value="500">&nbsp;
                    <input type="text" name="max">&nbsp;
                    <input type="submit" class="view" value="edit">
                </form>

                <hr>
</div>

<div class="main">
  <h2>Sidebar</h2>
  <div class="row">
                        <div class="col-md-11">
                            <table class="table table-stripped table-bordered">

                                <tbody>
                                    @foreach($list as $item)
                                    <tr>
                                        <td width="2%">{{$item->id}}</td>
                                        <td width="20%"><br> <img src="{{ asset('uploads/images/'. $item->image) }}" alt="images"> &emsp;<strong> {{ $item->name }}</strong></td>
                                        <td width="4%"><br><strong>YouGet</strong><br> {{ $item->youGive }}</td>
                                        <td width="4%"><br><strong>youGive</strong> <br>{{ $item->YouGet }}</td>
                                        <td width="5%"><br>
                                            <a href="invest/{{ $item->id }}" class="btn btn-primary btn-xs"> Get Details</a>
                                            <!--<button type="button"class="btn btn-sm btn-success" data-toggle="modal" >{{__('Details') }}</button>-->
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
</div>
   
</body>
</html>