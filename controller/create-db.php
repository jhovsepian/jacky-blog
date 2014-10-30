<?php
// The directory of the file. If used inside an include, the directory of the included file is returned
require_once(__DIR__ . "/../model/database.php");
// checks if connection works.
$connection = new mysqli($host, $username, $password);
// if no connection, you will recieve an error messege, and website will die.
if($connection->connect_error) {
     die("Error: " . $connection->connect_error);
}

$exists = $connection->select_db($database);
// code below lets you know the database doesnt exist
if(!$exists) {
	$query = $connection->query("CREATE DATABASE $database");
    // if exists it will say successfully created.
	if($query) {
        echo "Successfully created database: " . $database;
}
	}
	else {
		echo "Database already exists";
	}
	// connection to query
$query = $connection->query("CREATE TABLE posts ("
	. "id int (11) NOT NULL AUTO_INCREMENT, "
	. "title varchar (255) NOT NULL,"
	. "post text NOT NULL,"
	. "PRIMARY KEY (id))");

if($query) {
	echo "Successfully create table: posts";
}
// closes the connection
$connection->close();

?>