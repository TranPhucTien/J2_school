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
    <link rel="stylesheet" href="./css/app.css">
</head>

<body>
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
        <section class="notice">
            <p class="notice-text">
                Miễn phí vận chuyển cho đơn hàng từ 100.000.000đ
            </p>
        </section>
        <section class="content">
            <div class="container">
                <div class="content__container">
                    <nav class="category">
                        <ul class="category__list">
                            <h3 class="category__heading">Danh Mục<i class="fas fa-chevron-down category__icon"></i>
                            </h3>

                            <li class="category__item">
                                <span>
                                    <input type="radio" name="category_choice" id="ao_phong">
                                    <label for="ao_phong">Áo phông</label>
                                </span>
                                <span>
                                    <input type="radio" name="category_choice" id="ao_khoac">
                                    <label for="ao_khoac">Áo Khoác</label>
                                </span>
                                <span>
                                    <input type="radio" name="category_choice" id="quan_short">
                                    <label for="quan_short">Quần short</label>
                                </span>
                            </li>
                        </ul>

                        <ul class="category__list">
                            <h3 class="category__heading">Màu sắc<i class="fas fa-chevron-down category__icon"></i>
                            </h3>

                            <li class="category__item">
                                <span>
                                    <input type="radio" name="color_choice" id="trang">
                                    <label for="trang">Trắng</label>
                                </span>
                                <span>
                                    <input type="radio" name="color_choice" id="vang">
                                    <label for="vang">Vàng</label>
                                </span>
                                <span>
                                    <input type="radio" name="color_choice" id="den">
                                    <label for="den">Đen</label>
                                </span>
                            </li>
                        </ul>

                        <ul class="category__list">
                            <h3 class="category__heading">Kích cỡ<i class="fas fa-chevron-down category__icon"></i></h3>

                            <li class="category__item">
                                <button class="btn--square btn--hover">S</button>
                                <button class="btn--square btn--hover">M</button>
                                <button class="btn--square btn--hover">L</button>
                                <button class="btn--square btn--hover">XL</button>
                                <button class="btn--square btn--hover">XXL</button>
                            </li>
                        </ul>
                    </nav>

                    <section class="grid__column-10">
                        <div class="home__filter">
                            <div class="home__filter-container">
                                <span class="home__filter-label">Sắp xếp theo:</span>
                                <button class="btn btn--hover btn--active">Phổ biến</button>
                                <button class="btn btn--hover">Mới nhất</button>
                                <button class="btn btn--hover">Bán chạy</button>

                                <div class="select-input">
                                    <span class="select-input__label">Giá</span>
                                    <i class="select-input__icon fas fa-angle-down"></i>
                                    <ul class="select-input__list">
                                        <li class="select-input__item">
                                            <a href="#" class="select-input__link">Giá: Thấp đên cao</a>
                                        </li>
                                        <li class="select-input__item">
                                            <a href="#" class="select-input__link">Giá: Cao đến thấp</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="home-product__container">
                            <div class="home-product">
                                <div class="grid__row">
                                    <div class="grid__column-2-4">
                                        <a href="active.php" class="home-product-item">
                                            <div class="home-product-item__img"
                                                style="background-image: url(./image/ao/3.jpg);"></div>
                                            <div class="home-product-item__name">Áo body dài tay bé trai cổ tròn</div>
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-old">200.000đ</span>
                                                <span class="home-product-item__price-current">199.000đ</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="grid__column-2-4">
                                        <a href="active.php" class="home-product-item">
                                            <div class="home-product-item__img"
                                                style="background-image: url(./image/ao/3.jpg);"></div>
                                            <div class="home-product-item__name">Áo body dài tay bé trai cổ tròn</div>
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-old">200.000đ</span>
                                                <span class="home-product-item__price-current">199.000đ</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="grid__column-2-4">
                                        <a href="active.php" class="home-product-item">
                                            <div class="home-product-item__img"
                                                style="background-image: url(./image/ao/3.jpg);"></div>
                                            <div class="home-product-item__name">Áo body dài tay bé trai cổ tròn</div>
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-old">200.000đ</span>
                                                <span class="home-product-item__price-current">199.000đ</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="grid__column-2-4">
                                        <a href="active.php" class="home-product-item">
                                            <div class="home-product-item__img"
                                                style="background-image: url(./image/ao/3.jpg);"></div>
                                            <div class="home-product-item__name">Áo body dài tay bé trai cổ tròn</div>
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-old">200.000đ</span>
                                                <span class="home-product-item__price-current">199.000đ</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="grid__column-2-4">
                                        <a href="active.php" class="home-product-item">
                                            <div class="home-product-item__img"
                                                style="background-image: url(./image/ao/3.jpg);"></div>
                                            <div class="home-product-item__name">Áo body dài tay bé trai cổ tròn</div>
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-old">200.000đ</span>
                                                <span class="home-product-item__price-current">199.000đ</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="grid__column-2-4">
                                        <a href="active.php" class="home-product-item">
                                            <div class="home-product-item__img"
                                                style="background-image: url(./image/ao/3.jpg);"></div>
                                            <div class="home-product-item__name">Áo body dài tay bé trai cổ tròn</div>
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-old">200.000đ</span>
                                                <span class="home-product-item__price-current">199.000đ</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="grid__column-2-4">
                                        <a href="active.php" class="home-product-item">
                                            <div class="home-product-item__img"
                                                style="background-image: url(./image/ao/3.jpg);"></div>
                                            <div class="home-product-item__name">Áo body dài tay bé trai cổ tròn</div>
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-old">200.000đ</span>
                                                <span class="home-product-item__price-current">199.000đ</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="grid__column-2-4">
                                        <a href="active.php" class="home-product-item">
                                            <div class="home-product-item__img"
                                                style="background-image: url(./image/ao/3.jpg);"></div>
                                            <div class="home-product-item__name">Áo body dài tay bé trai cổ tròn</div>
                                            <div class="home-product-item__price">
                                                <span class="home-product-item__price-old">200.000đ</span>
                                                <span class="home-product-item__price-current">199.000đ</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <ul class="pagination home-product__pagination">
                                <li class="pagination-item">
                                    <a href="#" class="pagination-item__link">
                                        <i class="pagination-item-icon fas fa-angle-left"></i>
                                    </a>
                                </li>
                                <li class="pagination-item pagination-item--active">
                                    <a href="#" class="pagination-item__link">1</a>
                                </li>
                                <li class="pagination-item">
                                    <a href="#" class="pagination-item__link">2</a>
                                </li>
                                <li class="pagination-item">
                                    <a href="#" class="pagination-item__link">3</a>
                                </li>
                                <li class="pagination-item">
                                    <a href="#" class="pagination-item__link">4</a>
                                </li>
                                <li class="pagination-item">
                                    <a href="#" class="pagination-item__link">5</a>
                                </li>
                                <li class="pagination-item">
                                    <a href="#" class="pagination-item__link">. . .</a>
                                </li>
                                <li class="pagination-item">
                                    <a href="#" class="pagination-item__link">14</a>
                                </li>
                                <li class="pagination-item">
                                    <a href="#" class="pagination-item__link">
                                        <i class="pagination-item-icon fas fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="footer_text" style="width: 100%; height: 10rem; background-color: #333f48; text-align: center; color: #fff; font-size: 2rem; line-height: 10rem ;margin-top: 5rem;">Đây là footer</div>
        </footer>
    </div>
</body>

</html>