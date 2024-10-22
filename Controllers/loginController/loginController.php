<?php

require_once("Controllers/conexionDbController/conexionDbController.php");

class Login
{
    public static function register()
    {
        if (isset($_POST["rol_register"])) {
            // Recoger los datos del formulario
            $rol = $_POST["rol_register"];
            $name = $_POST["name_register"];
            $email = $_POST["email_register"];
            $phone = $_POST["phone_register"];
            $password = $_POST["password_register"];
            $age = $_POST["age_register"];

            // Conexión a la base de datos
            $conexion = ConexionCtr::conexion();

            // Consulta SQL con marcadores de posición nombrados
            $sql = "INSERT INTO $rol (name, email, phone, password, age, money) 
                    VALUES (:name, :email, :phone, :password, :age, :money)";
    
            // Preparar la consulta
            $stmt = $conexion->prepare($sql);

            // Ejecutar la consulta con los parámetros
            $stmt->execute([
                ':name' => $name,
                ':email' => $email,
                ':phone' => $phone,
                ':password' => password_hash($password, PASSWORD_BCRYPT), // Encriptar la contraseña
                ':age' => $age,
                ':money' => 0 // Inicializa con 0 dinero
            ]);
        }

        

    }


    public static function authenticate()
{
    
    if (isset($_POST["email_authenTicate"]) && isset($_POST["password_authenTicate"])) {
        
        $email = $_POST["email_authenTicate"];
        $password = $_POST["password_authenTicate"];
        
        // Conexión a la base de datos
        $conexion = ConexionCtr::conexion();

        // Consulta para verificar si el usuario existe
        $sql = "SELECT * FROM buyers WHERE email = :email
                UNION
                SELECT * FROM sellers WHERE email = :email";
        
        // Preparar la consulta
        $stmt = $conexion->prepare($sql);
        
        // Ejecutar la consulta con el parámetro
        $stmt->execute([':email' => $email]);
        
        // Verificar si se encontró un usuario
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($user) {
            // Verificar la contraseña
            if (password_verify($password, $user['password'])) {
                // Autenticación exitosa
                // Aquí puedes iniciar sesión, guardar el estado de sesión o redirigir al usuario
                
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_role'] = $user['role']; // Asegúrate de tener un campo 'role' en tu tabla
                $_SESSION['user_name'] = $user["name"];
                header("Location: inicio"); // Redirige a la página principal después de iniciar sesión
                exit();
            } else {
                // Contraseña incorrecta
                echo "La contraseña es incorrecta.";
            }
        } else {
            // Usuario no encontrado
            echo "No se encontró ningún usuario con ese correo electrónico.";
        }
    }
}

    
}

