<?php

require_once('../core/start.php');

Session::delete('username');
Redirect::to('index.php');