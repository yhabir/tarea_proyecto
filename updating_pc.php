<?php

require_once 'conexion.php';
		
$idocult = $_POST['gce_idocult'];
		
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


$SQL_Idataup = "
UPDATE equipopcreg 
SET 
idpc='".$idprod."',
equipopc='".$gce_computador."',
tarjmadre='".$gce_board."',
casecpu='".$gce_case."',
procesadr='".$gce_procesador."',
tarjgrafic='".$gce_grafica."',
memoryram='".$gce_ram."',
discohard='".$gce_disco_duro."',
tecladopc='".$gce_teclado."',
mousepc='".$gce_mouse."',
pantallapc='".$gce_pantalla."',
estadopc='".$gce_estado."'
WHERE id = $idocult
";
$PROC_INGRESOup = mysqli_query($conexion,$SQL_Idataup);

if($PROC_INGRESOup==TRUE){
	
	        mysqli_free_result($PROC_INGRESOup);
            mysqli_close($conexion);
	 
	           echo "<script> window.location='updatedata.php?id=$idocult'; </script>";
	           echo '<script type="text/javascript"> window.location.rel="noopener" href = "updatedata.php?id=$idocult"; </script>';   
	           header("location:updatedata.php?id=$idocult");
	           exit();		
	
}


?>