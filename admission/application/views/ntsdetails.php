 <div class="content">
     <div class="row">
                <div class="col-md-8">
                    <div class="card card-user">
                        <div class="card-body">
                            <form method="post" action="<?php echo base_url("ntsdetails")?>">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12  pr-1">
                                        <fieldset class="scheduler-border">
                                            <legend class="scheduler-border" style="color: black;">NTS Test Registration Through COMSATS University</legend>
                                            <div class="form-group">
                                                <i class="fas fa-info-circle"></i><label>&nbsp;Click yes to print NTS application form alongwith your admission application.</label>
                                            </div>
                                            <div class="form-group">
                                                <label><b>Print NTS Challan?</b></label> <br>
                                                Yes <input type="radio" name="nts" id="nts">
                                                No <input type="radio" name="nts" id="nts"  checked="checked">
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 pr-1">
                                        <fieldset class="scheduler-border">
                                            <legend class="scheduler-border" style="color: black;">NTS Test already taken?</legend>
                                            <div class="form-group">
                                                <i class="fas fa-info-circle"></i><label>&nbsp;If you have <b>successfully passed NTS test,</b> and your result is valid, fill in this section.</label>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Roll Number</label>
                                                        <input type="text" class="form-control" name="ntsrollnumber" id="ntsrollnumber" aria-describedby="ntsrollnumberHelp" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Test Type</label>
                                                        <select name='testtype' id='testtype' class="form-control" required>
                                                            <option value="Choose Test Type">Choose Test Type</option>
                                                            <option value="GAT General">GAT (General)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Obtained Marks</label>
                                                        <input type="text" class="form-control" name="obtainedmarks" id="obtainedmarks" aria-describedby="obtainedmarksHelp" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Test Date</label>
                                                        <input type="date" name="testdate" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 pr-1">
                                        <fieldset class="scheduler-border">
                                            <legend class="scheduler-border" style="color: black;">If already registered in a NTS Test Centre?</legend>
                                            <div class="form-group">
                                                <i class="fas fa-info-circle"></i><label>&nbsp;If already <b>registered or taken an NTS test</b> but the result has not yet arrived fill in this section.</label>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>NTS Test Centre Name</label>
                                                        <input type="text" class="form-control" name="ntscenter" id="ntscenter" aria-describedby="ntscenterHelp" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Roll Number</label>
                                                        <input type="text" class="form-control" name="allntsrollnumber" id="allntsrollnumber" aria-describedby="ntsrollnumberHelp" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="update ml-auto mr-auto">
                                        <button type="submit" class="btn btn-primary btn-round">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 col">
                    <div class="card card-body">
                        <div class="author">
                            <h5 class="title" style="color: #51CBCE;">Help Center</h5>
                        </div>
                        <div class="card-body">
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
                        <div class="card-footer">
                            <hr>
                            <div class="button-container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ml-auto mr-auto">
                                        <small><b>50% marks in NTS is mandatory for admission in all undergraduate engineering programs.</b></small>
                                    </div>
                                </div>
                                <br>
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