<html>
<head>
<title>Data Pasien</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body bgcolor="">
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

if(isset($_GET['del'])){
    $del=$_GET['del'];
	mysql_query(" delete from pasien where id_num='$del'");
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
<div class="kepala"><u>DATA PASIEN</u></div>
<div id="foto">
<div id="foto2"></div>
</div>
<a href="home-office.php"><div id="namauser"><center>Front Office<center> </div></a>
<a href="index.php">
<div id="logout"><center>Logout</center></a></div>
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
echo "<td class='garis'>&nbsp;&nbsp;".$tampil['nama']."</td>";
echo "<td class='garis'><center>".$tampil['jenis_kelamin']."</center></td>";
echo "<td class='garis'><center>".$tampil['tanggal_lahir']."</center></td>";
echo "<td class='garis'><center>".$tampil['gol_darah']."</center></td>";
echo "<td class='garis'>&nbsp;".$tampil['alamat']."</td>";
echo "<td class='garis'>&nbsp;&nbsp;".$tampil['keluhan']."</td>";
echo "<td class='garis'>&nbsp;<a href='data_pasien.php?del=".$tampil['id_num']."'>Hapus</a>
                                    ||
                                    <a href='update_data.php?edit=".$tampil['id_num']."'>Edit</a>
								    </td>";
echo "</tr>";
$no++;
}	

?>
</table>
</div>


</div>






</body>
</html>