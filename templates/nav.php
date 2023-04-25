<link rel="stylesheet" href="style_login.css">
<nav class="navbar navbar-expand-sm mb-2 mt-5" >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">     
    </ul>
    <ul class="navbar-nav mx-auto my-auto">
      <?php if ($userController->isUserLoggedIn()): ?>
        <li class="nav-item active ">
          <a class="nav-link text-center" href="panelSecondfactor.php">Segundo Factor<span class="sr-only"></span></a>
        </li> 
        <li class="nav-item active " >
          <a class="nav-link text-center" href="panel.php"><?= $_SESSION['email'] ?> <span class="sr-only"></span></a>
        </li>
        <li class="nav-item active ">
          <a class="nav-link text-center" href="api/logout.php" >Cerrar Sesión<span class="sr-only"></span></a>
        </li>              
      <?php else: ?>
        <li class="nav-item active ">
          <a class="nav-link text-center" href="register.php" >Registrarse<span class="sr-only"></span></a>
        </li>
        <li class="nav-item active " >
          <a class="nav-link text-center" href="login.php" >Iniciar Sesión<span class="sr-only"></span></a>
        </li>   
      <?php endif; ?>   
    </ul>    
  </div>
</nav>