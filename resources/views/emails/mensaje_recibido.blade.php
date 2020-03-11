<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Email</title>
</head>
<body>
	<!--nombre del usuario que envio formulario. Este es el correo que llegará al dueño del sitio web cuando alguien rellena un formulario-->
	<p><strong>Recibiste un mensaje de</strong> {{ $email['nombre'] }} - {{ $email['email'] }}</p>
	<p><strong>Asunto: </strong> {{ $email['asunto'] }} </p>
	<p><strong>Contenido: </strong> {{ $email['content'] }}</p>

</body>
</html>