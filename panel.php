<?php

  include './templates/header.php';
  
  if (!$userController->isUserLoggedIn()) {
    header('Location: login.php');
  }

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="templates/style_login.css">
  </head>
<body>

    <?php include './templates/nav.php' ?>

    <div class="container">        
        <h3>Panel de usuario</h3><hr />
      <div class="container-login mb-5 text-center">
        <button class="btn-primary" onclick="window.location='curruculum.php'">Hoja de vida</button>
      </div>
    </div>
    
</body>
</html>