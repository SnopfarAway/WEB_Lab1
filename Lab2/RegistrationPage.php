<?php
  session_start();
  if(isset($_SESSION['userdata'])) {
    header('Location: PersonalAccountPage.php');
  }
?>
<!DOCTYPE html>
<html lang="ru">
  <?php require 'Templaytes/Head.php'; ?>

  <body>
    <!-- Site's menu -->
    <?php require 'Templaytes/Header.php'; ?>

    <div class="form-signup">
      <form name="reg" method="POST">
        <h3>Регистрация</h3>
        <p class="name">
          <input type="text" name="username" placeholder="Имя пользователя"></input>
        </p>
        <p class="password">
          <input type="password" name="password" placeholder="Пароль"></input>
        </p>
        <p class="send">
          <input type="submit" value="Отправить"></input>
        </p>
        <a href="AuthorizationPage.php">Вернуться</a>
      </form>
      <?php require 'Data/Registration.php'; ?>
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