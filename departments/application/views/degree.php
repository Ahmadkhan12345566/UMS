<?php $this->load->view('inc/header');?>
    <div class="wrapper">
<?php $this->load->view('inc/sidebar');?>
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
            <div class="col-md-12">
                <div class="card">
                    <div class="row">
                        <div class="col-md-10 col-sm-10">
                            <div class="card-header">
                                <h3>Degree</h3>
                            </div>
                        </div>
                        <div class=" col-sm-2">
                            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#AddDegee">
                                Add Degree
                            </button>
                            <!-- Modal HTML Markup -->
                            <div id="AddDegee" class="modal fade">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title">Add Degree</h3>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="<?php echo base_url("");?>">
                                                <div class="form-group">
                                                    <label class="control-label">Degree</label>
                                                    <input type="text" class="form-control" name="degree" id="degree" value="Degree Name">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Degree Title</label>
                                                    <input type="text" class="form-control" name="degreetitle" id="degree" value="Bs / Ms / Phd">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Select Department</label>
                                                    <select name="selectdepart" id="selectdepart" class="form-control">
                                                        <option value="Select Department">Select Department</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary">
                                                            Save
                                                        </button>
                                                        <button type="submit" class="btn btn-ignore" data-dismiss="modal">
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
                    </div>
                    <div class="card-body">
                        <table class="table table-reponsive" id="umsTable">
                            <thead>
                            <tr class="text-primary text-center">
                                <th scope="col">#</th>
                                <th scope="col">Degree</th>
                                <th scope="col">Department</th>
                                <th scope="col">Suspend</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="text-center">
                                <th scope="row">1</th>
                                <td>Bs Physics</td>
                                <td>Physics</td>
                                <td>
                                    <button class="btn btn-primary">Suspend</button>
                                </td>
                                <td>
                                        <span class="text-primary" data-toggle="modal" data-target="#UpdateDegree">
                                            <i class="far fa-edit"></i>
                                        </span>
                                    <!-- Modal HTML Markup -->
                                    <div id="UpdateDegree" class="modal fade">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title">Update Degree</h3>
                                                </div>
                                                <div class="modal-body text-left">
                                                    <form method="post" action="">
                                                        <div class="form-group">
                                                            <label class="control-label">Update Degree</label>
                                                            <input type="text" class="form-control" name="updatedegree" id="updatedegree" value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Select Department</label>
                                                            <select name="updatedepart" id="updatedepart" class="form-control">
                                                                <option value="Select Department">Select Department</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <div>
                                                                <button type="submit" class="btn btn-primary">
                                                                    Update
                                                                </button>
                                                                <button type="submit" class="btn btn-danger" data-dismiss="modal">
                                                                    Cancel
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                    <span class="text-danger"><i class="far fa-trash-alt"></i></span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('inc/footer');?>