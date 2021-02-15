<!DOCTYPE html>
<html lang="ru">
  <?php require 'Templaytes/Head.php'; ?>

  <body>
    <!-- Site's menu -->
    <?php require 'Templaytes/Header.php'; ?>

    <!-- Info Banner -->
    <section class="jumbotron text-center">
      <div class="container">
          <h1><small>Не пропустите</small></h1>
          <p class="lead text-muted">Вкуснейшие КонфетОчки из Волгограда по очень низким ценам</p>
      </div>
    </section>

    <!-- Product's catalog -->
    <div class="container col col-xl-7">
      <h1>Каталог</h1>

      <div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-4">
          <div class="card" style="width: 18rem;">
            <img src="Media/candy.png" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">КонфетОчка №1</h5>
              <p class="card-text">120 р</p>
              <a href="ProductPage_1.php" class="btn btn-info">На страницу продукта</a>
            </div>
          </div>
        </div>

        <div class="col mb-4">
          <div class="card" style="width: 18rem;">
            <img src="Media/candy.png" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">КонфетОчка №2</h5>
              <p class="card-text">105 р</p>
              <a href="ProductPage_2.php" class="btn btn-info">На страницу продукта</a>
            </div>
          </div>
        </div>

        <div class="col mb-4">
          <div class="card" style="width: 18rem;">
            <img src="Media/candy.png" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">КонфетОчка №3</h5>
              <p class="card-text">110 р</p>
              <a href="ProductPage_3.php" class="btn btn-info">На страницу продукта</a>
            </div>
          </div>
        </div>
        
        <div class="col mb-4">
          <div class="card" style="width: 18rem;">
            <img src="Media/candy.png" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">КонфетОчка №4</h5>
              <p class="card-text">120 р</p>
              <a href="ProductPage_4.php" class="btn btn-info">На страницу продукта</a>
            </div>
          </div>
        </div>

        <div class="col mb-4">
          <div class="card" style="width: 18rem;">
            <img src="Media/candy.png" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">КонфетОчка №5</h5>
              <p class="card-text">90 р</p>
              <a href="ProductPage_5.php" class="btn btn-info">На страницу продукта</a>
            </div>
          </div>
        </div>
        
      </div>
    </div>

    <!-- Footer -->
    <?php require 'Templaytes/Footer.php'; ?>
  </body>
</html>