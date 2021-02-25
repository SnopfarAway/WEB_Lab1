<?php
  if(isset($_POST['username']) && isset($_POST['password'])) {
    if($_POST['username'] == "" || $_POST['password'] == "") {
      $_SESSION['message'] = "<p class='error-message'>Имя пользователя или пароль не указаны</p>";
      header('Location: RegistrationPage.php');
      exit;
    } elseif(!preg_match("/^[a-zA-Z0-9]+$/", $_POST['username'])) {
      $_SESSION['message'] = "<p class='error-message'>Имя пользователя может состоять только из букв английского алфавита и цифр</p>";
      header('Location: RegistrationPage.php');
      exit;
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
    require_once 'DataBase.php';
    $mysqli->select_db("users");

    $query = "INSERT INTO users (username, password) VALUES('$username', '$password')";
    $result = mysqli_query($mysqli, $query);

    if($result) {
      $_SESSION['message'] = "<p class='succes-message'>Регистрация прошла успешно</p>";
      header('Location: RegistrationPage.php');
      exit;
    } else {
      $_SESSION['message'] = "<p class='error-message'>Пользователь с таким логином уже зарегистрирован</p>";
      header('Location: RegistrationPage.php');
      exit;
    }
  }
?>



