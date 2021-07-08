<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Генератор случайных паролей</title>
	<link rel="stylesheet" href="style.css">

	<script type="text/javascript">

		var symbols = ["1","2","3","4","5","6","7","8","9","0","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
		var max = 36;

		function getRandomNumber(max){
			return Math.round(Math.random()*max);
		}

		function randomCase(symbol){
			var k = getRandomNumber(1);
			if(k == 0){
				return symbol.toLowerCase();
			}
			else
				return symbol;
		}

		function write(text){
			document.getElementById("info").innerHTML = text;
		}

		function hide(id){
			document.getElementById(id).style.display = "none";
		}

		function generate(){
			var password = "";
			var length = +document.getElementById("length").value;
			for(var i = 0; i < length; i++){
				var n = getRandomNumber(max - 1);
				var temp = randomCase(symbols[n]);
				password += temp;
			}

			write("Ваш пароль: " + password);
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

			<h1>Генератор случайных паролей</h1>

			<div class="box">

				<p id="info"> Введите требуемую длину пароля и нажмите кнопку Сгенерировать </p>

				<input type="text" id="length">
				<br>
				<a href="#" onClick="generate();" id="start"> Сгенерировать </a>
								
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