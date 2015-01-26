<html>
<head>
<title>Cari Data Pasien </title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
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
	<?php
	  include("menu.php");
	
	?>
	<div id="footer">
<?php
include("../style/footer.php")
?>
</div>
<div class="kepala"><u>CARI DATA PASIEN</u></div>
<div id="foto">
<div id="foto2"></div>
</div>
<a href="home-office.php"><div id="namauser"><center>Front Office<center> </div></a>
<a href="index.php">
<a href="../index.php"><div id="logout"><center>Logout</center></a></div>
<div id="pendaftaran">
<style>
.cari{
margin-left:50;
}
</style>
<form method="POST">

<input class="cari" type="text" name="cari_pasien" placeholder="Cari Pasien">
<input type="submit" name="cari" value="Cari">


</form>
<div id="icon-cari"></div>
<div id="konten">
<?php
include("../proses/cari.php");
?>
</div>
</div>


</div>





</body>
</html>
