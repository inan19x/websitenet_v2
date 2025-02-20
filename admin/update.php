<?php
session_start();
if(!isset($_SESSION['admin'])){
	header("Location:index.php");
	die;
}
else{
$title=$_POST['title'];
$body=$_POST['body'];
include "../db.inc.php";
$sql="UPDATE content SET title='$title', body='$body' WHERE id='1'";
mysqli_query($mysqli,$sql) or die (mysqli_error($mysqli));
header("Location:index.php");
}
?>
