<?php include('librerias/dbConnector.php') ?>
<!DOCTYPE html>
 
<html lang="es">
 
  	<head>
  	<title>Busqueda</title>
  	<meta charset="UTF-8"/>
  	</head>
   
  	<body background="pictures/back.jpg">
      	<header>
        <h1>Community Music</h1>
        <p>La pagina web de música hecha para todos</p>
      	</header>
        <form action="search.php" method="post">
          <input type="text" name="buscador" placeholder="Busca lo que quieras" required="required">
          <button type="submit">Buscar</button>
        </form>
        <section>
          
          <?php
          	echo '<h5>Resultados de su busqueda: '.$_POST['buscador'].'</h5>';

     
            
            $dataBaseName = 'Community_Music';
            //Generar una conexion con la db, usando la function connectDB
            $conexion = connectDB($dataBaseName);

            //Defino la consulta/query
            $sql = 'SELECT link FROM songs WHERE nombre ="'.$_POST['buscador'].'"';

            $resultadoConsulta = $conexion->query($sql);
            $row = $resultadoConsulta->fetchAll();
            
            
            foreach ($row as $registro) {
              
              echo '<iframe width="50%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url='.$registro['link'].'&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=false&show_reposts=false&show_teaser=false&visual=true"></iframe>';
            }

    

          ?>

        </section>
        <h6>¿No encuentras lo que buscas? Añade una canción<a href="solicity.php"></a></h6>
        

  	</body>

  	<h6>Víctor Pérez Cano</h6>
  	<h6>Proyecto para bases de datos 2018-1</h6>
  	<h6>¿Algún problema o sugerencia? Contactame via <a href="https://t.me/Manuelcanno">Telegram</a></h6>
	
</html>