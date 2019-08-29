<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main" >
            <h3 class="kt-subheader__title">
                Fund Details </h3>
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
    <!--begin:: fund detail -->
    <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Fund Details
                        </h3>
                    </div>
                </div>

                <!--begin::Form-->
                <form method="post" action="<?php echo base_url('funddetails')?>" class="kt-form">
                    <div class="kt-portlet__body">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label class="control-label">Funding Agence?</label>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="kt-radio kt-radio--success">
                                        Yes <input type="radio" name="funding">
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--danger">
                                        No <input type="radio" name="funding" checked>
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Source</label>
                                    <input type="text" class="form-control" name="source" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Amount</label>
                                    <input type="text" class="form-control" name="amount" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Duration (Month)</label>
                                    <input type="text" class="form-control" name="duration" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <button type="submit" class="btn btn-primary">Submit</button>
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
                            Enter your <b>Funding Details</b> i.e., from where you get the money for studying.
                        </li>
                        <li>
                            If you have a <b>Funding Agency</b> that is sponsoring you then give its name, otherwise mention your source through which you'll meet your study expenses.
                        </li>
                        <li>
                            Enter the amount and duration for which it is available.
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
    <!--end::fund detail-->
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
