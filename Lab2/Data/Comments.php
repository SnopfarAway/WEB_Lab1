<?php
  function add_comment() {
    if(isset($_POST['text']) && isset($_POST['image'])) {
      if($_POST['text'] == "") {
        $_SESSION['message'] = "<p class='error-message'>Вы ничего не ввели</p>";
        header('Location: ReviewsPage.php');
        exit;
      }

      if(empty($_SESSION['userdata'])) {
        $_SESSION['message'] = "<p class='error-message'>Вы не авторизированы <a href='AuthorizationPage.php' style='color: rgba(255, 255, 255);'>Авторизироваться</a></p>";
        header('Location: ReviewsPage.php');
        exit;
      }

      $username = key($_SESSION['userdata']);
      $text = $_POST['text'];
      $image = $_POST['image'];
      date_default_timezone_set('Europe/Moscow');
      $today = date("Y-m-d H:i:s");

      global $mysqli;
      $mysqli->select_db("comments");
  
      $query = "INSERT INTO comments (username, image, comment, date) VALUES('$username', '$image', '$text', '$today')";
      $result = mysqli_query($mysqli, $query);
  
      if($result) {
        $_SESSION['message'] = "<p class='succes-message'>Коммент добавлен</p>";
        header('Location: ReviewsPage.php');
        exit;
      } else {
        $_SESSION['message'] = "<p class='error-message'>Что-то пошло не так</p>";
        header('Location: ReviewsPage.php');
        exit;
      }
    }
  }

  function fetch_comments() {
      global $mysqli;
      
      $query = "SELECT * FROM comments";
      $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
      $comments = mysqli_fetch_all($result, MYSQLI_ASSOC); //

      return $comments;
  }
?>



