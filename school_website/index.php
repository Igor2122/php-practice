<?php 
  // header of the website
  include_once 'inc/header.php';

  // date 
  include_once 'inc/date.php';
  
  // img routes
  include_once 'inc/img-routes.php';


 ?>
  <div class=" d-flex">
    <!-- Верхняя часть страницы -->
    <img src="<?= $logo ?>" class="mr-auto" alt="Наш логотип" class="logo" />
    <!-- Верхняя часть страницы -->
        <!-- Заголовок -->
    <div>
      <h3>Сегодня  <?=$day . ', '. $greeting ?> </h3>
      </h4>
      <?php 
        include 'cookies/cookies.php'; 
        if($visitCounter == 1){
          echo "<h4>Hello Guest you visited our page for the first time, Wellcome !</h4>";
        } else {
          echo "<h4>Hello User, you have visited our site $visitCounter  times <br> And your last visit was on <strong> \"$lastVisit\"</strong></h4>";
        }
      ?>
    </div>
    <!-- Заголовок -->
  </div>
  <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Album example</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
      </section>

    <!-- main content -->
 <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
           <?php for($i = 0; $i < 3; $i++):?> 
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
          <?php endfor; ?> 
            </div>
        </div>
  </div>
     <!-- /main content -->
  
  
  
  <?php 
    include_once 'inc/menu.php';
    
    drawMenu($leftMenu, 'nav');
  ?>
    <!-- Меню -->
    <!-- Навигация -->
  </div>
<?php 
  include 'inc/footer.php';

