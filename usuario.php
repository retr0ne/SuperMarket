<?php 
require 'database.php';
$db = conectarDB();

$nombre = "Bryan";
$apellidos = "Cortine";
$correo = "bryamcortine17@gmail.com";
$contraseña = "123";
$rol_id = 1;

$contraseñaHash = password_hash($contraseña, PASSWORD_DEFAULT);

$query = "INSERT INTO usuario (nombre, apellido, correo, contraseña, Rol_id) VALUES ('{$nombre}', '{$apellidos}', '{$correo}', '{$contraseñaHash}', '{$rol_id}');";

echo $query;

mysqli_query($db, $query);
?>