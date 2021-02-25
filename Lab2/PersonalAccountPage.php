<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="ru">
  <?php require 'Templaytes/Head.php'; ?>

  <body>
    <!-- Site's menu -->
    <?php require 'Templaytes/Header.php'; ?>
    
    <?php
      if(isset($_SESSION['userdata'])) {
        $username = key($_SESSION['userdata']);
        echo "Привет $username";
        echo "<br>";
        echo "Твой пароль: ". $_SESSION['userdata'][$username] ." ";
        echo "<br>";
        echo "<a href='LogOut.php'>Выход</a>";
        echo "<br>";
        print_r($_SESSION['userdata']);
      } else{
        //http_response_code(403);
        //die('Forbidden');

        echo
        "<!DOCTYPE HTML PUBLIC '-//IETF//DTD HTML 2.0//EN'>
        <html><head>
        <title>403 Forbidden</title>
        </head><body>
        <h1>Forbidden</h1>
        <p>You don't have permission to access this resource.</p>
        <hr>
        <address>Apache/2.4.46 (Win64) OpenSSL/1.1.1h PHP/8.0.1 Server at localhost Port 80</address>
        </body></html>";
        exit;
      }

    ?>
    <?php require 'Templaytes/Footer.php'; ?>
  </body>
</html>