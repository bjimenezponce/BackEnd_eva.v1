<?php

// Datos de ejemplo para simular una base de datos
$categoria_servicio_data = ["id" => 1, "nombre" => "Categoria de Servicio"];
$info_contacto_data = ["id" => 1, "nombre" => "Info de Contacto"];
$historia_data = ["id" => 1, "titulo" => "Historia", "imagenes" => ["imagen1.jpg", "imagen2.jpg"]];
$pregunta_frecuente_data = ["id" => 1, "pregunta" => "¿Pregunta Frecuente?"];
$parcela_data = ["id" => 1, "tipo" => "Tipo de Parcela", "lote" => "Lote", "servicio" => "Servicio"];

// Función para enviar una respuesta JSON con el código de estado HTTP
function send_response($data, $status_code) {
    http_response_code($status_code);
    header('Content-Type: application/json');
    echo json_encode($data);
    exit;
}

// Endpoint para obtener la categoría de servicio
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['REQUEST_URI'] === '/categoria_servicio') {
    send_response($categoria_servicio_data, 200);
}

// Endpoint para obtener la información de contacto
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['REQUEST_URI'] === '/info_contacto') {
    send_response($info_contacto_data, 200);
}

// Endpoint para obtener la historia
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['REQUEST_URI'] === '/historia') {
    send_response($historia_data, 200);
}

// Endpoint para obtener la pregunta frecuente
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['REQUEST_URI'] === '/pregunta_frecuente') {
    send_response($pregunta_frecuente_data, 200);
}

// Endpoint para obtener la información de la parcela
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['REQUEST_URI'] === '/parcela') {
    send_response($parcela_data, 200);
}

// Si la solicitud no coincide con ninguno de los endpoints anteriores, devolver un error 404
send_response(["message" => "Endpoint no encontrado"], 404);
