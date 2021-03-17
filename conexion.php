<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "phpprueba";

try {
	$conn = new PDO("mysql:host=$servername;dbname=phpprueba", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}	
?>