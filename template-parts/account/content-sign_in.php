<!--
=============================================
    Signup Page
==============================================
-->

<?php
if (is_user_logged_in()) {
    $current_user = wp_get_current_user();
    // printf( __( 'Username: %s', 'textdomain' ), esc_html( $current_user->user_login ) ) . '<br />';
    ?>
    <div class="signUp-page signUp-minimal pt-50 pb-100">
        <div class="shape-wrapper">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div> <!-- /.shape-wrapper -->
        <div class="signin-form-wrapper">
            <div class="title-area text-center">
                <h3><?php echo 'You are already logged in ' . esc_html( $current_user->user_login ); ?></h3>
            </div> <!-- /.title-area -->
            <script>
                // Redirection
                setTimeout(function () {
                    window.location.href = "https://mlab-studio.com";
                }, 7000);

                // Countdown
                function startTimer(duration, display) {
                    var timer = duration,  seconds;
                    setInterval(function () {
                        seconds = parseInt(timer % 60, 10);

                        seconds = seconds < 10 ? "0" + seconds : seconds;

                        display.textContent = seconds;

                        if (--timer < 0) {
                            timer = duration;
                        }
                    }, 1000);
                }

                window.onload = function () {
                    var fiveMinutes = 6,
                        display = document.querySelector('#time');
                    startTimer(fiveMinutes, display);
                };
            </script>
            <p class="signUp-text text-center">Proceed to the <a href="https://mlab-studio.com"> Home page</a> now.<br> Or you will be redirected in  <span id='time'></span> seconds.</p>
        </div> <!-- /.sign-up-form-wrapper -->
    </div> <!-- /.signUp-page -->
<?php } else { ?>
    <div class="signUp-page signUp-minimal pt-50 pb-100">
        <div class="shape-wrapper">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div> <!-- /.shape-wrapper -->
        <div class="signin-form-wrapper">
            <div class="title-area text-center">
                <h3>Login.</h3>
            </div> <!-- /.title-area -->
            <form action="#" id="login-form">
                <div class="row">
                    <div class="col-12">
                        <div class="input-group">
                            <input type="email" required="">
                            <label>Email</label>
                        </div> <!-- /.input-group -->
                    </div> <!-- /.col- -->
                    <div class="col-12">
                        <div class="input-group">
                            <input type="password" required="">
                            <label>Password</label>
                        </div> <!-- /.input-group -->
                    </div> <!-- /.col- -->
                </div> <!-- /.row -->
                <div class="agreement-checkbox d-flex justify-content-between align-items-center">
                    <div>
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                    <a href="#">Forget Password?</a>
                </div>
                <button class="line-button-one">Login</button>
            </form>
            <p class="signUp-text text-center">Don’t have any account? <a href="/sign-up">Sign up</a> now.</p>
        </div> <!-- /.sign-up-form-wrapper -->
    </div> <!-- /.signUp-page -->
<?php } ?>