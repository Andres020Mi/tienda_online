<?php





// Obtener la vairbale url;
$url = $_GET["url"];

// En caso de que no exita un url enviada
if($url == null){
    header("location: inicio");
    
}

$url_validas = [
    "inicio",
    "error404"
];




// Verificar que la peticion se encunetra entre la rutas validas

for ($i=0; $i < count($url_validas); $i++) { 
    if($url == $url_validas[$i] ){
        $url_valida = true;
        break; 
    }else{
        $url_valida = false;
    }
}


// ruta hacia las vistas

$ruta_vistas = "view/";

// EN caso de que la url no sea valida se envia a error 404 pero si es valida trae la vista para mostrarla
if($url_valida){
        $ruta_vistas = $ruta_vistas . $url . "/index.php";
}else{
    $ruta_vistas = $ruta_vistas . "error404" . "/index.php" ;
}

require_once($ruta_vistas);








