<?php
// this path is to all the project files
	$path = "/jacky-blog/";
	// this is code refactoring
	//what it does is that it maintains the code making it easy
	// we deleted our old database file to emerge it with this file.
	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "blog_db"; 
//this is to access the open connection, close connection, and even the query function
	// this will help to query the database
	$connection = new Database($host, $username, $password, $database);