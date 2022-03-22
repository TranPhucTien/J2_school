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