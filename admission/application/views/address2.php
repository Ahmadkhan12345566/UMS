 <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    Address Details
                </h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                <div class="kt-subheader__group" id="kt_subheader_search">
                    <span class="kt-subheader__desc" id="kt_subheader_total">
                        Please enter address details and submit
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- end:: Content Head -->

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-wizard-v4" id="kt_apps_user_add_user" data-ktwizard-state="step-first">

            <!--begin: Form Wizard Nav -->
            <div class="kt-wizard-v4__nav">
                <div class="kt-wizard-v4__nav-items nav">
                    <a class="kt-wizard-v4__nav-item nav-item" href="#" data-ktwizard-type="step" data-ktwizard-state="current">
                        <div class="kt-wizard-v4__nav-body">
                            <div class="kt-wizard-v4__nav-number">
                                1
                            </div>
                            <div class="kt-wizard-v4__nav-label">
                                <div class="kt-wizard-v4__nav-label-title">
                                    Personal
                                </div>
                                <div class="kt-wizard-v4__nav-label-desc">
                                    Student's Personal Address
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="kt-wizard-v4__nav-item nav-item" href="#" data-ktwizard-type="step">
                        <div class="kt-wizard-v4__nav-body">
                            <div class="kt-wizard-v4__nav-number">
                                2
                            </div>
                            <div class="kt-wizard-v4__nav-label">
                                <div class="kt-wizard-v4__nav-label-title">
                                    Mailing
                                </div>
                                <div class="kt-wizard-v4__nav-label-desc">
                                    Student's Mailing Address
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="kt-wizard-v4__nav-item nav-item" href="#" data-ktwizard-type="step">
                        <div class="kt-wizard-v4__nav-body">
                            <div class="kt-wizard-v4__nav-number">
                                3
                            </div>
                            <div class="kt-wizard-v4__nav-label">
                                <div class="kt-wizard-v4__nav-label-title">
                                    Guardian
                                </div>
                                <div class="kt-wizard-v4__nav-label-desc">
                                    Student's Father Address
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="kt-wizard-v4__nav-item nav-item" href="#" data-ktwizard-type="step">
                        <div class="kt-wizard-v4__nav-body">
                            <div class="kt-wizard-v4__nav-number">
                                4
                            </div>
                            <div class="kt-wizard-v4__nav-label">
                                <div class="kt-wizard-v4__nav-label-title">
                                    Submission
                                </div>
                                <div class="kt-wizard-v4__nav-label-desc">
                                    Review and Submit
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!--end: Form Wizard Nav -->
            <div class="kt-portlet">
                <div class="kt-portlet__body kt-portlet__body--fit">
                    <div class="kt-grid">
                        <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">

                            <!--begin: Form Wizard Form-->
                            <form class="kt-form" id="kt_apps_user_add_user_form" method="post" action="<?php echo base_url("addressdetail")?>">

                                <!--begin: Form Wizard Step 1-->
                                <div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
                                    <div class="kt-heading kt-heading--md">Student's Permanent Address</div>
                                    <div class="kt-form__section kt-form__section--first">
                                        <div class="kt-wizard-v4__form">
                                            <div class="form-group">
                                                <label>Address Line 1</label>
                                                <input type="text" class="form-control" name="pline1" placeholder="Address Line 1" required>
                                                <span class="form-text text-muted">Please enter your Address.</span>
                                            </div>
                                            <div class="form-group">
                                                <label>Address Line 2</label>
                                                <input type="text" class="form-control" name="pline2" placeholder="Address Line 2" required>
                                                <span class="form-text text-muted">Please enter your Address.</span>
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
                                        </div>
                                    </div>
                                </div>

                                <!--end: Form Wizard Step 1-->

                                <!--begin: Form Wizard Step 2-->
                                <div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
                                    <div class="kt-heading kt-heading--md">Mailing Address</div>
                                    <div class="kt-form__section kt-form__section--first">
                                        <div class="kt-wizard-v4__form">
                                            <div class="form-group">
                                                <label>Address Line 1</label>
                                                <input type="text" class="form-control" name="mline1" placeholder="Address Line 1" required>
                                                <span class="form-text text-muted">Please enter your Address.</span>
                                            </div>
                                            <div class="form-group">
                                                <label>Address Line 2</label>
                                                <input type="text" class="form-control" name="mline2" placeholder="Address Line 2" required>
                                                <span class="form-text text-muted">Please enter your Address.</span>
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
                                        </div>
                                    </div>
                                </div>

                                <!--end: Form Wizard Step 2-->

                                <!--begin: Form Wizard Step 3-->
                                <div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
                                    <div class="kt-heading kt-heading--md">Father / Guardian Address</div>
                                    <div class="kt-form__section kt-form__section--first">
                                        <div class="kt-wizard-v4__form">
                                            <div class="form-group">
                                                <label>Address Line 1</label>
                                                <input type="text" class="form-control" name="gline1" placeholder="Address Line 1" required>
                                                <span class="form-text text-muted">Please enter your Address.</span>
                                            </div>
                                            <div class="form-group">
                                                <label>Address Line 2</label>
                                                <input type="text" class="form-control" name="gline2" placeholder="Address Line 2" required>
                                                <span class="form-text text-muted">Please enter your Address.</span>
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
                                    </div>
                                </div>

                                <!--end: Form Wizard Step 3-->

                                <!--begin: Form Wizard Step 4-->
                                <div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
                                    <div class="kt-heading kt-heading--md">Review your Details and Submit</div>
                                    <div class="kt-form__section kt-form__section--first">
                                        <div class="kt-wizard-v4__review">
                                            <div class="kt-wizard-v4__review-item">
                                                <div class="kt-wizard-v4__review-title">
                                                    Your Permanent Address
                                                </div>
                                                <div class="kt-wizard-v4__review-content">
                                                    Address Line 1:
                                                    <br /> Address Line 2:
                                                    <br /> City: Islamabad
                                                    <br /> Contact Number: +61412345678
                                                </div>
                                            </div>
                                            <div class="kt-wizard-v4__review-item">
                                                <div class="kt-wizard-v4__review-title">
                                                    Your Mailing Address
                                                </div>
                                                <div class="kt-wizard-v4__review-content">
                                                    Address Line 1:
                                                    <br /> Address Line 2:
                                                    <br /> City: Islamabad
                                                    <br /> Contact Number: +61412345678
                                                </div>
                                            </div>
                                            <div class="kt-wizard-v4__review-item">
                                                <div class="kt-wizard-v4__review-title">
                                                    Father/Guardian Address
                                                </div>
                                                <div class="kt-wizard-v4__review-content">
                                                    Address Line 1:
                                                    <br /> Address Line 2:
                                                    <br /> City: Islamabad
                                                    <br /> Contact Number: +61412345678
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--end: Form Wizard Step 4-->

                                <!--begin: Form Actions -->
                                <div class="kt-form__actions">
                                    <div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
                                        Previous
                                    </div>
                                    <button type="submit" class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" >
                                        Submit
                                    </button>
                                    <div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
                                        Next Step
                                    </div>
                                </div>

                                <!--end: Form Actions -->
                            </form>

                            <!--end: Form Wizard Form-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

