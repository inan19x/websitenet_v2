<?php
session_start();
if(!empty ($_SESSION['username']) AND ($_SESSION['role']))
{

include "../db.inc.php";
$sql0="SELECT role from users where username like '$_SESSION[username]'";
$result0=mysqli_query($mysqli,$sql0) or die (mysqli_error($mysqli));
$row0=mysqli_fetch_array($result0);

echo "<p align=\"center\" style=\"background-color:#faa;font-weight:bold;\">Welcome, " . $_SESSION['username'] . " | " . $_SESSION['role'] . " | <a href=\"logout.php\">Logout</a></p>";
}
?>
<html>
<head><title>Registered Zone - Vulnerable WebAppss</title></head>
<body bgcolor="#f0f0f0">
<?php
if(isset($_SESSION['admin'])){
include "admin.php";
}
else{
	if(!isset($_GET["x"])){
		$x="";
	}
	else{
		$x=$_GET["x"];
	}
	echo "<p align=\"center\">$x</p>";

?>
<h2 align="center">Admin Area</h2>
<table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
</table>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form id="form1" name="form1" method="post" action="login.php">
<td>
<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td width="117">Username</td>
<td width="14">:</td>
<td width="357"><input name="username" type="text" id="username" size="40" /></td>
</tr>
<tr>
<td width="117">Password</td>
<td width="14">:</td>
<td width="357"><input name="password" type="password" id="password" size="40" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit" /> <input type="reset" name="Submit2" value="Reset" /></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
<tr>
</tr>
</table>

<?php
}

?>
<p align="center"><a href="../index.php">Home</a> | <a href="../about.php?file=README.md">About</a></p>
</body>
</html>

