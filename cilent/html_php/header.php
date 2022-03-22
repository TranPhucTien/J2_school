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
                <form action="">
                    <div class="search">
                        <input type="search" placeholder="Tìm kiếm" name="search" value="<?php echo $search ?>">
                        <i class="fas fa-search search-icon"></i>
                    </div>
                </form>
                <div class="location">
                    <a href="#"><i class="fas fa-map-marker-alt location-icon icon"></i></a>
                </div>
                <div class="user">
                    <a href="login.php"><i class="fas fa-user-alt user-icon icon"></i></a>
                </div>
                <label for="cart" class="cart-icon">
                    <i class="fas fa-shopping-cart cursor-pointer icon"></i>
                </label>
            </div>
        </div>
    </div>
</header>