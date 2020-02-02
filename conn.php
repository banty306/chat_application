<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","mysql","chat_system.sql");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>