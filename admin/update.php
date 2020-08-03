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

	// validacija

	// priprema areja
	$update = [
		'title' => Input::get('title'),
		'body'	=> Input::get('body'),
		'category_id' => Input::get('category'),
		'updated_at' =>  date('Y-m-d H:i:s')
	];


	// upload slike ako treba
	if(isset($_FILES['img'])) {
		// upload fajla
	    $target_dir = PUBLIC_DIR . '/img/uploads/';
	    $img_name = time() . "-" . basename($_FILES["img"]["name"]);
	    $target_file = $target_dir . $img_name;
	    // resize slike    
	    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);

	    $update['img'] = $img_name;
	}
    



	if(	$db->update('posts', Input::get('id'), $update) ) {
		Session::set('success', 'Post updated');
	} else {
		Session::set('error', 'Something went wrong with update, please try again!');
	}
}

Redirect::to('posts.php');


