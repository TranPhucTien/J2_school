<?php

$email = $_POST['email'];
$password = $_POST['password'];

require './php/connect.php';

$sql = "select * from admins
where email = '$email' and password = '$password'";
$result = mysqli_query($connect, $sql);
$number_rows = mysqli_num_rows($result);

if($number_rows == 1) {
    session_start();
    $each = mysqli_fetch_array($result);
    $_SESSION['id'] = $each['id'];
    $_SESSION['name'] = $each['last_name'];
    header("location: products");
    exit;
}

header('location: sign_in.php?error=Bạn đăng nhập sai mất rồi :(');