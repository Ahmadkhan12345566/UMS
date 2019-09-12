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
                                    <input type="text" class="form-control" value="<?php if ($values != null){echo $values["0"]->address1;}?>" name="pline1" id="Form1Field1" placeholder="Address Line 1" required>
                                    <span class="form-text text-muted">Please enter your Address.</span>
                                    <div class="text-danger">
                                        <?php echo form_error('pline1')?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Address Line 2</label>
                                    <input type="text" class="form-control" name="pline2" id="Form1Field2" value="<?php if ($values != null){echo $values["0"]->address2;}?>" placeholder="Address Line 2" required>
                                    <span class="form-text text-muted">Please enter your Address.</span>
                                    <div class="text-danger">
                                        <?php echo form_error('pline2')?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label>City:</label>
                                    <select name="pcity_id" id="Form1Field3"  class="form-control kt-selectpicker" required>
                                        <option value="">Select City</option>
                                        <?php foreach($cities as $city){?>
                                            <option value="<?php echo $city->id?>" <?php if ($values != null){ if ($city->id == $values["0"]->city_id){ echo "Selected";}}?>>
                                                <?php echo $city->name?></option>
                                        <?php }?>
                                    </select>
                                    <div class="text-danger">
                                        <?php echo form_error('pcity_id')?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label>Contact Number:</label>
                                    <input type="text" class="form-control" id="Form1Field4" value="<?php if ($values != null){echo $values["0"]->phone;}?>" name="pphone" placeholder="xxxx-xxxxxxx"  required>
                                    <span class="form-text text-muted">We'll never share your contact number with anyone else.</span>
                                    <div class="text-danger">
                                        <?php echo form_error('pphone')?>
                                    </div>
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
                            <input type="checkbox" onclick="if( this.checked ) { fillForm2(); } else { clearForm2(); }" value=""> Same as above?
                            <span></span>
                        </label>
                        <div class="row mt-2">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Address Line 1</label>
                                    <input type="text" class="form-control" id="Form2Field1" name="mline1" value="<?php if ($values != null){echo $values["1"]->address1;}?>" placeholder="Address Line 1" required>
                                    <span class="form-text text-muted">Please enter your Address.</span>
                                    <div class="text-danger">
                                        <?php echo form_error('mline1')?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Address Line 2</label>
                                    <input type="text" class="form-control" id="Form2Field2" name="mline2" value="<?php if ($values != null){echo $values["1"]->address2;}?>" placeholder="Address Line 2" required>
                                    <span class="form-text text-muted">Please enter your Address.</span>
                                    <div class="text-danger">
                                        <?php echo form_error('mline2')?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label>City:</label>
                                    <select name="mcity_id" id="Form2Field3" class="form-control kt-selectpicker" required>
                                        <option value="">Select City</option>
                                        <?php foreach($cities as $city){?>
                                            <option value="<?php echo $city->id?>" <?php if ($values !=null ){ if ($city->id == $values["1"]->city_id){ echo "Selected";}}?>>
                                                <?php echo $city->name?></option>
                                        <?php }?>
                                    </select>
                                    <div class="text-danger">
                                        <?php echo form_error('mcity_id')?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label>Contact Number:</label>
                                    <input type="text" class="form-control" id="Form2Field4" name="mphone" value="<?php if ($values != null){echo $values["1"]->phone;}?>" placeholder="xxxx-xxxxxxx" required>
                                    <span class="form-text text-muted">We'll never share your contact number with anyone else.</span>
                                    <div class="text-danger">
                                        <?php echo form_error('mphone')?>
                                    </div>
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
                            <input type="checkbox" onclick="if( this.checked ) { fillForm3(); } else { clearForm3(); }" value=""> Same as above?
                            <span></span>
                        </label>
                        <div class="row mt-2">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Address Line 1</label>
                                    <input type="text" class="form-control" id="Form3Field1" name="gline1" value="<?php if ($values != null){echo $values["2"]->address1;}?>" placeholder="Address Line 1" required>
                                    <span class="form-text text-muted">Please enter your Address.</span>
                                    <div class="text-danger">
                                        <?php echo form_error('gline1')?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Address Line 2</label>
                                    <input type="text" class="form-control" id="Form3Field2" name="gline2" value="<?php if ($values != null){echo $values["2"]->address2;}?>" placeholder="Address Line 2" required>
                                    <span class="form-text text-muted">Please enter your Address.</span>
                                    <div class="text-danger">
                                        <?php echo form_error('gline2')?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label>City:</label>
                                    <select name='gcity_id' id="Form3Field3" class="form-control kt-selectpicker" required>
                                        <option value="">Select City</option>
                                        <?php foreach($cities as $city){?>
                                            <option value="<?php echo $city->id?>"  <?php if ($values != null){ if($city->id == $values["2"]->city_id) { echo "Selected";}}?>>
                                                <?php echo $city->name?></option>
                                        <?php }?>
                                    </select>
                                    <div class="text-danger">
                                        <?php echo form_error('gcity_id')?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label>Mobile Number:</label>
                                    <input type="text" class="form-control" name="gmobile" value="<?php if ($values != null){echo $values["2"]->phone;}?>" placeholder="xxxx-xxxxxxx" required>
                                    <span class="form-text text-muted">Enter you <b>Father / Guardian</b> mobile number here</span>
                                    <div class="text-danger">
                                        <?php echo form_error('gmobile')?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <button type="submit" class="btn btn-primary">Save & Move Next</button>
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

