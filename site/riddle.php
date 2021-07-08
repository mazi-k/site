<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Загадки Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css">
	
</head>
<body>

<div class="content">
	<?php
		include "menu.php";
	?>

<div class="contentWrap">
	<div class="content">
		<div class="center">

			<h1>Игра в загадки</h1>

			<div class="box">
				<?php
					$ans_count = 0;
					if(isset($_GET['user_answer1']) && isset($_GET['user_answer2']) && isset($_GET['user_answer3'])){
						$userAnswer1 = $_GET["user_answer1"];
						if($userAnswer1 == "яблоко" || $userAnswer1 == "вишня"){
							$ans_count++;
						}

						$userAnswer2 = $_GET["user_answer2"];
						if($userAnswer2 == "молоко" || $userAnswer2 == "сливки"){
							$ans_count++;
						}

						$userAnswer3 = $_GET["user_answer3"];
						if($userAnswer3 == "комета" || $userAnswer3 == "ракета"){
							$ans_count++;
						}

						echo "Вы отгадали загадок: " . $ans_count;
					}

				?>


				<form method="GET">
					<p> Белым цветёт, зелёным висит, красным падает. </p>
					<input type="text" name="user_answer1">

					<p> Не снег, а белое всегда. Хоть и течет, а не вода. </p>
					<input type="text" name="user_answer2">

					<p> Сверкая огромным хвостом в темноте, <br> Несется среди ярких звезд в пустоте, <br> Она не звезда, не планета, <br> Загадка Вселенной… </p>
					<input type="text" name="user_answer3">

					<br>
					<input type="submit" value="Ответить" name="">
				</form>
				
			</div>			
		</div>
	</div>
</div>


	




</div>

<div class="footer"> 
	Copyright &copy;  <?php echo date("Y");?> Черепаха Черепахова 
</div>	


</body>
</html>