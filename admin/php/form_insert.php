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
    <form action="process_insert.php" method="post" enctype="multipart/form-data">
        Tên sản phẩm
        <input type="text" name="name">
        <br>
        Mô tả
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <br>
        Ảnh
        <input type="file" name="photo">
        <br>
        Giá sản phẩm
        <input type="number" name="price">
        <br>
        Nhà sản xuất
        <select name="manufacturer_id">
        <?php foreach ($result as $each): ?>
            <option value="<?php echo $each['id'] ?>">
                <?php echo $each['name'] ?>
            </option>
        <?php endforeach ?>
        </select>
        <br>
        <button>Thêm</button>
    </form>
</body>
</html>