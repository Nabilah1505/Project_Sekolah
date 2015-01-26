<html>
<head>
<title>Data Antri Pasien</title>
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
<div class="kepala"><u>DATA ANTRI</u></div>
<div id="foto">
<div id="foto2"></div></div>
<a href="home-office.php"><div id="namauser" ><center>Front Office<center> </div></a>
<a href="../index.php"><div id="logout"><center>Logout</center></a></div>
<div id="date">Tanggal :
<?php
$date=date("d-m-Y");
$date2=date("Y-m-d");
echo "".$date."";
?>

</div>
<div id="pendaftaran2">
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
</tr>
         <?php

         $all=mysql_query("select * from pasien where tanggal='".$date2."' and status='Belum Diperiksa'");
         
		 $a=1;
		
         while($log=mysql_fetch_array($all)){		
		 $ganti=$a%2;
		 
		 if($ganti==0){
		 echo "
		 <tr>
		 
<td class='garis'><center>".$no."</center></td>
<td class='garis'>&nbsp;&nbsp;".$log['nama']."</td>
<td class='garis'><center>".$log['jenis_kelamin']."</center></td>
<td class='garis'><center>".$log['tanggal_lahir']."</center></td>
<td class='garis'><center>".$log['gol_darah']."</center></td>
<td class='garis'>&nbsp;".$log['alamat']."</td>
<td class='garis'>&nbsp;&nbsp;".$log['keluhan']."</td>

</tr>
";
}
else{
echo "
<tr>
<td class='garis' style='background:#ccc;'><center>".$no."</center></td>
<td class='garis'style='background:#ccc;'>&nbsp;&nbsp;".$log['nama']."</td>
<td class='garis'style='background:#ccc;'><center>".$log['jenis_kelamin']."</center></td>
<td class='garis'style='background:#ccc;'><center>".$log['tanggal_lahir']."</center></td>
<td class='garis'style='background:#ccc;'><center>".$log['gol_darah']."</center></td>
<td class='garis'style='background:#ccc;'>&nbsp;".$log['alamat']."</td>
<td class='garis'style='background:#ccc;'>&nbsp;&nbsp;".$log['keluhan']."</td>

</tr>
";
}
$a++;
}

?>
</div>
</body>
</html>