    <?php

  include './templates/header.php';  
  
  if ($userController->isUserLoggedIn()) {
    header('Location: panel.php');
  }

  if(isset($_SESSION['isLoggedIn']) && !$_SESSION['isLoggedIn']) {
      $userController->logout();
  }

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="templates/style_login.css">
</head>
<body>

    <?php include './templates/nav.php' ?>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mx-auto">
                <h3>Iniciar Sesión</h3><hr/>
                <form id="loginForm" class="container-login mb-5 ">                   
                    <div class="form-group">
                        <label class="label" for="email" >Correo Electronico</label>
                        <input type="email" class="form-control" placeholder="Email" id="email">            
                    </div>
                    <div class="form-group">
                        <label class="label" for="password">Contraseña</label>
                        <input type="password" class="form-control" placeholder="Contraseña" id="password">
                    </div>      
                    <button type="submit" class="btn-primary">Ingresar</button>
                </form>
                <div class="alert alert-danger mt-4 d-none" id="errorMessage"></div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script>
        document.getElementById('loginForm').onsubmit = (e) => {
            e.preventDefault();

            const errorMessage = document.getElementById('errorMessage');
            errorMessage.classList.add('d-none');            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            if (!email || !password) {
                return;
            }

            axios.post('api/login.php', { email: email, password: password })
                .then(res => {
                    if (res.data.secondfactor) {
                        window.location = 'loginSecondFactor.php';
                    } else {
                        window.location = 'panel.php';
                    }              })
                .catch(err => {
                    errorMessage.innerText = err.response.data;
                    errorMessage.classList.remove('d-none');                    
                });

        }
    </script>


    
</body>
</html>


