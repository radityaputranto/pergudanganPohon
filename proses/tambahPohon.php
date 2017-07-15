<?php 
//$id=$_POST['nisn'];
include '../config.php';
global $connection;

if (isset($_POST['save'])) {


      $nama=$_POST['nama'];
      $jenis=$_POST['jenis'];
      $ukuran=$_POST['ukuran'];
      $harga=$_POST['harga'];
      $tempat=$_POST['tempat'];
      $tes="tes";


      $sql  = "INSERT INTO pohon ( nama_pohon, jenis_pohon, ukuran_pohon, harga_pohon, lokasi) VALUES ( '$nama','$jenis','$ukuran','$harga','$tempat')";

      ?>
      <script type="text/javascript">
        window.location.href='../index.php';  
      </script>
      
      <?php


      //$queryTambah ="INSERT INTO pohon VALUES('$nama','$jenis','$ukuran','$harga','$tempat')";
      $connection->query($sql);


}
?>
