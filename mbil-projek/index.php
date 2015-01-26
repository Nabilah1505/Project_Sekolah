<html>
<head>
<title>Index</title>
</head>
<link rel="stylesheet" type="text/css" href="front-office/style.css">
<body bgcolor="FBDEB1">
<div id="wrapper">
<div id="kotak"></div>
<div id="kotak2"></div>
<div id="kotak3"><div id="kotak4"><font face="elephant" size="4"><center> LOGIN DISINI ... </center></div>
<br>
<br>

<style>
.input {
     width:250;
	 height:50;
	 margin-left:28;
	 background:transparent;
	 border: 2px solid transparent;
	 border-bottom-color:#fff;
	 padding-left:60;
	 font-family:trebuchet ms;
	 font-size:18;
	 }
.login {
     width:100;
	 height:50;
	 margin-left:100;
	 margin-top:30;
	 border: 2px solid #917b58;
	 background:#9d8256;
	 }
</style>
<form method="POST">
<img src="img/admin.png" style="position:absolute; margin-left:25;"></img>
<input class = "input"  name="username" type="text" placeholder="User Name" required>
<br>
<br>
<img src="img/pass2.png" style="position:absolute; margin-left:20;"></img>
<input class = "input"  name="password" type="password" placeholder="Password" required>
<br>
<input class="login" type="submit" name="login" value="login">
</form></div>
<?php

mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("klinik");
session_start();
session_destroy();
if(!empty($_POST['login'])){

$username=$_POST['username'];
$password=$_POST['password'];

$all=mysql_query("select * from user where username='".$username."' and password='".$password."' ");
$log=mysql_fetch_array($all);

if($log){

     $rows=mysql_num_rows($all);
	 
	 if($rows > 0){
	 
	 session_start();
	 $_SESSION['username']=$username;
	 $type=$log['type'];
	 $_SESSION['status']="loggedin";
	 if($type=="dokter"){
	 $_SESSION['type']=$log['type'];
	 header("location:dokter/home-dokter.php");
	 }
	 else if($type=="office"){
	 $_SESSION['type']=$log['type'];
	 header("location:front-office/home-office.php");
	 }
	 else if($type=="admin"){
	 $_SESSION['type']=$log['type'];
	 header("location:home-admin.php");
	 }
	 else if($type=="apoteker"){
	 $_SESSION['type']=$log['type'];
	 header("location:apoteker/home-apoteker.php");
	 }
	 }
}
}

	 


?>

<div id="footer2"><font face="times new roman" size="2"><center>Nabilah Karmeila Ahmad | XI RPL B | SMKN 4 Padalarang</center></div>
</div>
</body>
</html>