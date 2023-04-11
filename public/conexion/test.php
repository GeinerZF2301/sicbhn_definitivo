<?php 
require('../../public/conexion/conexion.php');
	$data=new ConexionVoluntarios();
	$conexion=$data->conect();
	$strquery ="SELECT * FROM `voluntariados`";
	$result = $conexion->prepare($strquery);
	$result->execute();
	$data = $result->fetchall(PDO::FETCH_ASSOC);
	
	var_dump($data);
 ?>