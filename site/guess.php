<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Угадайка Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css">

		<script type="text/javascript">

			var answer = parseInt(Math.random()*100);
			var max_try = 5;
			var try_count = 0;

			function readInt(){
				return +document.getElementById("userAnswer").value;
			}

			function write(text){
				document.getElementById("info").innerHTML = text;
			}

			function hide(id){
				document.getElementById(id).style.display = "none";
			}

			function guess(){		
				var userAnswer = readInt();
					if(try_count < max_try){
						if(userAnswer == answer){
						write("Поздравляю, вы угадали!");
						hide("userAnswer");
						hide("start");
						}
						else if (userAnswer < answer){
							try_count++;
							write("Введенное число <b> меньше </b> загаданного! Попыток осталось: " + (max_try - try_count));

						}
						else if (userAnswer > answer){
							try_count++;
							write("Введенное число <b> больше </b> загаданного! Попыток осталось: " + (max_try - try_count));
							
						}
					}
					else {
						write("Попытки закончились. Вы проиграли.");
						hide("userAnswer");
						hide("start");
					}
					
			}
		</script>

</head>
<body>

<div class="content">
	<?php
		include "menu.php";
	?>

<div class="contentWrap">
	<div class="content">
		<div class="center">

			<h1>Игра Угадайка</h1>
			<h3>Правила: Угадайте число от 0 до 100 </h3>

			<div class="box">

				<p id="info"> Введите число и нажмите кнопку Начать </p>
				<input type="text" id="userAnswer">
				<br>
								
				<a href="#" onClick="guess();" id="start"> Начать </a>
				
				
			</div>			
		</div>
	</div>
</div>
</div>

<div class="footer"> 
	Copyright &copy; <?php echo date("Y");?> Черепаха Черепахова 
</div>	


</body>
</html>