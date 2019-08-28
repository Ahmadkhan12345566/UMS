<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                Publication Details </h3>
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
											<i class="kt-font-brand fas fa-file-powerpoint"></i>
										</span>
                        <h3 class="kt-portlet__head-title">
                            Write Publication Detail
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="kt-portlet__head-actions">
                                &nbsp;
                                <button type="button" class="btn btn-brand btn-elevate btn-icon-sm" data-toggle="modal" data-target="#kt_modal_2">
                                    <i class="la la-plus"></i>
                                    Add New
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
                            If you have published a research paper ever, you can enter its details in this form.
                        </li>
                        <li>
                            You'll have to enter publisher name, year your paper was published, and any other author names that were accompanying you.
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
                    <form class="kt-form" role="form" method="POST" action="<?php echo base_url("publicationdetails")?>" id="kt-form-2">
                        <div class="kt-portlet__body">
                            <div class="row">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Title</label>
                                        <input type="text" name="title" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Type</label>
                                        <select name="jobtype" class="form-control" required>
                                            <option value="Conference">Conference</option>
                                            <option value="Journal">Journal</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Level</label>
                                        <select name="level" class="form-control" required>
                                            <option value="National">National</option>
                                            <option value="International">International</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">First Author</label>
                                        <input type="text" class="form-control" name="firstauthor" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Second Author</label>
                                        <input type="text" class="form-control" name="secondauthor" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Third Author</label>
                                        <input type="text" class="form-control" name="thirdauthor" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="board">Publishing Years</label>
                                        <select name='year' class="form-control" required>
                                            <option value='Years'>Years</option>
                                            <option value='1970'>1970</option>
                                            <option value='1971'>1971</option>
                                            <option value='1972'>1972</option>
                                            <option value='1973'>1973</option>
                                            <option value='1974'>1974</option>
                                            <option value='1975'>1975</option>
                                            <option value='1976'>1976</option>
                                            <option value='1977'>1977</option>
                                            <option value='1978'>1978</option>
                                            <option value='1979'>1979</option>
                                            <option value='1980'>1980</option>
                                            <option value='1981'>1981</option>
                                            <option value='1982'>1982</option>
                                            <option value='1983'>1983</option>
                                            <option value='1984'>1984</option>
                                            <option value='1985'>1985</option>
                                            <option value='1986'>1986</option>
                                            <option value='1987'>1987</option>
                                            <option value='1988'>1988</option>
                                            <option value='1989'>1989</option>
                                            <option value='1990'>1990</option>
                                            <option value='1991'>1991</option>
                                            <option value='1992'>1992</option>
                                            <option value='1993'>1993</option>
                                            <option value='1994'>1994</option>
                                            <option value='1995'>1995</option>
                                            <option value='1996'>1996</option>
                                            <option value='1997'>1997</option>
                                            <option value='1998'>1998</option>
                                            <option value='1999'>1999</option>
                                            <option value='2000'>2000</option>
                                            <option value='2001'>2001</option>
                                            <option value='2002'>2002</option>
                                            <option value='2003'>2003</option>
                                            <option value='2004'>2004</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="control-label">Volume</label>
                                        <input type="text" class="form-control" name="volume" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Chapters</label>
                                        <input type="text" class="form-control" name="chapters" id="chapters">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Pages</label>
                                        <input type="text" class="form-control" name="pages" id="pages" required>
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