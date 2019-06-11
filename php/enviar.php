<?php
$sujeto = 'NUEVO lead desde Reaction Web'
$destino = "danielcu@alternet.com.mx"
$nombre = $_POST['first_name']
$correo = $_POST['email']
$contenido = "Nombre de lead: " . $nombre . "\nCorreo: " . $correo;
mail($destino,$sujeto,$contenido);
header("Location:gracias.html")
?>
