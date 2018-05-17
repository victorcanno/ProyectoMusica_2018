<?php include('librerias/dbConnector.php') ?>
<!DOCTYPE html>
 
<html lang="es">
 
  	<head>
      
    <meta charset="UTF-8"/>
  	<title>Community Music</title>

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
        <h4>¿Tienes cuenta? <a href="https://t.me/Manuelcanno">Inicia sesión o registrate</a></h4>
        
        <section>
          <h3>Recomendados por el desarrollador</h3>
          <?php
            
            $dataBaseName = 'Community_Music';
            //Generar una conexion con la db, usando la function connectDB
            $conexion = connectDB($dataBaseName);

            //Defino la consulta/query
            $sql = 'SELECT link FROM songs ORDER BY fecha ASC LIMIT 5';

            $resultadoConsulta = $conexion->query($sql);
            $row = $resultadoConsulta->fetchAll();
            
            foreach ($row as $registro) {
              
              echo '<iframe width="50%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url='.$registro['link'].'&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=false&show_reposts=false&show_teaser=false&visual=true"></iframe>';
            }

          ?>

        </section>
        <section>
          <h3>Recientemente añadidos</h3>
          <?php
            
            $dataBaseName = 'Community_Music';
            //Generar una conexion con la db, usando la function connectDB
            $conexion = connectDB($dataBaseName);

            //Defino la consulta/query
            $sql = 'SELECT link FROM songs ORDER BY fecha DESC LIMIT 5';

            $resultadoConsulta = $conexion->query($sql);
            $row = $resultadoConsulta->fetchAll();
            
            foreach ($row as $registro) {
              
              echo '<iframe width="50%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url='.$registro['link'].'&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=false&show_reposts=false&show_teaser=false&visual=true"></iframe>';
            }
            
            
          ?>

        </section>
      	<section>
         	<article>
            <h1>La pagina web aún está en desarrollo... ¡Disfruta!</h1>
            <p>Keyboard Cat</p>
            <iframe width="427" height="240" src="https://www.youtube.com/embed/J---aiyznGQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </article>
      	</section>
      	
  	</body>

  	<h6>Víctor Pérez Cano</h6>
  	<h6>Proyecto para bases de datos 2018-1</h6>
  	<h6>¿Algún problema o sugerencia? Contactame via <a href="https://t.me/Manuelcanno">Telegram</a></h6>
	
</html>