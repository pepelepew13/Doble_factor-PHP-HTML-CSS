<?php
include './templates/header.php';

if ($userController->isUserLoggedIn()) {
    header('Location: panel.php');
  }

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="templates/style_login.css">
</head>

<body>

    <?php include './templates/nav.php' ?>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mx-auto">
                <h3>Nuevo Usuario</h3>
                <hr />
                <form id="registerForm" class="container-login mb-5">
                    <div class="form-group">
                        <label for="name" class="label" >Nombre</label>
                        <input type="text" class="form-control" placeholder="Nombre" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email" class="label" >Correo Electronico</label>
                        <input type="email" class="form-control" placeholder="Email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password" class="label" >Contraseña</label>
                        <input type="password" class="form-control" placeholder="Contraseña" id="password">
                    </div>
                    <button type="submit" class="btn-primary">Crear cuenta</button>
                </form>
                <div class="alert alert-danger mt-4 d-none" id="errorMessage"></div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script>
        document.getElementById('registerForm').onsubmit = (e) => {
            /**Prevenimos el comportamiento */
            e.preventDefault();

            /**Para Mostrar los Errores */
            const errorMessage = document.getElementById('errorMessage');
            errorMessage.classList.add('d-none');
            /**Obtenemos los valores */
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            /**Si no existen no enviamos el formulario */
            if (!email || !name || !password) {
                return;
            }

            /**Si existe usamos para enviar los datos por post  */
            axios.post('api/register.php', {
                    email: email,
                    name: name,
                    password: password
                })
                .then(res => {
                    window.location = 'panel.php';
                })
                .catch(err => {
                    errorMessage.innerText = err.response.data;
                    errorMessage.classList.remove('d-none');
                });

        }
    </script>

</body>

</html>