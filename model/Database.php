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
}