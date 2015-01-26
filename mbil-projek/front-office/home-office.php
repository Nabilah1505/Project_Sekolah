<html>
<head>
<title>home</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body bgcolor="#fbdeb1">
<?php

mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("klinik");

session_start();

$status=$_SESSION['status'];
$type=$_SESSION['type'];
$username=$_SESSION['username'];

if($status!="loggedin"){
session_destroy();
header("location:index.php");
}
else if($type!="office"){
session_destroy();
header("location:index.php");
}
?>

<div id="wrapper">
<div id="menu"></div>
<div id="logo"></div>
<div id="sidebar">
	<?php
	include("menu.php");
	
	
	?>
<div class="kepala"><u>HOME</u></div>
<div id="foto">
<div id="foto2"></div>
</div>
<a href="home-office.php"><div id="namauser"><center>Front Office<center> </div></a>
<a href="index.php">
<a href="../index.php"><div id="logout"><center>Logout</center></a></div>
<div id="gambardokter"></div>
<div id="introduction"></div>
<div id="footer"><center>&copy Nabilah Karmeila Ahmad</center> </div>
</div>

</body>
</html>