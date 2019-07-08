<?php $this->load->view('inc/header.php'); ?>
    <div class="wrapper ">
<?php $this->load->view('inc/sidebar.php'); ?>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#pablo">NTS Detail</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <form>
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="nc-icon nc-zoom-split"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link btn-magnify" href="#pablo">
                                <i class="nc-icon nc-layout-11"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Stats</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item btn-rotate dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="nc-icon nc-bell-55"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Some Actions</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-rotate" href="#pablo">
                                <i class="nc-icon nc-settings-gear-65"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Account</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <!-- <div class="panel-header panel-header-lg">

    <canvas id="bigDashboardChart"></canvas>


  </div> -->

        <div class="content">
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-user">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12  pr-1">
                                        <fieldset class="scheduler-border">
                                            <legend class="scheduler-border" style="color: black;">NTS Test Registration Through COMSATS University</legend>
                                            <div class="form-group">
                                                <i class="fas fa-info-circle"></i><label>&nbsp;Click yes to print NTS application form alongwith your admission application.</label>
                                            </div>
                                            <div class="form-group">
                                                <label><b>Print NTS Challan?</b></label> <br>
                                                Yes <input type="radio" name="yesnts" id="yesnts" required >
                                                No <input type="radio" name="nonts" id="nonts" checked required>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <hr>
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
                                                        <input type="text" class="form-control" id="ntsrollnumber" aria-describedby="ntsrollnumberHelp" required>
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
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Obtained Marks</label>
                                                        <input type="text" class="form-control" id="obtainedmarks" aria-describedby="obtainedmarksHelp" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <label for="">Test Date</label>
                                            <div class="row">
                                                <div class="col-md-2 col-sm-2 col-xs-2">
                                                    <div class="form-group">
                                                        <select name='tdate' id='tdate' class="form-control" required>
                                                            <option value='Day'>Day</option>
                                                            <option value='1'>1</option>
                                                            <option value='2'>2</option>
                                                            <option value='3'>3</option>
                                                            <option value='4'>4</option>
                                                            <option value='5'>5</option>
                                                            <option value='6'>6</option>
                                                            <option value='7'>7</option>
                                                            <option value='8'>8</option>
                                                            <option value='9'>9</option>
                                                            <option value='10'>10</option>
                                                            <option value='11'>11</option>
                                                            <option value='12'>12</option>
                                                            <option value='13'>13</option>
                                                            <option value='14'>14</option>
                                                            <option value='15'>15</option>
                                                            <option value='16'>16</option>
                                                            <option value='17'>17</option>
                                                            <option value='18'>18</option>
                                                            <option value='19'>19</option>
                                                            <option value='20'>20</option>
                                                            <option value='21'>21</option>
                                                            <option value='22'>22</option>
                                                            <option value='23'>23</option>
                                                            <option value='24'>24</option>
                                                            <option value='25'>25</option>
                                                            <option value='26'>26</option>
                                                            <option value='27'>27</option>
                                                            <option value='28'>28</option>
                                                            <option value='29'>29</option>
                                                            <option value='30'>30</option>
                                                            <option value='31'>31</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-3">
                                                    <div class="form-group">
                                                        <select name='month' id='monthddl' class="form-control" required>
                                                            <option value="Month">Month</option>
                                                            <option value="January">January</option>
                                                            <option value="February">February</option>
                                                            <option value="March">March</option>
                                                            <option value="April">April</option>
                                                            <option value="May">May</option>
                                                            <option value="June">June</option>
                                                            <option value="July">July</option>
                                                            <option value="August">August</option>
                                                            <option value="Septembar">Septembar</option>
                                                            <option value="Octobar">Octobar</option>
                                                            <option value="November">November</option>
                                                            <option value="December">December</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-3 col-xs-3">
                                                    <div class="form-group">
                                                        <select name='year' id='year' class="form-control" required>
                                                            <option value='2002'>2019</option>
                                                            <option value='2003'>2018</option>
                                                            <option value='2004'>2017</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <hr>
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
                                                        <input type="text" class="form-control" id="ntscenter" aria-describedby="ntscenterHelp" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Roll Number</label>
                                                        <input type="text" class="form-control" id="ntsrollnumber" aria-describedby="ntsrollnumberHelp" required>
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

<?php include 'inc/footer.php';?>