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
                    <a class="navbar-brand" href="#pablo">Work History</a>
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
                        <div class="card-header">
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#AddNew">
                                Add New
                            </a>
                            <!-- Modal HTML Markup -->
                            <div id="AddNew" class="modal fade">
                                <div class="modal-dialog" role="document" style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title">Enter Work Detail</h3>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" method="POST" action="">
                                                <input type="hidden" name="_token" value="">
                                                <div class="form-group">
                                                    <label class="control-label">Self Employed?</label>
                                                    <div>
                                                        Yes <input type="radio" name="selfyes" required>
                                                        No <input type="radio" name="selfno" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Job Title</label>
                                                    <div>
                                                        <input type="text" class="form-control" name="jobtitle" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Employer</label>
                                                    <div>
                                                        <input type="text" class="form-control" name="employer" required>
                                                    </div>
                                                </div>
                                                <label for="control-label">From</label>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <select name='date' id='dateddl' class="form-control" required>
                                                                <option value='Day'>Date</option>
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
                                                    <div class="col-md-3">
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
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <select name='year' id='year' class="form-control" required>
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
                                                <div class="form-group">
                                                    <label for="board">Currently Working?</label>
                                                    <div>
                                                        Yes <input type="radio" name="selfyes" required>
                                                        No <input type="radio" name="selfno" checked required>
                                                    </div>
                                                </div>
                                                <label for="control-label">To</label>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <select name='date' id='dateddl' class="form-control" required>
                                                                <option value='Day'>Date</option>
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
                                                    <div class="col-md-3">
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
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <select name='year' id='year' class="form-control" required>
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
                                                            <label class="control-label">Address</label>
                                                            <div>
                                                                <textarea name="addressOrg" id="addressOrg" cols="45" rows="3" required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Phone</label>
                                                    <div>
                                                        <input type="text" class="form-control" name="phone" id="phone" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Email</label>
                                                    <div>
                                                        <input type="email" class="form-control" name="email" id="email" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-9 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Job Description</label>
                                                            <div>
                                                                <textarea name="descriptionJob" id="descriptionJob" cols="45" rows="3" required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div>
                                                        <button type="submit" class="btn btn-success">
                                                            Save
                                                        </button>
                                                        <button type="submit" class="btn btn-ignore">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <table class="table">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">organization</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="update ml-auto mr-auto">
                                        <button type="submit" class="btn btn-primary btn-round">Skip and Move Next</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-body">
                        <div class="author">
                            <h5 class="title" style="color: #51CBCE;">Help Center</h5>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>
                                    If you have job experience, enter details in this form.
                                </li>
                                <li>
                                    Click <b>Add New</b> to enter a new record.
                                </li>
                                <li>
                                    If you are still in job, then mention if your employer would allow you leave for studies or not?
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

<?php include 'inc/footer.php';?>