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
                    <a class="navbar-brand" href="#pablo">Education Details</a>
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
                            <h5 class="card-title">Personal Information</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 px-1">
                                        <div class="form-group">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Degree</th>
                                                    <th scope="col">Edit</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">View</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>
                                                        <a href="" data-toggle="modal" data-target="#ModalLoginForm">
                                                            Matric / O - Level
                                                        </a>
                                                        <!-- Modal HTML Markup -->
                                                        <div id="ModalLoginForm" class="modal fade">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h3 class="modal-title">Matric / O - Level</h3>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form role="form" method="POST" action="">
                                                                            <input type="hidden" name="_token" value="">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Degree</label>
                                                                                <select name="degree" id="degree" required class="form-control">
                                                                                    <option value="Select">Select Degree</option>
                                                                                    <option value="Matric">Matric</option>
                                                                                    <option value="O Level">O Level</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Year of Passing</label>
                                                                                <select name='day' id='blah' class="form-control">
                                                                                    <option value='Years'>Years</option>
                                                                                    <option value='2019'>2019</option>
                                                                                    <option value='2018'>2018</option>
                                                                                    <option value='2017'>2017</option>
                                                                                    <option value='2016'>2016</option>
                                                                                    <option value='2015'>2015</option>
                                                                                    <option value='2014'>2014</option>
                                                                                    <option value='2013'>2013</option>
                                                                                    <option value='2012'>2012</option>
                                                                                    <option value='2011'>2011</option>
                                                                                    <option value='2010'>2010</option>
                                                                                    <option value='2009'>2009</option>
                                                                                    <option value='2008'>2008</option>
                                                                                    <option value='2007'>2007</option>
                                                                                    <option value='2006'>2006</option>
                                                                                    <option value='2005'>2005</option>
                                                                                    <option value='2004'>2004</option>
                                                                                    <option value='2003'>2003</option>
                                                                                    <option value='2002'>2002</option>
                                                                                    <option value='2001'>2001</option>
                                                                                    <option value='2000'>2000</option>
                                                                                    <option value='1999'>1999</option>
                                                                                    <option value='1998'>1998</option>
                                                                                    <option value='1997'>1997</option>
                                                                                    <option value='1996'>1996</option>
                                                                                    <option value='1995'>1995</option>
                                                                                    <option value='1994'>1994</option>
                                                                                    <option value='1993'>1993</option>
                                                                                    <option value='1992'>1992</option>
                                                                                    <option value='1991'>1991</option>
                                                                                    <option value='1990'>1990</option>
                                                                                    <option value='1989'>1989</option>
                                                                                    <option value='1988'>1988</option>
                                                                                    <option value='1987'>1987</option>
                                                                                    <option value='1986'>1986</option>
                                                                                    <option value='1985'>1985</option>
                                                                                    <option value='1999'>1984</option>
                                                                                    <option value='1998'>1983</option>
                                                                                    <option value='1997'>1982</option>
                                                                                    <option value='1996'>1981</option>
                                                                                    <option value='1995'>1970</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="board">Board</label>
                                                                                <select class="form-control">
                                                                                    <option value="">Select Board / University</option>
                                                                                    <option value="Agha Khan University Board, Karachi">Agha Khan University Board, Karachi</option>
                                                                                    <option value="BISE, Abbotabad">BISE, Abbotabad</option>
                                                                                    <option value="BISE, AJK">BISE, AJK</option>
                                                                                    <option value="BISE, Bahawalpur">BISE, Bahawalpur</option>
                                                                                    <option value="BISE, Balochistan">BISE, Balochistan</option>
                                                                                    <option value="BISE, Bannu">BISE, Bannu</option>
                                                                                    <option value="BISE, DG Khan">BISE, DG Khan</option>
                                                                                    <option value="BISE, DI Khan">BISE, DI Khan</option>
                                                                                    <option value="BISE, Faislabad">BISE, Faislabad</option>
                                                                                    <option value="BISE, Gujranwala">BISE, Gujranwala</option>
                                                                                    <option value="BISE, Hyderabad">BISE, Hyderabad</option>
                                                                                    <option value="BISE, Karachi">BISE, Karachi</option>
                                                                                    <option value="BISE, Kohat">BISE, Kohat</option>
                                                                                    <option value="BISE, Lahore">BISE, Lahore</option>
                                                                                    <option value="BISE, Larkana">BISE, Larkana</option>
                                                                                    <option value="BISE, Malakand">BISE, Malakand</option>
                                                                                    <option value="BISE, Mardan">BISE, Mardan</option>
                                                                                    <option value="BISE, Mirpur Khas">BISE, Mirpur Khas</option>
                                                                                    <option value="BISE, Multan">BISE, Multan</option>
                                                                                    <option value="BISE, Peshawar">BISE, Peshawar</option>
                                                                                    <option value="BISE, Rawalpindi">BISE, Rawalpindi</option>
                                                                                    <option value="BISE, Sahiwal">BISE, Sahiwal</option>
                                                                                    <option value="BISE, Sargodha">BISE, Sargodha</option>
                                                                                    <option value="BISE, Sukkur">BISE, Sukkur</option>
                                                                                    <option value="BISE, Swat">BISE, Swat</option>
                                                                                    <option value="Board of Technical Education, Khyber Pakhtunkhwa">Board of Technical Education, Khyber Pakhtunkhwa</option>
                                                                                    <option value="Cambridge Board">Cambridge Board</option>
                                                                                    <option value="Edexcel International">Edexcel International</option>
                                                                                    <option value="FBISE, Islamabad">FBISE, Islamabad</option>
                                                                                    <option value="Inter Board Committee of Chairmen, Islamabad">Inter Board Committee of Chairmen, Islamabad</option>
                                                                                    <option value="Karakoram International University Board, Gilgit Baltistan">Karakoram International University Board, Gilgit Baltistan</option>
                                                                                    <option value="Punjab Board of Technical Education, Lahore">Punjab Board of Technical Education, Lahore</option>
                                                                                    <option value="TEVTA, Lahore">TEVTA, Lahore</option>
                                                                                    <option value="Other">Other</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Subjects</label>
                                                                                <select name="degree" id="degree" required class="form-control">
                                                                                    <option value="Select">Select Subject</option>
                                                                                    <option value="Science">Science</option>
                                                                                    <option value="Arts">Arts</option>
                                                                                    <option value="Other">Other</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Minimum Marks</label>
                                                                                <div>
                                                                                    <input type="text" class="form-control" name="minimum-marks" value="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Obtained Marks</label>
                                                                                <div>
                                                                                    <input type="text" class="form-control" name="obtainedmarks" value="">
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
                                                    </td>
                                                    <td><a href="" data-toggle="modal" data-target="#ModalLoginForm"><i class="far fa-edit" style="font-size: 22px;">
                                                            </i></a></td>
                                                    <td>Incomplete</td>
                                                    <td>Incomplete</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>
                                                        <a href="" data-toggle="modal" data-target="#IntermediateForm">
                                                            Intermediate
                                                        </a>
                                                        <!-- Modal HTML Markup -->
                                                        <div id="IntermediateForm" class="modal fade">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h3 class="modal-title">Intermediate</h3>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form role="form" method="POST" action="">
                                                                            <input type="hidden" name="_token" value="">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Degree</label>
                                                                                <select name="degree" id="degree" required class="form-control">
                                                                                    <option value="Select">Select Degree</option>
                                                                                    <option value="FSC">FSC</option>
                                                                                    <option value="ICS">ICS</option>
                                                                                    <option value="I.COM">I.COM</option>
                                                                                    <option value="D.COM">D.COM</option>
                                                                                    <option value="A-Level">A-Level</option>
                                                                                    <option value="DAE">DAE</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Year of Passing</label>
                                                                                <select name='day' id='blah' class="form-control">
                                                                                    <option value='Years'>Years</option>
                                                                                    <option value='2019'>2019</option>
                                                                                    <option value='2018'>2018</option>
                                                                                    <option value='2017'>2017</option>
                                                                                    <option value='2016'>2016</option>
                                                                                    <option value='2015'>2015</option>
                                                                                    <option value='2014'>2014</option>
                                                                                    <option value='2013'>2013</option>
                                                                                    <option value='2012'>2012</option>
                                                                                    <option value='2011'>2011</option>
                                                                                    <option value='2010'>2010</option>
                                                                                    <option value='2009'>2009</option>
                                                                                    <option value='2008'>2008</option>
                                                                                    <option value='2007'>2007</option>
                                                                                    <option value='2006'>2006</option>
                                                                                    <option value='2005'>2005</option>
                                                                                    <option value='2004'>2004</option>
                                                                                    <option value='2003'>2003</option>
                                                                                    <option value='2002'>2002</option>
                                                                                    <option value='2001'>2001</option>
                                                                                    <option value='2000'>2000</option>
                                                                                    <option value='1999'>1999</option>
                                                                                    <option value='1998'>1998</option>
                                                                                    <option value='1997'>1997</option>
                                                                                    <option value='1996'>1996</option>
                                                                                    <option value='1995'>1995</option>
                                                                                    <option value='1994'>1994</option>
                                                                                    <option value='1993'>1993</option>
                                                                                    <option value='1992'>1992</option>
                                                                                    <option value='1991'>1991</option>
                                                                                    <option value='1990'>1990</option>
                                                                                    <option value='1989'>1989</option>
                                                                                    <option value='1988'>1988</option>
                                                                                    <option value='1987'>1987</option>
                                                                                    <option value='1986'>1986</option>
                                                                                    <option value='1985'>1985</option>
                                                                                    <option value='1999'>1984</option>
                                                                                    <option value='1998'>1983</option>
                                                                                    <option value='1997'>1982</option>
                                                                                    <option value='1996'>1981</option>
                                                                                    <option value='1995'>1970</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="board">Board</label>
                                                                                <select class="form-control">
                                                                                    <option value="">Select Board / University</option>
                                                                                    <option value="Agha Khan University Board, Karachi">Agha Khan University Board, Karachi</option>
                                                                                    <option value="BISE, Abbotabad">BISE, Abbotabad</option>
                                                                                    <option value="BISE, AJK">BISE, AJK</option>
                                                                                    <option value="BISE, Bahawalpur">BISE, Bahawalpur</option>
                                                                                    <option value="BISE, Balochistan">BISE, Balochistan</option>
                                                                                    <option value="BISE, Bannu">BISE, Bannu</option>
                                                                                    <option value="BISE, DG Khan">BISE, DG Khan</option>
                                                                                    <option value="BISE, DI Khan">BISE, DI Khan</option>
                                                                                    <option value="BISE, Faislabad">BISE, Faislabad</option>
                                                                                    <option value="BISE, Gujranwala">BISE, Gujranwala</option>
                                                                                    <option value="BISE, Hyderabad">BISE, Hyderabad</option>
                                                                                    <option value="BISE, Karachi">BISE, Karachi</option>
                                                                                    <option value="BISE, Kohat">BISE, Kohat</option>
                                                                                    <option value="BISE, Lahore">BISE, Lahore</option>
                                                                                    <option value="BISE, Larkana">BISE, Larkana</option>
                                                                                    <option value="BISE, Malakand">BISE, Malakand</option>
                                                                                    <option value="BISE, Mardan">BISE, Mardan</option>
                                                                                    <option value="BISE, Mirpur Khas">BISE, Mirpur Khas</option>
                                                                                    <option value="BISE, Multan">BISE, Multan</option>
                                                                                    <option value="BISE, Peshawar">BISE, Peshawar</option>
                                                                                    <option value="BISE, Rawalpindi">BISE, Rawalpindi</option>
                                                                                    <option value="BISE, Sahiwal">BISE, Sahiwal</option>
                                                                                    <option value="BISE, Sargodha">BISE, Sargodha</option>
                                                                                    <option value="BISE, Sukkur">BISE, Sukkur</option>
                                                                                    <option value="BISE, Swat">BISE, Swat</option>
                                                                                    <option value="Board of Technical Education, Khyber Pakhtunkhwa">Board of Technical Education, Khyber Pakhtunkhwa</option>
                                                                                    <option value="Cambridge Board">Cambridge Board</option>
                                                                                    <option value="Edexcel International">Edexcel International</option>
                                                                                    <option value="FBISE, Islamabad">FBISE, Islamabad</option>
                                                                                    <option value="Inter Board Committee of Chairmen, Islamabad">Inter Board Committee of Chairmen, Islamabad</option>
                                                                                    <option value="Karakoram International University Board, Gilgit Baltistan">Karakoram International University Board, Gilgit Baltistan</option>
                                                                                    <option value="Punjab Board of Technical Education, Lahore">Punjab Board of Technical Education, Lahore</option>
                                                                                    <option value="TEVTA, Lahore">TEVTA, Lahore</option>
                                                                                    <option value="Other">Other</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Subjects</label>
                                                                                <select name="subject" id="subject" required class="form-control">
                                                                                    <option value="Select">Select Subject</option>
                                                                                    <option value="Pre Engreeing">Pre Engreeing</option>
                                                                                    <option value="Computer Science">Computer Science</option>
                                                                                    <option value="Pre Medical">Pre Medical</option>
                                                                                    <option value="Arts & Humanities">Arts & Humanities</option>
                                                                                    <option value="Commerce">Commerce</option>
                                                                                    <option value="General Science">General Science</option>
                                                                                    <option value="Other">Other</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Minimum Marks</label>
                                                                                <div>
                                                                                    <input type="text" class="form-control" name="minimum-marks" value="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Obtained Marks</label>
                                                                                <div>
                                                                                    <input type="text" class="form-control" name="obtainedmarks" value="">
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
                                                    </td>
                                                    <td><a href="" data-toggle="modal" data-target="#IntermediateForm">
                                                            <i class="far fa-edit" style="font-size: 22px;"></i>
                                                        </a></td>
                                                    <td>Incomplete</td>
                                                    <td>Incomplete</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>
                                                        <a href="" data-toggle="modal" data-target="#14yearForm">
                                                            14 Years (Optional)
                                                        </a>
                                                        <!-- Modal HTML Markup -->
                                                        <div id="14yearForm" class="modal fade">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h3 class="modal-title">14 years (Optional)</h3>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form role="form" method="POST" action="">
                                                                            <input type="hidden" name="_token" value="">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Degree</label>
                                                                                <select name="degree" id="degree" required class="form-control">
                                                                                    <option value="Select">Select Degree</option>
                                                                                    <option value="BA">BA</option>
                                                                                    <option value="BSC">BSC</option>
                                                                                    <option value="B.Com">B.Com</option>
                                                                                    <option value="BBA">BBA (2 years)</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Year of Passing</label>
                                                                                <select name='day' id='blah' class="form-control">
                                                                                    <option value='Years'>Years</option>
                                                                                    <option value='2019'>2019</option>
                                                                                    <option value='2018'>2018</option>
                                                                                    <option value='2017'>2017</option>
                                                                                    <option value='2016'>2016</option>
                                                                                    <option value='2015'>2015</option>
                                                                                    <option value='2014'>2014</option>
                                                                                    <option value='2013'>2013</option>
                                                                                    <option value='2012'>2012</option>
                                                                                    <option value='2011'>2011</option>
                                                                                    <option value='2010'>2010</option>
                                                                                    <option value='2009'>2009</option>
                                                                                    <option value='2008'>2008</option>
                                                                                    <option value='2007'>2007</option>
                                                                                    <option value='2006'>2006</option>
                                                                                    <option value='2005'>2005</option>
                                                                                    <option value='2004'>2004</option>
                                                                                    <option value='2003'>2003</option>
                                                                                    <option value='2002'>2002</option>
                                                                                    <option value='2001'>2001</option>
                                                                                    <option value='2000'>2000</option>
                                                                                    <option value='1999'>1999</option>
                                                                                    <option value='1998'>1998</option>
                                                                                    <option value='1997'>1997</option>
                                                                                    <option value='1996'>1996</option>
                                                                                    <option value='1995'>1995</option>
                                                                                    <option value='1994'>1994</option>
                                                                                    <option value='1993'>1993</option>
                                                                                    <option value='1992'>1992</option>
                                                                                    <option value='1991'>1991</option>
                                                                                    <option value='1990'>1990</option>
                                                                                    <option value='1989'>1989</option>
                                                                                    <option value='1988'>1988</option>
                                                                                    <option value='1987'>1987</option>
                                                                                    <option value='1986'>1986</option>
                                                                                    <option value='1985'>1985</option>
                                                                                    <option value='1999'>1984</option>
                                                                                    <option value='1998'>1983</option>
                                                                                    <option value='1997'>1982</option>
                                                                                    <option value='1996'>1981</option>
                                                                                    <option value='1995'>1970</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="board">Board</label>
                                                                                <select name="" id="" class="form-control">
                                                                                    <option value="">Select Board / University</option>
                                                                                    <option value="Abdul Wali Khan University Mardan">Abdul Wali Khan University Mardan</option>
                                                                                    <option value="Aga Khan University">Aga Khan University</option>
                                                                                    <option value="AIOU Islamabad">AIOU Islamabad</option>
                                                                                    <option value="Air University Islamabad">Air University Islamabad</option>
                                                                                    <option value="Bahauddin Zakariya University,&nbsp;Multan">Bahauddin Zakariya University,&nbsp;Multan</option>
                                                                                    <option value="Balochistan University of Information Technology, Engineering and Management Sciences Quetta">Balochistan University of Information Technology, Engineering and Management Sciences Quetta</option>
                                                                                    <option value="Bahria University">Bahria University</option>
                                                                                    <option value="Comsats Instituate of Information Technology">Comsats Instituate of Information Technology</option>
                                                                                    <option value="City University of Science and Information Technology Peshawar">City University of Science and Information Technology Peshawar</option>
                                                                                    <option value="Dr AQ khan Institute of Computer Sciences and Information Technology">Dr AQ khan Institute of Computer Sciences and Information Technology</option>
                                                                                    <option value="Fatima Jinnah Women University, Rawalpindi">Fatima Jinnah Women University, Rawalpindi</option>
                                                                                    <option value="Federal Urdu University of Science &amp; Technology">Federal Urdu University of Science &amp; Technology</option>
                                                                                    <option value="GC University Faisalabad">GC University Faisalabad</option>
                                                                                    <option value="GIFT University, Gujranwala">GIFT University, Gujranwala</option>
                                                                                    <option value="Gomal University DI Khan">Gomal University DI Khan</option>
                                                                                    <option value="Government College University Lahore">Government College University Lahore</option>
                                                                                    <option value="Hazara University Haripur Campus">Hazara University Haripur Campus</option>
                                                                                    <option value="Hazara Universty Mansehra">Hazara Universty Mansehra</option>
                                                                                    <option value="Institute of Management Sciences Peshawar">Institute of Management Sciences Peshawar</option>
                                                                                    <option value="International Islamic University Islamabad">International Islamic University Islamabad</option>
                                                                                    <option value="Iqra National University Peshawar">Iqra National University Peshawar</option>
                                                                                    <option value="Iqra University Quetta Campus">Iqra University Quetta Campus</option>
                                                                                    <option value="Islamia University Bahawalpur">Islamia University Bahawalpur</option>
                                                                                    <option value="Isra University Hyderabad">Isra University Hyderabad</option>
                                                                                    <option value="Karakarum International University Giligit">Karakarum International University Giligit</option>
                                                                                    <option value="Khyber Pakhtoon Khwa agriculture University Peshawar">Khyber Pakhtoon Khwa agriculture University Peshawar</option>
                                                                                    <option value="Kohat University of Science and Technology">Kohat University of Science and Technology</option>
                                                                                    <option value="Liaquat National University of Medical and Health Sciences jamshoro">Liaquat National University of Medical and Health Sciences jamshoro</option>
                                                                                    <option value="Mehran University of Engineering and Technology Jamshoro">Mehran University of Engineering and Technology Jamshoro</option>
                                                                                    <option value="Muhammad Ali Jinnah University">Muhammad Ali Jinnah University</option>
                                                                                    <option value="National Textile University">National Textile University</option>
                                                                                    <option value="National University of Computer and Emerging Sciences">National University of Computer and Emerging Sciences</option>
                                                                                    <option value="National University of Modern Languages&nbsp;(NUML)">National University of Modern Languages&nbsp;(NUML)</option>
                                                                                    <option value="National University of Sciences and Technology&nbsp;(NUST)">National University of Sciences and Technology&nbsp;(NUST)</option>
                                                                                    <option value="NED University of Engineering and Technology">NED University of Engineering and Technology</option>
                                                                                    <option value="NFC Institute of Engineering and Technological Training">NFC Institute of Engineering and Technological Training</option>
                                                                                    <option value="PMAS Arid Agriculture University Rawalpindi">PMAS Arid Agriculture University Rawalpindi</option>
                                                                                    <option value="Preston University, Pakistan">Preston University, Pakistan</option>
                                                                                    <option value="Sarhad University">Sarhad University</option>
                                                                                    <option value="Shah Abdul Latif University,&nbsp;Khairpur">Shah Abdul Latif University,&nbsp;Khairpur</option>
                                                                                    <option value="Superior University, Lahore">Superior University, Lahore</option>
                                                                                    <option value="The University of Agriculture Peshawar">The University of Agriculture Peshawar</option>
                                                                                    <option value="UET Peshawar Gist&nbsp;Campus">UET Peshawar Gist&nbsp;Campus</option>
                                                                                    <option value="UET Taxila">UET Taxila</option>
                                                                                    <option value="University of Azad Jammu and Kashmir - Muzaffarabad">University of Azad Jammu and Kashmir - Muzaffarabad</option>
                                                                                    <option value="University of Balochistan">University of Balochistan</option>
                                                                                    <option value="University of East Hyderabad Sindh Latifabad">University of East Hyderabad Sindh Latifabad</option>
                                                                                    <option value="University of Education Attock">University of Education Attock</option>
                                                                                    <option value="University of Education,&nbsp;Lahore">University of Education,&nbsp;Lahore</option>
                                                                                    <option value="University of Engineering and Technology(UET) Lahore">University of Engineering and Technology(UET) Lahore</option>
                                                                                    <option value="University of Gujrat">University of Gujrat</option>
                                                                                    <option value="University of Health Sciences Lahore">University of Health Sciences Lahore</option>
                                                                                    <option value="University of Karachi">University of Karachi</option>
                                                                                    <option value="University of Malakand">University of Malakand</option>
                                                                                    <option value="University of Punjab">University of Punjab</option>
                                                                                    <option value="University of Punjab Gujranwala Campus">University of Punjab Gujranwala Campus</option>
                                                                                    <option value="University of Sargodha">University of Sargodha</option>
                                                                                    <option value="University of Science &amp; Technology Bannu">University of Science &amp; Technology Bannu</option>
                                                                                    <option value="University of West London">University of West London</option>
                                                                                    <option value="University of Wollongong">University of Wollongong</option>
                                                                                    <option value="University&nbsp;of&nbsp;Balochistan, Quetta">University&nbsp;of&nbsp;Balochistan, Quetta</option>
                                                                                    <option value="University&nbsp;of&nbsp;Cambridge">University&nbsp;of&nbsp;Cambridge</option>
                                                                                    <option value="University&nbsp;of&nbsp;East&nbsp;Hyderabad">University&nbsp;of&nbsp;East&nbsp;Hyderabad</option>
                                                                                    <option value="University&nbsp;of&nbsp;Peshawar">University&nbsp;of&nbsp;Peshawar</option>
                                                                                    <option value="University&nbsp;of&nbsp;Sindh">University&nbsp;of&nbsp;Sindh</option>
                                                                                    <option value="Virtual University of Pakistan">Virtual University of Pakistan</option>
                                                                                    <option value="Other">Other</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Subjects</label>
                                                                                <select name="degree" id="degree" required class="form-control">
                                                                                    <option value="Select">Select Subject</option>
                                                                                    <option value="Arts">Arts</option>
                                                                                    <option value="Biological Science">Biological Science</option>
                                                                                    <option value="Commerce">Commerce</option>
                                                                                    <option value="Social Science">Social Science</option>
                                                                                    <option value="Management Science">Management Science</option>
                                                                                    <option value="Physicaly Science">Physicaly Science</option>
                                                                                    <option value="Oriental & Islamic Studies">Oriental & Islamic Studies</option>
                                                                                    <option value="Other">Other</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Minimum Marks</label>
                                                                                <div>
                                                                                    <input type="text" class="form-control" name="minimum-marks" value="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Obtained Marks</label>
                                                                                <div>
                                                                                    <input type="text" class="form-control" name="obtainedmarks" value="">
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
                                                    </td>
                                                    <td><a href="" data-toggle="modal" data-target="#14yearForm">
                                                            <i class="far fa-edit" style="font-size: 22px;"></i>
                                                        </a></td>
                                                    <td>Incomplete</td>
                                                    <td>Incomplete</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>
                                                        <a href="" data-toggle="modal" data-target="#16yearform">
                                                            16 Years
                                                        </a>
                                                        <!-- Modal HTML Markup -->
                                                        <div id="16yearform" class="modal fade">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h3 class="modal-title">16 Years Education</h3>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form role="form" method="POST" action="">
                                                                            <input type="hidden" name="_token" value="">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Degree</label>
                                                                                <div>
                                                                                    <input type="text" class="form-control" name="degreename" value="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Year of Passing</label>
                                                                                <select name='day' id='blah' class="form-control">
                                                                                    <option value='Years'>Years</option>
                                                                                    <option value='2019'>2019</option>
                                                                                    <option value='2018'>2018</option>
                                                                                    <option value='2017'>2017</option>
                                                                                    <option value='2016'>2016</option>
                                                                                    <option value='2015'>2015</option>
                                                                                    <option value='2014'>2014</option>
                                                                                    <option value='2013'>2013</option>
                                                                                    <option value='2012'>2012</option>
                                                                                    <option value='2011'>2011</option>
                                                                                    <option value='2010'>2010</option>
                                                                                    <option value='2009'>2009</option>
                                                                                    <option value='2008'>2008</option>
                                                                                    <option value='2007'>2007</option>
                                                                                    <option value='2006'>2006</option>
                                                                                    <option value='2005'>2005</option>
                                                                                    <option value='2004'>2004</option>
                                                                                    <option value='2003'>2003</option>
                                                                                    <option value='2002'>2002</option>
                                                                                    <option value='2001'>2001</option>
                                                                                    <option value='2000'>2000</option>
                                                                                    <option value='1999'>1999</option>
                                                                                    <option value='1998'>1998</option>
                                                                                    <option value='1997'>1997</option>
                                                                                    <option value='1996'>1996</option>
                                                                                    <option value='1995'>1995</option>
                                                                                    <option value='1994'>1994</option>
                                                                                    <option value='1993'>1993</option>
                                                                                    <option value='1992'>1992</option>
                                                                                    <option value='1991'>1991</option>
                                                                                    <option value='1990'>1990</option>
                                                                                    <option value='1989'>1989</option>
                                                                                    <option value='1988'>1988</option>
                                                                                    <option value='1987'>1987</option>
                                                                                    <option value='1986'>1986</option>
                                                                                    <option value='1985'>1985</option>
                                                                                    <option value='1999'>1984</option>
                                                                                    <option value='1998'>1983</option>
                                                                                    <option value='1997'>1982</option>
                                                                                    <option value='1996'>1981</option>
                                                                                    <option value='1995'>1970</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="board">Board</label>
                                                                                <select class="form-control">
                                                                                    <option value="">Select Board / University</option>
                                                                                    <option value="Agha Khan University Board, Karachi">Agha Khan University Board, Karachi</option>
                                                                                    <option value="BISE, Abbotabad">BISE, Abbotabad</option>
                                                                                    <option value="BISE, AJK">BISE, AJK</option>
                                                                                    <option value="BISE, Bahawalpur">BISE, Bahawalpur</option>
                                                                                    <option value="BISE, Balochistan">BISE, Balochistan</option>
                                                                                    <option value="BISE, Bannu">BISE, Bannu</option>
                                                                                    <option value="BISE, DG Khan">BISE, DG Khan</option>
                                                                                    <option value="BISE, DI Khan">BISE, DI Khan</option>
                                                                                    <option value="BISE, Faislabad">BISE, Faislabad</option>
                                                                                    <option value="BISE, Gujranwala">BISE, Gujranwala</option>
                                                                                    <option value="BISE, Hyderabad">BISE, Hyderabad</option>
                                                                                    <option value="BISE, Karachi">BISE, Karachi</option>
                                                                                    <option value="BISE, Kohat">BISE, Kohat</option>
                                                                                    <option value="BISE, Lahore">BISE, Lahore</option>
                                                                                    <option value="BISE, Larkana">BISE, Larkana</option>
                                                                                    <option value="BISE, Malakand">BISE, Malakand</option>
                                                                                    <option value="BISE, Mardan">BISE, Mardan</option>
                                                                                    <option value="BISE, Mirpur Khas">BISE, Mirpur Khas</option>
                                                                                    <option value="BISE, Multan">BISE, Multan</option>
                                                                                    <option value="BISE, Peshawar">BISE, Peshawar</option>
                                                                                    <option value="BISE, Rawalpindi">BISE, Rawalpindi</option>
                                                                                    <option value="BISE, Sahiwal">BISE, Sahiwal</option>
                                                                                    <option value="BISE, Sargodha">BISE, Sargodha</option>
                                                                                    <option value="BISE, Sukkur">BISE, Sukkur</option>
                                                                                    <option value="BISE, Swat">BISE, Swat</option>
                                                                                    <option value="Board of Technical Education, Khyber Pakhtunkhwa">Board of Technical Education, Khyber Pakhtunkhwa</option>
                                                                                    <option value="Cambridge Board">Cambridge Board</option>
                                                                                    <option value="Edexcel International">Edexcel International</option>
                                                                                    <option value="FBISE, Islamabad">FBISE, Islamabad</option>
                                                                                    <option value="Inter Board Committee of Chairmen, Islamabad">Inter Board Committee of Chairmen, Islamabad</option>
                                                                                    <option value="Karakoram International University Board, Gilgit Baltistan">Karakoram International University Board, Gilgit Baltistan</option>
                                                                                    <option value="Punjab Board of Technical Education, Lahore">Punjab Board of Technical Education, Lahore</option>
                                                                                    <option value="TEVTA, Lahore">TEVTA, Lahore</option>
                                                                                    <option value="Other">Other</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">Subjects</label>
                                                                                <div>
                                                                                    <input type="text" class="form-control" name="subjectname" value="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">CGPA Max / Max Marks</label>
                                                                                <div>
                                                                                    <input type="text" class="form-control" name="cgpa" value="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label">CGPA Obtained / Obtained Marks</label>
                                                                                <div>
                                                                                    <input type="text" class="form-control" name="cgpaobtained" value="">
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
                                                    </td>
                                                    <td><a href="" data-toggle="modal" data-target="#16yearform">
                                                            <i class="far fa-edit" style="font-size: 22px;"></i>
                                                        </a></td>
                                                    <td>Incomplete</td>
                                                    <td>Incomplete</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
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
                <div class="col-md-4">
                    <div class="card card-body">
                        <div class="author">
                            <h5 class="title" style="color: #51CBCE;">Help Center</h5>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>
                                    Enter your education details in this form.
                                </li>
                                <li>
                                    If you are applying in <b>undergraduate</b> proggram and your intermediate result is not arrived yet, click the <b>Result Awaiting</b> checkbox.
                                </li>
                                <li>
                                    Select the Board / University from the dropdown list and if your Board / University are not mentioned in the dropdownlist, select <b>Other</b> option and enter your Board / University name manually.
                                </li>
                                <li>
                                    Select the subjects of your degree from the dropdown list and if they are not appearing our dropdown then select <b>Other</b> option and enter your subject name manually.
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <hr>
                            <div class="button-container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-6 ml-auto mr-auto">
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