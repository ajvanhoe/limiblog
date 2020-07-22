<?php
require_once('core/start.php');



if(Input::exists('post')) {
	$username = Input::get('username');
	$password = Input::get('password');
	
	// upit u bazu - preskacemo

	if($korisnici[$username] == $password) {
		Session::set('username', $username);
		Redirect::to('profile.php');
	} else {
		echo "Username ili password nisu validni";
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
  
  <form class="form-signin">

    
    <?php 
    
    if(Session::exists('message')) {
      echo '<h3 class="h3 mb-3 font-weight-normal">';
      echo Session::get('message');
      echo '</h3>';
    }


    ?>


	<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  	<label for="inputEmail" class="sr-only">Email address</label>
  	<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
  	
  	<label for="inputPassword" class="sr-only">Password</label>
  	<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
  	<div class="checkbox mb-3">
    
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>

  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  
  </form>


<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
