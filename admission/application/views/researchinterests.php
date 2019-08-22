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
                <div class="card-header">
                    <h5 class="card-title">Research Interests</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo base_url("researchinterests")?>">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Research Interest 1</label>
                                    <input type="text" class="form-control" name="research[]" id="ResearchIn1" aria-describedby="ResearchIn1" required>
                                </div>
                                <div class="form-group">
                                    <label>Research Interest 2</label>
                                    <input type="text" class="form-control" name="research[]" id="ResearchIn2" aria-describedby="ResearchIn2" required>
                                </div>
                                <label>Research Interest 3</label>
                                <input type="text" class="form-control" name="research[]" id="ResearchIn3" aria-describedby="ResearchIn3" required>
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
                            You can mention your research field interests in this form.
                        </li>
                        <li>
                            Prioritize your fields of interest in which you want to do research.
                        </li>
                        <li>
                            Skip this step if you are not sure.
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