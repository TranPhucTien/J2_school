<?php

$name = $_POST['name'];
$description = $_POST['description'];
$photo = $_FILES['photo'];
$price = $_POST['price'];
$manufacturer_id = addslashes($_POST['manufacturer_id']);

$folder = 'photos/';
$file_extension = explode('.' ,$photo['name'])[1]; // a.png thì cắt ra mảng [0]: a, [1]:png
$path_file = $folder . time() . '.' . $file_extension; // Thay tên đường dẫn ảnh
$file_name = time() . '.' . $file_extension; 

move_uploaded_file($photo["tmp_name"], $path_file);

include "../php/connect.php";

$sql = "insert into add_product(name, description, photo, price, manufacturer_id) 
values('$name', '$description', '$file_name', '$price', '$manufacturer_id')";

mysqli_query($connect, $sql);

mysqli_close($connect);