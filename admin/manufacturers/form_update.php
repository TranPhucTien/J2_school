<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua san pham</title>
</head>
<body>
    <?php
    $id = $_GET['id'];
    require "../return.php";
    require "../php/connect.php";

    $sql = "select * from manufacturers
    where id = '$id'";
    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);

    $sql = "select * from manufacturers";
    $manufacturers = mysqli_query($connect, $sql);
    ?>
    <form action="./process_update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $each['id']; ?>" name="id">
        Tên nhà sản xuất
        <input type="text" name="name" value="<?php echo $each['name']; ?>">
        <br>
        Địa chỉ
        <textarea name="address" id="" cols="30" rows="10"><?php echo $each['address']; ?></textarea>
        <br>
        Điện thoại
        <input type="number" name="phone" value="<?php echo $each['phone']; ?>">
        <br>
        Chọn ảnh
        <input type="file" name="photo_new" value="<?php echo $each['photo']; ?>">
        <br>
        Ảnh ban đầu
        <img src="photos/<?php echo $each['photo']; ?>" height="100px" alt="">
        <input type="hidden" name="photo_old" value="<?php echo $each['photo']; ?>">
        <br>
        <button>Sửa</button>
    </form>
    <?php mysqli_close($connect); ?>
</body>
</html>