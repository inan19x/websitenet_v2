<?php
$host="localhost";
$username="mydbuser";
$password="mydbpasswd";
$db_name="websitenet";

$mysqli = mysqli_connect($host, $username, $password, $db_name);

// Check connection
if (!$mysqli) {
     die("Connection failed: " . mysqli_connect_error());
}
?>
