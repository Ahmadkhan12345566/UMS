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
                    <h5 class="card-title">Fund Details</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo base_url("funddetails")?>">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12  pr-1">
                                <div class="form-group">
                                    <label><b>Funding Agence? </b></label> <br>
                                    <input type="radio" name="funding" id="funding" value="Yes"> Yes
                                    <input type="radio" name="funding" id="funding" value="No" checked >   No
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 pr-1">
                                <div class="form-group">
                                    <label>Source</label>
                                    <input type="text" class="form-control" name="source" id="source" aria-describedby="sourceHelp" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Amount</label>
                                    <input type="text" class="form-control" name="amount" id="amount" aria-describedby="AmountHelp" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Duration (Month)</label>
                                    <input type="text" class="form-control" name="duration" id="duration" aria-describedby="DurationHelp" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary btn-round">Save</button>
                                <button type="submit" class="btn btn-ignore btn-round">Skip this step</button>
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
                            Enter your <b>Funding Details</b> i.e., from where you get the money for studying.
                        </li>
                        <li>
                            If you have a <b>Funding Agency</b> that is sponsoring you then give its name, otherwise mention your source through which you'll meet your study expenses.
                        </li>
                        <li>
                            Enter the amount and duration for which it is available.
                        </li>
                    </ul>
                </div>
                <div class="card-footer">
                    <hr>
                    <div class="button-container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ml-auto mr-auto">
                                <small><b>50% marks in NTS is mandatory for admissoin in all undergraduate engineering programs.</b></small>
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
 </div>