 <div class="content">
     <div class="row">
                <div class="col-md-8">
                    <div class="card card-user">
                        <div class="card-header">
                            <h5 class="card-title">Other Details</h5>
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?php echo base_url("otherdetail")?>"><br><br>
                                <div class="row">
                                    <div class="col-md-7 col-sm-12 col-xs-12  pr-1">
                                        <div class="form-group">
                                            <label>Hostel Facility: (limited seats available)</label> &nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="seats" id="seats" value="Yes" > Yes &nbsp;
                                            <input type="radio" name="seats" id="seats" value="No" checked> No
                                        </div>
                                        <div class="form-group">
                                            <label>Transport Facility</label> &nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="transport" id="transport" value="Yes"> Yes &nbsp;
                                            <input type="radio" name="transport" id="transport" value="No" checked> No
                                        </div>
                                        <div class="form-group">
                                            <label>How you Know</label>&nbsp;&nbsp;
                                            <select name="advertisement_id" id="aboutus" class="form-control" required>
                                                <option value="How you come to know about us">How you come to know about us </option>
                                                <?php foreach ($advertisements as $advertisement) { ?>
                                                    <option value="<?php echo $advertisement->id;?>"><?php echo $advertisement->name;?></option>
                                                <?php }?>
<!--                                                <option value="Referred By a person">Referred By a person</option>-->
<!--                                                <option value="Other">Other</option>-->
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="update ml-auto mr-auto">
                                        <button type="submit" class="btn btn-primary btn-round">Save and Move Next</button>
                                        <button type="button" class="btn btn-ignore btn-round">Skip this</button>
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
                                    University is also offering Hostel and Pick & Drop Facility.
                                    Choose the option if you want to avail the service. If Not Skip this step and move next.
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