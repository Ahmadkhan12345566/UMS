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
                    <form method="post" action="<?php echo base_url("Student/submit_data")?>">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <h4>Submit Application </h4>
                                    <div class="alert alert-success" role="alert">
                                        You've successfully completed all application steps. Please click the "Submit Application" button to submit your application online.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <fieldset class="scheduler-border">
                                    <legend class="scheduler-border" style="color: black;">Undertaking</legend>
                                    <div class="form-group">
                                        <div style="color: black;">
                                                I hereby solemnly declare that the information provided on the Admission System Sections / Admission Form,
                                                is true and correct to best of my knowledge . I also undertake that I have read and understood all the
                                                instructions provided in the current prospectus and agree to abide by them.
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="alert alert-danger" role="alert">
                                        <b>Note:</b> If you click <b>Submit Application</b> button, your application form will be submitted online.
                                        After Application Submission you will not be able to enter / update any information.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-success btn-round">Preview Application</button>
                                <button type="submit" class="btn btn-primary btn-round">Submit Application</button>
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
                            If your application completion progress is <b>100%</b>, you can click the <b>big blue button</b> to submit your application.
                        </li>
                        <li>
                            Once the application is submitted, it is forwarded to admission office and <b>can't be updated or changed</b>.
                        </li>
                        <li>
                            Application can't be submitted unless <b>it is 100% complete</b>.
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