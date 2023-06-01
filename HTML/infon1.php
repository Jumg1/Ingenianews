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
    <title>Periodico para Inges | Inicio de Sesion</title>
    <style>
        table {
  border-collapse: collapse;
  width: 100%;
  text-align: left;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
  color: #444;
}

tr:hover {
  background-color: #f5f5f5;
}

span {
    font-size: 2vw;
    margin: 2vw 0 0.4vw 0;
}

input {
    height: 3vw;
    width: 20vw;
    border-radius: 0;
    font-size: 1.2vw;
}

.sesion-form {
    height: 35vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

button {
    padding: 0.3vw 3vw;
    font-size: 1.4vw;
    margin: 1vw;
}
    </style>

</head>
<body>
    <header>
        <h3>
            <a href="index4.php">Periodico para Inges</a> 
        </h3>

        <a href="./noticias.php" class="boton">Noticias</a>
        <a href="./chat.php" class="boton">Chat</a>
        <a href="./publicar-noticia.php" class="boton">Publicar noticia</a>
        <a href="./infou1.php" class="boton">Información usuarios</a>
        <a href="./registro.php" class="boton">Registrar usuarios</a>
        <a href="./cerrar.php" class="boton">Cerrar Sesión</a>

    </header><br><br>
    <center><span>Informacion de noticias</span></center><br><br>
    <?php
        $sql = "SELECT ID, Titulo, Subtitulo, Noticia, Creada_en FROM Noticias";
        $result = $conexion->query($sql);
        
        if ($result->num_rows > 0) {
            echo "<table><tr><th>ID</th><th>Titulo</th><th>Subtitulo</th><th>Noticia</th><th>Creado_en</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["Titulo"]. "</td><td>" . $row["Subtitulo"]. "</td><td>" . $row["Noticia"]. "</td><td>" . $row["Creada_en"]. "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No hay usuarios a mostrar";
        }
    ?>
    <br><br><center><span>Eliminar noticias</span></center><br><br>
    <section>
        <div class="sesion-form">
            <form class="sesion-form" method="Post" action="infon1.php">
            <span>ID</span>
            <input type="text" name="id">
            <span>Titulo</span>
            <input type="text" name="titulo"><br><br>
            <input type="submit" value="Eliminar" class="button"><br><br><br>
            </form>
        </div>
    </section>
</body>
</html>
<?php

$conexion = mysqli_connect("localhost", "id20728174_ingenews1", "idke28_A", "id20728174_ingenews");

if($_POST){
$id = $conexion->real_escape_string($_POST['id']);
$titulo = $conexion->real_escape_string($_POST['titulo']);

$sql="DELETE FROM `Noticias` WHERE ID='$id' AND Titulo='$titulo'";

$resultado = mysqli_query($conexion, $sql);

if ($resultado) {
  echo "Noticia eliminada exitosamente";
} else {
  echo "Error al eliminar noticia" . "<br>" . $conexion->error;
}
}
?>