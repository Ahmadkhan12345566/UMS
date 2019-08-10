<?php $this->load->view('inc/header');?>
    <div class="wrapper ">
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
                                <h3>Courses List</h3>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#AddCourse">
                                    Add Degree
                                </button>
                                <!-- Modal HTML Markup -->
                                <div id="AddCourse" class="modal fade">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title">Add Course</h3>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="<?php echo base_url("");?>">
                                                    <div class="form-group">
                                                        <label class="control-label">Course Code</label>
                                                        <input type="text" class="form-control" name="coursecode" id="coursecode" value="Course code">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Course Name</label>
                                                        <input type="text" class="form-control" name="coursename" id="coursename" value="Course Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Credit Hours</label>
                                                        <input type="text" name="credithours" id="credithours" class="form-control" value="Credit Hours">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Course Type</label>
                                                        <input name="coursetype" id="coursetype" class="form-control" value="Course Type">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Course pre-requisite</label>
                                                        <select name="coursepre-requisite" id="coursepre-requisite" class="form-control">
                                                            <option value="Select Department">Select Course pre-requisite</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Course Semester</label>
                                                        <input type="number" name="coursesemester" id="coursesemester" class="form-control" value="Course Semester">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Degree Name</label>
                                                        <select name="degreename" id="degreename" class="form-control">
                                                            <option value="Select Department">Select Degree Name</option>
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
                    </div>
                    <div class="card-body">
                        <div class="table-responsive{-sm|-md|-lg|-xl}">
                            <table class="table" id="umsTable">
                                <thead>
                                <tr class="text-primary text-center">
                                    <th scope="col">#</th>
                                    <th scope="col">Course Code</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Credit Hours</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Pre-requisite</th>
                                    <th scope="col">Semester</th>
                                    <th scope="col">Degree</th>
                                    <th scope="col">Suspend</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="text-center">
                                    <th scope="row">1</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button class="btn btn-primary">Suspend</button>
                                    </td>
                                    <td>
                                        <span class="text-primary" data-toggle="modal" data-target="#Updatecourse">
                                            <i class="far fa-edit"></i>
                                        </span>
                                        <!-- Modal HTML Markup -->
                                        <div id="Updatecourse" class="modal fade">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title">Update Degree</h3>
                                                    </div>
                                                    <div class="modal-body text-left">
                                                        <form method="post" action="">
                                                            <div class="form-group">
                                                                <label class="control-label">Course Code</label>
                                                                <input type="text" class="form-control" name="coursecode" id="coursecode" value="Course code">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Course Name</label>
                                                                <input type="text" class="form-control" name="coursename" id="coursename" value="Course Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Credit Hours</label>
                                                                <input type="text" name="credithours" id="credithours" class="form-control" value="Credit Hours">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Course Type</label>
                                                                <input name="coursetype" id="coursetype" class="form-control" value="Course Type">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Course pre-requisite</label>
                                                                <select name="coursetype" id="coursetype" class="form-control">
                                                                    <option value="Select Department">Select Course pre-requisite</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Course Semester</label>
                                                                <input type="number" name="coursesemester" id="coursesemester" class="form-control" value="Course Semester">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Degree Name</label>
                                                                <select name="degreename" id="degreename" class="form-control">
                                                                    <option value="Select Department">Select Degree Name</option>
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
                                        <a href="" class="text-danger"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('inc/footer');?>