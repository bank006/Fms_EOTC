<?php 
    session_start();
    require_once "config/db.php";
?>

!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FMS FRESHY BOARD</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Kanit:400" rel="stylesheet">
  <!-- <link href="assets/plugins/bootstrap-tagsinput/tagsinput.css?v=11" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="assets/adminlte/bower_components/ckeditor/ckeditor.js"></script>

  <style>
        @import url('https://fonts.googleapis.com/css2?family=Mitr:wght@200&display=swap');

body{
font-family: 'Mitr', sans-serif;

}

    body {
        
      /*font-size: 14px;*/
      background-image: url("images/fms_bg.jpg");
      background-size: 100%;
    }
    .wrapper{ 
      margin-left: 10px;
      margin-right: 10px;
      min-width: 650px;
      background-color: white ;
    }
  </style>

</head>
<body>
  
  <section class="content-header">
    <div class="container-fluid"></div>
  </section>

  <!-- <section class="content"> -->
  <div class="container h-100">
  <div class="row justify-content-center align-items-center h-100">
    <div class="col-md-6">
      <div class="card shadow p-3">
        <div class="card-header bg-navy">
          <h3 class="card-title">FMS FRESHY BOARD</h3>
        </div>

   <div class="container" style="margin-top:7%";>
     <div class="jumbotron">
    <div class="card-header">
      <center>
        <img src="images/PSU_Logo.png" alt="" width="130" height="130">
      </center>
      <br>
      <h4 class="text-center font-weight-bold">กรุณาเข้าสู่ระบบ</h4>
    </div>

    <form action="./logindb.php" method="POST" class="container">
    <?php if (isset($_SESSION['error'])) {?>
        <div class="alert alert-danger" role="alert">
            <?php
                echo $_SESSION['error'];
                unset ($_SESSION['error']);
            ?> 
        </div>
    <?php }?>


    <?php if (isset($_SESSION['success'])) {?>
        <div class="alert alert-success" role="alert">
            <?php
                echo $_SESSION['success'];
                unset ($_SESSION['success']);
            ?> 
        </div>
    <?php }?>


    <div class="card-body">
        <div class="mb-3">
            <label for="exampleInputUsername" class="form-label">Username</label>
            <input type="email" class="form-control" id="exampleInputUsername1" placeholder="username" name="username">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password" name="password">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
        </div>
        <button name="submitLogins" class="btn btn-warning d-grid w-30" type="submit" >Sign in</button>
        <a href="./sigup.php">sigup</a>
    </div> 
    
    </form>


      </div>
    </div>
  </div>
  <!-- </section> -->
  </div>
</body>
<!-- /.content -->

</html>
