<?php

class User {
	private $db,
			$data = [],
			$isLoggedIn = false;


	public function __construct() {
		$this->db = Database::connect();
	}

	// login
	public function login($email, $password) {
		// provera mejla --> find metod
		if($this->find($email)) {
			// provera lozinke
			if( Hash::make($password) === $this->data->password ) {
				// login
				Session::set('user', $this->data->id);
				return $this->isLoggedIn = true;
			}
		}
		return false;		
	}

	// check
	public function checkLogin() {
		if(Session::exists('user')) {
			if($this->find(Session::get('user'))) {
				return $this->isLoggedIn = true;
			}
		}
		return $this->isLoggedIn = false;
	}


	// logout
	public function logout() {
		Session::delete('user');
		return $this->isLoggedIn = false;
	}



	// create
	public function create($fields=[]) {
		if(!$this->db->insert('users', $fields)) {
			throw new Exception('There was a problem creating your account.');
		}
	}


	// find - trazi po id-ju ili email-u
	public function find($user = null) {
		if($user) {
			$field = (is_numeric($user)) ? 'id' : 'email';
			$data = $this->db->find('users', $field, $user);

			if($data->count()) {
				$this->data = $data->first();
				return $this;
			}
		}
		return null;
	}



	// pomocni metodi
	public function data() {
		return $this->data;
	}

	public function isLoggedIn() {
		return $this->isLoggedIn;
	}

	public function exists() {
		return (!empty($this->data)) ? true : false;
	}


}