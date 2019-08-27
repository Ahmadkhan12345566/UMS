<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main" >
            <h3 class="kt-subheader__title">
                Documents Upload </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="<?php echo base_url()?>instructions" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- end:: Subheader -->
<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <!-- Form -->
    <!--begin:: Personal Information -->
    <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Please Upload Documents Pictures
                        </h3>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-10 col-sm-10 col-xs-10 offset-1">
                        <div class="alert alert-solid-brand alert-bold" role="alert">
                            <div class="alert-icon"><i class="flaticon-warning"></i></div>
                            <div class="alert-text">Please make sure that image size for each document is not more than 2MB. Use some <a href="https://compressimage.toolur.com/"><b>image size reducer</b></a> tool like
                                <a href="https://compressimage.toolur.com/"><b>this</b></a> one to reduce the size of image if its higher than 2MB.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 offset-1">
                        <div class="alert alert-elevate alert-light alert-bold" role="alert">
                            <div class="alert-icon"><i class="flaticon-questions-circular-button"></i></div>
                            <div class="alert-text">You may also take snapshot of your documents from mobile and upload.
                                But make sure that document image must be clearly visible. If document image cannot be read, it cannot be accepted.
                            </div>
                        </div>
                    </div>
                </div>

                <!--begin::Form-->
                <form method="post" action="<?php echo base_url("personalinformation")?>" class="kt-form">
                    <div class="kt-portlet">
                        <div class="kt-portlet__body">
                            <div class="kt-portlet">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <h4 class="form-label">SSC Document</h4>
                                        <div class="row">
                                            <div class="col-md-10 col-sm-10 col-xs-10 offset-1">
                                                <div class="alert alert-solid-brand alert-bold" role="alert">
                                                    <div class="alert-icon"><i class="flaticon-warning"></i></div>
                                                    <div class="alert-text">Scan and upload SSC or equivalent transcript
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-dropzone dropzone" action="inc/api/dropzone/upload.php" id="m-dropzone-one">
                                            <div class="kt-dropzone__msg dz-message needsclick">
                                                <h5 class="kt-dropzone__msg-title">Drop files here or click to upload.</h5>
                                                <span class="kt-dropzone__msg-desc">Upload only <b>SSC</b> documents file</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="kt-portlet">
                                <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <h4 class="form-label">HSSC / A-Level / DAE / Equivalent Document</h4>
                                        <div class="kt-dropzone dropzone" action="inc/api/dropzone/upload.php" id="m-dropzone-one">
                                            <div class="kt-dropzone__msg dz-message needsclick">
                                                <h5 class="kt-dropzone__msg-title">Drop files here or click to upload.</h5>
                                                <span class="kt-dropzone__msg-desc">Upload only <b>HSSC / A-Level / DAE</b> documents file</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="kt-portlet">
                                <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <h4 class="form-label">Upload CNIC or B-form</h4>
                                        <div class="kt-dropzone dropzone m-dropzone--primary" action="inc/api/dropzone/upload.php" id="m-dropzone-two">
                                            <div class="kt-dropzone__msg dz-message needsclick">
                                                <h5 class="kt-dropzone__msg-title">Drop files here or click to upload.</h5>
                                                <span class="kt-dropzone__msg-desc">Upload up to <b>both</b> sides scan copy of CNIC.</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="kt-portlet">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <h4 class="form-label">BS / MSc / MA Transcript</h4>
                                        <div class="row">
                                            <div class="col-md-10 col-sm-10 col-xs-10 offset-1">
                                                <div class="alert alert-solid-brand alert-bold" role="alert">
                                                    <div class="alert-icon"><i class="flaticon-warning"></i></div>
                                                    <div class="alert-text">Scan and upload BS / MSc / MA or equivalent transcript
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-dropzone dropzone" action="inc/api/dropzone/upload.php" id="m-dropzone-one">
                                            <div class="kt-dropzone__msg dz-message needsclick">
                                                <h5 class="kt-dropzone__msg-title">Drop files here or click to upload.</h5>
                                                <span class="kt-dropzone__msg-desc">Upload only <b>BS / MSc / MA Transcript</b> documents file</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="kt-portlet">
                                <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <h4 class="form-label">NTS Result (if any)</h4>
                                        <div class="kt-dropzone dropzone" action="inc/api/dropzone/upload.php" id="m-dropzone-one">
                                            <div class="kt-dropzone__msg dz-message needsclick">
                                                <h5 class="kt-dropzone__msg-title">Drop files here or click to upload.</h5>
                                                <span class="kt-dropzone__msg-desc">Upload only <b>NTS Result (if any)</b> documents file</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <button type="reset" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </form>

                <!--end::Form-->
            </div>
        </div>
        <!-- Help Center-->
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title text-success">
                            Help Center
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
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
                <div class="kt-portlet__foot">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ml-auto mr-auto">
                            <small><b class="text-danger">Any misuse or false attempt will result in cancellation of your application.
                                    You are liable to provide the information that is true to the best of your knowledge.
                                    Administration is not responsible for any misuse or false attempt.</b></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end:Help Center-->
    </div>
    <!--end::Personal Information-->
    <!-- End Form -->
</div>

<!-- end:: Content -->
</div>

<!-- begin:: Footer -->
<div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-footer__copyright">
            2019&nbsp;&copy;&nbsp;<a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">Keenthemes</a>
        </div>
        <div class="kt-footer__menu">
            <a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">About</a>
            <a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">Team</a>
            <a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">Contact</a>
        </div>
    </div>
</div>

<!-- end:: Footer -->
</div>
</div>
</div>

<!-- end:: Page -->
