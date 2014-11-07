<?php
// this sends info to the title in create-db
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
// this sends info to the post	in create-db
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
	
	echo "<p>Title: $title</p>"; 
	echo "<p>Post: $post</p>";