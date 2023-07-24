<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/estilos.css">
    <title>SSM</title>
</head>
<body>
    <div class="container">
        <table class="container-segundo">
            <tr>
                <td>
                    <img src="public/img/logo-01.png" alt="" class="logo">
                </td>
                <td>
                    <h2 class="principaltitulo">Solicitud SM</h2>
                </td>
                <td class="contenido">
                    <span>Codigo: PL-RH-P-DDD-DDD</span>
                    <hr>
                    <span>Version: 01</span>
                    <hr>
                    <span>Fecha: 21/08/2023</span>
                </td>
            </tr>
            <!-- Resto del contenido de la tabla -->
        </table>
        
        <form class="formulario" method="post" action="controladores/operacion" id="myForm">
            <label class="derecha1">N°.</label>
            <span class="derecha2" name="id"><?php echo $id; ?></span>
            <br>
            <br> 
            <label>Área:</label>
            <input type="text" name="area" class="area" required pattern="[A-Za-z\s]+" title="Solo se permiten letras">

            <label>Fecha:</label>
            <input type="date" name="fecha" class="fecha" required pattern="[A-Za-z\s]+" title="Solo se permiten letras"><br><br>

            <label>Linea / Equipo:</label>
            <input type="text" name="linea_equipo" class="linea_equipo" required pattern="[A-Za-z\s]+" title="Solo se permiten letras"><br><br>
<!--  -->
            <label>Autor:</label>
            <input type="text" name="autor" class="autor" required pattern="[A-Za-z\s]+" title="Solo se permiten letras">

            <label>No. EMPL:</label>
            <input type="text" name="no_empl" class="no_empl" required pattern="[0-9]+" title="Solo se permiten números"><br><br>

            <label>Síntoma de Avería:</label><br>
            <textarea name="sintoma" rows="4" class="sintoma" required pattern="[A-Za-z\s]+" title="Solo se permiten letras"></textarea><br><br>

            <label>Descripción del Trabajo:</label><br>
            <textarea name="descripcion" rows="4" class="descripcion" required pattern="[A-Za-z\s]+" title="Solo se permiten letras"></textarea><br><br>

            <div id="miFormulario">
                <div class="primercheck">
                    <label required>Departamento:</label><hr>
                    <div class="primercheckadentro">                    
                    <input type="radio" name="departamento" value="seguridad industrial">Seguridad Industrial
                    <input type="radio" name="departamento" value="produccion">Produccion
                    <input type="radio" name="departamento" value="administracion">Administracion <br>
                    <input type="radio" name="departamento" value="calidad">Calidad
                    <input type="radio" name="departamento" value="logistica">Logistica<br>
                    </div>
                </div>
                <br><br>
                <div class="segundocheck">
                    <label>Prioridades:</label><hr>
                    <div class="segundocheckadentro">
                    <input type="radio" name="prioridad" value="0-seguridad-industrial"> 0 = atendido por Seguridad Industrial <br>
                    <input type="radio" name="prioridad" value="1-reprogramado-segun-aplique"> 1 = atendido o reprogramado segun lo aplique <br>
                    <input type="radio" name="prioridad" value="5-atendido-por-inocuidad"> 5 = atendido por inocuidad 
                    </div>
                </div>
            </div>
                
            <h2 class="segundotitulo">Informacion Complementada por Mantenimiento</h2>
            <label>No. de OT:</label>
            <input type="text" name="no_ot" class="no_ot" required pattern="[0-9]+" title="Solo se permiten números"><br><br>

            <label>No. de ST:</label>
            <input type="text" name="no_st" class="no_st" required pattern="[0-9]+" title="Solo se permiten números"><br><br>

            <input type="submit" value="Enviar" >
        </form>
    </div>
</body>
<script src="public/js/script.js"></script>
</html>