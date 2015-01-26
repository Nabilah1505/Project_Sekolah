<?php

mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("klinik");

$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$gol_darah=$_POST['alamat'];
$keluhan=$_POST['keluhan'];

mysql_query("delete from pasien") or die("Gagal hapus data.");


?>