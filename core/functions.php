<?php

function autoload($classname) {
	$path = CLASS_DIR .'/'. str_replace('\\', '/', $classname) . '.php';

	if(file_exists($path)) {
		require_once $path;	
	} else {
		die("nema klase " . $classname);
	}	
}


function get_first_sentence($text) {
	$pos = strpos($text, '.');

	if($pos) {
		return substr($text, 0, $pos+1);
	} else {
		return $text;
	}

}