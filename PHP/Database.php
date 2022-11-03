<?php

	$server = 'localhost';
	$username = 'id15301407_07';
	$password = 'C&j5c+~cZX?tSB<*';
	$database = 'id15301407_dimension_cube';

	try {
	  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
	} catch (PDOException $e) {
	  die('Connection Failed: ' . $e->getMessage());
	}

?>
