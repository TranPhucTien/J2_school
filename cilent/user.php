<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
Đây là trang người dùng. Xin chào bạn
    <?php
    session_start();
    echo $_SESSION['last_name'];
    ?>
    <a href="sign_out.php">Ơ đã đăng xuất rồi à, đừng bỏ rơi tôi</a>
    <a href="index.php">Ve trang chu</a>
</body>
</html>