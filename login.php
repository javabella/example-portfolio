<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Авторизируйтесь ?_? Lena - pro-verstalka</title>

	<link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link rel="icon" type="image/x-icon" href="favicon.ico">

	<meta name="msapplication-TileColor" content="#da532c">

	<link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>
	<div class="wrapper">
		<div id="main" class="enter">
			<div class="layout">
				<div id="authoriz">
					<div class="block">
						<h1>Авторизируйтесь</h1>
						<form>
							<p>Логин</p>
							<div class="input-wrapper u-login">
								<input type="text" name="user-login" placeholder="Введите логин">
								<div class="tooltip">введите логин<div class="icon arrow to-right"></div></div>
							</div>
							
							<p class="pass">Пароль</p>
							<div class="input-wrapper u-pass">
								<input type="password" name="user-password" placeholder="Введите пароль">
								<div class="tooltip">введите пароль<div class="icon arrow to-right"></div></div>
							</div>
							
							<input class="btn big" type="submit" value="Войти">
						</form>
					</div>
				</div>		
			</div>
		</div>	
	
	
<?php include 'footer.php' ?>
<script src="js/valid.js"></script>