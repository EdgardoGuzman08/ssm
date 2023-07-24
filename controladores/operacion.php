<?php
// controlador/operacion.php

// Incluye el archivo de configuración de la base de datos
require_once "configuraciones/database.php";
// Incluye el archivo del modelo
require_once "modelos/OperacionModel.php";
// Crea una instancia del modelo
$operacionModel = new OperacionModel($conexion);

// Obtener el último ID insertado en la tabla
$ultimoId = $operacionModel->obtenerUltimoId();
// Incrementar el último ID en 1
$nuevoId = intval($ultimoId) + 1;
// Formatear el ID con ceros a la izquierda
$id = str_pad($nuevoId, 5, '0', STR_PAD_LEFT);


// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los datos del formulario
    $area = $_POST["area"];
    $fecha = $_POST["fecha"];
    $fechaValida = date('Y-m-d', strtotime($fecha));

    if ($fechaValida === false) {
        // La fecha no es válida, muestra un mensaje de error o realiza alguna acción
        echo "La fecha proporcionada no es válida";
        exit();
    }
    $lineaEquipo = $_POST["linea_equipo"];
    $autor = $_POST["autor"];
    $noEmpl = $_POST["no_empl"];
    $sintomaAveria = $_POST["sintoma"];
    $descripcionTrabajo = $_POST["descripcion"];
    $departamento = $_POST["departamento"]; // Convertir array a cadena separada por comas
    $prioridad = $_POST["prioridad"]; 
    $noOt = $_POST["no_ot"];
    $noSt = $_POST["no_st"];

    // Llamada a la función del modelo para insertar los datos
    $resultado = $operacionModel->insertarOperacion($id, $area, $fechaValida, $lineaEquipo, $autor, $noEmpl, $sintomaAveria, $descripcionTrabajo, $departamento, $prioridad, $noOt, $noSt);

    // Verificar el resultado y realizar acciones en consecuencia
    if ($resultado) {
        echo "<script>alert('Error no se ha guardado'); window.location.href = 'http://localhost/operacionphp/';</script>";
        exit();
    } else {
        echo "<script>alert('Se ha guardado exitosamente'); window.location.href = 'http://localhost/operacionphp/';</script>";
        exit();
    }
    
}
?>
