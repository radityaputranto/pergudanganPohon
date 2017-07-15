<?php 
	
	
	require_once "view/header.php";
	require_once "core/init.php";
	//validasi register

	if (isset($_POST['tombolKirim'])) {

		//simpan variabel
		$nama=$_POST['UserName'];
		$pass1=$_POST['pass1'];
		$pass2=$_POST['pass2'];
		
		if(!empty(trim($nama)) && !empty(trim($pass1))&& !empty(trim($pass2))){

			if($pass1==$pass2){
				if (cek_username($nama)){

					//memasukan ke dalam database
					if(register_user($nama,$pass1)){
						echo"data berhasil di simpan";	
					}
					else{
						echo "data gagal disimpan";
					}
				}
				else{
					echo "nama telah terdaftar";
				}

			
			}
			else{
			echo"password harus sama";
			}

		}
		
		else{
			echo "Tidak Boleh Kosong";		
		}
	}
	


 ?>
 		 <form action="register.php" method="POST">
 		 	<label>UserName</label>
 		 	<input type="text" name="UserName"><br><br>
 		 	
 		 	<label>Password</label>
 		 	<input type="password" name="pass1"><br>
 		 	<label>Confirm Password</label>
 		 	<input type="password" name="pass2"><br><br>

 		 	<button type="submit" name="tombolKirim">Daftar</button><br><br>

 		 </form>


 <?php 
 	require_once "view/footer.php";
  ?>