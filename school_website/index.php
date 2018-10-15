<?php 
  // header of the website
  include_once 'inc/header.php';

  // date 
  include_once 'inc/date.php';
  
  // img routes
  include_once 'inc/img-routes.php';


 ?>
  <div id="header">
    <!-- Верхняя часть страницы -->
    <img src="<?= $logo ?>"   alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1>Сегодня  <?=$day . ', '. $greeting ?> </h1>
    <?php 
      include 'cookies/cookies.php'; 
      if($visitCounter == 1){
        echo "Hello Guest you visited our page for the first time, Wellcome !";
      } else {
        echo "Hello User, you have visited our site $visitCounter  times <br> And your last visit was on <strong> \"$lastVisit\"</strong>";
      }
    ?>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <h3>Lorem ipsum dolor sit amet.</h3>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae tenetur quisquam suscipit laboriosam, pariatur quo quaerat earum culpa magni consequuntur.
    </p>
    <h3>Lorem ipsum dolor sit amet.?</h3>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae quia odio accusamus molestiae voluptatem. Aspernatur sapiente quo quae ullam numquam quos possimus fugit, porro consequatur in. Repudiandae animi iste omnis.
    </p>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus id voluptatem reprehenderit, ipsum quis eos beatae cupiditate saepe eligendi velit quam cumque, nemo adipisci fugit pariatur odio esse aspernatur, dolore nulla. Assumenda mollitia suscipit delectus. Ipsum neque qui accusamus itaque ex! Esse error pariatur, at animi nulla, expedita optio autem.
    </p>
    <!-- Область основного контента -->
  </div>
  
  <?php 
    include_once 'inc/menu.php';
    
    drawMenu($leftMenu, 'nav');
  ?>
    <!-- Меню -->
    <!-- Навигация -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    &copy; Супер Мега Веб-мастер, 2000 &ndash; 2015
    <!-- Нижняя часть страницы -->
    <?php 
      drawMenu($leftMenu, 'nav-horizontal');
    ?>
  </div>
</body>

</html>