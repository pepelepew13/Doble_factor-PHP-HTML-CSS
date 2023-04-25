<?php

  include './templates/header.php';
  
  if (!$userController->isUserLoggedIn()) {
    header('Location: login.php');
  }

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curruculum</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="templates/style_login.css">
  </head>
<body>
<?php include './templates/nav.php' ?>
    <div class="container">
        <table class="container-login m-3">
            <tr>
                <td>
                    <div class="Encabezado m-3 text-center">
                        <img src="img/foto.PNG" alt="Willyrex" class="foto m-3">
                    </div>
                </td>
                <td>
                    <div class="Encabezado m-3 text-center">
                    <h3 class="foto m-3 p-3">Hoja  de vida</h3>
                    </div>
                </td>
            </tr>
            <tr>
                <th>
                <div class="BarraLateral m-3 p-3 text-center">
                    <h3>Contacto</h3>
                    <p>+57 3196572788</p>
                    <p><?= $_SESSION['email'] ?> </p>
                    <p>Medellin, Colombia</p><br>
                    <h3>Estudios</h3>
                    <h7>Tecnico auxiliar en desarrollo de software</h7>
                    <p>Institucion educativa Federico ozanam</p>
                    <p>2019 -2021</p>
                    <h7>Semillero Quipux</h7>
                    <p>participacion en semillero Quipux</p>
                    <p>2020-2020</p>
                    <h7>Capacitacion MVM con enfasis en RPA</h7>
                    <p>Preparacion y capacitacon dirigida por MVM</p>
                    <p>2022-2022</p>
                    <h7>Tecnologia en desarrollo de software</h7>
                    <p>Institucion universitaria Pascual Bravo</p>
                    <p>2022 - ...</p>
                </div>
                </th>
                <th>
                    <div class="BarraLateral m-3 p-3 text-center">
                        <h3><?= $_SESSION['email']?> </h3>
                        <h3>Analista de ingenieria junior</h3>
                        <p>Soy un joven desarrollador de software que le apasiona la programacion, la innovacion y la creatividad, siempre me ha parecido increible lo que es posible con la programacion y siempre busco una forma de llevar mi mentalidad positiva a todo lugar al que voy.</p>
                        <h3>Experiencia</h3>
                        <p>Actualmente no cuento con experiencia laboral certificada, pero he estado en diferentes proyectos, los cuales son:</p>
                        <h3>Ganador reto HMV</h3>
                        <p>En el 2020 participe y gané el reto propuesto por hmv, el cual consistia en crear una solucion para calificar empleados de manera efectiva.</p>
                        <h3>Metaverso Cool & Dry</h3>
                        <p>Participe en la creacion de un espacio para Cool & Dry en el metaverso Cryptovoxels.</p>
                        <h3>Facilitador en evento de Argos</h3>
                        <p>He participado en eventos de argos como facilitador y jurado de votacion en el evento "Del metaverso a la realidad".</p>
                    </div>
                </th>
            </tr>
        </table>
    </div>
</body>
</html>
