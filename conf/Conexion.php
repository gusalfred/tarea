<?php
 session_start();
$Conexion = new mysqli("localhost", "root", "", "tarea");
	if (mysqli_connect_errno()) {
		echo 'Conexion Fallida: ', mysqli_connect_error();
		exit();
	}
	mysqli_query($Conexion,"set names 'utf8'");//codificacion para caractertes especiales
 ?>