<?php 

	$server = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "petsafe";

	$con = mysqli_connect($server , $usuario , $senha ,$banco ) or die 
	("Erro .." . mysqli_connect_error());
	mysqli_set_charset($con, 'utf8');
 ?>