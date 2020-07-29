<?php

require_once('../core/start.php');

if(Input::exists()) {
	// validacija mejla

	$db = Database::connect();
	$email = Input::get('email');

	if( $db->insert('subscriptions', [null, $email, date('Y-m-d H:i:s')]) ) {
		Session::set('message', 'You have subscribed to our blog...');
	} else {
		Session::set('message', 'There was an error, please try again later.');
	}
	
}

Redirect::to('index.php#subscribe');