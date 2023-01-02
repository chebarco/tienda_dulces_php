<?php

$nombreForm = $_POST['nombre'];
$apellidoForm = $_POST['apellido'];
$emailForm = $_POST['email'];
$mensajeForm = $_POST['mensaje'];

$mailEstilo = "Nombre: " . $nombreForm . "\r\n" . "Apellido: " . $apellidoForm
    . "\r\n" . "Email: " . $emailForm . "\r\n" . "Mensaje: " . $mensajeForm;

mail("ceciliabarco@gmail.com", "Mensaje",$mailEstilo);


$conexion = mysqli_connect('localhost', "root", "", "parcial-php") or exit("ERROR");

mysqli_query($conexion, "INSERT INTO Contacto VALUES (DEFAULT, '$nombreForm', '$apellidoForm', '$emailForm','$mensajeForm')");
mysqli_close($conexion);


header("Location: exito.php?")
;

?>