<?php

require_once 'conexion.php';
		
$gce_computador = $_POST['gce_computador'];
$gce_board = $_POST['gce_board']; //echo '<br>';
$gce_case = $_POST['gce_case']; //echo '<br>';
$gce_procesador = $_POST['gce_procesador']; //echo '<br>';
$gce_grafica = $_POST['gce_grafica']; //echo '<br>';
$gce_ram = $_POST['gce_ram']; //echo '<br>';
$gce_disco_duro = $_POST['gce_disco_duro']; //echo '<br>';
$gce_teclado = $_POST['gce_teclado']; //echo '<br>';
$gce_mouse = $_POST['gce_mouse']; //echo '<br>';
$gce_pantalla = $_POST['gce_pantalla']; //echo '<br>';
$gce_estado = $_POST['gce_estado']; //echo '<br>';
$code = sha1(md5($gce_computador.$gce_board.$gce_case));
$idprod = substr($code,0,8);

$SQL_Idata = "
INSERT INTO equipopcreg (idpc,equipopc,tarjmadre,casecpu,procesadr,tarjgrafic,memoryram,discohard,tecladopc,mousepc,pantallapc,estadopc) 
VALUES ('".$idprod."','".$gce_computador."','".$gce_board."','".$gce_case."','".$gce_procesador."','".$gce_grafica."','".$gce_ram."','".$gce_disco_duro."','".$gce_teclado."','".$gce_mouse."','".$gce_pantalla."','".$gce_estado."')";
$PROC_INGRESO = mysqli_query($conexion,$SQL_Idata);

if($PROC_INGRESO==TRUE){
	
	        mysqli_free_result($PROC_INGRESO);
            mysqli_close($conexion);
	 
	           echo "<script> window.location='index.php'; </script>";
	           echo '<script type="text/javascript"> window.location.rel="noopener" href = "index.php"; </script>';   
	           header("location:index.php");
	           exit();		
	
}


?>