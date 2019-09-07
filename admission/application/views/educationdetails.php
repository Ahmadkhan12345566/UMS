<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main" >
            <h3 class="kt-subheader__title">
                Education Details </h3>
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
                            Matric / O-Level
                        </h3>
                    </div>
                </div>

                <!--begin::Form-->
                <form method="post" action="<?php echo base_url("educationdetails")?>" class="kt-form" >
                    <div class="kt-portlet__body">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="form-control-label">Degree</label>
                                    <select name="meducation_level_id" class="form-control kt-selectpicker" required>
                                        <option value="">Select Degree</option>
                                        <?php foreach ($education_levels as $education_level){?>
                                            <option value="<?php echo $education_level->id;?>"><?php echo $education_level->name;?></option>
                                        <?php }?>
                                    </select>
                                    <span class="form-text text-muted">Please select your Degree.</span>
                                    <div class="text-danger">
                                        <?php echo form_error('meducation_level_id')?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label class="form-control-label">Years</label>
                                    <select name='mpassingyears' class="form-control kt-selectpicker" required>
                                        <option value=''>Years</option>
                                        <option value='2019'>2019</option>
                                        <option value='2018'>2018</option>
                                        <option value='2017'>2017</option>
                                        <option value='2016'>2016</option>
                                        <option value='2015'>2015</option>
                                        <option value='2014'>2014</option>
                                        <option value='2013'>2013</option>
                                    </select>
                                    <span class="form-text text-muted">Please select your Passing Year.</span>
                                    <div class="text-danger">
                                        <?php echo form_error('mpassingyears')?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label>Board</label>
                                    <select name="mboard_id" class="form-control kt-selectpicker" required>
                                        <option value="">Select Board / University</option>
                                        <?php foreach ($boards as $board){?>
                                            <option value="<?php echo $board->id;?>"><?php echo $board->boardname;?></option>
                                        <?php }?>
                                    </select>
                                    <span class="form-text text-muted">Please select your Board / Univsersity.</span>
                                    <div class="text-danger">
                                        <?php echo form_error('mboard_id')?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <select name="mdegree_id" class="form-control kt-selectpicker" required>
                                        <option value="">Select Subject</option>
                                        <?php foreach ($degrees as $degree){?>
                                            <option value="<?php echo $degree->id;?>"><?php echo $degree->name;?></option>
                                        <?php }?>
                                    </select>
                                    <span class="form-text text-muted">Please select your Subject.</span>
                                    <div class="text-danger">
                                        <?php echo form_error('mdegree_id')?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label>Total Marks</label>
                                    <input type="text" class="form-control" name="mtotalmarks" id="Matricminimum_marks" required>
                                    <span class="form-text text-muted">Please enter your Total Marks.</span>
                                    <div class="text-danger">
                                        <?php echo form_error('mtotalmarks')?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label>Obtained Marks</label>
                                    <input type="text" class="form-control" name="mobtainmarks" id="MatricObtainedmarks" required>
                                    <div class="text-danger">
                                        <?php echo form_error('mobtainmarks')?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    Intermediate
                                </h3>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Degree</label>
                                    <select name="ineducation_level_id" class="form-control kt-selectpicker" required>
                                        <option value="">Select Degree</option>
                                        <?php foreach ($education_levels as $education_level){?>
                                            <option value="<?php echo $education_level->id; ?>"><?php echo $education_level->name; ?></option>
                                        <?php }?>
                                    </select>
                                    <span class="form-text text-muted">Please select your Degree.</span>
                                    <div class="text-danger">
                                        <?php echo form_error('ineducation_level_id')?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Years</label>
                                    <select name="inpassingyears" class="form-control kt-selectpicker" required>
                                        <option value=''>Years</option>
                                        <option value='2019'>2019</option>
                                        <option value='2018'>2018</option>
                                        <option value='2017'>2017</option>
                                        <option value='2016'>2016</option>
                                        <option value='2015'>2015</option>
                                        <option value='2014'>2014</option>
                                        <option value='2013'>2013</option>
                                    </select>
                                    <span class="form-text text-muted">Please select your Passing Year.</span>
                                    <div class="text-danger">
                                        <?php echo form_error('inpassingyears')?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label>Board</label>
                                    <select name="inboard_id" class="form-control kt-selectpicker" required>
                                        <option value="">Select Board / University</option>
                                        <?php foreach ($boards as $board){?>
                                            <option value="<?php echo $board->id; ?>"><?php echo $board->boardname; ?></option>
                                        <?php }?>
                                    </select>
                                    <span class="form-text text-muted">Please select your Board / Univsersity.</span>
                                    <div class="text-danger">
                                        <?php echo form_error('inboard_id')?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <select name="indegree_id" class="form-control kt-selectpicker" required>
                                        <option value="">Select Subject</option>
                                        <?php foreach ($degrees as $degree){?>
                                            <option value="<?php echo $degree->id;?>"><?php echo $degree->name;?></option>
                                        <?php }?>
                                    </select>
                                    <span class="form-text text-muted">Please select your Subject.</span>
                                    <div class="text-danger">
                                        <?php echo form_error('indegree_id')?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label>Total Marks</label>
                                    <input type="text" class="form-control" name="intotalmarks" required>
                                    <span class="form-text text-muted">Please enter your Total Marks.</span>
                                    <div class="text-danger">
                                        <?php echo form_error('intotalmarks')?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label>Obtained Marks</label>
                                    <input type="text" class="form-control" name="inobtainmarks" required>
                                    <div class="text-danger">
                                        <?php echo form_error('inobtainmarks')?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    14 Years (Optional)
                                </h3>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Degree</label>
                                    <select name="freducation_level_id" class="form-control kt-selectpicker">
                                        <option value="">Select Degree</option>
                                        <?php foreach ($education_levels as $education_level){?>
                                            <option value="<?php echo $education_level->id; ?>"><?php echo $education_level->name; ?></option>
                                        <?php }?>
                                    </select>
                                    <span class="form-text text-muted">Please select your Degree.</span>
                                    <div class="text-danger">
                                        <?php echo form_error('freducation_level_id')?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Years</label>
                                    <select name="frpassingyears" class="form-control kt-selectpicker">
                                        <option value=''>Years</option>
                                        <option value='2019'>2019</option>
                                        <option value='2018'>2018</option>
                                        <option value='2017'>2017</option>
                                        <option value='2016'>2016</option>
                                        <option value='2015'>2015</option>
                                        <option value='2014'>2014</option>
                                        <option value='2013'>2013</option>
                                    </select>
                                    <span class="form-text text-muted">Please select your Passing Year.</span>
                                    <div class="text-danger">
                                        <?php echo form_error('frpassingyears')?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label>Board</label>
                                    <select name="frboard_id" class="form-control kt-selectpicker">
                                        <option value="">Select Board / University</option>
                                        <?php foreach ($boards as $board){?>
                                            <option value="<?php echo $board->id; ?>"><?php echo $board->boardname; ?></option>
                                        <?php }?>
                                    </select>
                                    <span class="form-text text-muted">Please select your Board / Univsersity.</span>
                                    <div class="text-danger">
                                        <?php echo form_error('frboard_id')?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <select name="frdegree_id" class="form-control kt-selectpicker">
                                        <option value="">Select Subject</option>
                                        <?php foreach ($degrees as $degree){?>
                                            <option value="<?php echo $degree->id;?>"><?php echo $degree->name;?></option>
                                        <?php }?>
                                    </select>
                                    <span class="form-text text-muted">Please select your Subject.</span>
                                    <div class="text-danger">
                                        <?php echo form_error('frdegree_id')?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label>Total Marks</label>
                                    <input type="text" class="form-control" name="frtotalmarks">
                                    <span class="form-text text-muted">Please enter your Total Marks.</span>
                                    <div class="text-danger">
                                        <?php echo form_error('frtotalmarks')?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label>Obtained Marks</label>
                                    <input type="text" class="form-control" name="frobtainmarks">
                                    <div class="text-danger">
                                        <?php echo form_error('frobtainmarks')?>
                                    </div>
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
                            Enter your education details in this form.
                        </li>
                        <li>
                            If you are applying in <b>undergraduate</b> proggram and your intermediate result is not arrived yet, click the <b>Result Awaiting</b> checkbox.
                        </li>
                        <li>
                            Select the Board / University from the dropdown list and if your Board / University are not mentioned in the dropdownlist, select <b>Other</b> option and enter your Board / University name manually.
                        </li>
                        <li>
                            Select the subjects of your degree from the dropdown list and if they are not appearing our dropdown then select <b>Other</b> option and enter your subject name manually.

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
