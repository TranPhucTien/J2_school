<section class="authen">
    <div class="container">
        <div class="authen-container">
            <div class="registered">
                <h2 class="registered-heading uppercase">Tạo tài khoản mới</h2>
                <p class="registered__desc-heading">Thông tin khách hàng</p>
                <form autocomplete="off" class="registered-form" action="process_signup.php" method="post">
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
                            <label for="email_signup">Email</label>
                            <span style="color: red;">*</span>
                        </div>
                        <input autocomplete="false" id="email_signup" type="email" class="input-sign" name="email">
                    </div>
                    <div class="registered-form-sign">
                        <div class="registered-form__title text">
                            <label for="password_signup">Mật khẩu</label>
                            <span style="color: red;">*</span>
                        </div>
                        <input autocomplete="false" id="password_signup" type="password" class="input-sign" name="password">
                    </div>
                    <div class="registered-form-sign">
                        <div class="registered-form__title text">
                            <p>Nhập lại mật khẩu</p>
                            <span style="color: red;">*</span>
                        </div>
                        <input autocomplete="false" type="password" class="input-sign" name="password_return">
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
                <a href="sign_in.php" class="btn btn--hover btn--primary">Đăng nhập</a>
            </div>
        </div>
    </div>
</section>