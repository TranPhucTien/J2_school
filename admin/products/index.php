<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./image/62.png">
    <title>Nhóm 62</title>
    <link href="http://fonts.cdnfonts.com/css/futura-std-4" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
<?php 
    include "../php/connect.php";
    $page = 1;

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }

    $search = '';

    if (isset($_GET['search'])) {
        $search = $_GET['search'];
    }

    $sql_product_number = "select count(*) from add_product
    where
    name like '%$search%'";

    $array_product_number = mysqli_query($connect, $sql_product_number);
    $result_product_number = mysqli_fetch_array($array_product_number);
    $product_number = $result_product_number['count(*)'];

    $number_of_products_per_page = 5;

    $page_number = ceil($product_number / $number_of_products_per_page);
    $skip_product_number = $number_of_products_per_page * ($page - 1);

    $sql = "select * from add_product
    where
    name like '%$search%'
    limit $number_of_products_per_page offset $skip_product_number";

    $result = mysqli_query($connect, $sql);
    ?>
    <div class="wrapper">
        <div class="flex">
            <?php include "../menu.php"; ?>
            <div id="right">
                <header class="header">
                    <h3 class="header__title">Quản lý sản phẩm</h3>
                    <div class="header__other">
                        <form action="">
                            <div class="search">
                                <input type="search" placeholder="Tìm kiếm" name="search" value="<?php echo $search ?>">
                                <i class="fas fa-search search-icon"></i>
                            </div>
                        </form>
                    </div>
                    <a href="../index.php" class="header__link">Đăng xuất</a>
                </header>
                <section class="content">
                    <a href="../php/form_insert.php" class="content__add">Thêm sản phẩm</a>
                    <table>
                        <colgroup>
                            <col span="1" style="width: 5%;">
                            <col span="1" style="width: 25%;">
                            <col span="1" style="width: 30%;">
                            <col span="1" style="width: 15%;">
                            <col span="1" style="width: 15%;">
                            <col span="1" style="width: 5%;">
                            <col span="1" style="width: 5%;">
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col">Mã</th>
                                <th scope="col">Tên Sản Phẩm</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Sửa</th>
                                <th scope="col">Xoá</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($result as $each): ?>
                            <tr>
                                <td data-label="ID"><?php echo $each['id'] ?></td>
                                <td data-label="Name">
                                    <a href="./active.php?id=<?php echo $each['id']?>" class="limit__line"><?php echo $each['name'] ?></a>
                                </td>
                                <td data-label="Description">
                                    <a href="./active.php?id=<?php echo $each['id']?>" class="limit__line"><?php echo $each['description'] ?></a>
                                </td>
                                <td data-label="Image">
                                    <img src="../php/photos/<?php echo $each['photo'] ?>" height="100px" alt="">
                                </td>
                                <td data-label="Price"><?php echo number_format($each['price'], $decimals = 0, $dec_point = "." , $thousands_sep = ".") ?>đ</td>
                                <!-- <td data-label="manufacturer_name"><?php echo $each['manufacturer_name'] ?></td> -->
                                <td data-label="Update">
                                    <a href="../php/form_update.php?id=<?php echo $each['id'] ?>" class="link__hover">Sửa</a>
                                </td>
                                <td data-label="Delete">
                                    <a href="../php/delete.php?id=<?php echo $each['id'] ?>" class="delete__hover">
                                        Xoá
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </section>

                <?php include '../page_number.php'?>
                <?php mysqli_close($connect) ?>
            </div>
        </div>
    </div>
</body>

</html>