 <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main" >
                <h3 class="kt-subheader__title">
                    Personal Information </h3>
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
                                            Personal Information
                                        </h3>
                                    </div>
                                </div>

                                <!--begin::Form-->
                                <form method="post" action="<?php echo base_url("personalinformation")?>" class="kt-form" >
                                    <div class="kt-portlet__body">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label>Full Name</label>
                                                    <input type="text" class="form-control" name="fullname" aria-describedby="fullnameHelp" placeholder="Enter your name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label>Date of Birth</label>
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" name="dob" readonly="" placeholder="Select date of birth" id="kt_datepicker_2" required>
                                                        <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="la la-calendar-check-o"></i>
                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label>CNIC Number</label>
                                                    <input type="text" class="form-control" name="cnic" aria-describedby="emailHelp" placeholder="Enter your CNIC number" maxlength="15" required>
                                                    <small>Format : xxxxx-xxxxxxx-x</small>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label>Mobile Number</label>
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" name="mobnumbers" placeholder="Enter your number" maxlength="17" required>
                                                        <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="la la-mobile-phone"></i>
                                                    </span>
                                                        </div>
                                                    </div>
                                                    <small>Format : xxxxx-xxxxxxx</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <label for="exampleSelect2">Country</label>
                                                <select name="country_id" class="form-control kt-selectpicker" id="country" required>
                                                    <option value="">Select Country</option>
                                                    <?php  foreach ($countries as $country){ ?>
                                                        <option value="<?php  echo  $country->id;?>"><?php echo $country->name;?></option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label>Domicile</label>
                                                    <select name='domicile_id' class="form-control kt-selectpicker" required>
                                                        <option value="">Select Domicile</option>
                                                        <?php foreach ($domiciles as $domicile){?>
                                                            <option value="<?php echo $domicile->id;?>"><?php echo $domicile->name;?></option>
                                                        <?php }?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label>Gender</label>
                                                    <select name='gender' class="form-control kt-selectpicker" required>
                                                        <option value="">Select Gender</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Others">Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label>Father Name</label>
                                                    <input type="text" class="form-control" name="fathername" placeholder="Your father full name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <label>Father / Guardian CNIC</label>
                                                    <input type="text" class="form-control" name="fcnic" id="cnic" placeholder="Enter your father CNIC" maxlength="15" required>
                                                    <small>Format : xxxxx-xxxxxxx-x</small>
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
                                            Enter Your full name consisting of First Name, Middle Name & Last Name as Per CNIC.
                                        </li>
                                        <li>
                                            Enter Full Name of Father/ Gurdian as per CNIC consisting of First Name, Middle Name & Last Name.
                                        </li>
                                        <li>
                                            Enter the date of birth as on your Matriculation Certificate/ O Level Certificate.
                                        </li>
                                        <li>
                                            Enter Nationality as displayed on your CNIC card or Domicile Certificate.
                                        </li>
                                        <li>
                                            Enter exactly the same CNIC no as displayed on your CNIC card without dashes.
                                        </li>
                                        <li>
                                            Enter the mobile number where to contact you.
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
