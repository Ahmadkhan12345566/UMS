

    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    NTS </h3>
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
            <div class="row">
                <div class="col-lg-12 col-xl-8">

                    <!--begin::Portlet-->
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    NTS Details
                                </h3>
                            </div>
                        </div>

                        <!--begin::Form-->
                        <form class="kt-form" method="post" action="<?php echo base_url("ntsdetails")?>" novalidate>
                            <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                            <div class="kt-portlet__body">
                                <div id="ifYes" style="display:none">
                                    <div class="form-group row form-group-marginless">
                                    <label class="col-lg-12 col-form-label"><h3>Test Registration Through University:</h3></label>
                                </div>
                                    <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="control-label"><i class="flaticon2-information text-danger"></i> Click yes to test application form along with your admission application.</label>
                                        </div>
                                    </div>
                                </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label"><b>University Test Challan?</b></label>
                                        </div>
                                        <div class="form-group">
                                            <label class="kt-radio kt-radio--success">
                                                Yes <input type="radio" value="1" name="test_type_id"  onclick="javascript:yesnoCheck();" id="yesCheck" checked>
                                                <span></span>
                                            </label>
                                            <label class="kt-radio kt-radio--danger">
                                                No <input type="radio" value="2" name="test_type_id"  onclick="javascript:yesnoCheck();" id="noCheck">
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                    </div>
                                </div>
<!--                                <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg mb-2"></div>-->
                                <div id="ifNo" style="display:none">
                                    <div class="form-group row form-group-marginless">
                                    <label class="col-lg-12 col-form-label"><h3>NTS Test Registration:</h3></label>
                                </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <div class="kt-radio-list">
                                                    <label class="kt-radio kt-radio--success">
                                                        <input type="radio" value="3" name="test_type_id"  onclick="javascript:ynCheck();" id="checkYes"> NTS Test already taken?
                                                        <span></span>
                                                    </label>
                                                    <label class="kt-radio kt-radio--brand">
                                                        <input type="radio" value="4" name="test_type_id"  onclick="javascript:ynCheck();" id="checkNo"> If already registered in a NTS Test Centre?
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="yesIf" style="display:none">
                                    <div class="form-group row form-group-marginless">
                                        <label class="col-lg-12 col-form-label"><h3>NTS Test already taken?</h3></label>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="control-label"><i class="flaticon2-information text-danger"></i>  If you have <b>successfully passed NTS test</b>, and your result is valid, fill in this section.</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-control-label">Roll Number</label>
                                                <input type="text" class="form-control" name="ntsrollnumber" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-control-label">Test Type</label>
                                                <select name='testlevel' class="form-control" required>
                                                    <option value="">Choose Test Type</option>
                                                    <option value="GAT General">GAT (General)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-control-label">Obtained Marks</label>
                                                <input type="text" class="form-control" name="obtainedmarks" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-control-label">Test Date</label>
                                                <div class="input-group date">
                                                    <input type="text" class="form-control" name="testdate" placeholder="Test Date" readonly="" id="kt_datepicker_2" required>
                                                    <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-calendar-check-o"></i>
                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="noIf" style="display:none">
                                    <div class="form-group row form-group-marginless">
                                        <label class="col-lg-12 col-form-label"><h3>If already registered in a NTS Test Centre?</h3></label>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="control-label"><i class="flaticon2-information text-danger"></i>  If already <b>registered or taken an NTS test</b> but the result has not yet arrived fill in this section.</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">NTS Test Centre Name</label>
                                                <input type="text" class="form-control" name="centername" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Roll Number</label>
                                                <input type="text" class="form-control" name="ntsrollnumber" required>
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

                    <!--end::Portlet-->
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
                                    Enter your <b>NTS roll number</b>.
                                </li>
                                <li>
                                    Choose the test type you've appeared in.
                                </li>
                                <li>
                                    Enter the exact figure of <b>marks obtained</b>.
                                </li>
                                <li>
                                    Select the <b>test date</b> as per your NTS certificate.
                                </li>
                            </ul>
                        </div>
                        <div class="kt-portlet__foot">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ml-auto mr-auto">
                                    <small class="text-success"><b>50% marks in NTS is mandatory for admission in all undergraduate engineering programs.</b></small>
                                </div>
                            </div>
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

    <script type="text/javascript">
        window.onload = function() {
            document.getElementById('yesIf').style.display = 'block';
            document.getElementById('noIf').style.display = 'none';
        }
        function ynCheck() {
            if (document.getElementById('checkYes').checked) {
                document.getElementById('yesIf').style.display = 'block';
                document.getElementById('noIf').style.display = 'none';
            }
            else if(document.getElementById('checkNo').checked) {
                document.getElementById('noIf').style.display = 'block';
                document.getElementById('yesIf').style.display = 'none';
            }
        }
    </script>

