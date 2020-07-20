<?php
require_once('core/start.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>LimiSchool - profile</title>
</head>
<body>

<?php

	if(Session::exists('username')) {
		$username = Session::get('username');

		echo "Pozdrav " . $username;
	} else {
		Redirect::to('index.php');
	}

?>
<hr>
<a href="logout.php">logout</a>

</body>
</html>