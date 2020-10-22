<?php 

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$destinatario = "jeissiton18@gmail.com";
$asunto = "Contacto desde nuestra pagina web";

$carta = "De: ". $nombre . "\ncorreo: " . $correo . "\nTelefono: " . $telefono . "\nmensaje: " . $mensaje;

mail($destinatario, $asunto, $carta);
header("location:index.html");
 ?>