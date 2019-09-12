<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main" >
            <h3 class="kt-subheader__title">
                Program Choices </h3>
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
    <!--begin:: Program Choices -->
    <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Choose Program
                        </h3>
                    </div>
                </div>

                <!--begin::Form-->
                <form method="post" action="<?php echo base_url('programchoices')?>" class="kt-form">
                    <div class="kt-portlet__body">
                        <div class="row">
                            <div class="col-md-9 col-sm-12 col-xs-12 pr-1">
                                <div class="form-group">
                                    <i class="flaticon2-information text-danger"></i><label>&nbsp;
                                        Please <a href="#">ClickHere</a> for Program Details.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Program Choice 1</label>
                                    <select name='program[]' id='subject1' class="form-control kt-selectpicker" required>
                                        <option value="Program Choice 1">Select 1st Choice</option>
                                        <?php foreach ($degrees as $degree){?>
                                            <option value="<?php echo $degree->id;?>" <?php if ($values !=null){ if ($degree->id == $values["0"]->degree_id){echo "Selected";}}?>>
                                                <?php echo $degree->name;?></option>
                                        <?php }?>
                                    </select>
                                    <div class="text-danger">
                                        <?php echo form_error('program[]')?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Program Choice 2</label>
                                    <select name='program[]' id='subject2' class="form-control kt-selectpicker" required>
                                        <option value="Program Choice 2">Select 2nd Choice</option>
                                        <?php foreach ($degrees as $degree){?>
                                            <option value="<?php echo $degree->id;?>" <?php if ($values !=null){ if ($degree->id == $values["1"]->degree_id){echo "Selected";}}?>>
                                                <?php echo $degree->name;?></option>
                                        <?php }?>
                                    </select>
                                    <div class="text-danger">
                                        <?php echo form_error('program[]')?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Program Choice 3</label>
                                    <select name='program[]' id='subject3' class="form-control kt-selectpicker" required>
                                        <option value="Program Choice 3">Select 3rd Choice</option>
                                        <?php foreach ($degrees as $degree){?>
                                            <option value="<?php echo $degree->id;?>" <?php if ($values !=null){ if ($degree->id == $values["2"]->degree_id){echo "Selected";}}?>>
                                                <?php echo $degree->name;?></option>
                                        <?php }?>
                                    </select>
                                    <div class="text-danger">
                                        <?php echo form_error('program[]')?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Program Choice 4</label>
                                    <select name='program[]' id='subject4' class="form-control kt-selectpicker" required>
                                        <option value="Program Choice 4">Select 4th Choice</option>
                                        <?php foreach ($degrees as $degree){?>
                                            <option value="<?php echo $degree->id;?>" <?php if ($values !=null){ if ($degree->id == $values["3"]->degree_id){echo "Selected";}}?>>
                                                <?php echo $degree->name;?></option>
                                        <?php }?>
                                    </select>
                                    <div class="text-danger">
                                        <?php echo form_error('program[]')?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <label for="exampleSelect2">Program Choice 5</label>
                                <select name='program[]' id='subject5' class="form-control kt-selectpicker" required>
                                    <option value="Program Choice 5">Select 5th Choice</option>
                                    <?php foreach ($degrees as $degree){?>
                                        <option value="<?php echo $degree->id;?>" <?php if ($values !=null){ if ($degree->id == $values["4"]->degree_id){echo "Selected";}}?>>
                                            <?php echo $degree->name;?></option>
                                    <?php }?>
                                </select>
                                <div class="text-danger">
                                    <?php echo form_error('program[]')?>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Program Choice 6</label>
                                    <select name='program[]' id='subject6' class="form-control kt-selectpicker" required>
                                        <option value="Program Choice 6">Select 6th Choice</option>
                                        <?php foreach ($degrees as $degree){?>
                                            <option value="<?php echo $degree->id;?>" <?php if ($values !=null){ if ($degree->id == $values["5"]->degree_id){echo "Selected";}}?>>
                                                <?php echo $degree->name;?></option>
                                        <?php }?>
                                    </select>
                                    <div class="text-danger">
                                        <?php echo form_error('program[]')?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Program Choice 7</label>
                                    <select name='program[]' id='subject7' class="form-control kt-selectpicker" required>
                                        <option value="Program Choice 7">Select 7th Choice</option>
                                        <?php foreach ($degrees as $degree){?>
                                            <option value="<?php echo $degree->id;?>" <?php if ($values !=null){ if ($degree->id == $values["6"]->degree_id){echo "Selected";}}?>>
                                                <?php echo $degree->name;?></option>
                                        <?php }?>
                                    </select>
                                    <div class="text-danger">
                                        <?php echo form_error('program[]')?>
                                    </div>
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
                    <b>Upon selection of a program choice, the eligibility criteria for that program appears below the program
                        dropdown list. Carefully read that and make sure you are eligibile to apply in that program.
                        In case, the admission office finds that your qualification doesn't meet the eligibility criteria for that
                        program, you'll automatically be disqualified from that program.</b>
                </div>
                <div class="kt-portlet__body">
                    <b>Program Choice 1</b> is Compulsory to be mentioned. Choose different programs wisely as 2nd and 3rd choice.
                    In case you can not qualify for the first program you will automatically be considered for 2nd & 3rd respectively..
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
    <!--end::Program Choices-->
    <!-- End Form -->
</div>

<!-- end:: Content -->
</div>
