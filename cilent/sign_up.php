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
    session_start();
    if(isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    ?>
    <div class="wrapper">
        <!-- -------------------------------------------- HEADER -------------------------------------------- -->
        <?php include './interface_header.php' ?>

        <!-- -------------------------------------------- CART -------------------------------------------- -->
        <?php include './interface_cart.php' ?>

        <!-- -------------------------------------------- NOTICE -------------------------------------------- -->
        <?php include './interface_notice.php' ?>

        <!-- -------------------------------------------- SIGN UP -------------------------------------------- -->
        <?php include './interface_signup.php' ?>

        <!-- -------------------------------------------- FOOTER -------------------------------------------- -->
        <?php include './interface_footer.php' ?>
    </div>
</body>

</html>