<?php

// index.php
require_once "configuraciones/database.php";

// Incluye el archivo del controlador
require_once "controladores/operacion.php";
require_once "modelos/OperacionModel.php";

// Obtiene la URL actual
require_once 'vistas/formulario.php';

//$url = $_SERVER['REQUEST_URI'];

// Verifica la URL para determinar la ruta a cargar
//if ($url === '/operacionphp/exportar') {
    // Cargar la vista exportar.php
    //require_once 'vistas/exportar.php';
//} else {
    // Cargar la vista formulario.php por defecto
//    require_once 'vistas/formulario.php';
//}*
?>

