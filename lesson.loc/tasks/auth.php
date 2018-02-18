<?php 
$host = 'localhost'; // адрес сервера 
$database = 'Users'; // имя базы данных
$user = 'mysql'; // имя пользователя
$password = 'mysql'; // пароль
$db = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
 ?>