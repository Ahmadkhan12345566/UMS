<?php $this->load->view('inc/header.php'); ?>
    <div class="wrapper ">
<?php $this->load->view('inc/sidebar.php'); ?>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#pablo">Confirm Fee </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <form>
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="nc-icon nc-zoom-split"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link btn-magnify" href="#pablo">
                                <i class="nc-icon nc-layout-11"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Stats</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item btn-rotate dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="nc-icon nc-bell-55"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Some Actions</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-rotate" href="#pablo">
                                <i class="nc-icon nc-settings-gear-65"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Account</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <!-- <div class="panel-header panel-header-lg">

    <canvas id="bigDashboardChart"></canvas>


  </div> -->

        <div class="content">
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-user">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12  pr-1">
                                        <div class="form-group">
                                            <h4>Confirm Admission Fee </h4>
                                            <div class="alert alert-danger" role="alert">
                                                Your application is not fully complete yet. Please complete all the remaining steps and then submit the
                                                application. You've yet to complete following step(s)
                                                <ul>
                                                    <li>
                                                        <b>Confirm Fee</b>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12  pr-1">
                                        <div class="form-group">
                                            <div class="alert alert-danger" role="alert">
                                                Your Application shall not be entertained unless you deposit your admission charges and provide bank details in this form.
                                                <br>
                                                You may also take snapshot of your paid challan from mobile and upload. But make sure that challan image must be clearly visible.
                                                If challan image cannot be read, it cannot be accepted. <br>
                                                Please make sure that image size of scanned challan is not more than 2MB. Use some
                                                <a href="https://compressimage.toolur.com/" style="color: white;"><b>image size reducer</b></a> tool like <a href="https://compressimage.toolur.com/" style="color: white;"><b>this one</b></a> to reduce the size of
                                                image if its higher than 2MB.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12  pr-1">
                                        <div class="form-group">
                                            <div class="alert alert-success" role="alert">
                                                Print your fee challan and <b>deposit your fee in the bank.</b>
                                                <br><br>

                                                <center>
                                                    <a href="/Candidate/Pdf/FeeChallan" class="btn-success" target="_blank" title="print application form" style="font-size: 30px; background: transparent; text-align: center;">
                                                        <i class="fas fa-print"></i>
                                                    </a>
                                                &nbsp;&nbsp;
                                                    <a href="/Candidate/Pdf/FeeChallan?download=true" class="btn-success" title="download application form" style="font-size: 30px; background: transparent;  text-align: center;">
                                                        <i class="fas fa-cloud-download-alt"></i>
                                                    </a>
                                                </center>
                                                <br>
                                                After depositing the <b>Admission Processing Fee UPLOAD Scanned Copy of Paid Challan</b> along-with bank details on below form.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12  pr-1">
                                        <div class="form-group">
                                            <label for="control-label">Bank Name</label>
                                            <input type="text" name="bankname" id="bankname" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-xs-12  pr-1">
                                        <div class="form-group">
                                            <label for="control-label">Branch Code</label>
                                            <input type="text" name="branchcode" id="branchcode" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12  pr-1">
                                        <div class="form-group">
                                            <label for="control-label">Bank Address</label>
                                            <input type="text" name="bankaddress" id="bankaddress" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12  pr-1">
                                        <div class="form-group">
                                            <label for="control-label">Deposit Date</label>
                                            <input type="date" name="depositdate" id="depositdate" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12  pr-1">
                                        <fieldset class="scheduler-border">
                                            <legend class="scheduler-border">Upload Challan</legend>
                                            <div class="form-group">
                                                <div class="alert alert-primary" role="alert">
                                                    Make sure that bank stamp and signatures are clearly visible on the challan image.
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6" data-bind="ifnot: $root.isSubmitted()">
                                                    <div class="form-group">
                                                        <label class="btn btn-success" style="color: white;">
                                                            <i class="fas fa-plus"></i> Upload Challan <input type="file" id="challan" name="fileupload" hidden>
                                                        </label>
                                                    </div>
                                                    <div aria-valuemax="100" aria-valuemin="0" role="progressbar" class="progress progress-striped active">
                                                        <div id="progress1" style="width: 0%;" class="progress-bar progress-bar-success"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xs-4">
                                                    <a class="image-link" data-bind="attr: { href: SSCDocument() }" href="/Content/Images/ed_details/ssc/">
                                                        <img data-bind="attr: { src: SSCDocument() }" src="/Content/Images/ed_details/ssc/" width="60" height="60">
                                                    </a>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="card-header">
                                    <h5 class="card-title">NTS Details</h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12  pr-1">
                                        <div class="form-group">
                                            <label for="control-label">Bank Name</label>
                                            <input type="text" name="bankname" id="bankname" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-xs-12  pr-1">
                                        <div class="form-group">
                                            <label for="control-label">Branch Code</label>
                                            <input type="text" name="branchcode" id="branchcode" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12  pr-1">
                                        <div class="form-group">
                                            <label for="control-label">Bank Address</label>
                                            <input type="text" name="bankaddress" id="bankaddress" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12  pr-1">
                                        <div class="form-group">
                                            <label for="control-label">Deposit Date</label>
                                            <input type="date" name="depositdate" id="depositdate" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <fieldset class="scheduler-border">
                                            <legend class="scheduler-border" style="color: black;">Upload NTS Challan</legend>
                                            <div class="form-group">
                                                <div class="alert alert-primary" role="alert">
                                                    Make sure that bank stamp and signatures are clearly visible on the NTS challan image.
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6" data-bind="ifnot: $root.isSubmitted()">
                                                    <div class="form-group">
                                                        <label class="btn btn-success" style="color: white;">
                                                            <i class="fas fa-plus"></i> Upload NTS Challan <input type="file" id="challan" name="fileupload" hidden>
                                                        </label>
                                                    </div>
                                                    <div aria-valuemax="100" aria-valuemin="0" role="progressbar" class="progress progress-striped active">
                                                        <div id="progress1" style="width: 0%;" class="progress-bar progress-bar-success"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-xs-4">
                                                    <a class="image-link" data-bind="attr: { href: SSCDocument() }" href="/Content/Images/ed_details/ssc/">
                                                        <img data-bind="attr: { src: SSCDocument() }" src="/Content/Images/ed_details/ssc/" width="60" height="60">
                                                    </a>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="update ml-auto mr-auto">
                                        <button type="submit" class="btn btn-primary btn-round">Save and Move Next</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 col">
                    <div class="card card-body">
                        <div class="author">
                            <h5 class="title" style="color: #51CBCE;">Help Center</h5>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>
                                    <a href="#"><b>Print</b></a><b> your Fee Challan</b>
                                </li>
                                <li>
                                    University is also offering Hostel and Pick & Drop Facility.
                                    Choose the option if you want to avail the service. If Not Skip this step and move next.
                                </li>
                                <li>
                                    UDeposit admission processing charges in the bank.
                                </li>
                                <li>
                                    Upload Scanned Copy of PAID Challan.
                                </li>
                                <li>
                                    Enter details of the bank in which you have deposited admission processing charges.
                                </li>
                                <li>
                                    <b>Your Application shall not be entertained unless you deposit your admission charges and provide bank details in this form.</b>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <hr>
                            <div class="button-container">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 ml-auto mr-auto">
                                        <small><b>Any misuse or false attempt will result in cancellation of your application.
                                                You are liable to provide the information that is true to the best of your knowledge.
                                                Administration is not responsible for any misuse or false attempt.</b></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php include 'inc/footer.php';?>