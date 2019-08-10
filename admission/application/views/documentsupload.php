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
                    <a class="navbar-brand" href="#pablo">Documents Upload</a>
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
                            <form method="post" action="<?php echo base_url("Student/documents_upload")?>">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12  pr-1">
                                        <h5>Please Upload Your Documents</h5>
                                        <div class="alert alert-info"  role="alert">
                                            <stronge>
                                                Please make sure that image size for each document is not more than 2MB. Use some <a href="https://compressimage.toolur.com/" style="color: white;"><b>image size reducer</b></a> tool like
                                            <a href="https://compressimage.toolur.com/" style="color: white;"><b>this</b></a> one to reduce the size of image if its higher than 2MB.</stronge>
                                        </div>
                                        <div class="alert alert-info"  role="alert">
                                            <stronge>You may also take snapshot of your documents from mobile and upload.
                                                But make sure that document image must be clearly visible. If document image cannot be read, it cannot be accepted.</stronge>
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-sm-12 col-xs-12 pr-1">
                                        <fieldset>
                                            <legend>SSC Document</legend>
                                            <div class="alert alert-info" role="alert" style="width: 70%;"><strong>Scan and upload SSC or equivalent transcript</strong></div>
                                           <div class="row">
                                               <div class="col-md-6" data-bind="ifnot: $root.isSubmitted()">
                                                   <div class="form-group">
                                                       <label class="btn btn-success" style="color: white;">
                                                           <i class="fas fa-plus"></i> Upload SSC... <input type="file" id="SscDoc" name="sscfileupload" hidden>
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
                                    <div class="col-md-10 col-sm-12 col-xs-12 pr-1">
                                            <fieldset>
                                                <legend>HSSC / A-Level / DAE / Equivalent Document</legend>
                                                <div class="row">
                                                    <div class="col-md-6" data-bind="ifnot: $root.isSubmitted()">
                                                        <div class="form-group">
                                                            <label class="btn btn-success" style="color: white;">
                                                                <i class="fas fa-plus"></i> Upload HSSC <input type="file" id="HsscDoc" name="hsscfileupload" hidden>
                                                            </label>
                                                        </div>
                                                        <div aria-valuemax="100" aria-valuemin="0" role="progressbar" class="progress progress-striped active">
                                                            <div id="progress1" style="width: 0%;" class="progress-bar progress-bar-success"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-4">
                                                        <a class="image-link" data-bind="attr: { href: HSSCDocument() }" href="/Content/Images/ed_details/hssc/">
                                                            <img data-bind="attr: { src: HSSCDocument() }" src="/Content/Images/ed_details/hssc/" width="60" height="60">
                                                        </a>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    <div class="col-md-10 col-sm-12 col-xs-12 pr-1">
                                        <fieldset>
                                            <legend>Upload CNIC</legend>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12 col-xs-12" data-bind="ifnot: $root.isSubmitted()">
                                                    <div class="form-group">
                                                        <input type="radio" name="RegistrationOption" id="CNICoption" value="CNIC" checked required> CNIC
                                                        <input type="radio" name="RegistrationOption" id="b-foamoption" value="b-foam" required> B-Foam
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="btn btn-success" style="color: white;">
                                                            <i class="fas fa-plus"></i> Upload CNIC Front <input type="file" id="CNICFront" name="cnicfront" hidden>
                                                        </label>
                                                    </div>
                                                    <div aria-valuemax="100" aria-valuemin="0" role="progressbar" class="progress progress-striped active">
                                                        <div id="progress1" style="width: 0%;" class="progress-bar progress-bar-success"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-4 col-sm-6">
                                                    <br><br>
                                                    <a class="image-link" data-bind="attr: { href: CNICFront() }" href="/Content/Images/ed_details/cnicfront/">
                                                        <img data-bind="attr: { src: CNICFront() }" src="/Content/Images/ed_details/cnicfront/" width="60" height="60">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6" data-bind="ifnot: $root.isSubmitted()">
                                                    <div class="form-group">
                                                        <label class="btn btn-success" style="color: white;">
                                                            <i class="fas fa-plus"></i> Upload CNIC Back <input type="file" id="CNICBack" name="cnicback" hidden>
                                                        </label>
                                                    </div>
                                                    <div aria-valuemax="100" aria-valuemin="0" role="progressbar" class="progress progress-striped active">
                                                        <div id="progress1" style="width: 0%;" class="progress-bar progress-bar-success"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-4 col-sm-6">
                                                    <a class="image-link" data-bind="attr: { href: CNICBack() }" href="/Content/Images/ed_details/cnicback/">
                                                        <img data-bind="attr: { src: CNICBack() }" src="/Content/Images/ed_details/cnicback/" width="60" height="60">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6" data-bind="ifnot: $root.isSubmitted()">
                                                    <div class="form-group">
                                                        <label class="btn btn-success" style="color: white;">
                                                            <i class="fas fa-plus"></i> Upload B-Foam <input type="file" id="B-FoamDoc" name="bfoam" hidden>
                                                        </label>
                                                    </div>
                                                    <div aria-valuemax="100" aria-valuemin="0" role="progressbar" class="progress progress-striped active">
                                                        <div id="progress1" style="width: 0%;" class="progress-bar progress-bar-success"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-4 col-sm-6">
                                                    <a class="image-link" data-bind="attr: { href: BFoam() }" href="/Content/Images/ed_details/bfoam/">
                                                        <img data-bind="attr: { src: BFoam() }" src="/Content/Images/ed_details/bfoam/" width="60" height="60">
                                                    </a>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-10 col-sm-12 col-xs-12 pr-1">
                                        <fieldset>
                                            <legend>BS / MSc / MA Transcript</legend>
                                            <div class="alert alert-info" role="alert" style="width: 75%;"><strong>Scan and upload BS / MSc / MA or equivalent transcript</strong></div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="btn btn-success" style="color: white;">
                                                            <i class="fas fa-plus"></i> Upload Transcript... <input type="file" id="TranscriptDoc" name="transcript" hidden>
                                                        </label>
                                                    </div>
                                                    <div aria-valuemax="100" aria-valuemin="0" role="progressbar" class="progress progress-striped active">
                                                        <div id="progress1" style="width: 0%;" class="progress-bar progress-bar-success"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-4 col-sm-6">
                                                    <a class="image-link" data-bind="attr: { href: Transcript() }" href="/Content/Images/ed_details/transcript/">
                                                        <img data-bind="attr: { src: Transcript() }" src="/Content/Images/ed_details/transcript/" width="60" height="60">
                                                    </a>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-10 col-sm-12 col-xs-12 pr-1">
                                        <fieldset>
                                            <legend>NTS Result (if any)</legend>
                                            <div class="row">
                                                <div class="col-md-6" data-bind="ifnot: $root.isSubmitted()">
                                                    <div class="form-group">
                                                        <label class="btn btn-success" style="color: white;">
                                                            <i class="fas fa-plus"></i> Upload NTS... <input type="file" id="NTSDoc" name="nts" hidden>
                                                        </label>
                                                    </div>
                                                    <div aria-valuemax="100" aria-valuemin="0" role="progressbar" class="progress progress-striped active">
                                                        <div id="progress1" style="width: 0%;" class="progress-bar progress-bar-success"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-4 col-sm-6">
                                                    <a class="image-link" data-bind="attr: { href: NTS() }" href="/Content/Images/ed_details/nts/">
                                                        <img data-bind="attr: { src: NTS() }" src="/Content/Images/ed_details/nts/" width="60" height="60">
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
                                    You must scan your officially issued documents. If the document is in colour, scan it in colour.
                                </li>
                                <li>
                                    All files must be in PNG/JPG/JPEG to be accepted for uploading.
                                </li>
                                <li>
                                    Check your scan to see that everything on the original document can be. If your scan cannot be read, it cannot be accepted.
                                </li>
                                <li>
                                    Scan SSC result card and upload
                                </li>
                                <li>
                                    Scan HSSC result card and upload
                                </li>
                                <li>
                                    Scan CNIC Front and back separately and upload
                                </li>
                                <li>
                                    Scan NTS result card and upload
                                </li>
                                <li>
                                    Make sure that all documents are clearly visible.
                                </li>
                                <li>
                                    File names should be kept short and cannot include brackets, quotations or any special characters.
                                </li>
                                <li>
                                    The maximum file size for each document is 2MB.
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