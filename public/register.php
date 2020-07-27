<?php
require_once('../core/start.php');

if(Input::exists('post')) {
  	// validacija podataka
  	$validate = new Validate();
    $rules = [
      'username' => [
          'required'  => true,
          'min'       => 2,
          'max'       => 60
      ],

      'password' => [
        'required' => true,
        'min'      => 6
      ],

      'retype' => [
        'required' => true,
        'matches' => 'password'

      ],

      'email' => [
            'required' => true,
            'email'    => true,
      ]

    ];
    $validation = $validate->check($_POST, $rules);

    if($validation->passed()) {
      // registracija korisnika
      $user = new User();

      $fields = [
          NULL,   // id
          Input::get('username'),
          Input::get('email'),   
          Hash::make( Input::get('password') ), // hashovanje password-a
          'user',
          date('Y-m-d H:i:s'), // created_at
          date('Y-m-d H:i:s')  // updated_at
      ];
      // kreiranje korisnika
      $user->create($fields);
      // redirekt
      Session::set('success', 'You have been registered successfuly and can now login!');
      Redirect::to('login.php');    

  } else { // u slucaju da validacija nije prosla
    // setovanje gresaka --> Session
    Session::set('errors', $validation->errors());
  }

} // if Input::exists

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LimiBlog - Register</title>

  <!-- Custom fonts for this template-->
  <link href="../admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="../admin/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">


        <form method="POST" action="register.php">

          <div class="form-group">

            <div class="form-row">
              <div class="col-md-12">
                <div class="form-label-group">
                  <input type="text" name="username" id="username" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
                  <label for="firstName">Username</label>
                </div>
              </div>
            </div>

          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="required">
              <label for="inputEmail">Email address</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                  <label for="inputPassword">Password</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" name="retype" id="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                  <label for="confirmPassword">Confirm password</label>
                </div>
              </div>
            </div>
          </div>
         
          <button type="submit" class="btn btn-primary btn-block">Register</button>          

        </form>



        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Login Page</a>
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
