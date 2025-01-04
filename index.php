<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Formulario:</title>
    <style>
        p {
            font-size: 30px;
            font-weight: bold; 
        }
    </style>
</head>
<body>

<p>Ingrese sus datos:</p>

<form action="guardar.php" method="POST">
    <label for="id">Item:</label>
    <input type="text" name="id" maxlength="10" required><br><br>

    <label for="codigo_int">Código Interno:</label>
    <input type="text" name="codigo_int" maxlength="4" required><br><br>

    <label for="serial">Serial:</label>
    <input type="text" name="serial" maxlength="15" required><br><br>

    <label for="office">Actualmente trabajas?: </label><br>
    <input type="radio" id="si" name="office" value="si" required>
    <label for="si">Sí</label>

    <input type="radio" id="no" name="office" value="no" required>
    <label for="no">No</label><br><br>

    <label for="cargo">Cargo: </label>
    <input type="text" name="cargo" maxlength="50"><br><br>

    <label for="tipo_equipo">Tipo de Equipo:</label>
    <input type="text" name="tipo_equipo" maxlength="50"><br><br>

    <label for="fecha_ingreso">Fecha de Ingreso:</label>
    <input type="date" name="fecha_ingreso" required><br><br>

    <label for="fecha_retiro">Fecha de Retiro:</label>
    <input type="date" name="fecha_retiro"><br><br>

    <label for="metodologia">Metodología:</label>
    <input type="text" name="metodologia" maxlength="15" required><br><br>

    <label for="cif">CIF:</label>
    <input type="text" name="cif" maxlength="1" required><br><br>

    <label for="documento_adscrito">Documento Adscrito:</label>
    <input type="text" name="documento_adscrito" required><br><br>

    <label for="nombre_1C">Primer Nombre:</label>
    <input type="text" name="nombre_1C" required><br><br>

    <label for="nombre_2C">Segundo Nombre:</label>
    <input type="text" name="nombre_2C"><br><br>

    <label for="apellido_1C">Primer Apellido:</label>
    <input type="text" name="apellido_1C" required><br><br>

    <label for="apellido_2C">Segundo Apellido:</label>
    <input type="text" name="apellido_2C"><br><br>

    <input type="submit" value="Guardar">
</form>

</body>
</html>
