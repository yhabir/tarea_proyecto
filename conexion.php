<?php

class Conectar
{
		protected $conexion;
		private $database;
				
		function __construct($conexion,$database){
			$conexion;
			$database;
		}
			
	public static function regpc()
	{
		//$datasan = array("localhost","id19154370_rooting","|PFUKG2?9u$inMZ1","id19154370_bingcass");
		$datasan = array("localhost","rootserrock","rootea5060","registropc");
        $conexion = mysqli_connect((string)$datasan[0],(string)$datasan[1],(string)$datasan[2]);
		mysqli_query($conexion,"SET NAMES 'utf8'");
		mysqli_set_charset($conexion,'utf8');
		mysqli_set_charset($conexion,"SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
        //mysqli_set_charset($dcom,"utf8");
		//mysqli_set_charset('utf8');
		//mysqli_get_charset($con));
		$database = mysqli_select_db($conexion,(string)$datasan[3]);

		if($conexion==TRUE){
			 //echo 'La conexion al servidor fue exitosa';
		}else{
			if(mysqli_connect_error() || mysqli_connect_errno()){
				die("Conexión al servidor fallido!?" . mysqli_connect_error() . mysqli_connect_errno());
			}
		}
		
		if($database==TRUE){
			//echo 'La conexion a la base de datos fue exitosa';
		}else{
		    echo 'No se pudo conectar al servidor!?';	
			die('Conexión a la base de datos fallida!?');
		}
		

	}
}

/*
$var = new Conectar();
$var -> regpc();
*/

        $conexion = mysqli_connect("localhost","rootserrock","rootea5060");
		$database = mysqli_select_db($conexion,"registropc");

?>