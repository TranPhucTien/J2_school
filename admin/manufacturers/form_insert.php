<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Them san pham</title>
</head>
<body>
    <?php
    require "../return.php";
    require "../php/connect.php";

    $sql = "select * from manufacturers";
    $result = mysqli_query($connect, $sql);
    ?>
    <form action="./process_insert.php" method="post" enctype="multipart/form-data">
        Tên nhà sản xuất
        <input type="text" name="name">
        <br>
        Địa chỉ
        <textarea name="address" id="" cols="30" rows="10"></textarea>
        <br>
        Điện thoại
        <input type="number" name="phone">
        <br>
        Ảnh
        <input type="file" name="photo">
        <br>
        <button>Thêm</button>
    </form>
</body>
</html>