<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="content">
	<?php
		include "menu.php";
	?>

	<h1>Личный сайт студента GeekBrains</h1>

	<div class="center">
		<img src="img/image.png">
		<div class="box_text">
			<p>Добрый день! Меня зовут Черепаха Черепахова. Я написала свой первый сайт.</p>
			<p>В этом мне помог IT портал <a href="https://geekbrains.ru"> GeekBrains</a></p>
			<p>На этом сайте вы можете сыграть в несколько игр, которые я написала: 
			 <a href="riddle.php">Загадки</a> <a href="guess.php">Угадайка</a> <a href="guess-2.php">Угадайка для двух игроков</a>
			</p>

			<p>Или воспользоваться сервисом  
			 <a href="generator.php"> Генератор паролей</a>
			</p>

			<p>Надеюсь, вам понравится!</p>
		</div>	
	</div>
</div>



<div class="footer"> 
	Copyright &copy; <?php echo date("Y");?> Черепаха Черепахова 
</div>	


</body>
</html>