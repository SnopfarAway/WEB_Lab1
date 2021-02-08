<?php

$dbhost = "localhost"; // адрес сервера для бд
$dbname = "users_data"; // имя бд
$username = "root";
$password = "";

$db = new PDO("mysql: host = $dbhost; dbname = $dbname", $username, $password);
