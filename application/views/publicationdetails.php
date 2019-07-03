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
                    <a class="navbar-brand" href="#pablo">Publication Details</a>
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
                                            <h3 class="modal-title">Enter Publication Details</h3>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" method="POST" action="">
                                                <input type="hidden" name="_token" value="">
                                                <div class="form-group">
                                                    <label class="control-label">Title</label>
                                                    <div>
                                                        <input type="text" class="form-control" name="title" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Type</label>
                                                    <select name="typejob" id="typejob" class="form-control">
                                                        <option value="Conference">Conference</option>
                                                        <option value="Journal">Journal</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Level</label>
                                                    <select name="level" id="level" class="form-control">
                                                        <option value="National">National</option>
                                                        <option value="International">International</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">First Author</label>
                                                    <div>
                                                        <input type="text" class="form-control" name="firstauthor" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Second Author</label>
                                                    <div>
                                                        <input type="text" class="form-control" name="secondauthor" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Third Author</label>
                                                    <div>
                                                        <input type="text" class="form-control" name="thirdauthor" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Publisher</label>
                                                    <div>
                                                        <input type="text" class="form-control" name="publisher" value="">
                                                    </div>
                                                </div>
                                                    <div class="form-group">
                                                        <label for="board">Publishing Years</label>
                                                        <select name='year' id='year' class="form-control">
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
                                                <div class="form-group">
                                                    <label for="board">Volume</label>
                                                    <input type="text" class="form-control" name="volume">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Chapters</label>
                                                    <div>
                                                        <input type="text" class="form-control" name="chapters" value="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Pages</label>
                                                    <div>
                                                        <input type="text" class="form-control" name="pages" value="">
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
                                    <div class="col-md-12 col-sm-12 col-xs-12 px-1">
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
                                    If you have published a research paper ever, you can enter its details in this form.
                                </li>
                                <li>
                                    You'll have to enter publisher name, year your paper was published, and any other author names that were accompanying you.
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