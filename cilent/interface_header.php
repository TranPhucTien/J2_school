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
                        <?php if (isset($search)) { ?>
                            <input type="search" placeholder="Tìm kiếm" name="search" value="<?php echo $search ?>">
                        <?php } else { ?>
                            <input type="search" placeholder="Tìm kiếm" name="search">
                        <?php } ?>
                        <i class="fas fa-search search-icon"></i>
                    </div>
                </form>
                <?php if (isset($_SESSION['id'])) { ?>
                    <div class="user_hover">
                        <div class="user_logined">
                            <p class="text user_logined_name"><?php echo $_SESSION['last_name'] ?></p>
                            <img src="./image/avatar.png" class="user_logined-avatar" alt="">
                            <i class="fa-solid fa-chevron-down user_logined-icon"></i>
                        </div>
                        <div class="user-info">
                            <img src="./image/avatar.png" class="user-info-avatar" alt="">
                            <p class="user-info-name"><?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name']; ?></p>
                            <a href="sign_out.php" class="btn btn--primary">Đăng xuất</a>
                        </div>
                    </div>
                        <!-- <label class="user_logined">
                            <img src="./image/avatar.png" class="user_logined-avatar" alt="">
                            <i class="fa-solid fa-chevron-down user_logined-icon"></i>
                        </label>
                        <input class="user-info">
                            <img src="./image/avatar.png" class="user-info-avatar" alt="">
                            <p class="user-info-name"><?php echo $_SESSION['first_name'] . $_SESSION['last_name']; ?></p>
                            <a href="sign_out.php" class="btn btn--primary">Đăng xuất</a>
                        </input> -->
                <?php } else { ?>
                    <div class="user">
                        <a href="sign_in.php"><i class="fas fa-user-alt user-icon icon"></i></a>
                    </div>
                <?php } ?>
                <label for="cart" class="cart-icon">
                    <i class="fas fa-shopping-cart cursor-pointer icon icon-hover"></i>
                </label>
            </div>
        </div>
    </div>
</header>