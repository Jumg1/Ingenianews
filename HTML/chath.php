<?php

if($_POST)
{
    $conexion = mysqli_connect("localhost", "id20728174_ingenews1", "idke28_A", "id20728174_ingenews");
    session_start();
    $id = $_SESSION['ID'];
	$sql1="SELECT * FROM Usuarios where ID = '$id'";

	$query2 = mysqli_query($conexion,$sql1);

	$filas = mysqli_fetch_array($query2);

	$nm = $filas['Nombre'];
    
    $msg=$conexion->real_escape_string($_POST['msg1']);
    
	$sql="INSERT INTO `Chat`(`Nombre`, `Mensaje`) VALUES ('".$nm."', '".$msg."')";

	$query = mysqli_query($conexion,$sql);
	if($query)
	{
		header('Location: chat.php');
	}
	else
	{
		echo "Algo salió mal";
	}
    
	
	}
?>
