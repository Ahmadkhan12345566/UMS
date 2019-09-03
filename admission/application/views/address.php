<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main" >
            <h3 class="kt-subheader__title">
                Address Information </h3>
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
                            Permanent Address
                        </h3>
                    </div>
                </div>

                <!--begin::Form-->
                <form method="post" action="<?php echo base_url("addressdetail")?>" class="kt-form" >
                    <div class="kt-portlet__body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Address Line 1</label>
                                    <input type="text" class="form-control" name="pline1" placeholder="Address Line 1" required>
                                    <span class="form-text text-muted">Please enter your Address.</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Address Line 2</label>
                                    <input type="text" class="form-control" name="pline2" placeholder="Address Line 2" required>
                                    <span class="form-text text-muted">Please enter your Address.</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label>City:</label>
                                    <select name="pcity_id"  class="form-control kt-selectpicker" required>
                                        <option value="">Select City</option>
                                        <?php foreach($cities as $city){?>
                                            <option value="<?php echo $city->id?>"><?php echo $city->name?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label>Contact Number:</label>
                                    <input type="text" class="form-control" name="pphone" placeholder="Contact Number" required>
                                    <span class="form-text text-muted">We'll never share your contact number with anyone else.</span>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    Mailing Address
                                </h3>
                            </div>
                        </div>
                        <label class="kt-checkbox kt-checkbox--bold kt-checkbox--success mt-2">
                            <input type="checkbox"> Same as above?
                            <span></span>
                        </label>
                        <div class="row mt-2">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Address Line 1</label>
                                    <input type="text" class="form-control" name="mline1" placeholder="Address Line 1" required>
                                    <span class="form-text text-muted">Please enter your Address.</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Address Line 2</label>
                                    <input type="text" class="form-control" name="mline2" placeholder="Address Line 2" required>
                                    <span class="form-text text-muted">Please enter your Address.</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label>City:</label>
                                    <select name="mcity_id" class="form-control kt-selectpicker" required>
                                        <option value="">Select City</option>
                                        <?php foreach($cities as $city){?>
                                            <option value="<?php echo $city->id?>"><?php echo $city->name?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label>Contact Number:</label>
                                    <input type="text" class="form-control" name="mphone" placeholder="Contact Number" required>
                                    <span class="form-text text-muted">We'll never share your contact number with anyone else.</span>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    Father/Guardian Address
                                </h3>
                            </div>
                        </div>
                        <label class="kt-checkbox kt-checkbox--bold kt-checkbox--success mt-2">
                            <input type="checkbox"> Same as above?
                            <span></span>
                        </label>
                        <div class="row mt-2">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Address Line 1</label>
                                    <input type="text" class="form-control" name="gline1" placeholder="Address Line 1" required>
                                    <span class="form-text text-muted">Please enter your Address.</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Address Line 2</label>
                                    <input type="text" class="form-control" name="gline2" placeholder="Address Line 2" required>
                                    <span class="form-text text-muted">Please enter your Address.</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label>City:</label>
                                    <select name='gcity_id' class="form-control kt-selectpicker" required>
                                        <option value="">Select City</option>
                                        <?php foreach($cities as $city){?>
                                            <option value="<?php echo $city->id?>"><?php echo $city->name?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label>Mobile Number:</label>
                                    <input type="text" class="form-control" name="gmobile" placeholder="Mobile Number" required>
                                    <span class="form-text text-muted">Enter you <b>Father / Guardian</b> mobile number here</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <button type="submit" class="btn btn-primary">Save and Move Next</button>
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
                            Enter your home, street, and city address. The Adress will be used for future correspondence.
                        </li>
                        <li>
                            In case of Mailing Address and Permanent Adress are same check the box same as mailing address.
                        </li>
                        <li>
                            Enter your father / guardian mobile no.
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
