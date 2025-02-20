<?php
session_start();
include "../db.inc.php";
$username=$_POST['username'];
$password=md5($_POST['password']);

$sql="SELECT username,password,role FROM users WHERE username='$username' AND password='$password'";
$qry=mysqli_query($mysqli,$sql) or die (mysqli_error($mysqli));
$rows=mysqli_num_rows($qry);
$login=mysqli_fetch_array($qry);

if($rows==1){
$_SESSION['admin']=1;
$_SESSION['username']=$username;
$_SESSION['role']=$login['role'];

header("Location:index.php");
}
else{
	header("Location:index.php?x=ERROR");
}
?>

