<?php include('librerias/dbConnector.php') ?>
<!DOCTYPE html>
 
<html lang="es">
 
  	<head>
  	<title>Solicitud</title>
  	<meta charset="UTF-8"/>
  	</head>
   
  	<body background="pictures/back.jpg">

      	<header>
        <h1>Community Music</h1>
        <p>La pagina web de música hecha para todos</p>
      	</header>
        <h2>Agrega una canción</h2>
        <form action="solicity.php" method="post">
          <h3>Link<input type="text" name="link" required="required"></h3>
          <h3>Nombre<input type="text" name="nombre" required="required"></h3>
          <h3>Autor<input type="text" name="autor" required="required"></h3>
          <h3>Album<input type="text" name="album" required="required"></h3>

          <button type="submit">Añadir</button>
        </form>
          
          <?php
            
            $dataBaseName = 'Community_Music';
            //Generar una conexion con la db, usando la function connectDB
            $conexion = connectDB($dataBaseName);

            //Defino la consulta/query
            $sql = 'INSERT INTO songs(link,nombre,autor,album) VALUES ("'.$_POST['link'].'","'.$_POST['nombre'].'","'.$_POST['autor'].'","'.$_POST['album'].'")';

            $resultadoConsulta = $conexion->query($sql);

          ?>     

  	</body>

  	<h6>Víctor Pérez Cano</h6>
  	<h6>Proyecto para bases de datos 2018-1</h6>
  	<h6>¿Algún problema o sugerencia? Contactame via <a href="https://t.me/Manuelcanno">Telegram</a></h6>
	
</html>