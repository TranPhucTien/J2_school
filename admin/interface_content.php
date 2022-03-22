<section class="content">
    <div class="container">
        <div class="content__container">

            <!-- ---------------------------------------- CATEGORY ---------------------------------------- -->
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

            <!-- --------------------------------- FILTER --------------------------------- -->
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

                <!-- ----------------------------------- PRODUCT ----------------------------------- -->
                <div class="home-product__container">
                    <div class="home-product">
                        <div class="grid__row">
                            <!-- php -->
                            <?php foreach ($result as $each_product) { ?>
                                <div class="grid__column-2-4">
                                    <a href="active.php?id=<?php echo $each_product['id'] ?>" class="home-product-item">
                                        <div class="home-product-item__img" style="background-image: url(../admin/php/photos/<?php echo $each_product['photo'] ?>);"></div>
                                        <div class="home-product-item__name"><?php echo $each_product['name']; ?></div>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">200.000đ</span>
                                            <span class="home-product-item__price-current"><?php echo number_format($each_product['price'], $decimals = 0, $dec_point = ".", $thousands_sep = ".");
                                                                                            echo "đ" ?></span>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <ul class="pagination home-product__pagination">
                        <li class="pagination-item">
                            <a href="#" class="pagination-item__link">
                                <i class="pagination-item-icon fas fa-angle-left"></i>
                            </a>
                        </li>
                        <?php for ($i = 1; $i <= $page_number; $i++) { ?>
                            <li class="pagination-item pagination-item--active">
                                <a href="?page=<?php echo $i ?>&search=<?php echo $search ?>" class="pagination-item__link">
                                    <?php echo $i ?>
                                </a>
                            </li>
                        <?php } ?>
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