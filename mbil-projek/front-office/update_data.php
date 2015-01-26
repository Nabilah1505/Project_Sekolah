<html>
<head>
<title>Update Data</title>
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

if(isset($_GET['edit'])){
    $edit=$_GET['edit'];
	$id=$edit;
}

?>
<div id="wrapper">
<div id="menu"></div>
<div id="logo"></div>
<div id="sidebar">
	<?php
	  include("menu.php");
	
	?>
<div class="kepala"><u>PENDAFTARAN</u></div>
<div id="foto">
<div id="foto2"></div></div>
<a href="home-office.php"><div id="namauser"><center>Front Office<center> </div></a>
<a href="../index.php"><div id="logout"><center>Logout</center></a></div>
<div id="pendaftaran">
<style>
.form{
 margin-left:100;    
 margin-bottom:100;
 font-family:constantia;
 font-size:12pt;
}
.td{
 width:250;
 height:30;
 font-size:10pt;
 }
.td2{
 height:30;
 font-size:10pt;
 }
  


</style>
<form method="POST">
<input type="hidden" name="id" value="<?php echo "".$id.""; ?>">
<?php
$all=mysql_query("select * from pasien where id_num='".$id."' ");
$log=mysql_fetch_array($all);
?>
<br>
<br>
<table class="form" border="0">
                <tr>
				<td width="100" height ="45">Nama </td>
				<td  width="300" height="45" ><input class="td" type="text"  name="nama" value="<?php echo "".$log['nama'].""; ?>"  required></td>
				</tr>
				<tr>
				<td width="100" height ="45">Jenis Kelamin</td>
				<td width="300" height="45"><input type="radio" name="jenis_kelamin" value="Laki - laki" required>Laki-laki 
				 <input type="radio" name="jenis_kelamin" value="wanita" required>Wanita</td>
				</input>
				</tr>
				<td width="100" height="45">Tanggal Lahir</td>
				<td width="300" height="45"><input class="td2" type="text" name="tanggal_lahir" value="<?php echo "".$log['tanggal_lahir'].""?>"required>&nbsp;&nbsp;&nbsp;AA/BB/CCCC</td>
				</td>
				</tr>
				<tr>
				<td width="100" height ="45">Gol Darah</td>
				<td width="100" height ="45"><input type="radio" name="gol_darah" value="A" required>A 
				<input type="radio" name="gol_darah" value="B" required> B
				<input type="radio" name="gol_darah" value="AB" required>AB
				<input type="radio" name="gol_darah" value="AB" required>O</td>
                </tr>
				<tr>
				<td width="100" height ="45">Alamat</td>
				<td width="300" height ="45"><input class="td" type="text" name="alamat" value="<?php echo "".$log['alamat'].""?>" required></td>
				</tr>
				<tr>
				<td width="100" height ="45">Keluhan</td>
				<td width="100" height ="45"><input class="td" type="text" name="keluhan" value="<?php echo"".$log['keluhan'].""?>" required>
		      </select></td>
				</tr>
				
				</table>
				<input type="reset" id="hapus" value="Reset">
<input type="submit" name="update" id="simpan" value="Ganti">
</form>
<?php
include('update.php');


?>
<div id="gambardaftar"><img src="../img/daftar.png"></img></div>


</div>
</body>
</html>