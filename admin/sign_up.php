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
    <link rel="stylesheet" href="../cilent/css/app.css">
</head>

<body>
    <?php 
    if(isset($_GET['error'])) {
        echo $_GET['error'];
    }
    ?>
    <div class="wrapper">
        <!-- -------------------------------------------- HEADER BEGIN -------------------------------------------- -->
        <header class="header">
            <div class="container">
                <div class="header__content">
                    <div class="logo">
                        <a href="index.php" class="logo-link">Nhóm 62</a>
                    </div>
                    <div class="header__menu">
                        <ul class="header__menu-list">
                            <li class="header__menu-item">
                                <a href="index.php">Nam</a>
                            </li>
                            <li class="header__menu-item">
                                <a href="girl.php">Nữ</a>
                            </li>
                            <li class="header__menu-item">
                                <a href="child.php">Trẻ em</a>
                            </li>
                            <li class="header__menu-item">
                                <a href="#">Bộ sưu tập</a>
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
                        <label for="cart" class="cart-icon">
                            <i class="fas fa-shopping-cart cursor-pointer icon"></i>
                        </label>
                    </div>
                </div>
            </div>
        </header>

        <!-- -------------------------------------------- CART BEGIN -------------------------------------------- -->
        <input type="checkbox" id="cart" class="cart-input-label">
        <label for="cart" class="overlay"></label>
        <section class="cart">
            <div class="cart-modal">
                <div class="cart-modal__heading">
                    Giỏ hàng của bạn
                    <label for="cart">
                        <i class="fas fa-times icon cart-icon-close"></i>
                    </label>
                </div>
                <div class="cart-modal-product">
                    <div class="cart-modal-product__image">
                        <img src="./image/ao/1.jpg" alt="" class="cart-modal__img">
                    </div>
                    <div class="cart-modal-product__content">
                        <div class="cart-modal-product__content-name">
                            <a href="#">Áo T-shirt cổ tròn cotton</a>
                        </div>
                        <div class="cart-modal-product__content-id">ID:8977831</div>
                        <div class="cart-modal-product__content-price">249.000đ</div>
                        <div class="cart-modal-product__content-quantity">
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
                </div>
                <div class="cart-modal-product">
                    <div class="cart-modal-product__image">
                        <img src="./image/ao/1.jpg" alt="" class="cart-modal__img">
                    </div>
                    <div class="cart-modal-product__content">
                        <div class="cart-modal-product__content-name">
                            <a href="#">Áo T-shirt cổ tròn cotton</a>
                        </div>
                        <div class="cart-modal-product__content-id">ID:8977831</div>
                        <div class="cart-modal-product__content-price">249.000đ</div>
                        <div class="cart-modal-product__content-quantity">
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
                </div>
                <div class="cart-modal-product">
                    <div class="cart-modal-product__image">
                        <img src="./image/ao/1.jpg" alt="" class="cart-modal__img">
                    </div>
                    <div class="cart-modal-product__content">
                        <div class="cart-modal-product__content-name">
                            <a href="#">Áo T-shirt cổ tròn cotton</a>
                        </div>
                        <div class="cart-modal-product__content-id">ID:8977831</div>
                        <div class="cart-modal-product__content-price">249.000đ</div>
                        <div class="cart-modal-product__content-quantity">
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
                </div>
                <div class="cart-modal-footer">
                    <div class="cart-modal-footer__money">
                        <span>Tổng tiền hàng</span>
                        <span>999.999đ</span>
                    </div>
                    <a href="#" class="cart-modal-footer__order">Đặt Hàng</a>
                </div>
            </div>
        </section>

        <!-- -------------------------------------------- NOTICE BEGIN -------------------------------------------- -->
        <section class="notice">
            <p class="notice-text">
                Miễn phí vận chuyển cho đơn hàng từ 100.000.000đ
            </p>
        </section>

        <section class="authen">
            <div class="container">
                <div class="authen-container">
                    <div class="registered">
                        <h2 class="registered-heading uppercase">Tạo tài khoản mới</h2>
                        <p class="registered__desc-heading">Thông tin khách hàng</p>
                        <form class="registered-form" action="process_signup.php" method="post">
                            <?php if (isset($_GET['error'])) { ?>
                            <p style="color: red; padding-bottom: 20px; font-size: 20px;"><?php echo $_GET['error'] ?></p>
                            <?php } ?>
                            <div class="registered-form-sign">
                                <div class="registered-form__title text">
                                    <p>Họ</p>
                                    <span style="color: red;">*</span>
                                </div>
                                <input type="text" class="input-sign" name="first_name">
                            </div>
                            <div class="registered-form-sign">
                                <div class="registered-form__title text">
                                    <p>Tên</p>
                                    <span style="color: red;">*</span>
                                </div>
                                <input type="text" class="input-sign" name="last_name">
                            </div>
                            <p class="registered__desc-heading">Thông tin đăng nhập</p>
                            <div class="registered-form-sign">
                                <div class="registered-form__title text">
                                    <p>Email</p>
                                    <span style="color: red;">*</span>
                                </div>
                                <input type="email" class="input-sign" name="email">
                            </div>
                            <div class="registered-form-sign">
                                <div class="registered-form__title text">
                                    <p>Mật khẩu</p>
                                    <span style="color: red;">*</span>
                                </div>
                                <input type="password" class="input-sign" name="password">
                            </div>
                            <div class="registered-form-sign">
                                <div class="registered-form__title text">
                                    <p>Nhập lại mật khẩu</p>
                                    <span style="color: red;">*</span>
                                </div>
                                <input type="password" class="input-sign" name="password_return">
                            </div>
                            <div class="registered-action">
                                <button type="submit" class="btn btn--primary btn--hover">
                                    Đăng kí
                                </button>
                            </div>
                            <p class="registered__forcus-text">*Đây là trường bắt buộc</p>
                        </form>
                    </div>
                    <div class="registration">
                        <div class="registered-desc-l">Đã có tài khoản?</div>
                        <a href="index.php" class="btn btn--hover btn--primary">Đăng nhập</a>
                    </div>
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