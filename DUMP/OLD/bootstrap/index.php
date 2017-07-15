<!--  -->





<!-- awal -->
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="custom.css"> -->
	<link rel="stylesheet" type="text/css" href="baru.css">

	
</head>
<body >

		<div class="container isi">

<!-- inputan LOGIN -->
			<div class="row baris">
				<div class="col-md-1"></div>
				
				<div class="col-md-4">
					<h2 class="putih">BORNEO</h2>	
					<h5 class="putih">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

					<a href="index.php?register=masukkan%20nama,email,dan%20password%20untuk%20daftar"><button type="submit" class="btn btn-primary tombol_kirim ">daftar</button></a>
				</div>

				<div class="col-md-2"></div>

				<div class="col-md-4 bg-form">
				<div class="bg_judul">
					<h5 class="judul">LOGIN</h5>
				</div>
					<form>
						  <div class="form-group formulir">
						   	
						   	
						    <input type="email" class="form-control isian" id="exampleInputEmail1 nama_login" aria-describedby="emailHelp" placeholder="Enter email" name="nama_login">

						    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						  </div>
						  <div class="form-group formulir">
						   
						    <input type="password" class="form-control isian" id="exampleInputEmail1 password" aria-describedby="emailHelp" placeholder="password" name="password">
						    
						  </div>
					</form>
					<button type="submit" class="btn btn-primary tombol_kirim ">Submit</button>
				</div>
				<div class="col-md-1"></div>
				
			</div><!-- akhir login form -->
				
			
		</div><!-- akhir container -->



<!-- Close database -->
<?php mysql_close($connect); ?>
</body>
</html>