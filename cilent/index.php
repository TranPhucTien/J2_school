<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./image/62.png">
    <title>Nhóm 62</title>
    <link href="http://fonts.cdnfonts.com/css/futura-std-4" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/app.css">
</head>

<body>
    <?php
    $connect = mysqli_connect('localhost', 'root', '', 'shop_cua_tien');
    mysqli_set_charset($connect, 'utf8');
    
    $page = 1;
    
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    
    $search = '';
    
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
    }
    
    $sql_product_number = "select count(*) from add_product
    where
    name like '%$search%'";
    
    $array_product_number = mysqli_query($connect, $sql_product_number);
    $result_product_number = mysqli_fetch_array($array_product_number);
    $product_number = $result_product_number['count(*)'];
    
    $number_of_products_per_page = 8;
    
    $page_number = ceil($product_number / $number_of_products_per_page);
    $skip_product_number = $number_of_products_per_page * ($page - 1);
    
    $sql = "select * from add_product
    where
    name like '%$search%'
    limit $number_of_products_per_page offset $skip_product_number";
    
    $result = mysqli_query($connect, $sql);
    ?>
    <div class="wrapper">
        <!-- -------------------------------------------- HEADER -------------------------------------------- -->
        <?php include './interface_header.php' ?>

        <!-- -------------------------------------------- CART -------------------------------------------- -->
        <?php include './interface_cart.php' ?>

        <!-- -------------------------------------------- NOTICE -------------------------------------------- -->
        <?php include './interface_notice.php' ?>

        <!-- -------------------------------------------- CONTENT -------------------------------------------- -->
        <?php include './interface_content.php' ?>
        
        <!-- -------------------------------------------- FOOTER -------------------------------------------- -->
        <?php include './interface_footer.php'; ?>
    </div>
    <?php mysqli_close($connect) ?>
</body>

</html>