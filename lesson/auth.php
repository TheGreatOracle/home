<?php
session_start();

if(!isset($_SESSION['auth'])){
	header('Location: http://lesson.loc/');
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Eto stranica zaschischena ot vsyakih Veler</h1>	
</body>
</html>