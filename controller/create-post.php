<?php
	require_once (__DIR__ . "/../model/database.php")
// to create a new mysqli object
	// creating a connection to the database
	$connection = new mysqli($host, $username, $password, $database); 
// this sends info to the title in create-db
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
// this sends info to the post	in create-db
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
	
	// this is to echo out my title and my post 
	echo "<p>Title: $title</p>"; 
	echo "<p>Post: $post</p>";
// to close the connection to the database
	$connection->close();