<?php
# Conexion a la base de datos
function conexion()
{
    try {
        $con = new PDO('mysql:host=localhost;dbname=intranet_prevencion', 'root', '');
    } catch (PDOException $e) {
        echo "Error en la conexion";
        exit;
    }
    return $con;
}
