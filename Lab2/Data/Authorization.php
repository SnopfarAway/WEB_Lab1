<?php
    if(isset($_POST['username']) and isset($_POST['password'])) {
        if($_POST['username'] == "" || $_POST['password'] == "") {
            $_SESSION['message'] = "<p class='error-message'>Имя пользователя или пароль не указаны</p>";
            header('Location: AuthorizationPage.php');
            exit;
        }
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        require_once 'DataBase.php';

        $query1 = "SELECT * FROM users WHERE username='$username'";
        $query1_result = mysqli_query($mysqli, $query1) or die(mysqli_error($mysqli));
        $query1_rows_count = mysqli_num_rows($query1_result);

        if($query1_rows_count != 1) {
            $_SESSION['message'] = "<p class='error-message'>Логина нет в системе</p>";
            header('Location: AuthorizationPage.php');
            exit;
        }

        $query2 = "SELECT * FROM users WHERE username='$username' and password='$password'";
        $query2_result = mysqli_query($mysqli, $query2) or die(mysqli_error($mysqli));
        $query2_rows_count = mysqli_num_rows($query2_result);

        if($query2_rows_count != 1) {
            $_SESSION['message'] = "<p class='error-message'>Неверный пароль</p>";
            header('Location: AuthorizationPage.php');
            exit;
        }

        $_SESSION['userdata'] = [
            $username => $password
        ];
    }

    if(isset($_SESSION['userdata'])){
        //echo'<pre>'. print_r($query2_rows_count) .'</pre>';
        ob_start();
        $new_url = 'http://localhost/WEB_Lab1/Lab2/PersonalAccountPage.php';
        header('Location: '.$new_url);
        ob_end_flush();
    }

?>



