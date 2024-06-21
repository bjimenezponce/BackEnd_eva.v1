<?php
$metodo = $_SERVER["REQUEST_METHOD"];
$ubicacion = $_SERVER["HTTP_HOST"];
$_path = $_SERVER["REQUEST_URI"];
$partes = explode ('/', $_path);
$_version = $partes[2];
$_mantenedor = $partes[3];
$_parametros = [];
$_parametros = $partes[4];

if (strlen($_parametros) > 0){
    
    $_parametros = explode ('?', $_parametros)[1];
    $_parametros = explode ('&', $_parametros);
}else{
    $_parametros = [];

}

header("Acces-Control-Allow-Origin: *");
header("Acces-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE");
header("Content-Type: application/json; charset=UTF-8");


$_header = null;
try {
    $_header = isset(getallheaders()['Authorization']) ? getallheaders()['Authorization'] : null;
    if ($_header === null) {
        throw new Exception("No tiene autorizacion");
    }
} catch (Exception $e) {
    http_response_code(401);
    echo json_encode(['Error' => $e->getMessage()]);
}

$_token_get = 'Bearer get';
$_token_post = 'Bearer post';
$_token_put = 'Bearer put';
$_token_patch = 'Bearer patch';
$_token_delete = 'Bearer delete';