 <?php 
	
	
	require_once "view/header.php";
	require_once "core/init.php";
	//validasi register

	if (isset($_POST['tombolKirim'])) {

		//simpan variabel
		$nama=$_POST['UserName'];
		$pass1=$_POST['pass1'];
	
		
		if(!empty(trim($nama)) && !empty(trim($pass1))){

			/*if(cek_login($nama,$pass1)){
				echo"login sukses";	
			}
			else{
				echo "login gagal";
			}*/
			if (login_cek_nama($nama)) {
				die('<br>nama teresedia');
				
				if(cek_login($nama,$pass1)){
					$_SESSION['user']=$nama;
					header('location:index.php');
					//echo "berhasil";
				}
				else{
					echo "data salah";
				}
			}
			else{
				echo "<br>nama belum terdaftar";
			}
			
				
		}
		
		else{
			echo "Tidak Boleh Kosong";		
		}
	}
	


 ?>
 		 <form action="login.php" method="POST">
 		 	<label>UserName</label>
 		 	<input type="text" name="UserName"><br><br>
 		 	
 		 	<label>Password</label>
 		 	<input type="password" name="pass1"><br>
 		 	

 		 	<button type="submit" name="tombolKirim">Daftar</button><br><br>

 		 </form>


 <?php 
 	require_once "view/footer.php";
  ?>