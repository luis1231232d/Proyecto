<?php 
// Esto es para activar la visualización de errores en el servidor, por si los hubiese
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

$nombre = $_POST['nombre'];
$telefo = $_POST['telefo'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

// El from DEBE corresponder a una cuenta de correo real creada en el servidor
$headers = "From: lugaranza@gmail.com\r\n"; 
$headers .= "Reply-To: $correo\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n"; 
	
if(mail($correo, $nombre,$telefo , $mensaje, $headers)){
	echo "mail enviado";
	}else{
	$errorMessage = error_get_last()['mensaje'];
	echo $errorMessage;
}
?>



