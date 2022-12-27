    <h6 class="ms-5">Computadores</h6>
    <!-- Listado -->
    <div class="card">
      <div class="card-body">
        <table id="list-table" class="table">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Board</th>
              <th>Case</th>
              <th>Procesador</th>
              <th>Gráfica</th>
              <th>Ram</th>
              <th>Disco duro</th>
              <th>Teclado</th>
              <th>Mouse</th>
              <th>Pantalla</th>
              <th>Act. Datos</th>
              <th>Estado</th>
              <th>Cmb. Estado</th>
              <th>Borrar</th>            
            </tr>
          </thead>
          <tbody>

  
  <?php


require_once 'conexion.php';


        $conexion = mysqli_connect("localhost","rootserrock","rootea5060");
		$database = mysqli_select_db($conexion,"registropc");



$SQL_Select = "SELECT * FROM equipopcreg";
$DQT_Select = mysqli_query($conexion,$SQL_Select);

while($Ver_data = mysqli_fetch_array($DQT_Select)){
?>              
<?php
			  if($Ver_data['estadopc']==0): 
			  	$vardesing = '<th style = "background:#F00; color:#FFF;">';  
			  endif;

			  if($Ver_data['estadopc']==1): 
			  	$vardesing = '<th>';  
			  endif;
			  			  
			  ?>
                    
            <tr>
              <?php echo $vardesing; ?><?php echo $Ver_data['equipopc']; ?></th>
              <?php echo $vardesing; ?><?php echo $Ver_data['tarjmadre']; ?></th>
              <?php echo $vardesing; ?><?php echo $Ver_data['casecpu']; ?></th>
              <?php echo $vardesing; ?><?php echo $Ver_data['procesadr']; ?></th>
              <?php echo $vardesing; ?><?php echo $Ver_data['tarjgrafic']; ?></th>
              <?php echo $vardesing; ?><?php echo $Ver_data['memoryram']; ?></th>
              <?php echo $vardesing; ?><?php echo $Ver_data['discohard']; ?></th>
              <?php echo $vardesing; ?><?php echo $Ver_data['tecladopc']; ?></th>
              <?php echo $vardesing; ?><?php echo $Ver_data['mousepc']; ?></th>
              <?php echo $vardesing; ?><?php echo $Ver_data['pantallapc']; ?></th>
              <th>
              <a href="updatedata.php?id=<?php echo $Ver_data['id']; ?>">
              <img src="actualizarpng.png" style="width:25px; height:25px;" />
              </a>
              </th>
              <th><?php
			  if($Ver_data['estadopc']==0): 
			  		echo '<b style="color:#F00;">Inactivo</b>';	  
			  endif;
			  
			  if($Ver_data['estadopc']==1): 
			  		echo '<b style="color:#FF000;">Activo</b>';	  
			  endif;
			  ?>
              </th>
              <th><a href="changestatus.php?id=<?php echo $Ver_data['id']; ?>&sta=<?php echo $Ver_data['estadopc']; ?>">
              <img src="actualizarpng.png" style="width:25px; height:25px;" /></a></th>
              <th><a href="borrardata.php?id=<?php echo $Ver_data['id']; ?>"><img src="borrarpng.png" style="width:25px; height:25px;" /></a></th>
            </tr>
            
<?php
}
?>

              </tbody>
        </table>
      </div>
    </div>
  </div>