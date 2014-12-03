<?php
// The directory of the file. If used inside an include, the directory of the included file is returned
require_once(__DIR__ . "/../model/config.php");

	// connection to query
$query = $connection->query ("CREATE TABLE posts ("
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

?>