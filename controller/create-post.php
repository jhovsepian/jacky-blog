<?php
	require_once (__DIR__ . "/../model/config.php");

// this sends info to the title in create-db
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
// this sends info to the post	in create-db
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
	$date = new DateTime('today');
	$time = new DateTime('America/Los_Angeles');
// created a query to the database
	// this made a query to insert information
	// we want to insert things to the posts table
	$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");
// if it successfully inserted info to the post table this is what it will say.. 
	if($query) {
		echo "<p>Successfully inserted post: $title</p>";
		echo "Posted on: " . $date->format("M/D/Y") . " at " . $time->format("g:i");
	}
	// if it didnt successfully insert info to the post table it will have an error
	else {
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}