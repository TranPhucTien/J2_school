<section class="active-content">
    <div class="container">
        <div class="active-content__container">
            <?php foreach ($result as $product) { ?>
                <div class="active-content__image">
                    <img src="../admin/php/photos/<?php echo $product['photo'] ?>" alt="" class="active-content__img">
                </div>
                <div class="active-information">
                    <div class="active-content__info">
                        <h2 class="active-content__info-heading uppercase"><?php echo $product['name'] ?></h2>
                        <p class="active-content__info-des">
                            <span>ID: <?php echo $product['id'] ?></span>
                            <span>Đã bán: 3362</span>
                        </p>
                        <div class="active-content__info-price"><?php echo number_format($product['price'], $decimals = 0, $dec_point = ".", $thousands_sep = ".") ?>đ</div>
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
                            <button class="btn-xl btn--primary uppercase">Mua ngay</button>
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