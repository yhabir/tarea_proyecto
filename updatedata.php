<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--<base href="/TAREA_COMPUTACION/">-->
  <title>Gestión de equipos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
  <!--<link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="public/views/style.css">-->
  <script src="https://kit.fontawesome.com/1e30f8602f.js" crossorigin="anonymous"></script>
</head>

<style>

:root {
  --bs-font-sans-serif: "Montserrat";
}

body {
  background: #f5f9fc;
  padding: 2rem 3rem;
}

h6 {
  font-weight: bold;
  margin: 1rem 0;
}

.position-relative {
  position: relative;
}

.position-absolute {
  position: absolute;
}

.display-grid {
  display: grid;
}

.display-flex {
  display: flex;
}

.vertical-align-middle {
  vertical-align: middle;
}

select.form-select,
select {
  padding-bottom: 0.3215rem;
  padding-top: 1rem;
  font-size: 0.7rem;
  color: #545454;
}

label > div {
  padding-top: 0.3215rem;
  padding-left: 1.5rem;
  font-size: 0.7rem;
  font-weight: 700;
  color: #000000;
}

select.form-select,
input.form-control,
select,
input {
  padding-left: 1.5rem;
  font-size: 0.7rem;
  height: 2.44rem;
}

.btn-primary {
  background-image: linear-gradient(90deg, #29628d, #1a4465);
  background-color: transparent;
  border-color: transparent;
  font-size: 0.8rem;
  font-weight: 500;
}

.card {
  border-radius: 1rem;
}

.card .card-body {
  padding: 1.5rem 2.5rem;
}

table thead tr th {
  font-size: 0.8rem;
}

table tbody tr td {
  vertical-align: middle;
  font-size: 0.8rem;
}

tbody,
td,
tfoot,
th,
thead,
tr {
  border-style: none;
}

.table > :not(:first-child) {
  border-top: none;
}

table,
table.table {
  margin-bottom: 0;
}


</style>

<body>
  <div class="container">
    <div class="display-flex mb-4" style="height: 40px; width: 100%;">
      <h6 style="flex: 1 1 auto;">Actualizando computadores</h6>
      <img src="../Nueva_prueba2022/gc-icon.png" style="width:26%; height: 3.5vw">
    </div>
    <br>

<?php

require_once 'conexion.php';
		
$gce_id = $_GET['id'];

$SQL_selct = "SELECT * FROM equipopcreg WHERE id = $gce_id";
$data = mysqli_query($conexion,$SQL_selct);
$resp_data = mysqli_fetch_array($data);

?>
    <form id="register-form" name="register-form" class="row" action="updating_pc.php" method="post">

     <div class="mb-3 col-lg-4 col-sm-6">
     <input class="form-control" type="text" name="gce_computador" placeholder="Computador" id="gce_computador" required value="<?php echo $resp_data['equipopc']; ?>" />
     </div>
     <div class="mb-3 col-lg-4 col-sm-6">
     <input class="form-control" type="text" name="gce_board" placeholder="Board" id="gce_board" required value="<?php echo $resp_data['tarjmadre']; ?>" />
     </div>     
     <div class="mb-3 col-lg-4 col-sm-6">
     <input class="form-control" type="text" name="gce_case" placeholder="Case" id="gce_case" required value="<?php echo $resp_data['casecpu']; ?>" />
     </div>
     <div class="mb-3 col-lg-4 col-sm-6">
     <input class="form-control" type="text" name="gce_procesador" placeholder="Procesador" id="gce_procesador" required value="<?php echo $resp_data['procesadr']; ?>" />
     </div>  
    <input type="hidden" name="gce_idocult" value="<?php echo $resp_data['id']; ?>" />   
     <div class="mb-3 col-lg-4 col-sm-6">
     <input class="form-control" type="text" name="gce_grafica" placeholder="Grafica" id="gce_grafica" required value="<?php echo $resp_data['tarjgrafic']; ?>" />
     </div>
     

     <div class="mb-3 col-lg-4 col-sm-6">
     <input class="form-control" type="text" name="gce_ram" placeholder="Ram" id="gce_ram" required value="<?php echo $resp_data['memoryram']; ?>" />
     </div>
     
     
     <div class="mb-3 col-lg-4 col-sm-6">
     <input class="form-control" type="text" name="gce_disco_duro" placeholder="Disco Duro" id="gce_disco_duro" required value="<?php echo $resp_data['discohard']; ?>" />
     </div>
     
     
     <div class="mb-3 col-lg-4 col-sm-6">
     <input class="form-control" type="text" name="gce_teclado" placeholder="Teclado" id="gce_teclado" required value="<?php echo $resp_data['tecladopc']; ?>" />
     </div>
     

     <div class="mb-3 col-lg-4 col-sm-6">
     <input class="form-control" type="text" name="gce_mouse" placeholder="Mouse" id="gce_mouse" required  value="<?php echo $resp_data['mousepc']; ?>" />
     </div>     
    
     
     <div class="mb-3 col-sm-6 col-lg-6">
     <input class="form-control" type="text" name="gce_pantalla" placeholder="Pantalla" id="gce_pantalla" required value="<?php echo $resp_data['pantallapc']; ?>" />
     </div>  
      <!-- gce_estado -->
      <label class="mb-3 col-sm-6 col-lg-6 position-relative">
        <div class="position-absolute">Estado</div>
        <select id="gce_estado" class="form-select" name="gce_estado">
        <option value="<?php echo $resp_data['estadopc']; ?>" selected><?php if($resp_data['estadopc']==0){ echo 'Inativo'; }else{ echo 'Activo'; } ?></option>
          <option value="0">Inactivo</option>
          <option value="1">Activo</option>
        </select>
      </label>
      <div class="col-12 mb-3 display-grid">
        <button id="submit" type="submit" class="btn btn-primary" onClick="javascript:vermuestra();">
          <i class="fas fa-plus-square me-2 vertical-align-middle" style="font-size: 1.2em;"></i>
          Actualizar
        </button>
      </div> 
    </form>
    <br>
    
    <a href="index.php" style="text-decoration:none; color:#06F; font-weight:520; font-size:calc(0.70rem + 0.70vw);">Ir al Inicio</a>
    

<script>
function cerrado(){
document.getElementById("cerrar").style.display = 'none';
}
function cerradoroja(){
document.getElementById("cerrarroja").style.display = 'none';
}
</script>
<style>
#cerrar{
	background-color:rgba(0,153,51,1); 
	box-shadow: -6px 9px 8px -1px rgba(0,0,0,0.75); 
	-webkit-box-shadow: -6px 9px 8px -1px rgba(0,0,0,0.75); 
	-moz-box-shadow: -6px 9px 8px -1px rgba(0,0,0,0.75);
	color:#FFF;
	width:80%;
	padding:13px;
	border-radius:9px;
	font-size:calc(0.75rem + 0.75vw);
	text-align:center;
	position:absolute;
	top:35%;
	left:-14%;
	z-index:1200;
}
#cerrarroja{
	background-color:rgba(255,0,0,1); 
	box-shadow: -6px 9px 8px -1px rgba(0,0,0,0.75); 
	-webkit-box-shadow: -6px 9px 8px -1px rgba(0,0,0,0.75); 
	-moz-box-shadow: -6px 9px 8px -1px rgba(0,0,0,0.75);
	color:#FFF;
	width:70%;
	padding:13px;
	border-radius:9px;
	font-size:calc(0.75rem + 0.75vw);
	text-align:center;
	position:absolute;
	top:35%;
	right:14%;
	z-index:1200;	
}
.spanequis, .equisroja{
	background:#000;
	color:#FFF;
	padding:6px;
	border-radius:100px/100px;
	float:right;
	cursor:pointer;
}
</style>   
    
    <?php if($_GET['id']=='deleteexit'): ?>

<div id="cerrarroja"><b>El registro se elimin&oacute; con &eacute;xito!!</b>
<span class="equisroja" onclick="javascript:cerradoroja();"><b>X</b></span>
</div>

    <?php endif; ?>
    

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
  <!--<script type="module" src="../public/views/script.js"></script>-->
  

</body>

</html>