<html>
<head>
<title>office-apoteker</title>
</head>
<link rel="stylesheet" type="text/css" href="css2.css">
<body>
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

?>
<div id="wrapper">
<div id="menu"></div>
<div id="logo"></div>
<div id="sidebar">
<div id="sidebar">
	<?php
	  include("menu.php");
	
	?>
</div>
<div class="kepala"><u>HOME</u></div>
<div id="foto">
<div id="foto2"></div>
</div>
<div id="namauser"><center>Front Office<center> </div>
<a href="index.php">
<div id="logout"><center>Logout</center></a></div>

</div>
</body>
</html>