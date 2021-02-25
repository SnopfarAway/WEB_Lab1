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
      <?php require 'Data/Catalog.php'; ?>
    </div>

    <!-- Footer -->
    <?php require 'Templaytes/Footer.php'; ?>
  </body>
</html>