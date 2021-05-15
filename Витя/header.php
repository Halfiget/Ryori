<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Disk-kiss</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<header>
		<div class="header">
			<div class="title">
				<a href="index.php">
					<h1>Disk-kiss</h1>
				</a>
			</div>
			<div class="navigation">
				<a href="#">
					<h2>Подать заявление</h2>
				</a>
				<a href="#">
					<h2>О нас</h2>
				</a>
				<?php

				if ($_SESSION['auth'] == true) {
					echo '<h2><a href="profile.php">Профиль</a></h2>';
				} else {
					echo '<h2><a href="aut.php">Вход</a></h2>';
				}
				?>
			</div>
		</div>
	</header>
</body>