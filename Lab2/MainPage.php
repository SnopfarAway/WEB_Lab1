<!DOCTYPE html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <?php require 'DataBase.php'; ?>
  </head>

  <body>
    <!-- Site's menu -->
    <?php require 'Templaytes/Header.php'; ?>

    <!-- Info Banner -->
    <section class="jumbotron text-center">
      <div class="container">
          <h1><small>Не пропустите</small></h1>
          <p class="lead text-muted">Вкуснейшие КонфетОчки из Волгограда по очень низким ценам</p>
          <?php echo("это тест php кода"); ?> 
      </div>
    </section>

    <!-- Product's catalog -->
    <div class="container col col-xl-7">
      <h1>Каталог</h1>

      <div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-4">
          <div class="card" style="width: 18rem;">
            <img src="candy.png" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">КонфетОчка №1</h5>
              <p class="card-text">120 р</p>
              <a href="ProductPage_1.php" class="btn btn-info">На страницу продукта</a>
            </div>
          </div>
        </div>

        <div class="col mb-4">
          <div class="card" style="width: 18rem;">
            <img src="candy.png" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">КонфетОчка №2</h5>
              <p class="card-text">105 р</p>
              <a href="ProductPage_2.php" class="btn btn-info">На страницу продукта</a>
            </div>
          </div>
        </div>

        <div class="col mb-4">
          <div class="card" style="width: 18rem;">
            <img src="candy.png" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">КонфетОчка №3</h5>
              <p class="card-text">110 р</p>
              <a href="ProductPage_3.php" class="btn btn-info">На страницу продукта</a>
            </div>
          </div>
        </div>
        
        <div class="col mb-4">
          <div class="card" style="width: 18rem;">
            <img src="candy.png" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">КонфетОчка №4</h5>
              <p class="card-text">120 р</p>
              <a href="ProductPage_4.php" class="btn btn-info">На страницу продукта</a>
            </div>
          </div>
        </div>

        <div class="col mb-4">
          <div class="card" style="width: 18rem;">
            <img src="candy.png" class="card-img-top">
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