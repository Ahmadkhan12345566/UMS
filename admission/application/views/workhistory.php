<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                Work History Details </h3>
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
                                <div class="col-md-8 col-sm-12 col-xs-12">
                                    <div class="kt-portlet kt-portlet--mobile">
                                <div class="kt-portlet__head kt-portlet__head--lg">
                                    <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand fas fa-history"></i>
										</span>
                                        <h3 class="kt-portlet__head-title">
                                            Work History
                                        </h3>
                                    </div>
                                    <div class="kt-portlet__head-toolbar">
                                        <div class="kt-portlet__head-wrapper">
                                            <div class="kt-portlet__head-actions">
                                                &nbsp;
                                                <button type="button" class="btn btn-brand btn-elevate btn-icon-sm" data-toggle="modal" data-target="#kt_modal_2">
                                                    <i class="la la-plus"></i>
                                                    Work History
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-portlet__body">

                                    <!--begin: Datatable -->
                                    <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                                        <thead>
                                        <!--                                <tr>-->
                                        <!--                                    <th colspan="2">Order Information</th>-->
                                        <!--                                    <th colspan="3">Shipping Information</th>-->
                                        <!--                                    <th colspan="3">Agent Information</th>-->
                                        <!--                                    <th colspan="3">Stats</th>-->
                                        <!--                                </tr>-->
                                        <tr>
                                            <th>Title</th>
                                            <th>Organization</th>
                                            <th>Status</th>
                                            <th>Type</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>61715-075</td>
                                            <td>3</td>
                                            <td>2</td>
                                            <td nowrap></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <!--end: Datatable -->
                                </div>
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
                                                    If you have job experience, enter details in this form.
                                                </li>
                                                <li>
                                                    Click <b>Add New</b> to enter a new record.
                                                </li>
                                                <li>
                                                    If you are still in job, then mention if your employer would allow you leave for studies or not?
                                                </li>
                                                <li>
                                                    Skip this step if you are not sure.
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

<!--begin::Modal-->
<div class="modal fade" id="kt_modal_2" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Work Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div class="kt-scroll" data-scroll="true" data-height="500">
                    <form class="kt-form" role="form" method="POST" action="<?php echo base_url("workhistory")?>">
                        <div class="kt-portlet__body">
                            <div class="form-group">
                                <label class="control-label">Self Employed?</label>
                                <div class="form-group">
                                    <label class="kt-radio kt-radio--success">
                                        Yes <input type="radio" name="selfemployed">
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--danger">
                                        No <input type="radio" name="selfemployed" checked>
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Job Title</label>
                                        <div>
                                            <input type="text" class="form-control" name="jobtitle" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                <label class="control-label">Employer</label>
                                <div>
                                    <input type="text" class="form-control" name="employer" id="employer" required>
                                </div>
                            </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="control-label">From</label>
                                        <div class="input-group date">
                                            <input type="text" class="form-control" name="formdate" placeholder="Select Job Start Date" id="kt_datepicker_2" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="la la-calendar-check-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="board">Currently Working?</label>
                                <div class="form-group">
                                    <label class="kt-radio kt-radio--success">
                                        Yes <input type="radio" name="currentlyworking">
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--danger">
                                        No <input type="radio" name="currentlyworking" checked>
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="control-label">To</label>
                                        <div class="input-group date">
                                            <input type="text" class="form-control" name="todate" placeholder="Select Job End Date" id="kt_datepicker_2" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="la la-calendar-check-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div >
                            </div>
                            <div class="row">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="exampleTextarea">Address</label>
                                        <textarea class="form-control" name="addressOrg" id="exampleTextarea" rows="3" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Phone</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-phone"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" name="phone" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Job Description</label>
                                        <div>
                                            <textarea class="form-control" name="description" rows="3" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
        </div>
    </div>
</div>

<!--end::Modal-->