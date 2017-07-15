<?php 

//loginglobal $connect;
		$nama = mysqli_real_escape_string($connect,$nama);
		$pass1 = mysqli_real_escape_string($connect,$pass1);


		$query_login= "SELECT pass FROM members WHERE nama = '$nama'";

		//$result=$connect->query($query_login);
		$result=mysqli_query($connect,$query_login);0
		$hash = mysqli_fetch_assoc($result)['pass'];
		//$hash = $result->fetch_assoc()['pass'];
		//mengembalkan password dari hash
		echo $query_login;
		//echo $result;
		echo $hash;
		//$coba='$2y$10$BFqsQU26ugBQxLTbkmR6CeYGAKT6K7z7LqWsk2IdvJT';

		if (password_verify($pass1 , $hash)) {
		/*	echo "berhasil login";*/

			die('<br>berhasil');
			/*return true;*/
		}
		else {
			/*echo "gagal login";*/
		/*	return false;*/
		die('<br>gagal');
		}

 ?>