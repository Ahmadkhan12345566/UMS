
                <!-- begin:: Subheader -->
                <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                    <div class="kt-container  kt-container--fluid ">
                        <div class="kt-subheader__main">
                            <h3 class="kt-subheader__title">
                                Education Details </h3>
                            <span class="kt-subheader__separator kt-hidden"></span>
                            <div class="kt-subheader__breadcrumbs">
                                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end:: Subheader -->

                <!-- begin:: Content -->
                <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                    <div class="kt-wizard-v4" id="kt_apps_user_add_user" data-ktwizard-state="step-first">

                        <!--begin: Form Wizard Nav -->
                        <div class="kt-wizard-v4__nav">
                            <div class="kt-wizard-v4__nav-items nav">
                                <a class="kt-wizard-v4__nav-item nav-item" style="flex: 0 0 calc(20% - 0.25rem);" href="#" data-ktwizard-type="step" data-ktwizard-state="current">
                                    <div class="kt-wizard-v4__nav-body">
                                        <div class="kt-wizard-v4__nav-number">
                                            1
                                        </div>
                                        <div class="kt-wizard-v4__nav-label">
                                            <div class="kt-wizard-v4__nav-label-title">
                                                Matric / O-Level
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="kt-wizard-v4__nav-item nav-item" style="flex: 0 0 calc(20% - 0.25rem);" href="#" data-ktwizard-type="step">
                                    <div class="kt-wizard-v4__nav-body">
                                        <div class="kt-wizard-v4__nav-number">
                                            2
                                        </div>
                                        <div class="kt-wizard-v4__nav-label">
                                            <div class="kt-wizard-v4__nav-label-title">
                                                Intermediate
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="kt-wizard-v4__nav-item nav-item" style="flex: 0 0 calc(20% - 0.25rem);" href="#" data-ktwizard-type="step">
                                    <div class="kt-wizard-v4__nav-body">
                                        <div class="kt-wizard-v4__nav-number">
                                            3
                                        </div>
                                        <div class="kt-wizard-v4__nav-label">
                                            <div class="kt-wizard-v4__nav-label-title">
                                                14 Years
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="kt-wizard-v4__nav-item nav-item" style="flex: 0 0 calc(20% - 0.25rem);" href="#" data-ktwizard-type="step">
                                    <div class="kt-wizard-v4__nav-body">
                                        <div class="kt-wizard-v4__nav-number">
                                            4
                                        </div>
                                        <div class="kt-wizard-v4__nav-label">
                                            <div class="kt-wizard-v4__nav-label-title">
                                                16 Years
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="kt-wizard-v4__nav-item nav-item" style="flex: 0 0 calc(20% - 0.25rem);" href="#" data-ktwizard-type="step">
                                    <div class="kt-wizard-v4__nav-body">
                                        <div class="kt-wizard-v4__nav-number">
                                            5
                                        </div>
                                        <div class="kt-wizard-v4__nav-label">
                                            <div class="kt-wizard-v4__nav-label-title">
                                               Submission
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
                                        <form class="kt-form" id="kt_apps_user_add_user_form" method="post" action="<?php echo base_url("educationdetails")?>">

                                            <!--begin: Form Wizard Step 1-->
                                            <div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
                                                <div class="kt-heading kt-heading--md">Please Enter Your Correct Matric / O-level Detail:</div>
                                                <div class="kt-form__section kt-form__section--first">
                                                    <div class="kt-wizard-v4__form">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label class="form-control-label">Degree</label>
                                                                    <select name="education_level_id" class="form-control" required>
                                                                        <option value="">Select Degree</option>
                                                                        <?php foreach ($education_levels as $education_level){?>
                                                                            <option value="<?php echo $education_level->id;?>"><?php echo $education_level->name;?></option>
                                                                        <?php }?>
                                                                    </select>
                                                                    <span class="form-text text-muted">Please select your Degree.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label class="form-control-label">Years</label>
                                                                    <select name='passingyears' class="form-control" required>
                                                                        <option value=''>Years</option>
                                                                        <option value=2019'>2019</option>
                                                                        <option value='2018'>2018</option>
                                                                        <option value='2017'>2017</option>
                                                                        <option value='2016'>2016</option>
                                                                        <option value='2015'>2015</option>
                                                                        <option value='2014'>2014</option>
                                                                        <option value='2013'>2013</option>
                                                                    </select>
                                                                    <span class="form-text text-muted">Please select your Passing Year.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label>Board</label>
                                                                    <select name="board_id" class="form-control" required>
                                                                        <option value="">Select Board / University</option>
                                                                        <?php foreach ($boards as $board){?>
                                                                            <option value="<?php echo $board->id;?>"><?php echo $board->boardname;?></option>
                                                                        <?php }?>
                                                                    </select>
                                                                    <span class="form-text text-muted">Please select your Board / Univsersity.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label>Subject</label>
                                                                    <select name="degree_id" class="form-control" required>
                                                                        <option value="">Select Subject</option>
                                                                        <?php foreach ($degrees as $degree){?>
                                                                            <option value="<?php echo $degree->id;?>"><?php echo $degree->name;?></option>
                                                                        <?php }?>
                                                                    </select>
                                                                    <span class="form-text text-muted">Please select your Subject.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label>Total Marks</label>
                                                                    <input type="text" class="form-control" name="totalmarks" id="Matricminimum_marks" required>
                                                                    <span class="form-text text-muted">Please enter your Total Marks.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label>Obtained Marks</label>
                                                                    <input type="text" class="form-control" name="obtainmarks" id="MatricObtainedmarks" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--end: Form Wizard Step 1-->

                                            <!--begin: Form Wizard Step 2-->
                                            <div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
                                                <div class="kt-heading kt-heading--md">Please Enter Your Correct Intermediate Detail:</div>
                                                <div class="kt-form__section kt-form__section--first">
                                                    <div class="kt-wizard-v4__form">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Degree</label>
                                                                    <select name="education_level_id" class="form-control" required>
                                                                        <option value="">Select Degree</option>
                                                                        <?php foreach ($education_levels as $education_level){?>
                                                                            <option value="<?php echo $education_level->id; ?>"><?php echo $education_level->name; ?></option>
                                                                        <?php }?>
                                                                    </select>
                                                                    <span class="form-text text-muted">Please select your Degree.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Years</label>
                                                                    <select name="passingyears" class="form-control" required>
                                                                        <option value=''>Years</option>
                                                                        <option value=2019'>2019</option>
                                                                        <option value='2018'>2018</option>
                                                                        <option value='2017'>2017</option>
                                                                        <option value='2016'>2016</option>
                                                                        <option value='2015'>2015</option>
                                                                        <option value='2014'>2014</option>
                                                                        <option value='2013'>2013</option>
                                                                    </select>
                                                                    <span class="form-text text-muted">Please select your Passing Year.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label>Board</label>
                                                                    <select name="board_id" class="form-control" required>
                                                                        <option value="">Select Board / University</option>
                                                                        <?php foreach ($boards as $board){?>
                                                                            <option value="<?php echo $board->id; ?>"><?php echo $board->boardname; ?></option>
                                                                        <?php }?>
                                                                    </select>
                                                                    <span class="form-text text-muted">Please select your Board / Univsersity.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label>Subject</label>
                                                                    <select name="degree_id" class="form-control" required>
                                                                        <option value="">Select Subject</option>
                                                                        <?php foreach ($degrees as $degree){?>
                                                                            <option value="<?php echo $degree->id;?>"><?php echo $degree->name;?></option>
                                                                        <?php }?>
                                                                    </select>
                                                                    <span class="form-text text-muted">Please select your Subject.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label>Total Marks</label>
                                                                    <input type="text" class="form-control" name="totalmarks" required>
                                                                    <span class="form-text text-muted">Please enter your Total Marks.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label>Obtained Marks</label>
                                                                    <input type="text" class="form-control" name="obtainmarks" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--end: Form Wizard Step 2-->

                                            <!--begin: Form Wizard Step 3-->
                                            <div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
                                                <div class="kt-heading kt-heading--md">Please Enter Your Correct 14 Years Detail:</div>
                                                <div class="kt-form__section kt-form__section--first">
                                                    <div class="kt-wizard-v4__form">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Degree</label>
                                                                    <select name="education_level_id" class="form-control" required>
                                                                        <option value="">Select Degree</option>
                                                                        <?php foreach ($education_levels as $education_level){?>
                                                                            <option value="<?php echo $education_level->id; ?>"><?php echo $education_level->name; ?></option>
                                                                        <?php }?>
                                                                    </select>
                                                                    <span class="form-text text-muted">Please select your Degree.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Years</label>
                                                                    <select name="passingyears" class="form-control" required>
                                                                        <option value=''>Years</option>
                                                                        <option value=2019'>2019</option>
                                                                        <option value='2018'>2018</option>
                                                                        <option value='2017'>2017</option>
                                                                        <option value='2016'>2016</option>
                                                                        <option value='2015'>2015</option>
                                                                        <option value='2014'>2014</option>
                                                                        <option value='2013'>2013</option>
                                                                    </select>
                                                                    <span class="form-text text-muted">Please select your Passing Year.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label>Board</label>
                                                                    <select name="board_id" class="form-control" required>
                                                                        <option value="">Select Board / University</option>
                                                                        <?php foreach ($boards as $board){?>
                                                                            <option value="<?php echo $board->id; ?>"><?php echo $board->boardname; ?></option>
                                                                        <?php }?>
                                                                    </select>
                                                                    <span class="form-text text-muted">Please select your Board / Univsersity.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label>Subject</label>
                                                                    <select name="degree_id" class="form-control" required>
                                                                        <option value="">Select Subject</option>
                                                                        <?php foreach ($degrees as $degree){?>
                                                                            <option value="<?php echo $degree->id;?>"><?php echo $degree->name;?></option>
                                                                        <?php }?>
                                                                    </select>
                                                                    <span class="form-text text-muted">Please select your Subject.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label>Total Marks</label>
                                                                    <input type="text" class="form-control" name="totalmarks" required>
                                                                    <span class="form-text text-muted">Please enter your Total Marks.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label>Obtained Marks</label>
                                                                    <input type="text" class="form-control" name="obtainmarks" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--end: Form Wizard Step 3-->

                                            <!--begin: Form Wizard Step 4-->
                                            <div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
                                                <div class="kt-heading kt-heading--md">Please Enter Your Correct 16 Year Education  Detail:</div>
                                                <div class="kt-form__section kt-form__section--first">
                                                    <div class="kt-wizard-v4__form">
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Degree</label>
                                                                    <input type="text" class="form-control" name="education_level_id" required>
                                                                    <span class="form-text text-muted">Please write your Degree.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Years</label>
                                                                    <select name="passingyears" class="form-control" required>
                                                                        <option value=''>Years</option>
                                                                        <option value='2019'>2019</option>
                                                                        <option value='2018'>2018</option>
                                                                        <option value='2017'>2017</option>
                                                                        <option value='2016'>2016</option>
                                                                        <option value='2015'>2015</option>
                                                                        <option value='2014'>2014</option>
                                                                        <option value='2013'>2013</option>
                                                                        <option value='2012'>2012</option>
                                                                        <option value='2011'>2011</option>
                                                                        <option value='2010'>2010</option>
                                                                        <option value='2009'>2009</option>
                                                                        <option value='2008'>2008</option>
                                                                        <option value='2007'>2007</option>
                                                                        <option value='2006'>2006</option>
                                                                        <option value='2005'>2005</option>
                                                                        <option value='2004'>2004</option>
                                                                        <option value='2003'>2003</option>
                                                                        <option value='2002'>2002</option>
                                                                        <option value='2001'>2001</option>
                                                                        <option value='2000'>2000</option>
                                                                        <option value='1999'>1999</option>
                                                                        <option value='1998'>1998</option>
                                                                        <option value='1997'>1997</option>
                                                                        <option value='1996'>1996</option>
                                                                        <option value='1995'>1995</option>
                                                                        <option value='1994'>1994</option>
                                                                        <option value='1993'>1993</option>
                                                                        <option value='1992'>1992</option>
                                                                        <option value='1991'>1991</option>
                                                                        <option value='1990'>1990</option>
                                                                        <option value='1989'>1989</option>
                                                                        <option value='1988'>1988</option>
                                                                        <option value='1987'>1987</option>
                                                                        <option value='1986'>1986</option>
                                                                        <option value='1985'>1985</option>
                                                                        <option value='1999'>1984</option>
                                                                        <option value='1998'>1983</option>
                                                                        <option value='1997'>1982</option>
                                                                        <option value='1996'>1981</option>
                                                                        <option value='1995'>1970</option>
                                                                    </select>
                                                                    <span class="form-text text-muted">Please select your Passing Years.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label for="board">University</label>
                                                                    <select name="board_id" class="form-control" required>
                                                                        <option value="">Select University</option>
                                                                        <?php foreach ($boards as $board) {?>
                                                                            <option value="<?php echo $board->id;?>"><?php echo $board->boardname;?></option>
                                                                        <?php }?>
                                                                    </select>
                                                                    <span class="form-text text-muted">Please select your University.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Subject</label>
                                                                    <input type="text" class="form-control" name="degree_id" required>
                                                                    <span class="form-text text-muted">Please write your subject.</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label>CGPA Max / Max Marks</label>
                                                                    <input type="text" class="form-control" name="totalmarks" required>
                                                                    <span class="form-text text-muted">Please write your Maximum CGPA.</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="form-group">
                                                                    <label>CGPA Obtained / Obtained Marks</label>
                                                                    <input type="text" class="form-control" name="obtainmarks" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--end: Form Wizard Step 4-->

                                            <!--begin: Form Wizard Step 5-->
                                            <div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
                                                <div class="kt-heading kt-heading--md">Review your Details and Submit</div>
                                                <div class="kt-form__section kt-form__section--first">
                                                    <div class="kt-wizard-v4__review">
                                                        <div class="kt-wizard-v4__review-item">
                                                            <div class="kt-wizard-v4__review-title">
                                                                Matric / O-Level
                                                            </div>
                                                            <div class="kt-wizard-v4__review-content">
                                                                Degree:<br />
                                                                Passing Year:<br />
                                                                Board /University:<br />
                                                                Subjects:<br />
                                                                Total Marks:<br />
                                                                Obtained Marks:
                                                            </div>
                                                        </div>
                                                        <div class="kt-wizard-v4__review-item">
                                                            <div class="kt-wizard-v4__review-title">
                                                                Intermediate
                                                            </div>
                                                            <div class="kt-wizard-v4__review-content">
                                                                Degree:<br />
                                                                Passing Year:<br />
                                                                Board /University:<br />
                                                                Subjects:<br />
                                                                Total Marks:<br />
                                                                Obtained Marks:
                                                            </div>
                                                        </div>
                                                        <div class="kt-wizard-v4__review-item">
                                                            <div class="kt-wizard-v4__review-title">
                                                                14 Years
                                                            </div>
                                                            <div class="kt-wizard-v4__review-content">
                                                                Degree:<br />
                                                                Passing Year:<br />
                                                                Board /University:<br />
                                                                Subjects:<br />
                                                                Total Marks:<br />
                                                                Obtained Marks:
                                                            </div>
                                                        </div>
                                                        <div class="kt-wizard-v4__review-item">
                                                            <div class="kt-wizard-v4__review-title">
                                                                16 Years
                                                            </div>
                                                            <div class="kt-wizard-v4__review-content">
                                                                Degree:<br />
                                                                Passing Year:<br />
                                                                University:<br />
                                                                Subjects:<br />
                                                                CGPA Max:<br />
                                                                CGPA Obtained:
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--end: Form Wizard Step 5-->

                                                <!--begin: Form Actions -->
                                                <div class="kt-form__actions">
                                                    <div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
                                                        Previous
                                                    </div>
                                                    <div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
                                                        Next Step
                                                    </div>
                                                    <div class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
                                                        Submit
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