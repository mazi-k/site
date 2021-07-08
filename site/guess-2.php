<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Угадайка Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css">

	<script type="text/javascript">

		var answer = parseInt(Math.random()*100);
		var current_name = 0;
		var name1 = 0;
		var name2 = 0;

		function readInt(){
			return +document.getElementById("userAnswer").value;
		}

		function write(text){
			document.getElementById("info").innerHTML = text;
		}

		function hide(id){
			document.getElementById(id).style.display = "none";
		}

		function ask(){
			name1 = prompt("Введите имя первого игрока:");
			name2 = prompt("Введите имя второго игрока:");
			hide("names");
			write("Введите число и нажмите кнопку Начать")
			
		}

		function guess(){		
			var userAnswer = readInt();
			var next_name = 0;

				if(current_name == name1){
					current_name = name2;
					next_name = name1;
				}
				else if (current_name == name2){
					current_name = name1;
					next_name = name2;
				}
				else {
					current_name = name1;
					next_name = name2;					
				}

				if(userAnswer == answer){
					write("Поздравляю, " + current_name + ", вы угадали!");
					hide("userAnswer");
					hide("start");
				}
				else if (userAnswer < answer)
					write(current_name + ", введенное число <b> меньше </b> загаданного!  "+ next_name + ", ваша очередь");
				else if (userAnswer > answer)
					write(current_name + ", введенное число <b> больше </b>загаданного! "+ next_name + ", ваша очередь");
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

			<h1>Игра Угадайка для двух игроков</h1>
			<h3>Правила: Угадайте число от 0 до 100 </h3>

			<div class="box">

				<p id="info"> Нажмите кнопку Игроки </p>
				<input type="text" id="userAnswer">
				<br>
				<a href="#" onClick="ask();" id="names"> Игроки </a>
								
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