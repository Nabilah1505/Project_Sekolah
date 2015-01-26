<?php

if(!empty($_POST['daftar'])){

$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$gol_darah=$_POST['gol_darah'];
$alamat=$_POST['alamat'];
$keluhan=$_POST['keluhan'];

mysql_query("INSERT INTO pasien (nama,jenis_kelamin,tanggal_lahir,gol_darah,alamat,keluhan)
values('".$nama."','".$jenis_kelamin."','".$tanggal_lahir."','".$gol_darah."','".$alamat."','".$keluhan."')
");

}

?>