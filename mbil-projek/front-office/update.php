<?php
if(!empty($_POST['update'])){

$id=$_POST['id'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$gol_darah=$_POST['gol_darah'];
$alamat=$_POST['alamat'];
$keluhan=$_POST['keluhan'];

$write=mysql_query("update pasien set nama='".$nama."' where id_num='".$id."'");
$write=mysql_query("update pasien set jenis_kelamin='".$jenis_kelamin."' where id_num='".$id."'");
$write=mysql_query("update pasien set tanggal_lahir='".$tanggal_lahir."' where id_num='".$id."'");
$write=mysql_query("update pasien set gol_darah='".$gol_darah."' where id_num='".$id."'");
$write=mysql_query("update pasien set alamat='".$alamat."' where id_num='".$id."'");
$write=mysql_query("update pasien set keluhan='".$keluhan."' where id_num='".$id."'");

header("location:data_pasien.php");
}

?>