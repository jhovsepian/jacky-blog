<?php
// THIS IS A NEW DATABASE.
// the database object is created by the class   
class Database {
	// this code only is accessed in this class because its private. others are public
	// we dont want other files accessing this information within the database class
	private $connection;
	private $host;
	private $username;
	private $password;
	private $database;
// create a constructer. 
// a constructer is important because it allows us to bulid objects of type database.
// when we construct our object, we are going to pass the information to the host, username, password, database.
	public function __construct($host, $username, $password, $database) {
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
	}
// added more functions
// these are important to use information to perform actions on our database.
	public function openConnection() {
		//this is a new sqli variable object. 
		// this will check whether we have a connection or not.
		// WE want to establish a connection to the database.
		$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
     // if no connection, you will recieve an error messege, and website will die.
	if($this->connection->connect_error) {
     die("<p>Error: " . $this->connection->connect_error . "</p>");
}
	}

	public function closeConnection() {

	}

	public function query($string) {

	}
}