<?php
  require_once('../core/start.php');
  $user = new User();
  $user->checkLogin();

  if(!$user->isLoggedIn()) {
    Session::set('error', 'You need to login!');
    Redirect::to('../public/login.php');
  }

  if(Input::exists('get')) {

  	$db = Database::connect();

  	// obrisati sliku sa servera
  	// unlink(filename);

  	if( $db->delete('posts', Input::get('post')) ) {
  		Session::set('success', 'Post deleted!');
  	} else {
  		Session::set('error', 'There was a problem deleting you post!');
  	}

  }

  Redirect::to('posts.php');


?>
