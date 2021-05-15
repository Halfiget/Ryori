<?php
session_start();
require_once('header.php');
?>


<div class="bg-face">
  

</div>



</div>

        <section id="slider_bl">
          
          <div class="wrapper">
            <input checked type=radio name="slider" id="slide1" />
            <input type=radio name="slider" id="slide2" />
            <input type=radio name="slider" id="slide3" />
            <input type=radio name="slider" id="slide4" />
            <div class="slider-wrapper">
              <div class=inner>
                <article>
                  <div class="info top-left">
                    </div>
                  <img src="Images/slide4.jpg"/>
                </article>
                <article>
                  <div class="info bottom-right">
                  </div>
                  <img src="Images/slide1.jpg" />
                </article>
                <article>
                  <div class="info bottom-left">
                    </div>
                  <img src="Images/slide3.jpg" />
                </article>
                <article>
                  <div class="info top-right">
                    </div>
                  <img src="Images/slide2.jpg" />
                </article>
              </div>
            </div>
            <div class="slider-prev-next-control">
              <label for=slide1> </label>
              <label for=slide2></label>
              <label for=slide3> </label>
              <label for=slide4></label>
            </div>
            <div class="slider-dot-control">
              <label for=slide1></label>
              <label for=slide2></label>
              <label for=slide3></label>
              <label for=slide4></label>
            </div>
          </div>
        </section>

<div class="bg-cat">
<h1 class="BestSell">Часто выбираемые категории</h1>
  <div class="GalleryFacePHP">
    
    <?php
      require_once('pages/Category.php');
    ?>
    </div>
    
                
    
    
  </div>
</div>

<div class="Face-About-us">
    
  <div class="AboutUs">
      <h1 class="Face-info">О нас</h1>
     
          <h2 class="Center">Рады вас приветсвовать на нашем сайте, посвященному нашему ресторану. <br>
					Очень часто задаваемый вопрос — Почему мы решили открыть именно ресторан японской кухни?
					Все очень просто, мне и моей жене, с кем мы и открыли данный ресторан, очень нравится японская культура, еда и люди. 
					Поэтому мы и открыли данный ресторан.
					Надеемся, что вам понравится наша кухня, будем рады вашему визиту.
          </h2>
</div>

      <div class="info">

      <div class="TimeWork">
        <h1 class="Center">Время работы:</h1><br>
        <h2 class="Center">воскресенье	12:00–00:00<br>
          понедельник	Закрыто<br>
            вторник	12:00–00:00<br>
              среда	12:00–00:00<br>
              четверг	12:00–00:00<br>
            пятница	12:00–01:00<br>
          суббота	12:00–01:00<br>
        <h2>
      </div>

      <div class="info1">

        <div class="Number" >
          <h1 class="Center">Наш номер:</h1><h2 class="Center"><a href="tel:+880-145-145-5656">+880-145-145-5656</a></h2>
        </div>

        <div class="Street">
          <h1 class="Center">Адреса:</h1> <br>
          <h2 class="Center">Г. Челябинск, ул. Пушкина 34 <br>
            Г. Челябинск, ул. Сони кривой 4 <br>
            Г. Челябинск, ул. Пролетарская 56 <br>
          </h2>	
        </div>
</div>
        </div>


        
  </div>
</div>



<div class="bg-Index-menu">
<h1 class="MenuBoard2">Меню</h1>

    <div class="Index-menu">
      <?php
        require_once('pages/Menu.php');
      ?>
    </div>
</div>

<?php
require_once('footer.php');
?>
