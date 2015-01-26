<html>
<head>
<title>Data Dokter</title>
</head>
<link rel="stylesheet" type="text/css" href="css.css">
<body bgcolor="#fbdeb1">
<div id="wrapper">
<div id="menu"></div>
<div id="logo"></div>
      <?php 
	  include("menu.php");
	  ?>
	  
	  <div id="footer">
	  <?php
	  include("../style/footer.php");
	  
	  ?>
	  </div>
	
<div class="kepala">DATA DOKTER</div>
	  <div id="foto">
<div id="foto2"></div>
</div>
<a href="home-dokter.php"><div id="namauser"><center>Dokter</center></div></a>
<div id="logout"><center>Logout</center></div>
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