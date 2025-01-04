<?php

include('conexion.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $id = $_POST ['id'];
    $codigo_int = $_POST['codigo_int'];
    $serial = $_POST['serial'];
    $office = $_POST['office'];
    $cargo = $_POST['cargo'];
    $tipo_equipo = $_POST ['tipo_equipo'];
    $fecha_ingreso = $_POST['fecha_ingreso'];
    $fecha_retiro = $_POST['fecha_retiro'];
    $metodologia = $_POST['metodologia'];
    $cif = $_POST['cif'];
    $documento_adscrito = $_POST['documento_adscrito'];
    $nombre_1C = $_POST['nombre_1C'];
    $nombre_2C = $_POST['nombre_2C'];
    $apellido_1C = $_POST['apellido_1C'];
    $apellido_2C = $_POST['apellido_2C'];

    
    $sql = "INSERT INTO t_invetario (id, codigo_int, serial, office, cargo, tipo_equipo,fecha_ingreso, fecha_retiro, metodologia, cif, documento_adscrito, nombre_1C, nombre_2C, apellido_1C, apellido_2C)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)";

    
    $stmt = $conn->prepare($sql);

    
    $stmt->bind_param("sssssssssssssss", $id, $codigo_int, $serial, $office, $cargo, $tipo_equipo, $fecha_ingreso, $fecha_retiro, $metodologia, $cif, $documento_adscrito, $nombre_1C, $nombre_2C, $apellido_1C, $apellido_2C);

    
    if ($stmt->execute()) {
        echo "Datos guardados correctamente";
    } else {
        echo "Error al guardar los datos: " . $stmt->error;
    }

    
    $stmt->close();

   
    $conn->close();
}
?>
