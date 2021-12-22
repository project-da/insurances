<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>

</head>
<style>
  .panel.panel-default {
    width: 93%;
  }
  button.btn.btn-success {
    width: 80%;
    margin-left: 18%;
  }
</style>

<body>
  <?php echo View::make('admin/sidebar'); ?>
  <!--main content start-->
  <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12 main-chart">
          <div class="border-head">
            <h3>Policies</h3>
          </div>
          <div class="container">
            <br />
            <br />
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Add Policies</h3>
              </div><br>
              <form action="" method="POST" enctype="multipart/form-data">

@if(Session::has('success'))
<div class="alert alert-success">{{Session::get('success')}}</div>
@endif
@if(Session::has('fail'))
<div class="alert alert-danger">{{Session::get('fail')}}</div>
@endif
@csrf

<div class="form-group row">
    <label for="inputimages" class="col-sm-2 col-form-label">Images</label>
    <div class="col-sm-10">
        <input type="file" name="image" class="form-control" id="inputimages">
    </div>
</div>
<div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
        <input type="text" name="name" class="form-control" id="inputname">
    </div>
</div>
<div class="form-group row">
    <label for="inputinvest" class="col-sm-2 col-form-label">Invest</label>
    <div class="col-sm-10">
        <input type="text" name="investmoney" class="form-control" id="inputinvest">
    </div>
</div>
<div class="form-group row">
    <label for="inputyougive" class="col-sm-2 col-form-label">YouGive:</label>
    <div class="col-sm-10">
        <input type="text" name="youGive" class="form-control" id="inputyougive">
    </div>
</div>
<div class="form-group row">
    <label for="inputYouget" class="col-sm-2 col-form-label">YouGet</label>
    <div class="col-sm-10">
        <input type="text" name="YouGet" class="form-control" id="inputyouget">
    </div>
</div>
<div class="form-group row">
    <label for="inputYears" class="col-sm-2 col-form-label">Years</label>
    <div class="col-sm-10">
        <input type="text" name="years" class="form-control" id="inputYears">
    </div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
            </div>
            <!-- /.col-lg-8 -->
          </div>
          <!-- .animated -->
        </div>
      </div>
      </div>
    </section>
  </section>

</body>

</html>