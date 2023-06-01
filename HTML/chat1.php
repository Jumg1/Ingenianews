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
    
    $sql = "SELECT * FROM `Chat`";

  $query = mysqli_query($conexion, $sql);
  }
?>
<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">   
    <link rel="icon" type="image/jpg" href="empresa.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
  <meta http-equiv="refresh" content="20"> 
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Comme:wght@100;200;300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

/* font-family: 'Comme', sans-serif; */
/* font-family: 'Playfair Display', serif; */


* {
    box-sizing: border-box;
    font-family: 'Comme', sans-serif;
    padding: 0;
    margin: 0;
}

h1 {
    font-family: 'Playfair Display', serif;
    font-size: 6vw;
}

a {
    text-decoration: none;
}

h3 a {
    font-size: 1.6vw;
    font-family: 'Playfair Display', serif;
    text-decoration: none;
    font-weight: 800;
    color: #000;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 2vw;
    border-bottom: 0.2vw solid #000;
}

.boton {
    background-color: #ebebeb;
    padding: 1vw 2vw;
    color: #000;
}

      .chat {
  width: 1000px;
  height: 500px;
  margin: 50px;
  margin-left: 250px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-family: Arial, sans-serif;
}

.chat-header {
  background-color: #f1f1f1;
  text-align: center;
  padding: 10px;
  border-bottom: 1px solid #ccc;
}

.chat-header h2 {
  margin: 0;
  font-size: 18px;
}

.chat-messages {
  height: 400px;
  overflow-y: scroll;
  padding: 10px;
}

.message {
  display: flex;
  margin-bottom: 10px;
}

.message-sender {
  width: 200px;
  text-align: center;
}

.message-text {
  background-color: #f1f1f1;
  padding: 5px;
  border-radius: 5px;
  max-width: 775px;
}

.chat-input {
  display: flex;
  align-items: center;
  padding: 10px;
}

.chat-input form input[type="text"] {
  flex: 1;
  padding: 5px;
  border-radius: 5px;
  border: none;
  margin-right: 10px;
  width: 870px;
}

.chat-input button {
  background-color: #008CBA;
  color: white;
  border: none;
  border-radius: 5px;
  padding: 5px 10px;
  cursor: pointer;
}
  </style>
  <!-- para refrescar la pagina-->
  <script>
    $(document).ready(function() {
      // Set trigger and container variables
      var trigger = $('.container .display-chat '),
        container = $('#content');

      // Fire on click
      trigger.on('click', function() {
        // Set $this for re-use. Set target from data attribute
        var $this = $(this),
          target = $this.data('target');

        // Load target page into container
        container.load(target + '.php');

        // Stop normal link behavior
        return false;
      });
    });
  </script>
  <title>Chat administradores</title>
</head>
<body>
    <header>
        <h3>
            <a href="index2.php">Periodico para Inges</a> 
        </h3>
        <a href="./noticias2.php" class="boton">Noticias</a>
        <a href="./infon2.php" class="boton">Información Noticias</a>
        <a href="./publicar-noticia2.php" class="boton">Publicar noticia</a>
        <a href="./infou2.php" class="boton">Información usuarios</a>
        <a href="./registro2.php" class="boton">Registrar usuarios</a>
        <a href="./cerrar.php" class="boton">Cerrar Sesión</a>
    </header>
   <div class="chat">
      <div class="chat-header">
        <h2>Chat de administradores</h2>
      </div>
      <div class="chat-messages">
          <?php
            if (mysqli_num_rows($query) > 0) {
              while ($row = mysqli_fetch_assoc($query)) {
            ?>
                <div class="message">
                  <div class="message-sender">
                    <p>
                        <?php echo $row['Nombre']; ?> :
                    </p>
                  </div>
                  <div class="message-text">
                    <p><?php echo $row['Mensaje']; ?></p>
                  </div>
                </div>
              <?php
              }
            } else {
              ?>
              <div class="bg-white p-6 w-120 rounded-3xl rounded-bl-none shadow-sm mb-2">
                <p>
                  No hay ninguna conversación previa.
                </p>
              </div>
            <?php
            }
            ?>
        </div>
      
      <div class="chat-input">
        <form method="post" action="chath.php" >
        <input type="text" placeholder="Escribe un mensaje..." name="msg1">
        <button type="submit">Enviar</button>
        </form>
      </div>
    </div>
</body>
</html>
