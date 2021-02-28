<?php
    function count_products() {
        global $mysqli;
        
        $query = "SELECT COUNT(*) FROM products";
        $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
        $products_count = mysqli_fetch_row($result);

        return $products_count;
    }

    function fetch_products($limit, $offset) {
        global $mysqli;

        $query = "SELECT * FROM products LIMIT $limit OFFSET $offset";
        $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
        $products = mysqli_fetch_all($result, MYSQLI_ASSOC); //

        return $products;
    }

    function navigation($page, $num_pages) {
        $buttons = [];
        
        if($page == 1 && $num_pages == 1) {
            return $buttons = [ "<a class='btn btn-dark' href= '/WEB_Lab1/Lab2/MainPage.php/?page=1' role='button'>1</a>" ];
        }

        if($num_pages == 2) {
            if($page == 1) {
                return $buttons = [
                    "<a class='btn btn-dark' href= '/WEB_Lab1/Lab2/MainPage.php/?page=1' role='button'>1</a>",
                    "<a class='btn btn-light' href= '/WEB_Lab1/Lab2/MainPage.php/?page=2' role='button'>2</a>"
                ];
            } else {
                return $buttons = [
                    "<a class='btn btn-light' href= '/WEB_Lab1/Lab2/MainPage.php/?page=1' role='button'>1</a>",
                    "<a class='btn btn-dark' href= '/WEB_Lab1/Lab2/MainPage.php/?page=2' role='button'>2</a>"
                ];
            }
        }

        if($page < 7) {
            for($i = 1; $i < $page; $i++) {
                array_push($buttons, "<a class='btn btn-light' href= '/WEB_Lab1/Lab2/MainPage.php/?page=$i' role='button'>$i</a>");
            }
        } else {
            array_push($buttons, "<a class='btn btn-light' href= '/WEB_Lab1/Lab2/MainPage.php/?page=1' role='button'>1</a>");
            array_push($buttons, "<span class='btn btn-light'>...</span>");
            for($i = $page - 3; $i < $page; $i++) {
                array_push($buttons, "<a class='btn btn-light' href= '/WEB_Lab1/Lab2/MainPage.php/?page=$i' role='button'>$i</a>");
            }
        }

        array_push($buttons, "<a class='btn btn-dark' href='/WEB_Lab1/Lab2/MainPage.php/?page=$page' role='button'>$page</a>");
        

        if($num_pages - $page < 6) {
            for($i = $page + 1; $i < $num_pages + 1; $i++) {
                array_push($buttons, "<a class='btn btn-light' href='/WEB_Lab1/Lab2/MainPage.php/?page=$i' role='button'>$i</a>");
            }
        } else {
            for($i = $page + 1; $i < $page + 4; $i++) {
                array_push($buttons, "<a class='btn btn-light' href='/WEB_Lab1/Lab2/MainPage.php/?page=$i' role='button'>$i</a>");
            }
            array_push($buttons, "<span class='btn btn-light'>...</span>");
            array_push($buttons, "<a class='btn btn-light' href='/WEB_Lab1/Lab2/MainPage.php/?page=$num_pages' role='button'>$num_pages</a>");
        }

        return $buttons;
    }
?>





