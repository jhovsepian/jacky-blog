<?php
	require_once (__DIR__ . "/../model/config.php");
// create the user and store the user with the new database table.
	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

// this is too give random numbers for the password so no one knows it.
	$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";

	$hashedpassword = crypt($password, $salt);
// this querry is inserting to our users and it will set values
	$query = $_SESSION["connection"]->query("INSERT INTO users SET "
		. "email = '$email',"
		. "username = '$username',"
		. "password = '$hashedpassword',"
		. "salt = '$salt'");
	if($query) {
		echo "Successfully created users: $username";
	}
	else {
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}