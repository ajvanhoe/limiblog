<?php

require_once('../core/start.php');

if(Input::exists()) {
	// validacija mejla

	$db = Database::connect();
	$email = Input::get('email');

	if( $db->insert('subscriptions', [null, $email, date('Y-m-d H:i:s')]) ) {
		//Session::set('success', 'You have subscribed to our blog...');
	} else {
		//Session::set('success', 'You have subscribed to our blog...');
	}
	
}

Redirect::to('index.php');