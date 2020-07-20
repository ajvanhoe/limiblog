<?php

function autoload($classname) {
	$path = 'classes/'. str_replace('\\', '/', $classname) . '.php';

	if(file_exists($path)) {
		require_once $path;	
	} else {
		die("nema klase " . $classname);
	}	
}