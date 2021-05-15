<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
     <link href="Style.css" rel="stylesheet" type="text/css"/>
     <link rel="stylesheet"  href="FontAwelsome/css/all.min.css">
     <link rel="stylesheet" type="text/css" href="sim-slider-styles.css">
     <link rel="shortcut icon" href="Images/icon.png" type="image/x-icon">
</head>
<body>

<div id="BG">


 <header>


    <div class="header">
    <div class="logo"><h1><a href="Index.php">Ryōri</a></div>


      <div class="Corzina">
      <h1><a href="Menu.php">Меню</a></h1>


      <h1><a href="AboutUs.php"> О нас</a></h1>
          <?php

          if ($_SESSION['role']==1){
            echo '<h1><a href="Admin.php" class="Registation">Админ</a></h1>';
          }
          else if($_SESSION['auth']==true){
              echo '<h1><a href="Profile.php" class="Registation">Профиль</a></h1>';

          }
          else{
              echo '<h1><a id="Registation" class="Registation"><i class="fas fa-door-open"></i> Вход</a></h1>';
          }
        ?>

      <h1><a href="Basket.php" ><i class="fas fa-shopping-basket"></i> Корзина</a></h1>

    </div>



</div>

 </header>

 <!--ВХОД -->
<div class="bg-reg">

<div class="container">



 <form action="login.php" method="post">
        <div class="title-reg">Вход</div>


        <div class="sub-container">



        <div class="form">
            <label class="label" >Электронная почта:</label>

        <input type="email" name="email" class="input">

        </div>


        <div class="form">
            <label class="label" >Пароль:</label>
        <input type="password" name="password" class="input" minlength="6" required>

        </div>


            <div class="Enter">
            <button type="sumbit"> Войти</button>
            </div>


         <div id="CloseEnter" class="a1">
            <button type="button" class="close"> Закрыть</button></div>



    <h4 class="Center">Нет аккаунта? Зарегистрируйтесь!</h4>

    <div class="Center">
            <button type="button" id="linkreg">Регистрация</button>
        </div>

</div>
</form>
</div>


 <!--ВХОД -->





<!--РЕГИСТРАЦИЯ -->


<div id="RegistationLink" class="container">



 <form action="Check.php" method="post">
        <div class="title-reg">Регистрация</div>


        <div class="sub-container">

        <div class="form">

            <label class="label" >Имя пользователя:</label>
            <input type="text" id="login" name="login" class="input" placeholder="Иван Иванов" required>

        </div>

        <div class="form">
            <label class="label"  >Электронная почта:</label>

        <input type="email" name="email" class="input" placeholder="Ivanov@gmail.com" required>

        </div>


        <div class="form">
            <label class="label" >Пароль:</label>
        <input type="password" name="password" class="input"  minlength="6" required>

        </div>

        <div class="form">
            <label class="label" >Повторите пароль:</label>
        <input type="password" name="password_return" class="input"  minlength="6" required>

        </div>
        <input type="checkbox" required>
        <p class="policy">Нажимая кнопку "галочку", Вы соглашаетесь
c условиями политики <a href="policy.php" target="_blank" class="policy-link" >конфиденциальности </a></p>




            <div class="b"><button type="sumbit"> Регистрация</button>
            </div>


         <div class="a">
        <button type="sumbit" id="CloseEnter1" class="close"> Закрыть</button></div>

    </div>
</form>

    </div>

</div>
    <script src="script.js"></script>

<!--РЕГИСТРАЦИЯ-->
