<?php
    require_once 'DataBase.php';

    $limit = 5;
    $page = isset($_GET['page']) ? $_GET['page']: 1;
    $offset = $limit * ($page - 1);

    $query1 = "SELECT * FROM products";
    $query1_result = mysqli_query($mysqli, $query1) or die(mysqli_error($mysqli));
    $query1_products = mysqli_fetch_all($query1_result, MYSQLI_ASSOC);

    function get_products($query1_products, $limit) {

    }
    
?>





