<?php
require_once('../core/start.php');

if(Input::exists('post')) {
 	$email = Input::get('email');
 	$password = Input::get('password');
	
  // validacija - dodati
 	$user = new User();
  if($user->login($email, $password)) {
    Session::set('success', 'You are logged in now, welcome back!');
    Redirect::to('../admin/index.php');
  } else {
    Session::set('error', 'Login failed!');
  }


} // end if(Input::exists())

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LimiBlog Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="../admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="../admin/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <!-- Poruke -->
  <div class="row justify-content-center mt-5">
    <div class="col-md-6">
      <?php 
        include('../includes/messages.php');
      ?>
    </div>
  </div>



  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">


        <form method="POST" action="login.php">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          
          <button type="submit" class="btn btn-primary btn-block">Login</button>    

        </form>

        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
          <!-- <a class="d-block small" href="forgot-password.html">Forgot Password?</a> -->
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../admin/vendor/jquery/jquery.min.js"></script>
  <script src="../admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../admin/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
