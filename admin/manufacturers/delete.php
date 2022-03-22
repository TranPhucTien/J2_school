<?php

$id = $_GET['id'];

require '../php/connect.php';

$sql = "delete from manufacturers
where id = '$id'";

mysqli_query($connect, $sql);
mysqli_close($connect);

