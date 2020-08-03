<?php

require_once('../core/start.php');
$user = new User();
$user->checkLogin();

  if(!$user->isLoggedIn()) {
    Session::set('error', 'You need to login!');
    Redirect::to('../public/login.php');
  }


if(Input::exists('post')) {

	$db = Database::connect();

	$update = [
	 'img'		  =>  NULL,
	 'updated_at' =>  date('Y-m-d H:i:s')
	];

	$id = Input::get('id');

	if(	$db->update('posts', $id, $update) ) {
		Session::set('success', 'Image removed');
	} else {
		Session::set('error', 'Something went wrong with update, please try again!');
	}
}

Redirect::to("edit.php?post={$id}");


