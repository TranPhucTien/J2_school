<?php

$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$photo = $_FILES['photo'];

$folder = 'photos/';
$file_extension = explode('.', $photo['name'])[1];
$path_file = $folder . time() . '.' . $file_extension;
$file_name = time() . '.' . $file_extension;

move_uploaded_file($photo['tmp_name'], $path_file);

require '../php/connect.php';
$sql = "insert into manufacturers(name, address, phone, photo)
values('$name', '$address', '$phone', '$file_name')";

mysqli_query($connect, $sql);

mysqli_close($connect);