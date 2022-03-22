<section class="authen">
    <div class="container">
        <div class="authen-container">
            <div class="registered">
                <h2 class="registered-heading uppercase">Tài khoản</h2>
                <p class="registered-desc">Khách hàng đã đăng ký tài khoản</p>
                <p class="registered-notify text">Bạn đã có tài khoản? Xin mời đăng nhập bằng địa chỉ email đăng
                    ký.
                </p>
                <form class="registered-form" method="post" action="process_signin.php">
                    <div class="registered-form-sign">
                        <div class="registered-form__title text">
                            <label for="email_signin">Email</label>
                            <span style="color: red;">*</span>
                        </div>
                        <input id="email_signin" type="email" class="input-sign" name="email">
                    </div>
                    <div class="registered-form-sign">
                        <div class="registered-form__title text">
                            <label for="password_signin">Mật khẩu</label>
                            <span style="color: red;">*</span>
                        </div>
                        <input autocomplete="off" id="password_signin" type="password" class="input-sign" name="password">
                    </div>
                    <div class="registered-form-sign-remember">
                        <input checked id="remember_signin" type="checkbox" name="remember">
                        <label for="remember_signin" class="registered-form-sign-remember-text">Ghi nhớ đăng nhập</label>
                    </div>
                    <div class="registered-action">
                        <button type="submit" class="btn btn--primary btn--hover">
                            Đăng nhập
                        </button>
                        <a href="./sign_up.php" class="text registered-action__forget-password">Quên mật khẩu?</a>
                    </div>
                    <p class="registered__forcus-text">*Đây là trường bắt buộc</p>
                </form>
            </div>
            <div class="registration">
                <div class="registered-desc">Bạn chưa có tài khoản? Đăng kí ngay!!!</div>
                <a href="sign_up.php" class="btn btn--hover btn--primary">Đăng kí</a>
            </div>
        </div>
    </div>
</section>