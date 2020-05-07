<?php
// llamando a los campos
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];

// datos para el correo
$destinatario = "Ce29701332@gmail.com"
$asunto = "contacto desde nuestra web"

$carta = "De: $nombre \n";
$carta .= "Correo: $correo\n";
$carta .= "Telefono: $telefono\n";
$carta -= "Mensaje: $mensaje";


// enviando mensaje
mail($destinatario, $asunto, $carta);
header('location: C:\Users\luis\Desktop\DC Manualidades\resto\mensaje enviado.html')

?>