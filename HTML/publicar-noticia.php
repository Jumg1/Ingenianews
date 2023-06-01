<?php 
  session_start();
  if(!isset($_SESSION['Rol'])){
    header('location: ../index.html'); 
  }
  if($_SESSION['Rol'] == 'Usuario'){
      header('location: ../index.html');
  }
  if(isset($_SESSION['Rol']))
  {
    $conexion = mysqli_connect("localhost", "id20728174_ingenews1", "idke28_A", "id20728174_ingenews"); 
  }
?>
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
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

input[type="submit"] {
    padding: 0.9vw 3vw;
    font-size: 1.4vw;
    margin: 1vw;
}

textarea {
    width: 60vw;
    font-size: 1vw;
}
    </style>
    <title>Periodico para Inges | Publicar</title>
</head>
<body>
    <header>
        <h3>
            <a href="index4.php">Periodico para Inges</a> 
        </h3>
        
        <a href="./noticias.php" class="boton">Noticias</a>
        <a href="./chat.php" class="boton">Chat</a>
        <a href="./infon1.php" class="boton">Información noticias</a>
        <a href="./infou1.php" class="boton">Información usuarios</a>
        <a href="./registro.php" class="boton">Registrar usuarios</a>
        <a href="./cerrar.php" class="boton">Cerrar Sesión</a>
        
    </header>
    <section>
        <section>
            <div class="sesion-form">
                <form class="sesion-form" action="publicar-noticia.php" method="post" enctype="multipart/form-data">
                <span>Numero de noticia</span>
                <select name="numN">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                </select>
                <span>Titulo</span>
                <input type="text" name="titulo">
                <span>Subtitulo</span>
                <input type="text" name="subtitulo">
                <span>Noticia</span>
                <textarea name="noticia" id="" cols="30" rows="10"></textarea>
                <span>Imagen</span>
                <input type="file" name="foto">
                <input type="submit" value="Subir noticia">
                </form>
            </div>
        </section>
    </section>
</body>
</html>
<?php

$conexion = mysqli_connect("localhost", "id20728174_ingenews1", "idke28_A", "id20728174_ingenews");

if($_POST){
$Titulo = $conexion->real_escape_string($_POST['titulo']);
$Subtitulo = $conexion->real_escape_string($_POST['subtitulo']);
$Noticia = $conexion->real_escape_string($_POST['noticia']);
$Numero = $conexion->real_escape_string($_POST['numN']);

$imagen = addslashes(file_get_contents($_FILES['foto']['tmp_name']));

$sqlb="SELECT * FROM Noticias where ID = '$Numero'";
$queryb = mysqli_query($conexion,$sqlb);

$filas = mysqli_fetch_array($queryb);
$ix = $filas['ID'];

if ($ix = $Numero){
    $sqld="DELETE FROM `Noticias` WHERE ID='$Numero'";
    $queryd = mysqli_query($conexion,$sqld);
    $sql = "INSERT INTO `Noticias` (`ID`, `Titulo`, `Subtitulo`, `Noticia`, `Imagen`) VALUES ('".$Numero."','".$Titulo."','".$Subtitulo."','".$Noticia."','".$imagen."')";
    $resultado = mysqli_query($conexion, $sql);
} else {
    $sql = "INSERT INTO `Noticias` (`ID`, `Titulo`, `Subtitulo`, `Noticia`, `Imagen`) VALUES ('".$Numero."','".$Titulo."','".$Subtitulo."','".$Noticia."','".$imagen."')";
    $resultado = mysqli_query($conexion, $sql);
}

if ($resultado) {
  echo "Noticia registrada exitosamente";
} else {
  echo "Error al registrar noticia" . "<br>" . $conexion->error;
}
}
?>