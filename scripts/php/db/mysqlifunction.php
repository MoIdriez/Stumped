<?php
function db_query($query) {
    // Connect to the database
    $connection = db_connect();
    // Query the database
    $result = mysqli_query($connection,$query);
    return $result;
}
function db_quote($value) {
    $connection = db_connect();
    return mysqli_real_escape_string($connection,$value);
}
function db_error() {
    $connection = db_connect();
    return mysqli_error($connection);
}
function db_connect() {
    // Define connection as a static variable, to avoid connecting more than once 
	static $connection;
    // Try and connect to the database, if a connection has not been established yet
    if(!isset($connection)) {
         // Load configuration as an array. Use the actual location of your configuration file
		 // NOTE: MAKE SURE THIS FILE IS NOT ACCESSIBLE FROM THE WEB
        $config = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . '/scripts/php/config.ini'); 
        $connection = mysqli_connect($config['host'],$config['username'],$config['password'],$config['dbname']);
    }
    // If connection was not successful, handle the error
    if($connection === false) {
        // Handle error - notify administrator, log to a file, show an error screen, etc.
        return mysqli_connect_error(); 
    }
    return $connection;
}
?>