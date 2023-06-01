<?php

$conexion = mysqli_connect("localhost", "id20728174_ingenews1", "idke28_A", "id20728174_ingenews");

if($_POST){

  $usuario = $conexion->real_escape_string($_POST['usu']);
  $contraseña = $conexion->real_escape_string($_POST['cont']);
  
  $sql1= "SELECT * FROM `Usuarios` where Usuario = '".$usuario."'";
  $query1 =  mysqli_query($conexion, $sql1);
  $bpass =  mysqli_fetch_assoc($query1);
  $con = password_verify($contraseña, $bpass['Contraseña']);

  // Verificar si el usuario y la contraseña son válidos
  $result = mysqli_query($conexion, $sql1);
  $result2 = mysqli_query($conexion, $sql1);

  if ((mysqli_num_rows($result) > 0)&&($con)) {
    // Iniciar sesión y redirigir al usuario a la página correspondiente a su rol
    $row = mysqli_fetch_assoc($result);
    $row2 = mysqli_fetch_assoc($result2);
    session_start();
    $_SESSION['ID'] = $row2['ID'];
    $_SESSION['Rol'] = $row['Rol'];
    if ($row['Rol'] == 'Sup_admin') {
      header('Location: index4.php');
    } 
    else if ($row['Rol'] == 'Admin') {
      header('Location: index2.php');
    }
    else if ($row['Rol'] == 'Usuario') {
      header('Location: index3.php');
    }
    else {
      header('Location: ../index.html');
    }
    
  } else {
    // Mostrar un mensaje de error si el usuario y la contraseña no son válidos
    echo "Nombre de usuario o contraseña incorrectos.";
  }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../CSS/inicio-sesion.css">
    <title>Periodico para Inges | Inicio de Sesion</title>
</head>
<body>
    <header>
        <h3>
            <a href="../index.html">Periodico para Inges</a> 
        </h3>
    </header>
    <section>
        <div class="sesion-form">
            <form class="sesion-form" method="Post" action="inicio-sesion.php">
            <span>Usuario</span>
            <input type="text" name="usu">
            <span>Contraseña</span>
            <input type="password" name="cont"><br><br>
            <input type="submit" value="Iniciar sesión" class="button">
            </form>
        </div>
    </section>
</body>
</html>
