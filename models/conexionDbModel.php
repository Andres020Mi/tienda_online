<?php

class ConexionMdl
{

    // Declaramos las propiedades estáticas
    private static $host = "localhost";
    private static $port = "3306";
    private static $dbname = "online_store";
    private static $username = "root";
    private static $password = "";

    // Método estático de conexión
    public static function conexion()
    {

        // Crear la cadena DSN
        $dsn = "mysql:host=" . self::$host . ";port=" . self::$port . ";dbname=" . self::$dbname;

        // Crear la conexión PDO
        $cnx = new PDO($dsn, self::$username, self::$password);

        return $cnx;
    }
}
