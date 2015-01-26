<html>
<head>
<title>Data Pasien</title>
</head>
<link rel="stylesheet" type="text/css" href="css.css">
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
<div id="sidebar"></div>
        <?php
		include("menu.php");
		
		
		?>
<div id="footer">
        <?php
		include("../style/footer.php");
		?>
		</div>
<div class="kepala"><u>DATA PASIEN</u></div>
<div id="foto">
<div id="foto2"></div>
</div>
<a href="home-dokter.php"><div id="namauser"><center>Dokter</center></div></a>
<div id="logout"><center>Logout</center></div>
<div id="pendaftaran">
<style>
.table{
margin-left:48;
border:2px solid #ccc;
}
.no{
width:50;
height:30;
background-color:#DEA469;

}
.table2{
width:120;
height:30;
background-color:#DEA469;

}
.garis{
border:1px solid #b9b7b3;
padding-left:5;
padding-right:5;
}
</style>
<table  class="table">
<tr>
<td class="no"><center>No</center></td>
<td class="table2"><center>Nama</center></td>
<td class="table2"><center>Jenis Kelamin</center></td>
<td class="table2"><center>Tanggal Lahir</center></td>
<td class="table2"><center>Golongan Darah</center></td>
<td class="table2"><center>Alamat</center></td>
<td class="table2"><center>Keluhan</center></td>
<td class="table2"><center>Keterangan</center></td>
</tr>
<?php
$pasien=mysql_query("select * from pasien");
$no=1;
while($tampil=mysql_fetch_array($pasien)){
echo "<tr>";
echo "<td class='garis'><center>".$no."</center></td>";
echo "<td class='garis'><center>&nbsp;&nbsp;".$tampil['nama']."</td>";
echo "<td class='garis'><center>".$tampil['jenis_kelamin']."</center></td>";
echo "<td class='garis'><center>".$tampil['tanggal_lahir']."</center></td>";
echo "<td class='garis'><center>".$tampil['gol_darah']."</center></td>";
echo "<td class='garis'><center>".$tampil['alamat']."</center></td>";
echo "<td class='garis'><center>".$tampil['keluhan']."</center></td>";

echo "</tr>";
$no++;

}



?>

</div>







</div>



</body>
</html>