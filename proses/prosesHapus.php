<?php 
      require_once '../config.php';



        global $connection;

        $id=$_GET['id'];
        
        
      /*pembetulan*/

            $query ="DELETE FROM pohon WHERE Id_pohon='$id'";    
          $data= $connection->query($query);
?>

<script type="text/javascript">
	alert("Anda Yakin ??");
	window.location.href="../index.php";
</script>