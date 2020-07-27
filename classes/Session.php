<?php

class Session {
	// metod vraca true ili false u zavisnosti da li postoji $key
	public static function exists($key) {
		return (isset($_SESSION[$key])) ? true : false;
	}

	public static function set($key, $value) {
		return $_SESSION[$key] = $value;
	}

	public static function get($key) {
		return $_SESSION[$key];
	}

	public static function delete($key) {
		if(self::exists($key)) {
			unset($_SESSION[$key]);
		}
	}

	public static function msg($key) {
		if(self::exists($key)) {
			$message = self::get($key);
			self::delete($key);
			return $message;
		}
		return null;
	}

}