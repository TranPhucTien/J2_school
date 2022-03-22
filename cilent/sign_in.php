<?php
session_start();
if(isset($_COOKIE['remember'])) {
    $token = $_COOKIE['remember'];
    require './php/connect.php';

    $sql = "select * from customers
    where token = '$token'
    limit 1";
    $result = mysqli_query($connect, $sql);
    $number_rows = mysqli_num_rows($result);
    
    if ($number_rows == 1) {
        $each = mysqli_fetch_array($result);
        $_SESSION['id'] = $each['id'];
        $_SESSION['first_name'] = $each['first_name'];
        $_SESSION['last_name'] = $each['last_name'];
    }
}
if(isset($_SESSION['id'])) {
    header('location:index.php');
    exit;
}
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
    <div class="wrapper">
        <!-- -------------------------------------------- HEADER -------------------------------------------- -->
        <?php include './interface_header.php' ?>

        <!-- -------------------------------------------- CART -------------------------------------------- -->
        <?php include './interface_cart.php' ?>

        <!-- -------------------------------------------- NOTICE -------------------------------------------- -->
        <?php include './interface_notice.php' ?>

        <!-- -------------------------------------------- SIGN IN -------------------------------------------- -->
        <?php include './interface_signin.php '?>
        
        <!-- -------------------------------------------- FOOTER -------------------------------------------- -->
        <?php include './interface_footer.php'; ?>
    </div>
</body>

</html>