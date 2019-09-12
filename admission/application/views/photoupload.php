
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
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">

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
                    <form class="kt-form" method="post" action="<?php echo base_url("photoupload")?>" enctype="multipart/form-data">
                        <div class="kt-portlet__body">
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3 col-sm-12"></label>
                                <div class="col-lg-6 col-md-9 col-sm-12">
                                    <div class="form-group">
                                        <label>File Browser</label>
                                        <div></div>
                                        <div class="custom-file">
                                            <input type="file" name="studentphoto" class="custom-file-input" id="customFile" required>
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-lg-9 ml-lg-auto">
                                        <button type="submit" class="btn btn-brand" value="Upload Image">Submit & Move Next</button>
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
                                Candidates must provide colour photographs with blue background that is not more than six months old.
                            </li>
                            <li>
                                Black and white photographs are not acceptable.
                            </li>
                            <li>
                                The photographs must not be stamped, signed / written on, marked, folded, stapled over or damaged in any way.
                            </li>
                            <li>
                                A close-up of the head and top of shoulders (70%+ of the photo).
                            </li>
                            <li>
                                Looking straight towards the camera.
                            </li>
                            <li>
                                NOT personal portrait style (glamour shot).
                            </li>
                            <li>
                                Head not tilted or rotated.
                            </li>
                            <li>
                                No shadows or glare on the image or background.
                            </li>
                            <li>
                                No 'red eye”.
                            </li>
                            <li>
                                A neutral expression with mouth closed - no smiling, squinting, frowning or raised eyebrows.
                            </li>
                            <li>
                                Nothing covering the face.
                            </li>
                            <li>
                                Eyes open and clearly visible - no hair covering the eyes.
                            </li>
                            <li>
                                Make sure photo presents full head from top of hair to shoulders.
                            </li>
                            <li>
                                Photos should not include sunglasses or hats.
                            </li>
                            <li>
                                The format of the file should be JPG/JPEG/PNG.
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
