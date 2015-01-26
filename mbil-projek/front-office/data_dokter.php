<html>
<head>
<title>Data Dokter </title>
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
<div class="kepala"><u>DATA DOKTER</u></div>
<div id="foto">
<div id="foto2"></div>
</div>
<a href="home-office.php"><div id="namauser"><center>Front Office<center> </div></a>
<a href="../index.php"><div id="logout"><center>Logout</center></a></div>
<div id="pendaftaran">
<style>
.no{
width:40;
height:30;
text-align:center;

}
.table{
width:110;
height:30;
text-align:center;
}
.table2{
width:100;
height:100;
background-color:d6d4d2;
}
.praktek{
width:110;
height:100;
background-color:#d6d4d2;
}
.edit-table{
margin-left:25;
margin-top:-5;
border-color:#030303;
}

</style>
</br>
<table class="edit-table"  >
<tr>
<td class="no" bgcolor="#d09b45">No</td>
<td class="table" bgcolor="#d09b45">Nama</td>
<td class="table" bgcolor="#d09b45">Tanggal Lahir</td>
<td class="table" bgcolor="#d09b45">Alamat</td>
<td class="table" bgcolor="#d09b45">Spesialis</td>
<td class="table" bgcolor="#d09b45">Jadwal Praktek</td>
<td class="table" bgcolor="#d09b45">Jam Kerja</td>
<tr>
<td class="no" bgcolor="#cbc8c3">1</td>
<td class="table2">&nbsp;Hendi Agusti</td>
<td class="praktek">&nbsp;&nbsp;01 Juli 1997</td>
<td class="table2">&nbsp;&nbsp;&nbsp;Cina</td>
<td class="table2">&nbsp;Dokter Umum</td>
<td class="praktek">&nbsp;Senin-Rabu</td>
<td class="table2">&nbsp;07.00 - 09.00</td>
</tr>
<tr>
<td class="no" bgcolor="#cbc8c3">2</td>
<td class="table2">&nbsp;Marza Ayu</td>
<td class="praktek">&nbsp;&nbsp;12 Juli 1998</td>
<td class="table2">&nbsp;&nbsp;&nbsp;Korea</td>
<td class="table2">&nbsp;Dokter Umum</td>
<td class="praktek">&nbsp;Senin-Rabu</td>
<td class="table2">&nbsp;09.00 - 15.00</td>
</tr>
<tr>
<td class="no" bgcolor="#cbc8c3">3</td>
<td class="table2">&nbsp;Kimei</td>
<td class="praktek">&nbsp;&nbsp;31 Mei 1998</td>
<td class="table2">&nbsp;&nbsp;&nbsp;Jepang</td>
<td class="table2">&nbsp;Dokter Umum</td>
<td class="praktek">&nbsp;Kamis-Minggu</td>
<td class="table2">&nbsp;07.00 - 09.00</td>
</tr>
<tr>
<td class="no" bgcolor="#cbc8c3">4</td>
<td class="table2">&nbsp;Yuliana</td>
<td class="praktek">&nbsp;&nbsp;28 April 1997</td>
<td class="table2">&nbsp;&nbsp;&nbsp;India</td>
<td class="table2">&nbsp;Dokter Umum</td>
<td class="praktek">&nbsp;Kamis-Minggu</td>
<td class="table2">&nbsp;09.00 - 15.00</td>
</tr>




</table>

</div>


</div>




</body>
</html>
