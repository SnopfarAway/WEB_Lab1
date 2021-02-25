<div class="row row-cols-1 row-cols-md-3">
    <?php
        require_once 'DataBase.php';
        $mysqli->select_db("products");
        $page = isset($_GET['page']) ? $_GET['page']: 1;
        $limit = 6;
        $offset = $limit * ($page - 1);


        $query1 = "SELECT * FROM products";
        $query1_result = mysqli_query($mysqli, $query1) or die(mysqli_error($mysqli));
        $query1_products = mysqli_fetch_all($query1_result, MYSQLI_ASSOC);
    ?>

    <?php foreach ($query1_products as $query1_product) : ?>
    <div class="col mb-4">
        <div class="card" style="width: 18rem;">
        <img src="Media/<?=$query1_product['image']?>" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title"><?=$query1_product['title']?></h5>
            <p class="card-text"><?=$query1_product['cost']?> р</p>
            <a href="<?=$query1_product['page_name']?>" class="btn btn-info">На страницу продукта</a>
        </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>




