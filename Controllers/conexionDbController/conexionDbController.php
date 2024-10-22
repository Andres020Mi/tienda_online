<?php


require_once("models/conexionDbModel.php");

class ConexionCtr{
     public static function conexion(){
       $conexion  = ConexionMdl::conexion();
       return $conexion;
     }
}


?>