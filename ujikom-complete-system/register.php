<?php 
include "functions/function.php";

session_start();

if(isset($_SESSION['auth'])){
   header('location: pages/');
}

[$error, $result, $success] = false;

if(isset($_POST['register']))
{
  $confirm = $_POST['register'];
  if($confirm == token()){
    $nik = $_POST['nik'];
    $pass = $_POST['pass'];
	 if($nik && $pass == true)
	 {
	 	$format = "$nik:$pass\n";
    $f = file('db/user.txt');

	 	if(in_array($format, $f)){
        $result = true;
	 	}

        $file = fopen("db/user.txt","a");  
				 fwrite($file, $format);  
				fclose($file); 
				header("location: index.php");
	 }else{
      $error = true;
	 }
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Peduli Diri | Registration</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/css/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/css/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <p class="h1"><b>Peduli</b> Diri</p>
    </div>
    <div class="card-body">
      <p class="login-box-msg pb-0 mb-2">Register a new membership</p>

      <?php if($error == true){ ?>
      	<div class="alert alert-danger alert-dismissible fade show" role="alert">
			    	SEMUA FIELD HARUS DI ISI!!!
						  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
      <?php }else if($result == true){ ?>
      	<div class="alert alert-warning alert-dismissible fade show" role="alert">
			    	DATA SUDAH ADA!!!
						  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
      <?php } ?>

      <form action="" method="post">
      	<input type="hidden" name="register" value="<?= token() ?>">
        <div class="input-group mb-3">
          <input type="number" class="form-control" placeholder="NIK" name="nik">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
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
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
        </div>
      </form>

      <a href="index.php" class="text-center">I already have a membership</a>
    </div>
  </div>
</div>

<script src="assets/js/adminlte.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>








