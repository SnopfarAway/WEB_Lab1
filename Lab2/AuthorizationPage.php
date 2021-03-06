<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="ru">
  <?php require 'Templaytes/Head.php'; ?>

  <body>
    <!-- Site's menu -->
    <?php require 'Templaytes/Header.php'; ?>
    
    <div class="form-signup">
      <form name="auth" method="POST">
        <h3>Вход в личный кабинет</h3>
        <p class="name">
          <input type="text" name="username" placeholder="Имя пользователя"></input>
        </p>
        <p class="password">
          <input type="text" name="password" placeholder="Пароль"></input>
        </p>
        <p class="send">
          <input type="submit" value="Отправить"></input>
        </p>
        <a href="RegistrationPage.php">Регистрация<br></a>
      </form>
      <?php require 'Data/Authorization.php'; ?>
      <?php 
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