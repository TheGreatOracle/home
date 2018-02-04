<?php session_start();
	if(isset($_POST['login'])){
		$name = $_POST['login'];
		$pass = $_POST['pass'];
		$pass = sha1($pass);
		$check = sha1(1111);
			if($pass == $check){
			$_SESSION['auth'] = 1;
			header('Location: http://lesson.loc/auth.php');
		}
		else{
			echo "НЕВЕРНО ТЫ НЕ ЛЕЙТЕНАНТ";
		}
	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="index.php" method="post">
		<input type="text" name="login" placeholder="login"> <br>
		<input type="password" name="pass" placeholder="password"> <br>
		<input type="submit" value="Увійти">

	</form> 
</body>
</html>