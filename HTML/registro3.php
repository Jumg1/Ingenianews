<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <style>
        span {
    font-size: 2vw;
    margin: 2vw 0 0.4vw 0;
}

input, select {
    height: 3vw;
    width: 20vw;
    border-radius: 0;
    font-size: 1.2vw;
}

.sesion-form {
    height: 80vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

input type="submit" {
    padding: 0.3vw 3vw;
    font-size: 1.4vw;
    margin: 1vw;
}
    </style>
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
            <form class="sesion-form" method="Post" action="registro.php">
            <span>Nombre</span>
            <input type="text" name="nombre">
            <span>Correo</span>
            <input type="email" name="correo">
            <span>Usuario</span>
            <input type="text" name="usuario">
            <span>Contraseña</span>
            <input type="password" name="contraseña">
            <select name="rol" style="visibility:hidden">
                <option value="Usuario">Usuario</option>
            </select>
            <input type="submit" value="Registrar" class="button">
            </form>
        </div>
    </section>
</body>
</html>
<?php

$conexion = mysqli_connect("localhost", "id20728174_ingenews1", "idke28_A", "id20728174_ingenews");

if($_POST){
$nombre = $conexion->real_escape_string($_POST['nombre']);
$correo = $conexion->real_escape_string($_POST['correo']);
$usuario = $conexion->real_escape_string($_POST['usuario']);
$contraseña = $conexion->real_escape_string($_POST['contraseña']);
$rol = $conexion->real_escape_string($_POST['rol']);

$encriptada = password_hash($contraseña, PASSWORD_DEFAULT);

$sql = "INSERT INTO `Usuarios` (`Nombre`, `Correo`, `Usuario`, `Contraseña`, `Rol`) VALUES ('".$nombre."','".$correo."','".$usuario."','".$encriptada."','".$rol."')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado) {
  echo "Usuario registrado exitosamente";
} else {
  echo "Error al registrar usuario" . "<br>" . $conexion->error;
}
}
?>