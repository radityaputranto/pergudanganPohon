
 <?php 
	$host ="localhost";
	$user ="root";
	$pass="";
	$db="belajar";
	$table="member";
	/*$connect = mysqli_connect($host,$user,$pass) or die("GAGAL KONEK");
	$pilih_db= mysqli_select_db($db) or die("database tidak ada");
	$cookie_nama=$_COOKIE['nama'];*/

/*
	try {
    $pdo = new PDO("mysql:host={$host};dbname={$db}", $user, $pass);
    	echo "sukses konek database";
	}
	catch(PDOException $e)
	{
    echo "Connection failed: " . $e->getMessage();
	}*/

	/*$link =mysql_connect($host,$user,$pass,$db) or die(mysql_error());*/





// melakukan koneksi ke database
$connect = new mysqli($host,$user,$pass,$db);
 
// cek koneksi yang kita lakukan berhasil atau tidak
if ($connect->connect_error) {
   // jika terjadi error, matikan proses dengan die() atau exit();
   die('Maaf koneksi gagal: '. $connect->connect_error);
}
else{
	
	echo "connect db berhasil";
	/*
	coba masukan data
	$query ="INSERT INTO members(nama,pass) VALUES ('didi','12
	3456')";
	if ($connect->query($query)===TRUE) {
		# code...
		echo "berhasil";
	}*/
}

 ?>