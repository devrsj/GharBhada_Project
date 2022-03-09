<?php include('inc/header.php'); ?>

<!-------------------------
--------Register-Main----------
-------------------------->

<section class="register-main-wrap d-flex justify-content-center align-items-center bg-para" style="background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,.4)), url(images/register.jpg);">

    <div class="register-main" id="login"> <!-- Login-Card .// -->

        <div class="banner-wrap clearfix color-white">
            <h3 class="register-welcome float-left">Welcome Back</h3>
            <p class="register-btn-label float-right">Didn't Register Yet ? <button id="bttn-register">Register Now</button></p>
        </div>

        <div class="register-body bord-bottom">
             <!-- LOGIN .// --->
                <form action="login">
                    <label for="email">Email Address / Membership ID *</label>
                    <input type="email" required="required">

                    <label for="password">Password *</label>
                    <input type="password" class="u-margin-bottom-new" required="required">

                    <div class="clearfix">
                        <button class="login-submit float-left" type="button"><i class="fas fa-sign-in-alt"></i> Sign In</button>
                        <p class="forgot-password float-right">Forgot Password? Please <span id="bttn-login1">Click here</span></p>
                    </div>
                </form>
             <!-- LOGIN .// --->

        </div>
        <div class="register-body">
            <p class="forgot-password">Connect with:</p>
            <ul class="register-social">
                <li><a href="#" class="login-submit fb w-100"><i class="fab fa-facebook-f"></i>Sign in with Facebook</a></li>
                <li><a href="#" class="login-submit google w-100"><i class="fab fa-google-plus-g"></i>Sign in with Google</a></li>
            </ul>
        </div>
    </div> <!-- Login-Card .// -->


    <div class="register-main" id="register"> <!-- Register-Card .// -->

        <div class="banner-wrap clearfix color-white">
            <h3 class="register-welcome float-left">Register Yourself</h3>
            <p class="register-btn-label float-right">Already Registered ? <button id="bttn-login">Login</button></p>
        </div>

        <div class="register-body bord-bottom">

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-buyer-tab" data-toggle="tab" href="#nav-buyer" role="tab" aria-controls="nav-buyer" aria-selected="true">Buyer</a>
                <a class="nav-item nav-link" id="nav-seller-tab" data-toggle="tab" href="#nav-seller" role="tab" aria-controls="nav-seller" aria-selected="false">Seller</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-buyer" role="tabpanel" aria-labelledby="nav-buyer-tab"><!-- TAB .// -->

                <!-- REGISTER .// -->
                <form action="register-buyer" required="required">

                    <label for="first">First Name *</label>
                    <input type="text" required="required">

                    <label for="last">Last Name *</label>
                    <input type="text" required>

                    <label for="username">Landline Number *</label>
                    <input type="text" placeholder="01-****">

                    <label for="username">Mobile Number (NTC) *</label>
                    <input type="text" placeholder="9841****">

                    <label for="username">Mobile Number (Ncell) *</label>
                    <input type="text" placeholder="9801****">

                    <label for="email">Email Address *</label>
                    <input type="email" required>

                    <label for="password">Password *</label>
                    <input type="password" class="u-margin-bottom-new" required>

                    <a class="login-submit" href="agreement.php"><i class="fas fa-sign-in-alt"></i> Sign Up</a>

                </form>
            <!-- REGISTER .// -->

            </div><!-- TAB .// -->

            <div class="tab-pane fade" id="nav-seller" role="tabpanel" aria-labelledby="nav-seller-tab"><!-- TAB .// -->

                <!-- REGISTER .// -->
                <form action="register-seller">

                    <label for="first">First Name *</label>
                    <input type="text" required>

                    <label for="last">Last Name *</label>
                    <input type="text" required>

                    <label for="username">Landline Number *</label>
                    <input type="text" placeholder="01-****">

                    <label for="username">Mobile Number (NTC) *</label>
                    <input type="text" placeholder="9841****">

                    <label for="username">Mobile Number (Ncell) *</label>
                    <input type="text" placeholder="9801****">

                    <label for="email">Email Address *</label>
                    <input type="email" required>

                    <label for="password">Password *</label>
                    <input type="password" class="u-margin-bottom-new" required>

                    <!-- <button class="login-submit" type="button"><i class="fas fa-sign-in-alt"></i> Sign Up</button> -->
                    <a class="login-submit" href="agreement.php"><i class="fas fa-sign-in-alt"></i> Sign Up</a>

                </form>
            <!-- REGISTER .// -->

            </div><!-- TAB .// -->
        </div>

            <!-- REGISTER .// -->
                <!-- <form action="register">

                    <label for="first">First Name *</label>
                    <input type="text" required>

                    <label for="last">Last Name *</label>
                    <input type="text" required>

                    <label for="username">Contact Number *</label>
                    <input type="text" required>

                    <label for="email">Email Address *</label>
                    <input type="email" required>

                    <label for="password">Password *</label>
                    <input type="password" class="u-margin-bottom-new" required>

                    <button class="login-submit" type="button"><i class="fas fa-sign-in-alt"></i> Sign Up</button>

                </form> -->
            <!-- REGISTER .// -->

        </div>
        <div class="register-body">
            <p class="forgot-password">Connect with:</p>
            <ul class="register-social">
                <li><a href="#" class="login-submit fb w-100"><i class="fab fa-facebook-f"></i>Sign in with Facebook</a></li>
                <li><a href="#" class="login-submit google w-100"><i class="fab fa-google-plus-g"></i>Sign in with Google</a></li>
            </ul>
        </div>
    </div> <!-- Register-Card .// -->

    <div class="register-main" id="reset"> <!-- Reset-Card .// -->

        <div class="banner-wrap clearfix color-white">
            <h3 class="register-welcome float-left">Reset Password</h3>
            <p class="register-btn-label float-right">Go Back to login page <button id="bttn-login2">Login</button></p>
        </div>

        <div class="register-body bord-bottom">

            <!-- RESET .// -->
                <form action="register">

                    <label for="email">Email Address *</label>
                    <input type="email" class="u-margin-bottom-new" required>

                    <button class="login-submit" type="button">Recover Password</button>

                </form>
            <!-- RESET .// -->

        </div>
    </div> <!-- Reset-Card .// -->

</section>

<!-------------------------
--------Register-Main----------
-------------------------->


<?php include('inc/footer.php'); ?>