<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_return = $_POST['password_return'];

require './php/connect.php';

$sql = "select count(*) from customers
where email = '$email'";

$result = mysqli_query($connect, $sql);
$number_rows = mysqli_fetch_array($result)['count(*)'];

if($number_rows == 1) {
    session_start();
    $_SESSION['error'] = 'Trùng email rồi. Bạn chắc chứ, are you sủe?';
    header("Location:signup.php");
    exit;
}
if($password_return != $password) {
    header("location:sign_up.php?error=Sai phần nhập lại mật khẩu rồI bạn ơi!!");
    exit;
}

$sql = "insert into customers(first_name, last_name, email, password)
values('$first_name', '$last_name', '$email', '$password')";
mysqli_query($connect, $sql);

$sql = "select id from customers
where email = '$email'";
$result = mysqli_query($connect, $sql);
$id = mysqli_fetch_array($result)['id'];

session_start();
$_SESSION['id'] = $id;
$_SESSION['first_name'] = $first_name;
$_SESSION['last_name'] = $last_name;

header('location: index.php?');
mysqli_close($connect);