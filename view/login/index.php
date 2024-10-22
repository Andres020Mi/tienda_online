<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="view/login/style.css">
</head>

<body>
    <?php

    require_once("Controllers/loginController/loginController.php");

    
    ?>
    <div class="alerta">
        <?php
        login::register();
        login::authenticate();
        ?>
    </div>
    <?php
    

    if (isset($_GET["form"])) {

    ?>

        <div class="container-register">
            <form action="" method="post">


                <label for="">name</label>
                <input type="name" require name="name_register">

                <label for="">Email</label>
                <input type="email" require name="email_register">


                
                <label for="">Telefono</label>
                <input type="number" require name="phone_register">



                
                <label for="">Edad</label>
                <input type="age" require name="age_register">


                <label for="tipo_usuario">Selecciona el tipo de usuario:</label>
                <select name="rol_register" id="tipo_usuario" required>
                    <option value="buyers">Comprador</option>
                    <option value="sellers">Proveedor</option>
                </select>

                <label for="">password</label>
                <input type="text" require name="password_register">
                <a href="login">¿No tienes una cuenta?</a>
                <input type="submit" value="Registrarse">
            </form>
        </div>

    <?php

    } else {
    ?>

        <div class="container-login">
            <form action="" method="post">
                <label for="">Email</label>
                <input type="email" require name="email_authenTicate">

                <label for="">password</label>
                <input type="text" require name="password_authenTicate">
                <a href="login?form=register">¿Ya tienes una cuenta?</a>
                <input type="submit" value="Ingresar">
            </form>
        </div>
    <?php
    }

    ?>

</body>

</html>