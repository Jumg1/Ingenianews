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
    <link rel="stylesheet" href="../CSS/home.css">
    <title>Periodico para Inges</title>
</head>
<body>
    <header>
        <h3>
            <a href="">Periodico para Inges</a> 
        </h3>
    </header>
    <section class="main-screen">
        <div>
            <h1>
                Periodico para Inges
            </h1>
            <h2>
                El periódico digital para los ingenieros del mañana
            </h2>
        </div>
        <div>
            <nav>
                <ul>
                    <li>
                        <a href="noticias.php">Noticias <img src="./assets/Icons/arrow_forward_FILL0_wght400_GRAD0_opsz48.svg" alt=""></a> 
                    </li>
                    <li>
                        <a href="infon1.php">Información Noticias <img src="./assets/Icons/arrow_forward_FILL0_wght400_GRAD0_opsz48.svg" alt=""></a> 
                    </li>
                    <li>
                        <a href="publicar-noticia.php">Publicar Noticias <img src="./assets/Icons/arrow_forward_FILL0_wght400_GRAD0_opsz48.svg" alt=""></a> 
                    </li>
                    <li>
                        <a href="infou1.php">Información usuarios <img src="./assets/Icons/arrow_forward_FILL0_wght400_GRAD0_opsz48.svg" alt=""></a> 
                    </li>
                    <li>
                        <a href="registro.php">Registrar usuarios <img src="./assets/Icons/arrow_forward_FILL0_wght400_GRAD0_opsz48.svg" alt=""></a> 
                    </li>
                    <li>
                        <a href="chat.php">Chat administradores <img src="./assets/Icons/arrow_forward_FILL0_wght400_GRAD0_opsz48.svg" alt=""></a> 
                    </li>
                    <li>
                        <a href="cerrar.php">Cerrar Sesión <img src="./assets/Icons/arrow_forward_FILL0_wght400_GRAD0_opsz48.svg" alt=""></a> 
                    </li>
                </ul>
            </nav>
        </div>
    </section>
</body>
</html>