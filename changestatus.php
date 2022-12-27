<?php

require_once 'conexion.php';


if($_GET['sta']==0):
$estadopc = 1;
$SQL_Updt_product = "UPDATE equipopcreg SET estadopc = 1 WHERE id=".$_GET['id']."";
endif;


if($_GET['sta']==1):
$estadopc = 0;
$SQL_Updt_product = "UPDATE equipopcreg SET estadopc = 0 WHERE id=".$_GET['id']."";
endif;



$data_Updtproduct = mysqli_query($conexion,$SQL_Updt_product);

if($data_Updtproduct==TRUE):

	    mysqli_free_result($data_Updtproduct);
        mysqli_close($conexion);	
	    echo "<script> window.location='index.php'; </script>";
	    echo '<script type="text/javascript"> window.location.rel="noopener" href = "index.php"; </script>';   
	    header("Location:index.php");	
	    exit();	

			   
endif;


?>