<?php $this->load->view('inc/header.php'); ?>
    <div class="wrapper ">
<?php $this->load->view('inc/mssidebar.php'); ?>
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
        <div class="content">
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-user">
                        <div class="card-header">
                            <h5 class="card-title">Work History</h5>
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#AddNew">
                                Add New
                            </a>
                            <!-- Modal HTML Markup -->
                            <div id="AddNew" data-backdrop="static" data-spy="scroll" class="modal fade">
                                <div class="modal-dialog" role="document" style="overflow-y: scroll; max-height:85%;  margin-top: 50px; margin-bottom:50px;">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title">Enter Work Detail</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" method="POST" action="<?php echo base_url("workhistory")?>">
                                                <div class="form-group">
                                                    <label class="control-label">Self Employed?</label>
                                                    <div>
                                                        Yes <input type="radio" name="selfemployed">
                                                        No <input type="radio" name="selfemployed" checked>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Job Title</label>
                                                    <div>
                                                        <input type="text" class="form-control" name="jobtitle" id="jobtitle" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Employer</label>
                                                    <div>
                                                        <input type="text" class="form-control" name="employer" id="employer" required>
                                                    </div>
                                                </div>
                                                <label for="control-label">From</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="date" name="formdate" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="board">Currently Working?</label>
                                                    <div>
                                                        Yes <input type="radio" name="currentlyworking">
                                                        No <input type="radio" name="currentlyworking">
                                                    </div>
                                                </div>
                                                <label for="control-label">To</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="date" name="todate" class="form-control" required>
                                                        </div>
                                                    </div >
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
                                                                <textarea name="description" id="description" cols="45" rows="3" required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div>
                                                        <button type="submit" class="btn btn-success">
                                                            Save
                                                        </button>
                                                        <button type="button" class="btn btn-ignore" data-dismiss="modal">
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
                            <form method="post" action="<?php echo base_url("Student/work_history_submit")?>">
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