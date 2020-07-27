<?php
define("APP_PATH", $_SERVER["DOCUMENT_ROOT"] . '/limischool/project');
define("CLASS_DIR", APP_PATH.'/classes' );
define("PUBLIC_DIR", APP_PATH.'/public' );
define("ADMIN_DIR", APP_PATH.'/admin' );

session_start(); // pokretanje sesije
require_once('functions.php'); // osnovne funkcije
spl_autoload_register('autoload'); // autoloader za klase