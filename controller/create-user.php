<?php
	require_once (__DIR__ . "/../model/config.php");
// create the user and store the user with the new database table.
	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
// this is to echo out my email when i click submit.
	echo $email . " - " . $username . " - " . $password;