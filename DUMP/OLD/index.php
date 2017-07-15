<?php 
	


	//require_once "view/header.php";
	require_once "core/init.php";
	/*require_once "function/db.php";*/
	
	//require_once "view/footer.php";
	if (!isset($_SESSION['user'])) {
		header('location: login.php');
		//die('anda belum login');
	}
 ?>
 <h1>Selamat Datang</h1>
 <a href="logout.php"><button>Log Out</button></a>