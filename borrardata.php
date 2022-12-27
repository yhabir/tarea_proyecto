<?php

require_once 'conexion.php';

$SQL_Eraser_product = "DELETE FROM equipopcreg WHERE id=".$_GET['id']."";
$data_eraseproduct = mysqli_query($conexion,$SQL_Eraser_product);

if($data_eraseproduct==TRUE):

	    mysqli_free_result($data_eraseproduct);
        mysqli_close($conexion);	
	    echo "<script> window.location='index.php?id=deleteexit'; </script>";
	    echo '<script type="text/javascript"> window.location.rel="noopener" href = "index.php?id=deleteexit"; </script>';   
	    header("Location:index.php?id=deleteexit");	
	    exit();	

			   
endif;


?>