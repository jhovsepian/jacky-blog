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
}