<?php
	require_once('header.php');
?>




<div class="auto">
	<form class="auth-win" action="php/auth.php" method="POST">

		<h2>Вход</h2>
		<input type="text" name="login" required placeholder="Введите ваш логин">
		<input type="password" name="pass" required placeholder="Введите ваш пароль">
		<input class="voiti" type="submit" name="button" value="Войти">
		<p>
			Нет аккаунта?<a href="registration.php" class="auth_link"> Зарегитрируйтесь.</a>
		</p>
	
	</form>

</div>




