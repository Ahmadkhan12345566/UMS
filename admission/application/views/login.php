<?php $this->load->view('inc/header');?>
<style>
    .body-background{
        background: linear-gradient(90deg, #ECF0F1   0%,#fff 100%);
        margin-top: 150px !important;
    }
</style>
    <div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12"></div>
                <div class="col-md-6 col-xs-12 shadow p-3 mb-5 bg-white rounded">
                    <h2 class="text-center text-secondary mb-3">Login</h2>
                    <div class="p-4">
                        <form action="<?php echo base_url("Login");?>" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <a href="#">Forget password?</a>
                            </div>
                            <div class="form-group pt-3">
                                <button type="submit" class="btn btn-primary pull-right">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('inc/header');?>