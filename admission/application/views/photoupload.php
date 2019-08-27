
<!-- begin:: Subheader -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                Photo Upload </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="<?php echo base_url()?>instructions" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- end:: Subheader -->

    <!-- begin:: Content -->
<!--    <div class="row">-->
<!--        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">-->
<!--            -->
<!--        </div>-->
<!--    </div>-->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Photo Upload
                    </h3>
                </div>
            </div>

            <!--begin::Form-->
            <form class="kt-form kt-form--label-right" method="post" action="<?php echo base_url("User/do_upload")?>">
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12"></label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
<!--                            --><?php //if($this->session->userdata('studentphoto') != NULL):?>
<!--                                <img src="--><?php //echo $this->session->userdate('studentphoto');?><!--"></img>-->
<!--                            --><?php //else: ?>
<!--                            --><?php //endif;?>
                            <div class="kt-dropzone dropzone" action="inc/api/dropzone/upload.php" id="m-dropzone-one">
                                <div class="kt-dropzone__msg dz-message needsclick">
                                    <h3 class="kt-dropzone__msg-title">Drop files here or click to upload.</h3>
                                    <span class="kt-dropzone__msg-desc">Only one photo upload. Selected files are <strong>not</strong> actually uploaded.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <div class="row">
                            <div class="col-lg-9 ml-lg-auto">
                                <button type="submit" class="btn btn-brand">Submit</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <!--end::Form-->
        </div>

        <!--end::Portlet-->
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

