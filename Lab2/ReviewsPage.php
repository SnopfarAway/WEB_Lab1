<?php
  session_start();
  require_once 'Data/DataBase.php';
  require 'Data/Comments.php';
  require 'Data/Functions.php';
?>
<!DOCTYPE html>
<html lang="ru">
  <?php require 'Templaytes/Head.php'; ?>

  <body>
    <!-- Site's menu -->
    <?php require 'Templaytes/Header.php'; ?>

    <h1 class="text-center">Поделитесь впечатлением!</h1>

    <div class="container col col-xl-5">
      <div class="row row-cols-1 row-cols-md-4"> 
        <?php $comments = fetch_comments(); foreach ($comments as $comment) : ?>
        <div class="col mb-4">
            <div class="card" style="width: 12rem;">
                <h5 class="card-title"><?=$comment['username']?></h5>
                <?php
                  if(!empty($comment['image'])) {
                    echo "<img src='/WEB_Lab1/Lab2/Media/". $comment['image'] ."' class=card-img-top>";
                  }
                ?>
                <div class="card-body">
                    <p class="card-text"><?=$comment['comment']?></p>
                    <p class="card-text"><?=$comment['date']?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    
    <div class="container col col-xl-5">
      <form name="comment" method="POST">
        <div class="input-group mb-1">
          <input type="file" class="form-control" id="inputGroupFile02" name="image">
          <label class="input-group-text" for="inputGroupFile02">Загрузить</label>
        </div>

        <div class="input-group">
          <span class="input-group-text">Текст</span>
          <textarea class="form-control" aria-label="With textarea" name="text"></textarea>
        </div>
        
        <p class="send" style="margin-top: 4px;">
          <input type="submit" value="Отправить"></input>
        </p>
      </form>

      <?php 
        add_comment();
        if(isset($_SESSION['message'])) {
          echo $_SESSION['message'];
          unset($_SESSION['message']);
        }
      ?>
    </div>

    <!-- Footer -->
    <?php require 'Templaytes/Footer.php'; ?>
  </body>
</html>
