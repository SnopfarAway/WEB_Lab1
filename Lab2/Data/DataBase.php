<?php
$mysqli = new mysqli("localhost", "root", "", "users_data");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$mysqli->select_db("users");