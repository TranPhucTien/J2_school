<?php

$id = $_GET['id'];

require 'connect.php';

$sql = "delete from add_product where id = $id";

mysqli_query($connect, $sql);
mysqli_close($connect);

header('location:../index.php');