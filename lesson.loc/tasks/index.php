<?php 
	include('auth.php');

	if(isset($_POST['login'])){
		$login = $_POST['login'];
		$passord = $_POST['password'];

		 // if( ){
		 // $sql = mysql_query( );
		// }
		// else{
			// echo "Логин или пароль введен неверно";
		// }

	}
 ?>


<!DOCTYPE html>
<html lang="eng">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
	<meta charset="utf-8">
	<title>Авторизация</title>
</head>
<body>
	<div class="op">
	<h1>Авторизация</h1>
	<form action="index.php" method="post"></form>
	<input type="text" name="login" placeholder="Логин"><br>
	<input type="password" name="password" placeholder="Пароль"><br>
	<input type="submit" name="">
	</div>
	<style>
		.op {
		position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%) 
		}
	</style>
</body>
</html>