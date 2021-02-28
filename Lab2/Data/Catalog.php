<?php 
    require_once 'DataBase.php';
    $mysqli->select_db("products");
    require 'Functions.php';
?>
<div class="row row-cols-1 row-cols-md-3">
    <?php
        $limit = 5; // ограничение на число продуктов на страницу
        $products_count = count_products(); // считаем количество продуктов в бд

        $num_pages = intval(($products_count[0] - 1) / $limit) + 1; // считаем количество страниц
        
        $page = isset($_GET['page']); // определяем страницу, на которую зашел пользователь (номер текущей страницы)
        
        if(empty($page) || $page < 0) {
            $page = 1; //
        } else if($page > $num_pages){
            $page = $num_pages;
        } else {
            $page = $_GET['page'];
        }

        $offset = $limit * ($page - 1); //

        $products = fetch_products($limit, $offset);
    ?>

    <?php foreach ($products as $product) : ?>
    <div class="col mb-4">
        <div class="card" style="width: 18rem;">
            <img src="/WEB_Lab1/Lab2/Media/<?=$product['image']?>" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"><?=$product['title']?></h5>
                <p class="card-text"><?=$product['cost']?> р</p>
                <a href="<?=$product['page_name']?>" class="btn btn-info">На страницу продукта</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<div>
    <?php
        $buttons = navigation($page, $num_pages);

        for($i = 0; $i < count($buttons); $i++) {
            echo $buttons[$i];
        }
    ?>
</div>




