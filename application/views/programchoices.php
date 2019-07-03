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
                    <a class="navbar-brand" href="#pablo">Instructions</a>
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
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="card card-user">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-9 col-sm-12 col-xs-12 pr-1">
                                        <div class="form-group">
                                            <i class="fas fa-info-circle"></i><label>&nbsp;
                                                Please <a href="#">ClickHere</a> for Program Details.
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <label>Program Choice 1</label>
                                <div class="row">
                                    <div class="col-md-8 col-sm-12 col-xs-12 pr-1">
                                        <div class="form-group">
                                            <select name='day' id='dayddl' class="form-control">
                                                <option value="">Select 1st Choice</option>
                                                <option value="2">MBA (1.5 years)</option>
                                                <option value="5">MS(Biochemistry and Molecular Biology)</option>
                                                <option value="6">MS(Bioinformatics)</option>
                                                <option value="7">MS(BioSciences)</option>
                                                <option value="10">MS(Chem)</option>
                                                <option value="11">MS(Computer Engineering)</option>
                                                <option value="12">MS(Computer Science)</option>
                                                <option value="14">MS(Economics) </option>
                                                <option value="15">MS(Electrical Engineering)</option>
                                                <option value="20">MS( Health Informatics)</option>
                                                <option value="21">MS(Information Security)</option>
                                                <option value="22">MS(Management Sciences)</option>
                                                <option value="23">MS(Mathematics)</option>
                                                <option value="24">MS(Meteorology)</option>
                                                <option value="25">MS(Microbiology and Immunology)</option>
                                                <option value="26">MS(Molecular Genetics)</option>
                                                <option value="27">MS(Molecular Virology)</option>
                                                <option value="31">MS Physics</option>
                                                <option value="32">MS(Project Management)</option>
                                                <option value="33">MS(Remote Sensing &amp; GIS)</option>
                                                <option value="34">MS(Software Engineering)</option>
                                                <option value="96">MS in English(Linguistics and Literature)</option>
                                                <option value="107">MS in International Relations</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <label>Program Choice 2</label>
                                <div class="row">
                                    <div class="col-md-8 col-sm-12 col-xs-12 pr-1">
                                        <div class="form-group">
                                            <select name='day' id='dayddl' class="form-control">
                                                <option value="">Select 2nd Choice</option>
                                                <option value="2">MBA (1.5 years)</option>
                                                <option value="5">MS(Biochemistry and Molecular Biology)</option>
                                                <option value="6">MS(Bioinformatics)</option>
                                                <option value="7">MS(BioSciences)</option>
                                                <option value="10">MS(Chem)</option>
                                                <option value="11">MS(Computer Engineering)</option>
                                                <option value="12">MS(Computer Science)</option>
                                                <option value="14">MS(Economics) </option>
                                                <option value="15">MS(Electrical Engineering)</option>
                                                <option value="20">MS( Health Informatics)</option>
                                                <option value="21">MS(Information Security)</option>
                                                <option value="22">MS(Management Sciences)</option>
                                                <option value="23">MS(Mathematics)</option>
                                                <option value="24">MS(Meteorology)</option>
                                                <option value="25">MS(Microbiology and Immunology)</option>
                                                <option value="26">MS(Molecular Genetics)</option>
                                                <option value="27">MS(Molecular Virology)</option>
                                                <option value="31">MS Physics</option>
                                                <option value="32">MS(Project Management)</option>
                                                <option value="33">MS(Remote Sensing &amp; GIS)</option>
                                                <option value="34">MS(Software Engineering)</option>
                                                <option value="96">MS in English(Linguistics and Literature)</option>
                                                <option value="107">MS in International Relations</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <label>Program Choice 3</label>
                                <div class="row">
                                    <div class="col-md-8 col-sm-12 col-xs-12 pr-1">
                                        <div class="form-group">
                                            <select name='day' id='dayddl' class="form-control">
                                                <option value="">Select 3rd Choice</option>
                                                <option value="2">MBA (1.5 years)</option>
                                                <option value="5">MS(Biochemistry and Molecular Biology)</option>
                                                <option value="6">MS(Bioinformatics)</option>
                                                <option value="7">MS(BioSciences)</option>
                                                <option value="10">MS(Chem)</option>
                                                <option value="11">MS(Computer Engineering)</option>
                                                <option value="12">MS(Computer Science)</option>
                                                <option value="14">MS(Economics) </option>
                                                <option value="15">MS(Electrical Engineering)</option>
                                                <option value="20">MS( Health Informatics)</option>
                                                <option value="21">MS(Information Security)</option>
                                                <option value="22">MS(Management Sciences)</option>
                                                <option value="23">MS(Mathematics)</option>
                                                <option value="24">MS(Meteorology)</option>
                                                <option value="25">MS(Microbiology and Immunology)</option>
                                                <option value="26">MS(Molecular Genetics)</option>
                                                <option value="27">MS(Molecular Virology)</option>
                                                <option value="31">MS Physics</option>
                                                <option value="32">MS(Project Management)</option>
                                                <option value="33">MS(Remote Sensing &amp; GIS)</option>
                                                <option value="34">MS(Software Engineering)</option>
                                                <option value="96">MS in English(Linguistics and Literature)</option>
                                                <option value="107">MS in International Relations</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <label>Program Choice 4</label>
                                <div class="row">
                                    <div class="col-md-8 col-sm-12 col-xs-12 pr-1">
                                        <div class="form-group">
                                            <select name='day' id='dayddl' class="form-control">
                                                <option value="">Select 4th Choice</option>
                                                <option value="2">MBA (1.5 years)</option>
                                                <option value="5">MS(Biochemistry and Molecular Biology)</option>
                                                <option value="6">MS(Bioinformatics)</option>
                                                <option value="7">MS(BioSciences)</option>
                                                <option value="10">MS(Chem)</option>
                                                <option value="11">MS(Computer Engineering)</option>
                                                <option value="12">MS(Computer Science)</option>
                                                <option value="14">MS(Economics) </option>
                                                <option value="15">MS(Electrical Engineering)</option>
                                                <option value="20">MS( Health Informatics)</option>
                                                <option value="21">MS(Information Security)</option>
                                                <option value="22">MS(Management Sciences)</option>
                                                <option value="23">MS(Mathematics)</option>
                                                <option value="24">MS(Meteorology)</option>
                                                <option value="25">MS(Microbiology and Immunology)</option>
                                                <option value="26">MS(Molecular Genetics)</option>
                                                <option value="27">MS(Molecular Virology)</option>
                                                <option value="31">MS Physics</option>
                                                <option value="32">MS(Project Management)</option>
                                                <option value="33">MS(Remote Sensing &amp; GIS)</option>
                                                <option value="34">MS(Software Engineering)</option>
                                                <option value="96">MS in English(Linguistics and Literature)</option>
                                                <option value="107">MS in International Relations</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <label>Program Choice 5</label>
                                <div class="row">
                                    <div class="col-md-8 col-sm-12 col-xs-12 pr-1">
                                        <div class="form-group">
                                            <select name='day' id='dayddl' class="form-control">
                                                <option value="">Select 5th Choice</option>
                                                <option value="2">MBA (1.5 years)</option>
                                                <option value="5">MS(Biochemistry and Molecular Biology)</option>
                                                <option value="6">MS(Bioinformatics)</option>
                                                <option value="7">MS(BioSciences)</option>
                                                <option value="10">MS(Chem)</option>
                                                <option value="11">MS(Computer Engineering)</option>
                                                <option value="12">MS(Computer Science)</option>
                                                <option value="14">MS(Economics) </option>
                                                <option value="15">MS(Electrical Engineering)</option>
                                                <option value="20">MS( Health Informatics)</option>
                                                <option value="21">MS(Information Security)</option>
                                                <option value="22">MS(Management Sciences)</option>
                                                <option value="23">MS(Mathematics)</option>
                                                <option value="24">MS(Meteorology)</option>
                                                <option value="25">MS(Microbiology and Immunology)</option>
                                                <option value="26">MS(Molecular Genetics)</option>
                                                <option value="27">MS(Molecular Virology)</option>
                                                <option value="31">MS Physics</option>
                                                <option value="32">MS(Project Management)</option>
                                                <option value="33">MS(Remote Sensing &amp; GIS)</option>
                                                <option value="34">MS(Software Engineering)</option>
                                                <option value="96">MS in English(Linguistics and Literature)</option>
                                                <option value="107">MS in International Relations</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <label>Program Choice 6</label>
                                <div class="row">
                                    <div class="col-md-8 col-sm-12 col-xs-12 pr-1">
                                        <div class="form-group">
                                            <select name='day' id='dayddl' class="form-control">
                                                <option value="">Select 6th Choice</option>
                                                <option value="2">MBA (1.5 years)</option>
                                                <option value="5">MS(Biochemistry and Molecular Biology)</option>
                                                <option value="6">MS(Bioinformatics)</option>
                                                <option value="7">MS(BioSciences)</option>
                                                <option value="10">MS(Chem)</option>
                                                <option value="11">MS(Computer Engineering)</option>
                                                <option value="12">MS(Computer Science)</option>
                                                <option value="14">MS(Economics) </option>
                                                <option value="15">MS(Electrical Engineering)</option>
                                                <option value="20">MS( Health Informatics)</option>
                                                <option value="21">MS(Information Security)</option>
                                                <option value="22">MS(Management Sciences)</option>
                                                <option value="23">MS(Mathematics)</option>
                                                <option value="24">MS(Meteorology)</option>
                                                <option value="25">MS(Microbiology and Immunology)</option>
                                                <option value="26">MS(Molecular Genetics)</option>
                                                <option value="27">MS(Molecular Virology)</option>
                                                <option value="31">MS Physics</option>
                                                <option value="32">MS(Project Management)</option>
                                                <option value="33">MS(Remote Sensing &amp; GIS)</option>
                                                <option value="34">MS(Software Engineering)</option>
                                                <option value="96">MS in English(Linguistics and Literature)</option>
                                                <option value="107">MS in International Relations</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <label>Program Choice 7</label>
                                <div class="row">
                                    <div class="col-md-8 col-sm-12 col-xs-12 pr-1">
                                        <div class="form-group">
                                            <select name='day' id='dayddl' class="form-control">
                                                <option value="">Select 7th Choice</option>
                                                <option value="2">MBA (1.5 years)</option>
                                                <option value="5">MS(Biochemistry and Molecular Biology)</option>
                                                <option value="6">MS(Bioinformatics)</option>
                                                <option value="7">MS(BioSciences)</option>
                                                <option value="10">MS(Chem)</option>
                                                <option value="11">MS(Computer Engineering)</option>
                                                <option value="12">MS(Computer Science)</option>
                                                <option value="14">MS(Economics) </option>
                                                <option value="15">MS(Electrical Engineering)</option>
                                                <option value="20">MS( Health Informatics)</option>
                                                <option value="21">MS(Information Security)</option>
                                                <option value="22">MS(Management Sciences)</option>
                                                <option value="23">MS(Mathematics)</option>
                                                <option value="24">MS(Meteorology)</option>
                                                <option value="25">MS(Microbiology and Immunology)</option>
                                                <option value="26">MS(Molecular Genetics)</option>
                                                <option value="27">MS(Molecular Virology)</option>
                                                <option value="31">MS Physics</option>
                                                <option value="32">MS(Project Management)</option>
                                                <option value="33">MS(Remote Sensing &amp; GIS)</option>
                                                <option value="34">MS(Software Engineering)</option>
                                                <option value="96">MS in English(Linguistics and Literature)</option>
                                                <option value="107">MS in International Relations</option>
                                            </select>
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
                        <div class="card-footer">
                            <div class="button-container">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-xm-12 ml-auto mr-auto">
                                        <small><b>Upon selection of a program choice, the eligibility criteria for that program appears below the program
                                                dropdown list. Carefully read that and make sure you are eligibile to apply in that program.
                                                In case, the admission office finds that your qualification doesn't meet the eligibility criteria for that
                                                program, you'll automatically be disqualified from that program. </b></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="card-body">
                            <ul>
                                <li>
                                    <b>Program Choice 1</b> is Compulsory to be mentioned. Choose different programs wisely as 2nd and 3rd choice.
                                    In case you can not qualify for the first program you will automatically be considered for 2nd & 3rd respectively..
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