<?php 
require('../../public/conexion/conexion.php');
	$data=new ConexionVoluntarios();
	$conexion=$data->conect();
	$strquery ="SELECT * FROM `voluntariados`";
	$result = $conexion->prepare($strquery);
	$result->execute();
	$data = $result->fetchall(PDO::FETCH_ASSOC);
	
	var_dump($data);

require('../../public/conexion/conexion.php');
	$data=new ConexionUsuarios();
	$conexion=$data->conect();
	$strquery ="SELECT * FROM `users`";
	$result = $conexion->prepare($strquery);
	$result->execute();
	$data = $result->fetchall(PDO::FETCH_ASSOC);
	
	var_dump($data);

	require('../../public/conexion/conexion.php');
	$data=new ConexionCampannas();
	$conexion=$data->conect();
	$strquery ="SELECT * FROM `campañas`";
	$result = $conexion->prepare($strquery);
	$result->execute();
	$data = $result->fetchall(PDO::FETCH_ASSOC);
	
	var_dump($data);

	require('../../public/conexion/conexion.php');
	$data=new ConexionPersonas();
	$conexion=$data->conect();
	$strquery ="SELECT * FROM `personas`";
	$result = $conexion->prepare($strquery);
	$result->execute();
	$data = $result->fetchall(PDO::FETCH_ASSOC);
	
	var_dump($data);
?>