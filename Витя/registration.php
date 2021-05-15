<?php
    require_once('header.php');
?>

<div class="auto">
	<form class="reg-win" action="php/reg.php" method="POST">

		<h2>Регистрация</h2>
		<input type="text" name="login" required placeholder="Введите ваш логин">
        <input type="email" name="email" required placeholder="Введите вашу почту">
		<input type="password" name="pass" required placeholder="Введите ваш пароль">
        <input type="password" name="pass_repeat" required placeholder="Повторите пароль"><br>
        <div class="policy">
            <input type="checkbox" required class="reg_check">
        <p class="sogl">
            Нажимая галочку, вы соглашаетесь с обработкой персовнальных данных.
        </p>
        </div>
		<input class="reg_btn" type="submit" name="button" value="Зарегистрироваться">
		
	
	</form>

</div>