<?php
if(!empty($_POST['cari'])){

$pasien=$_POST['cari_pasien'];

$cari=mysql_query("select * from pasien where nama like '".$pasien."%'");
if($cari==true){
$row=mysql_num_rows($cari);
if($row > 0){
while( $tampil=mysql_fetch_array($cari)){
echo "<div id='cari'>"; 
echo "<br>&nbsp;&nbsp;&nbsp; Nama  :  ".$tampil['nama']."<br>";
echo "&nbsp;&nbsp;&nbsp; Jenis Kelamin   :   ".$tampil['jenis_kelamin']."</br>";
echo "&nbsp;&nbsp;&nbsp; Tanggal Lahir   :   ".$tampil['tanggal_lahir']."</br>";
echo "&nbsp;&nbsp;&nbsp; Golongan Darah   :   ".$tampil['gol_darah']."</br>";
echo "&nbsp;&nbsp;&nbsp; Alamat   :   ".$tampil['alamat']."</br>";
echo "&nbsp;&nbsp;&nbsp; Keluhan   :   ".$tampil['keluhan']."</br>";
echo "</div>";
}
}
else{
echo "&nbsp;&nbsp;&nbsp;&nbsp;Tidak ada pasien";
}
}

}
