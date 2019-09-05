<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "file_rouge";

$conn = null;
try {
	$conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);
}
catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage() );
}
var_dump($conn);
?>