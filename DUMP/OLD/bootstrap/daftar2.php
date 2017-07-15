<?php 
	$nama= $_POST['userName'];
	$email= $POST['email'];
	$password = $_POST['password']
	$c_password = $_POST['c_password']

	if ($password != $c_password){
		print "<script> alert ('password anda harus sama ');javascript:history.go(-1);</script>";
		exit;
	}
	if ((!empty($userName)) && (!empty($email)) && (!empty($password)) && (!empty($c_password))){

		$query = mysql_query("INSERT INTO $table (nama,email,password) values ('$userName','$email','$password');");
		print "<script> alert ('registrasi SUKSES ');</script>";
	}
	else{
		print "<script> alert('maaf ,harus di isi semua ');javascript:history.go(-1);</script>"
	}
 ?>
 <?php mysql_close($connect); ?>
