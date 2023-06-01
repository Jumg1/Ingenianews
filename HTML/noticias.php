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
        .card-noticia {
    display: grid;
    grid-template-columns: 60% 40%;
    align-items: center;
    justify-content: center;
    background-color: #fcfcfc;
    border: 0.2vw solid #000;
    padding: 5vw;
    margin: 2vw;
}

.card-noticia h1 {
    font-family: 'Playfair Display', serif;
    font-size: 4vw;
}

.card-noticia h2 {
    font-family: 'Playfair Display', serif;
    font-size: 2vw;
}

.card-noticia img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    padding: 0 0 0 2vw;
}
    </style>
    <title>Periodico para inges | Noticias</title>
</head>
<body>
    <header>
        <h3>
            <a href="index4.php">Periodico para Inges</a> 
        </h3>
        <a href="./chat.php" class="boton">Chat</a>
        <a href="./infon1.php" class="boton">Información Noticias</a>
        <a href="./publicar-noticia.php" class="boton">Publicar noticia</a>
        <a href="./infou1.php" class="boton">Información usuarios</a>
        <a href="./registro.php" class="boton">Registrar usuarios</a>
        <a href="./cerrar.php" class="boton">Cerrar Sesión</a>

    </header>
    <section class="noticias">
        <div class="card-noticia">
            <div class="card-noticia-texto">
                <h1>
                    <?php
                            $conexion = mysqli_connect("localhost", "id20728174_ingenews1", "idke28_A", "id20728174_ingenews");

                            $sql1="SELECT * FROM Noticias where ID = 1";

                            $query2 = mysqli_query($conexion,$sql1);

                            if (mysqli_num_rows($query2) > 0) {
                                while ($row = mysqli_fetch_assoc($query2)) {
                            ?>
                                    <span><?php echo $row['Titulo']; ?></span>
                                <?php
                                }
                            } else {
                                ?>
                                    <p>
                                        No hay noticas en este momento.
                                    </p>
                            <?php
                            }
                        ?>
                </h1><br>
                <h2>
                    <?php
                            $conexion = mysqli_connect("localhost", "id20728174_ingenews1", "idke28_A", "id20728174_ingenews");

                            $sql1="SELECT * FROM Noticias where ID = 1";

                            $query2 = mysqli_query($conexion,$sql1);

                            if (mysqli_num_rows($query2) > 0) {
                                while ($row = mysqli_fetch_assoc($query2)) {
                            ?>
                                    <span><?php echo $row['Subtitulo']; ?></span>
                                <?php
                                }
                            } else {
                                ?>
                                    <p>
                                        No hay noticas en este momento.
                                    </p>
                            <?php
                            }
                        ?>
                </h2><br>
                <p>
                    <?php
                            $conexion = mysqli_connect("localhost", "id20728174_ingenews1", "idke28_A", "id20728174_ingenews");

                            $sql1="SELECT * FROM Noticias where ID = 1";

                            $query2 = mysqli_query($conexion,$sql1);

                            if (mysqli_num_rows($query2) > 0) {
                                while ($row = mysqli_fetch_assoc($query2)) {
                            ?>
                                    
                                    <span><?php echo $row['Noticia']; ?></span>
                                <?php
                                }
                            } else {
                                ?>
                                    <p>
                                        No hay noticas en este momento.
                                    </p>
                            <?php
                            }
                        ?>
                </p><br>
            </div>
            <div class="card-noticia-imagen">
                <?php
                            $conexion = mysqli_connect("localhost", "id20728174_ingenews1", "idke28_A", "id20728174_ingenews");

                             $sql1="SELECT * FROM Noticias where ID = 1";

                            $query2 = mysqli_query($conexion,$sql1);

                            if (mysqli_num_rows($query2) > 0) {
                                while ($row = mysqli_fetch_assoc($query2)) {
                            ?>
                                    <img src="data:image/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>" alt"">
                                <?php
                                }
                            } else {
                                ?>
                                    <img src="../assets/Images/Imagen1.jpg">;
                            <?php
                            }
                        ?>
            </div>
            
        </div>
        <div class="card-noticia">
            <div class="card-noticia-texto">
                <h1>
                    <?php
                            $conexion = mysqli_connect("localhost", "id20728174_ingenews1", "idke28_A", "id20728174_ingenews");

                            $sql1="SELECT * FROM Noticias where ID = 2";

                            $query2 = mysqli_query($conexion,$sql1);

                            if (mysqli_num_rows($query2) > 0) {
                                while ($row = mysqli_fetch_assoc($query2)) {
                            ?>
                                    <span><?php echo $row['Titulo']; ?></span>
                                <?php
                                }
                            } else {
                                ?>
                                    <p>
                                        No hay noticas en este momento.
                                    </p>
                            <?php
                            }
                        ?>
                </h1><br>
                <h2>
                    <?php
                            $conexion = mysqli_connect("localhost", "id20728174_ingenews1", "idke28_A", "id20728174_ingenews");

                            $sql1="SELECT * FROM Noticias where ID = 2";

                            $query2 = mysqli_query($conexion,$sql1);

                            if (mysqli_num_rows($query2) > 0) {
                                while ($row = mysqli_fetch_assoc($query2)) {
                            ?>
                                    <span><?php echo $row['Subtitulo']; ?></span>
                                <?php
                                }
                            } else {
                                ?>
                                    <p>
                                        No hay noticas en este momento.
                                    </p>
                            <?php
                            }
                        ?>
                </h2><br>
                <p>
                    <?php
                            $conexion = mysqli_connect("localhost", "id20728174_ingenews1", "idke28_A", "id20728174_ingenews");

                            $sql1="SELECT * FROM Noticias where ID = 2";

                            $query2 = mysqli_query($conexion,$sql1);

                            if (mysqli_num_rows($query2) > 0) {
                                while ($row = mysqli_fetch_assoc($query2)) {
                            ?>
                                    <span><?php echo $row['Noticia']; ?></span>
                                <?php
                                }
                            } else {
                                ?>
                                    <p>
                                        No hay noticas en este momento.
                                    </p>
                            <?php
                            }
                        ?>
                </p><br>
            </div>
            <div class="card-noticia-imagen">
                <?php
                            $conexion = mysqli_connect("localhost", "id20728174_ingenews1", "idke28_A", "id20728174_ingenews");

                             $sql1="SELECT * FROM Noticias where ID = 2";

                            $query2 = mysqli_query($conexion,$sql1);

                            if (mysqli_num_rows($query2) > 0) {
                                while ($row = mysqli_fetch_assoc($query2)) {
                            ?>
                                    <img class="port" src="data:image/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>">
                                <?php
                                }
                            } else {
                                ?>
                                    <img class="port" src="../assets/Images/Imagen1.jpg">
                            <?php
                            }
                        ?>
            </div>
            
        </div>
        <div class="card-noticia">
            <div class="card-noticia-texto">
                <h1>
                    <?php
                            $conexion = mysqli_connect("localhost", "id20728174_ingenews1", "idke28_A", "id20728174_ingenews");

                            $sql1="SELECT * FROM Noticias where ID = 3";

                            $query2 = mysqli_query($conexion,$sql1);

                            if (mysqli_num_rows($query2) > 0) {
                                while ($row = mysqli_fetch_assoc($query2)) {
                            ?>
                                    <span><?php echo $row['Titulo']; ?></span>
                                <?php
                                }
                            } else {
                                ?>
                                    <p>
                                        No hay noticas en este momento.
                                    </p>
                            <?php
                            }
                        ?>
                </h1><br>
                <h2>
                    <?php
                            $conexion = mysqli_connect("localhost", "id20728174_ingenews1", "idke28_A", "id20728174_ingenews");

                            $sql1="SELECT * FROM Noticias where ID = 3";

                            $query2 = mysqli_query($conexion,$sql1);

                            if (mysqli_num_rows($query2) > 0) {
                                while ($row = mysqli_fetch_assoc($query2)) {
                            ?>
                                    <span><?php echo $row['Subtitulo']; ?></span>
                                <?php
                                }
                            } else {
                                ?>
                                    <p>
                                        No hay noticas en este momento.
                                    </p>
                            <?php
                            }
                        ?>
                </h2><br>
                <p>
                    <?php
                            $conexion = mysqli_connect("localhost", "id20728174_ingenews1", "idke28_A", "id20728174_ingenews");

                            $sql1="SELECT * FROM Noticias where ID = 3";

                            $query2 = mysqli_query($conexion,$sql1);

                            if (mysqli_num_rows($query2) > 0) {
                                while ($row = mysqli_fetch_assoc($query2)) {
                            ?>
                                    <span><?php echo $row['Noticia']; ?></span>
                                <?php
                                }
                            } else {
                                ?>
                                    <p>
                                        No hay noticas en este momento.
                                    </p>
                            <?php
                            }
                        ?>
                </p><br>
            </div>
            <div class="card-noticia-imagen">
                <?php
                            $conexion = mysqli_connect("localhost", "id20728174_ingenews1", "idke28_A", "id20728174_ingenews");

                             $sql1="SELECT * FROM Noticias where ID = 3";

                            $query2 = mysqli_query($conexion,$sql1);

                            if (mysqli_num_rows($query2) > 0) {
                                while ($row = mysqli_fetch_assoc($query2)) {
                            ?>
                                    <img class="port" src="data:image/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>">
                                <?php
                                }
                            } else {
                                ?>
                                    <img class="port" src="../assets/Images/Imagen1.jpg">
                            <?php
                            }
                        ?>
            </div>
            
        </div>
    </section>
</body>
</html>