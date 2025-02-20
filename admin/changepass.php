<?php
session_start();
if(!isset($_SESSION['admin'])){
	header("Location:index.php");
	die;
}
else{
$p=md5($_POST['p']);
$u=$_POST['u'];
include "../db.inc.php";
$sql="UPDATE users SET password='$p' WHERE username='$u'";
mysqli_query($mysqli,$sql) or die (mysqli_error($mysqli));
header("Location:index.php");
}
?>
