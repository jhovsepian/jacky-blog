<?php
// The directory of the file. If used inside an include, the directory of the included file is returned
require_once(__DIR__ . "/../model/database.php");
// checks if connection works.
$connection = new mysqli($host, $username, $password);
// if no connection, you will recieve an error messege, and website will die.
if($connection->connect_error) {
     die("<p>Error: " . $connection->connect_error . "</p>");
}

$exists = $connection->select_db($database);
// code below lets you know the database doesnt exist
if(!$exists) {
	$query = $connection->query("CREATE DATABASE $database");
    // if exists it will say successfully created.
	if($query) {
        echo "<p>Successfully created database: " . $database . "</p>";
}
	}
	else {
		echo "<p>Database already exists</p>";
	}
	// connection to query
$query = $connection->query("CREATE TABLE posts ("
	. "id int (11) NOT NULL AUTO_INCREMENT, "
	// the title is a string of characters
	. "title varchar (255) NOT NULL,"
	. "post text NOT NULL,"
	// this is text
	. "PRIMARY KEY (id))");
// primary text is "id"
// below i already created a table
if($query) {
	echo "<p>Successfully create table: posts</p>";
	// below if table is not existed there will be an error
}
else {
	echo "<p>$connection->error</p>";
}
// closes the connection
$connection->close();

?>