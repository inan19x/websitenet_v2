<?php
include "db.inc.php";

$name=$_POST["name"];
$email=$_POST["email"];
$comment=$_POST["comment"];
$datetime=$_POST["date"];
$captcha=$_POST["captcha"];
$captcha2=$_POST["captcha2"];

// Init $result
$result = false;

if($captcha==$captcha2){
$sql="INSERT INTO guestbook(name, email, comment, datetime) VALUES('$name', '$email', '$comment', '$datetime')";
$result=mysqli_query($mysqli,$sql) or die (mysqli_error($mysqli));
}

if($result){
header("Location:guestbook.php?x=SUCCESS");
}
else {
header("Location:guestbook.php?x=ERROR");
}
mysqli_close($mysqli);
?>
