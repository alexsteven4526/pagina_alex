<?php
//Para ver los errores de envio
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
$para = $_POST['correo'];
$sujeto = "Email de atencion al cliente";

$nombre= $_POST['nombre'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$comentario = $_POST['comentario'];
$headers = "MIME-Version: 1.0". "\r\n";
$headers .= "Content-Type: text/html;charset=utf-8" ."\r\n";
$headers .= 'From: Almacen DELL  <alexcaisalitin11@gmail.con>'."\r\n";
$contenido = "
<html>
<body>
<p>El nombre del cliente es: ".$nombre."</p>
<p>El numero de telefono es: ".$telefono."</p>
<p>La direccion es: ".$direccion."</p>
<p>El Comentario es: ".$comentario."</p>
<p>Le saluda el Almacen DELL</p>
</body>
</html>
<
";

if(mail($para, $sujeto, $contenido, $headers))
	{
		header("Location: https://papeleriaotixela.000webhostapp.com/");  
			exit;
		echo"correo enviado correctamente";
	}

?>