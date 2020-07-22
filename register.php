<?php
require_once('core/start.php');

if(Input::exists('post')) {

	// validacija podataka
	// klasa za validaciju

	// registracija korisnika
	// user klasa

	$db = Database::connect();
	$fields = [
		'id' 		=> NULL,
		'username' 	=> Input::get('username'),
		'email' 	=> Input::get('email'),
		'password' 	=> Input::get('password')
	];

	if( $db->insert('users', $fields) ) {
		// redirekt
		Session::set('message', 'You have been registered successfuly and can now login!');
		Redirect::to('login.php');
	} else {
		Session::set('message', 'There was a trouble creating your account, please try again!');
	}
	

	
	
}




?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LimiSchool Blogger · Signin</title>

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- Custom styles for this template -->
<link href="./css/signin.css" rel="stylesheet">

</head>
<body class="text-center">

  <form method="POST" action="register.php" class="form-signin">

  	<?php 
  	
  	if(Session::exists('message')) {
  		echo '<h3 class="h3 mb-3 font-weight-normal">';
  		echo Session::get('message');
  		echo '</h3>';
  	}


  	?>

	<h1 class="h3 mb-3 font-weight-normal">Register</h1>

  	<label for="inputEmail" class="sr-only">Email address</label>
  	<input type="email" name="email" class="form-control mb-3" placeholder="Email address" required autofocus>

  	<label for="inputEmail" class="sr-only">Username</label>
  	<input type="text" name="username" class="form-control mb-3" placeholder="Username" required autofocus>

  	<label for="inputPassword" class="sr-only">Password</label>
  	<input type="password" name="password" class="form-control mb-3" placeholder="Password" required>

  	<label for="inputPassword" class="sr-only">Password re-type</label>
  	<input type="password" name="repass" class="form-control mb-3" placeholder="Retype Password" required>


  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  
  </form>


<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
