<div class="content">
    <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="progress mb-1">
                <div class="progress-bar  progress-bar-striped bg-success" style="width:10%">10%</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card card-user">
                <div class="card-body">
                    <form method="post" action="<?php echo base_url("User/do_upload")?>" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <h5>Please Upload Photo</h5>
                                    <label class="btn btn-success" style="color: white;">
                                        Upload Photo <input type="file" name="studentphoto" id="StudentPhoto"  required>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 offset-3 col-sm-12 col-xs-12">
                                <?php if($this->session->userdata('studentphoto') != NULL):?>
                                <img src="<?php echo $this->session->userdate('studentphoto');?>"></img>
                                <?php else: ?>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary btn-round">Save and Move Next</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="card card-body">
                <div class="author">
                    <h5 class="title" style="color: #51CBCE;">Help Center</h5>
                </div>
                <div class="card-body">
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
                <div class="card-footer">
                    <hr>
                    <div class="button-container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ml-auto mr-auto">
                                <small><b>Any misuse or false attempt will result in cancellation of your application.
                                        You are liable to provide the information that is true to the best of your knowledge.
                                        Administration is not responsible for any misuse or false attempt.</b></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>