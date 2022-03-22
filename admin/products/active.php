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
    <link rel="stylesheet" href="../../cilent/css/app.css">
</head>

<body>
    <?php 
    $id = $_GET['id'];
    require_once '../php/connect.php';

    $sql = "select * from add_product
    where id = $id";
    $result = mysqli_query($connect, $sql);
    ?>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="header__content">
                    <div class="logo">
                        <a href="index.php" class="logo-link">Nhóm 62</a>
                    </div>
                    <div class="header__menu">
                        <ul class="header__menu-list">
                            <li class="header__menu-item">
                                <a href="../products/">Quản lý sản phẩm</a>
                            </li>
                            <li class="header__menu-item">
                                <a href="../manufacturers/">Quản lý nhà sản xuất</a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__other">
                        <div class="search">
                            <input type="text" placeholder="Tìm kiếm">
                            <i class="fas fa-search search-icon"></i>
                        </div>
                        <div class="location">
                            <a href="#"><i class="fas fa-map-marker-alt location-icon icon"></i></a>
                        </div>
                        <div class="user">
                            <a href="#"><i class="fas fa-user-alt user-icon icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="notice">
            <p class="notice-text">
                Miễn phí vận chuyển cho đơn hàng từ 100.000.000đ
            </p>
        </section>
        <section class="active-content">
            <div class="container">
                <div class="active-content__container">
                    <?php foreach ($result as $product) { ?>
                    <div class="active-content__image">
                        <img src="../php/photos/<?php echo $product['photo'] ?>" alt="" class="active-content__img">
                    </div>
                    <div class="active-information">
                        <div class="active-content__info">
                            <h2 class="active-content__info-heading uppercase"><?php echo $product['name'] ?></h2>
                            <p class="active-content__info-des">
                                <span>ID: <?php echo $product['id'] ?></span>
                                <span>Đã bán: 3362</span>
                            </p>
                            <div class="active-content__info-price"><?php echo number_format($product['price'], $decimals = 0, $dec_point = "." , $thousands_sep = ".") ?>đ</div>
                            <!-- <div class="active-content__info-color">
                                <p class="uppercase">màu sắc</p>
                                <div class="active-content__info-container__btn">
                                    <button class="btn--square-l white"></button>
                                    <button class="btn--square-l yellow"></button>
                                    <button class="btn--square-l black active-content__info--active"></button>
                                </div>
                            </div> -->
                            <div class="active-content__info-title">
                            <p class="uppercase">Mô tả</p>
                            <p class="active-content__info-title__desc">
                                <?php echo $product['description'] ?>
                            </p>
                            </div>
                            <div class="active-content__info-title">
                                <p class="uppercase">kích cỡ</p>
                                <div class="active-content__info-container__btn">
                                    <button class="btn--square-l btn--hover">S</button>
                                    <button class="btn--square-l btn--hover">M</button>
                                    <button class="btn--square-l btn--hover">L</button>
                                    <button class="btn--square-l btn--hover">XL</button>
                                    <button class="btn--square-l btn--hover">XXL</button>
                                </div>
                            </div>
                            <div class="active-content__info-title">
                                <p class="uppercase">Số lượng</p>
                                <button class="btn--square btn--hover">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button class="btn not-pointer">1</button>
                                <button class="btn--square btn--hover">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="active-content__cart">
                            <a href="../php/form_update.php?id=<?php echo $product['id'] ?>" class="mr-16">
                                <button class="btn-xl btn--primary uppercase">Sửa</button>
                            </a>
                            <a href="../php/delete.php?id=<?php echo $product['id'] ?>">
                                <button class="btn-xl btn--gray uppercase">Xoá</button>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="footer_text"
                style="width: 100%; height: 10rem; background-color: #333f48; text-align: center; color: #fff; font-size: 2rem; line-height: 10rem ;margin-top: 5rem;">
                Đây là footer</div>
        </footer>
    </div>
</body>

</html>