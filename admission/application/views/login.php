<?php $this->load->view('inc/header')?>
<!-- begin:: Page -->
<div class="kt-grid kt-grid--ver kt-grid--root">
    <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v3 kt-login--signin" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(./assets/media//bg/bg-3.jpg);">
            <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                <div class="kt-login__container">
                    <div class="kt-login__logo">
                        <a href="#">
                            <img src="./assets/media/logos/logo-5.png">
                        </a>
                    </div>
                    <div class="">
                        <div class="kt-login__head">
                            <h3 class="kt-login__title">Sign In To User</h3>
                        </div>
                        <form class="kt-form" method="post" action="<?php echo base_url("Login")?>">
                            <div class="input-group">
                                <input class="form-control" type="email" placeholder="Email" name="email" required>
                            </div>
                            <div class="input-group">
                                <input class="form-control" type="password" placeholder="Password" name="password" required>
                            </div>
                            <div class="row kt-login__extra">
                                <div class="col">
                                    <label class="kt-checkbox">
                                        <input type="checkbox" name="remember"> Remember me
                                        <span></span>
                                    </label>
                                </div>
                                <div class="col kt-align-right">
                                    <a href="javascript:;" id="kt_login_forgot" class="kt-login__link">Forget Password ?</a>
                                </div>
                            </div>
                            <div class="kt-login__actions">
                                <button id="" type="submit" class="btn btn-brand btn-elevate kt-login__btn-primary">Log In</button>
                            </div>
                        </form>
                    </div>
                    <div class="kt-login__signup">
                        <div class="kt-login__head">
                            <h3 class="kt-login__title">Sign Up</h3>
                            <div class="kt-login__desc">Enter your details to create your account:</div>
                        </div>
                        <form class="kt-form" action="<?php echo base_url('index')?>" method="post">
                            <div class="input-group">
                                <select class="form-control" name="campus_id">
                                    <option value="">Choose Campus</option>
                                    <option value="1">Karachi</option>
                                    <option value="2">Islamabad</option>
                                    <option value="3">Peshawar</option>
                                    <option value="4">Lahore</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <select class="form-control" name="degree_id" value="apply">
                                    <option value="">Apply For</option>
                                    <option value="1">Undergraduate</option>
                                    <option value="2">Graduate</option>
                                    <option value="3">Phd</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" name="username" placeholder="Full Name">
                            </div>
                            <div class="input-group">
                                <input type="email" class="form-control" name="email" placeholder="Email Address">
                            </div>
                            <div class="input-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="input-group">
                                <input type="password" class="form-control" name="password" placeholder="Confirm Password">
                            </div>
                            <div class="row kt-login__extra">
                                <div class="col kt-align-left">
                                    <label class="kt-checkbox">
                                        <input type="checkbox" name="agree">I Agree the <a href="#" class="kt-link kt-login__link kt-font-bold">terms and conditions</a>.
                                        <span></span>
                                    </label>
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                            <div class="kt-login__actions">
                                <button id="kt_login_signup_submit" type="submit" class="btn btn-brand btn-elevate kt-login__btn-primary">Register</button>&nbsp;&nbsp;
                                <button id="kt_login_signup_cancel" class="btn btn-light btn-elevate kt-login__btn-secondary">Cancel</button>
                            </div>
                        </form>
                    </div>
                    <div class="kt-login__forgot">
                        <div class="kt-login__head">
                            <h3 class="kt-login__title">Forgotten Password ?</h3>
                            <div class="kt-login__desc">Enter your email to reset your password:</div>
                        </div>
                        <form class="kt-form" action="">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Email" name="email" id="kt_email" autocomplete="off">
                            </div>
                            <div class="kt-login__actions">
                                <button id="kt_login_forgot_submit" class="btn btn-brand btn-elevate kt-login__btn-primary">Request</button>&nbsp;&nbsp;
                                <button id="kt_login_forgot_cancel" class="btn btn-light btn-elevate kt-login__btn-secondary">Cancel</button>
                            </div>
                        </form>
                    </div>
                    <div class="kt-login__account">
								<span class="kt-login__account-msg">
									Don't have an account yet ?
								</span>
                        &nbsp;&nbsp;
                        <a href="<?php echo base_url()?>signup" class="kt-login__account-link">Sign Up!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end:: Page -->
<?php $this->load->view('inc/footer')?>
