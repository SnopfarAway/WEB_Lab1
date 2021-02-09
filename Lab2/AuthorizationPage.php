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
    <form name="sendMail" action="PersonalAccountPage.php"> <!-- Начало формы обратной связи -->
      <p class="name"> <!-- Блок поля для ввода имени -->
        <input type="text" name="name" placeholder="Имя пользователя"></input>
      </p>
      <p class="email"> <!-- Блок поля для ввода почты -->
        <input type="text" name="email" placeholder="Пароль"></input>
      </p>
      <p class="send"> <!-- Блок кнопки отправки сообщения-->
        <input type="submit" value="Отправить"></input>
      </p>
    </form> <!-- Конец блока обратной связи -->
    <!-- Footer -->
    <?php require 'Templaytes/Footer.php'; ?>
  </body>
</html>