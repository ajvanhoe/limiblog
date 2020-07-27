<?php

function autoload($classname) {
	$path = CLASS_DIR .'/'. str_replace('\\', '/', $classname) . '.php';

	if(file_exists($path)) {
		require_once $path;	
	} else {
		die("nema klase " . $classname);
	}	
}