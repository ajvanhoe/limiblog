<?php

require_once('../core/start.php');

Session::delete('user');
Redirect::to('index.php');