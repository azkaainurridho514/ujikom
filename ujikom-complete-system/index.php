<?php 
include "functions/function.php";

session_start();

if(isset($_SESSION['auth'])){
   header('location: pages/dashboard.php?url=dashboard');
}

if(isset($_POST['login'])){
  $confirm = $_POST['login'];
  if($confirm == token()){
    $file_handle = file("db/user.txt", FILE_IGNORE_NEW_LINES);
    $nik = $_POST['nik'];
    $pass = $_POST['pass'];
    
    $f = "$nik:$pass";

    if(in_array($f, $file_handle)){
      $_SESSION['auth'] = $nik;
      header("location: pages/dashboard.php?url=dashboard");
    }else{
      echo"Gagal login";
    }
  }
}



 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Peduli Diri</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/css/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/css/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1"><b>Peduli</b> Diri</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="" method="post">
        <input type="hidden" name="login" value="<?= token() ?>">
        <div class="input-group mb-3">
          <input type="number" class="form-control" placeholder="NIK" name="nik">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="pass">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
        </div>
      </form>

      <p class="mb-0">
        <a href="register.php" class="text-center">Register a new membership</a>
      </p>
    </div>
  </div>
</div>

<script src="assets/js/adminlte.min.js"></script>
</body>
</html>

































