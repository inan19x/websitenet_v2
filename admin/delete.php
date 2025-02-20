<?php
session_start();
if(!isset($_SESSION['admin'])){
	header("Location:index.php");
	die;
}
else{
include "../db.inc.php";
$id=$_GET['id'];
$sql="DELETE FROM guestbook WHERE id='$id'";
mysqli_query($mysqli,$sql) or die (mysqli_error($mysqli));
header("Location:index.php");
}
?>
