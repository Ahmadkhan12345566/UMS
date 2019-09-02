<?php $this->load->view('inc/header')?>
<!-- begin:: Page -->
<div class="kt-grid kt-grid--ver kt-grid--root">
    <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v3" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(./assets/media//bg/bg-3.jpg);">
            <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                <div class="kt-login__container mb-4">
                    <div class="kt-login__signup">
                        <div class="kt-login__head">
                            <h3 class="kt-login__title">Sign Up</h3>
                            <div class="kt-login__desc">Enter your details to create your account:</div>
                        </div>
                        <form class="kt-form" action="<?php echo base_url('signup')?>" method="post">
                            <div class="input-group">
                                <select class="form-control" name="campus_id" required>
                                    <option value="">Choose Campus</option>
                                    <option value="1">Karachi</option>
                                    <option value="2">Islamabad</option>
                                    <option value="3">Peshawar</option>
                                    <option value="4">Lahore</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <select class="form-control" name="degree_id" required>
                                    <option value="">Apply For</option>
                                    <option value="1">Undergraduate</option>
                                    <option value="2">Graduate</option>
                                    <option value="3">Phd</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" name="username" placeholder="Full Name" required>
                            </div>
                            <div class="input-group">
                                <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                            </div>
                            <div class="input-group">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                            <div class="input-group">
                                <input type="password" class="form-control" name="password" placeholder="Confirm Password" required>
                            </div>
<!--                            <div class="row kt-login__extra">-->
<!--                                <div class="col kt-align-left">-->
<!--                                    <label class="kt-checkbox">-->
<!--                                        <input type="checkbox" name="agree">I Agree the <a href="#" class="kt-link kt-login__link kt-font-bold">terms and conditions</a>.-->
<!--                                        <span></span>-->
<!--                                    </label>-->
<!--                                    <span class="form-text text-muted"></span>-->
<!--                                </div>-->
<!--                            </div>-->
                            <div class="kt-login__actions">
                                <button  type="submit" class="btn btn-brand btn-elevate kt-login__btn-primary">Register</button>&nbsp;&nbsp;
                                <button  type="reset" class="btn btn-light btn-elevate kt-login__btn-secondary">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end:: Page -->
<?php $this->load->view('inc/footer')?>
