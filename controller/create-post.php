<?php
	require_once (__DIR__ . "/../model/config.php");
// to create a new mysqli object
	// creating a connection to the database
	//this is to send the information to the create post file
	$connection = new mysqli($host, $username, $password, $database); 
// this sends info to the title in create-db
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
// this sends info to the post	in create-db
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
// created a query to the database
	// this made a query to insert information
	// we want to insert things to the posts table
	$query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");
// if it successfully inserted info to the post table this is what it will say.. 
	if($query) {
		echo "<p>Successfully inserted post: $title</p>";
	}
	// if it didnt successfully insert info to the post table it will have an error
	else {
		echo "<p>$connection->error</p>";
	}
// this closes the connection
	$connection->close();