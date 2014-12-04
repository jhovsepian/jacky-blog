<?php
// The directory of the file. If used inside an include, the directory of the included file is returned
require_once(__DIR__ . "/../model/config.php");

	// connection to query
$query = $_SESSION["connection"]->query("CREATE TABLE posts ("
	. "id int (11) NOT NULL AUTO_INCREMENT, "
	// the title is a string of characters
	. "title varchar (255) NOT NULL,"
	. "post text NOT NULL,"
	// this is text
	. "DateTime datetime NOT NULL,"
	. "PRIMARY KEY (id))");
// primary text is "id"
// below i already created a table
if($query) {
	echo "<p>Successfully create table: posts</p>";
	// below if table is not existed there will be an error
}
else {
	echo "<p>" . $_SESSION["connection"]->error . "</p>";
}

$query = $_SESSION["connection"]->query("CREATE TABLE users ("
	. "id int (11) NOT NULL AUTO_INCREMENT,"
	. "username varchar(30) NOT NULL,"
	. "email varchar(50) NOT NULL,"
	. "password char (128) NOT NULL,"
	. "salt char(128) NOT NULL,"
	. "PRIMARY KEY (id))");

	if($query) {
		echo "<p>Successfully created table: users</p>";
	}
	else {
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}

?>