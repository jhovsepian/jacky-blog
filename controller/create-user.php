<?php
	require_once (__DIR__ . "/../model/config.php");
// create the user and store the user with the new database table.
	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
// to show the password
	echo $password;
// this is too give random numbers for the password so no one knows it.
	$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";
// this is to salt the password
	echo $salt;