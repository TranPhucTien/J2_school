<?php

$id = $_POST['id'];
$name = $_POST['name'];
$photo_new = $_FILES['photo_new'];

if ($photo_new['size'] > 0) {
    $folder = 'photos/';
    $file_extension = explode('.' ,$photo_new['name'])[1]; // a.png thì cắt ra mảng [0]: a, [1]:png
    $path_file = $folder . time() . '.' . $file_extension; // Thay tên đường dẫn ảnh
    $file_name = time() . '.' . $file_extension; 

    move_uploaded_file($photo_new["tmp_name"], $path_file);
}
else {
    $file_name = $_POST['photo_old'];
}

$photo_old = $_POST['photo_old'];
$address = $_POST['address'];
$phone = $_POST['phone'];

require "../php/connect.php";

$sql = "update manufacturers
set
name = '$name',
photo = '$file_name',
address = '$address',
phone = '$phone'
where
id = '$id'
";

mysqli_query($connect, $sql);
mysqli_close($connect);