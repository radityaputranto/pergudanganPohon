<?php 
	
	function cek_username($nama){
		global $connect;
		$nama = mysqli_real_escape_string($connect,$nama);

		$query_cek="SELECT * FROM members WHERE nama = '$nama'";

		if ($result = $connect->query($query_cek)) {
			if (mysqli_num_rows($result) == 0) return true;
			else return false;
		}

	}





	function register_user($nama,$pass1){
		global $connect;

		//security dalam php
		//hindari sql injection
		$nama = mysqli_real_escape_string($connect,$nama);
		$pass1 = mysqli_real_escape_string($connect,$pass1);

		$pass1 = password_hash($pass1,PASSWORD_DEFAULT);
		


		$query ="INSERT INTO members (nama,pass) VALUES ('$nama','$pass1')";

		
		if ($connect->query($query)) {
			
			return true;
		}
		else{
			
			return false;
		}
	}


	function login_cek_nama($nama){
		global $connect;
		$nama = mysqli_real_escape_string($connect,$nama);


		$query_nama="SELECT nama FROM members WHERE nama='$nama'";

		if ($result=mysqli_query($connect,$query_nama)) {
			if (mysqli_num_rows($result) != 0) return true;
			else return false;
		}
	}





	function cek_login($nama,$pass1){
		
			

		global $connect;
		$nama = mysqli_real_escape_string($connect,$nama);
		$pass1 = mysqli_real_escape_string($connect,$pass1);


		$query_login= "SELECT pass FROM members WHERE nama = '$nama'";

		//$result=$connect->query($query_login);
		$result=mysqli_query($connect,$query_login);
		//$hash = mysqli_fetch_assoc($result)['pass'];
		$hash = $result->fetch_assoc()['pass'];
		//mengembalkan password dari hash
		echo $query_login;
		//echo $result;
		echo $hash;
		//$coba='$2y$10$BFqsQU26ugBQxLTbkmR6CeYGAKT6K7z7LqWsk2IdvJT';

		if (password_verify($pass1 , $hash)) {
		/*	echo "berhasil login";*/

			//die('<br>berj=hasil');
			return true;
		}
		else {
			/*echo "gagal login";*/
			return false;
		/*die('<br>gagal');*/
		}

			

			//session_start();
		/*global $connect;
		$nama = mysqli_real_escape_string($connect,$nama);
		$pass1 = mysqli_real_escape_string($connect,$pass1);
			
			  $sql = "SELECT * FROM members WHERE nama = '$nama' AND password = '$pass1'";

			 $result = $connect->query($sql);
			 
			 if ($result->num_rows == 1){
			  $row = $result->fetch_object();
			  $_SESSION['nama'] = $row->nama;
			  $_SESSION['pass1'] = $row->pass;
			  
			 }
			 else{
			  $_SESSION['pesan']="Username atau Password salah";
			 }
			 */

	}
 ?>