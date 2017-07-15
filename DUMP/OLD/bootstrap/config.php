<?php 
	$host ="localhost";
	$user ="root";
	$pass="";
	$db="belajar";
	$table="member";
	/*$connect = mysqli_connect($host,$user,$pass) or die("GAGAL KONEK");
	$pilih_db= mysqli_select_db($db) or die("database tidak ada");
	$cookie_nama=$_COOKIE['nama'];*/
	try {
    $pdo = new PDO("mysql:host={$host};dbname={$db}", $user, $pass);
	}
	catch(PDOException $e)
	{
    echo "Connection failed: " . $e->getMessage();
	}


 ?>