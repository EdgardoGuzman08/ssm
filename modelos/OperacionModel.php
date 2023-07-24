<?php
// modelos/OperacionModel.php

class OperacionModel {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function obtenerUltimoId() {
        $query = "SELECT MAX(id) AS ultimoId FROM ssmoperacion";
        $result = $this->conexion->query($query);
        $row = $result->fetch(PDO::FETCH_ASSOC); // Utiliza fetch(PDO::FETCH_ASSOC) en lugar de fetch_assoc()
        $ultimoId = $row['ultimoId'];

        return $ultimoId;
    }

    public function insertarOperacion($id, $area, $fecha, $lineaEquipo, $autor, $noEmpl, $sintomaAveria, $descripcionTrabajo, $departamento, $prioridad, $noOt, $noSt) {
        $stmt = $this->conexion->prepare("INSERT INTO ssmoperacion (id, area, fecha, linea, autor, no_empl, sintoma_averia, descripcion_trabajo, departamento, prioridad, no_ot, no_st, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())");
    
        $stmt->bindParam(1, $id);
        $stmt->bindParam(2, $area);
        $stmt->bindParam(3, $fecha);
        $stmt->bindParam(4, $lineaEquipo);
        $stmt->bindParam(5, $autor);
        $stmt->bindParam(6, $noEmpl);
        $stmt->bindParam(7, $sintomaAveria);
        $stmt->bindParam(8, $descripcionTrabajo);
        $stmt->bindParam(9, $departamento);
        $stmt->bindParam(10, $prioridad);
        $stmt->bindParam(11, $noOt);
        $stmt->bindParam(12, $noSt);
    
        $stmt->execute();
    }
    
}
?>
