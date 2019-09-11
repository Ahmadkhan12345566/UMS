<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main" >
            <h3 class="kt-subheader__title">
                Other Details </h3>
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
    <!--begin:: Confirm fee -->
    <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Other Details
                        </h3>
                    </div>
                </div>

                <!--begin::Form-->
                <form method="post" action="<?php echo base_url("confirmfee")?>" enctype="multipart/form-data" class="kt-form">
                    <div class="kt-portlet__body">
                        <div class="kt-section">
                            <div class="kt-section__content">
                                <div class="alert alert-solid-danger alert-bold" role="alert">
                                    <div class="alert-text">
                                        Your application is not fully complete yet. Please complete all the remaining steps and then submit the
                                        application. You've yet to complete following step(s)
                                        <ul>
                                            <li>
                                                <b>Confirm Fee</b>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="alert alert-solid-danger alert-bold" role="alert">
                                    <div class="alert-text">
                                        Your Application shall not be entertained unless you deposit your admission charges and provide bank details in this form.
                                        <br>
                                        You may also take snapshot of your paid challan from mobile and upload. But make sure that challan image must be clearly visible.
                                        If challan image cannot be read, it cannot be accepted. <br>
                                        Please make sure that image size of scanned challan is not more than 2MB. Use some
                                        <a href="https://compressimage.toolur.com/"><b>image size reducer</b></a> tool like <a href="https://compressimage.toolur.com/"><b>this one</b></a> to reduce the size of
                                        image if its higher than 2MB.
                                    </div>
                                </div>
                                <div class="alert alert-solid-success alert-bold" role="alert">
                                    <div class="alert-text">
                                        Print your fee challan and <b>deposit your fee in the bank.</b>
                                        <div class="mt-4"></div>
                                        <div class="text-center">
                                            <a href="/Candidate/Pdf/FeeChallan" class="btn-success" name="print" target="_blank" title="print application form" style="font-size: 30px; background: transparent;">
                                                <i class="fas fa-print"></i>
                                            </a>
                                            &nbsp;&nbsp;
                                            <a href="/Candidate/Pdf/FeeChallan?download=true" name="download" class="btn-success" title="download application form" style="font-size: 30px; background: transparent;">
                                                <i class="fas fa-cloud-download-alt"></i>
                                            </a>
                                        </div>
                                        <div class="mt-4"></div>
                                        After depositing the <b>Admission Processing Fee UPLOAD Scanned Copy of Paid Challan</b> along-with bank details on below form.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet">
                            <div class="row mt-3">
                                <div class="col-md-4 offset-1 col-sm-10 col-sx-10">
                                    <div class="form-group">
                                        <label for="form-control-label">Bank Name</label>
                                        <input type="text" name="bankname" class="form-control" required>
                                        <div class="text-danger">
                                            <?php echo form_error('bankname')?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 offset-1 col-sm-10 col-sx-10">
                                    <div class="form-group">
                                        <label for="form-control-label">Branch Code</label>
                                        <input type="text" name="branchcode" class="form-control" required>
                                        <div class="text-danger">
                                            <?php echo form_error('branchcode')?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 offset-1 col-sm-10 col-sx-10">
                                    <div class="form-group">
                                        <label for="form-control-label">Bank Address</label>
                                        <input type="text" name="bankaddress" class="form-control" required>
                                        <div class="text-danger">
                                            <?php echo form_error('bankaddress')?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 offset-1 col-sm-10 col-sx-10">
                                    <div class="form-group">
                                        <label for="form-control-label">Deposit Date</label>
                                        <input type="text" name="depositdate" class="form-control" placeholder="Select Date" id="kt_datepicker_2" required>
                                        <div class="text-danger">
                                            <?php echo form_error('depositdate')?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet">
                            <div class="row mt-2">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <h4 class="form-label mt-2 pl-2 text-dark">Upload Challan</h4>
                                    </div>
                                        <div class="row">
                                            <div class="col-md-10 col-sm-10 col-xs-10 offset-1">
                                                <div class="alert alert-solid-brand alert-bold" role="alert">
                                                    <div class="alert-icon"><i class="flaticon-warning"></i></div>
                                                    <div class="alert-text">
                                                        Make sure that bank stamp and signatures are clearly visible on the challan image.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-lg-10 col-md-10 offset-1 col-sm-10 col-xs-10">
                                            <div class="form-group">
                                                <label>File Browser</label>
                                                <div></div>
                                                <div class="custom-file">
                                                    <input type="file" name="bankchallan" class="custom-file-input" id="customFile" required>
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
<!--                        <div class="kt-portlet">-->
<!--                            <div class="row mt-2">-->
<!--                                <div class="col-md-12 col-sm-12 col-xs-12">-->
<!--                                    <div class="form-group mt-2 pl-2 text-dark">-->
<!--                                        <h4 class="form-label">NTS Details</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="row">-->
<!--                                <div class="col-md-4 offset-1 col-sm-10 col-xs-10">-->
<!--                                    <div class="form-group">-->
<!--                                        <label for="form-control-label">Bank Name</label>-->
<!--                                        <input type="text" name="ntsbankname" class="form-control" required>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-md-4 offset-1 col-sm-10 col-xs-10">-->
<!--                                    <div class="form-group">-->
<!--                                        <label for="form-control-label">Branch Code</label>-->
<!--                                        <input type="text" name="ntsbranchcode" id="NTSbranchcode" class="form-control" required>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="row">-->
<!--                                <div class="col-md-4 offset-1 col-sm-10 col-xs-10">-->
<!--                                    <div class="form-group">-->
<!--                                        <label for="form-control-label">Bank Address</label>-->
<!--                                        <input type="text" name="ntsbankaddress" class="form-control" required>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-md-4 offset-1 col-sm-10 col-xs-10">-->
<!--                                    <div class="form-group">-->
<!--                                        <label for="form-control-label">Deposit Date</label>-->
<!--                                        <div class="input-group date">-->
<!--                                            <input type="text" name="ntsdepositdate" class="form-control" placeholder="Select Deposit Date" id="kt_datepicker_2" required>-->
<!--                                            <div class="input-group-append">-->
<!--                                                <span class="input-group-text">-->
<!--                                                    <i class="la la-calendar-check-o"></i>-->
<!--                                                </span>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="kt-portlet">-->
<!--                            <div class="row mt-2">-->
<!--                                <div class="col-md-12 col-sm-12 col-xs-12">-->
<!--                                    <div class="form-group mt-2 pl-2 text-dark">-->
<!--                                        <h4 class="form-label">Upload NTS Challan</h4>-->
<!--                                    </div>-->
<!--                                    <div class="row">-->
<!--                                        <div class="col-md-10 col-sm-10 col-xs-10 offset-1">-->
<!--                                            <div class="alert alert-solid-brand alert-bold" role="alert">-->
<!--                                                <div class="alert-icon"><i class="flaticon-warning"></i></div>-->
<!--                                                <div class="alert-text">-->
<!--                                                    Make sure that bank stamp and signatures are clearly visible on the NTS challan image.-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="row">-->
<!--                                        <div class="col-lg-10 col-md-10 offset-1 col-sm-10 col-xs-10">-->
<!--                                            <div class="form-group">-->
<!--                                                <label>File Browser</label>-->
<!--                                                <div></div>-->
<!--                                                <div class="custom-file">-->
<!--                                                    <input type="file" name="sscfile" class="custom-file-input" id="customFile" required>-->
<!--                                                    <label class="custom-file-label" for="customFile">Choose file</label>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <button type="submit" class="btn btn-primary">Submit & Move Next</button>
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
    <!--end::Confirm fee-->
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
