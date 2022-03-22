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
    $id = $_GET["id"];
    require "../return.php";
    require "../php/connect.php";

    $sql = "select * from add_product
    where id = '$id'";

    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);

    $sql = "select * from manufacturers";
    $manufacturers = mysqli_query($connect, $sql);
    ?>
    <form action="process_update.php" method="post" enctype="multipart/form-data">
        Tên sản phẩm
        <input type="hidden" name="id" value="<?php echo $each['id']; ?>">
        <input type="text" name="name" value="<?php echo $each['name']; ?>">
        <br>
        Mô tả
        <textarea name="description" id="" cols="30" rows="10"><?php echo $each['description']; ?></textarea>
        <br>
        Chọn ảnh
        <input type="file" name="photo_new" value="<?php echo $each['photo']; ?>">
        <br>
        Ảnh ban đầu
        <img src="photos/<?php echo $each['photo']; ?>" height="200px" alt="">
        <input type="hidden" name="photo_old" value="<?php echo $each['photo']; ?>">
        <br>
        Giá sản phẩm
        <input type="number" name="price" value="<?php echo $each['price']; ?>">
        <br>
        Nhà sản xuất
        <select name="manufacturer_id">
        <?php foreach ($manufacturers as $manufacturer): ?>
            <option 
            value="<?php echo $manufacturer['id'] ?>"
            <?php if ($each['manufacturer_id'] == $manufacturer['id']) { ?>
                selected
            <?php } ?>
            >
                <?php echo $manufacturer['name'] ?>
            </option>
        <?php endforeach ?>
        </select>
        <br>
        <button>Sửa</button>
    </form>
</body>
</html>