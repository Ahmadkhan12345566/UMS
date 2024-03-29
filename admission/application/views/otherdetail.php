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
    <!--begin:: other detail -->
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
                <form method="post" action="<?php echo base_url('otherdetail')?>" class="kt-form" id="kt_form_2">
                    <div class="kt-portlet__body">
                        <div class="row">
                            <div class="col-md-5 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <label class="control-label">Hostel Facility: (limited seats available)</label>
                                    </div>
                                </div>
                            <div class="col-md-3 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="kt-radio kt-radio--success">
                                        Yes <input type="radio" name="seats" value="1">
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--danger">
                                        No <input type="radio" name="seats" value="2" checked>
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="form-group">
                                        <label class="control-label">Transport Facility</label>
                                    </div>
                                </div>
                            <div class="col-md-3 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="kt-radio kt-radio--success">
                                        Yes <input type="radio" name="transport" value="1">
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--danger">
                                        No <input type="radio" name="transport" value="2" checked>
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="form-control-label">How you Know</label>
                                    <select name="advertisement_id" class="form-control kt-selectpicker" required>
                                        <option value="">How you come to know about us </option>
                                        <?php foreach ($advertisements as $advertisement) { ?>
                                            <option value="<?php echo $advertisement->id;?>" <?php if ($values !=null){if($advertisement->id == $values->advertisement_id){echo "Selected";}}?>>
                                                <?php echo $advertisement->name;?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                        </div>
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
                    <b>
                        University is also offering Hostel and Pick & Drop Facility.
                        Choose the option if you want to avail the service. If Not Skip this step and move next.
                    </b>
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
    <!--end::other detail-->
    <!-- End Form -->
</div>

<!-- end:: Content -->
</div>
