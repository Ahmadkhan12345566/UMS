<?php $this->load->view('admin/inc/header');?>
<div class="wrapper ">
    <?php $this->load->view('admin/inc/sidebar');?>
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
                    <a class="navbar-brand" href="#pablo">Users</a>
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
        <!-- <div class="panel-header panel-header-sm">


  </div> -->
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-user">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="card-header">
                                    <h5 class="card-title">Users</h5>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12 col-xs-12">
                                <div class="card-header">
                                    <form action="" method="post">
                                        <div class="update ml-auto mr-auto">
                                            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#ModalLoginForm">Add User</button>
                                            <!-- Modal HTML Markup -->
                                            <div id="ModalLoginForm" class="modal fade">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">New User</h3>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post" action="<?php echo base_url("");?>" onsubmit="CheckValidation()">
                                                                    <input type="hidden" class="form-control" name="serialnumber" id="serialnumber" value="1" required>
                                                                <div class="form-group">
                                                                    <label class="control-label">User Name</label>
                                                                    <input type="text" class="form-control" name="username" id="username" autofocus required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Email</label>
                                                                    <input type="email" class="form-control" name="email" id="email" pattern="[A-Za-z0-9._%+-]{3,}@[a-zA-Z]{3,}([.]{1}[a-zA-Z]{2,}|[.]{1}[a-zA-Z]{2,}[.]{1}[a-zA-Z]{2,})" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="control-label">Role</label>
                                                                    <select name="role" id="role" required class="form-control">
                                                                        <option value="Select">Select Roles</option>
                                                                        <option value="Admin">Admin</option>
                                                                        <option value="Moderator">Moderator</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div>
                                                                        <button type="submit" class="btn btn-primary" onclick="SaveData()">
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
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <style type="text/css">
                                table {
                                    counter-reset: rowNumber[0ss];
                                }

                                table tr {
                                    counter-increment: rowNumber;
                                }

                                table tr td:first-child::before {
                                    content: counter(rowNumber);
                                    min-width: 1em;
                                    margin-right: 0.5em;
                                }
                            </style>
                            <div class="table">
                                <table id="umsTable" class="table table-primary auto-index">
                                    <thead>
                                    <tr class="text-center">
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Role</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    </tbody>
                                </table>
                            </div>
<!--                            <form>-->
<!--                                <div class="row">-->
<!--                                    <div class="update ml-auto mr-auto">-->
<!--                                        <button type="submit" class="btn btn-primary btn-round">Update Profile</button>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </form>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script type="text/javascript">

        function CheckValidation() {

            if (document.getElementById("username" == "")){
                document.getElementById("username").style.borderColor = "red";
                return false;
            }

            var rows = "";
            var serial = "";
            var name = document.getElementById("username").value;
            var email = document.getElementById("email").value;
            var role = document.getElementById("role").value;

            rows += "<tr><td>" + serial + "</td><td>" + name + "</td><td>" + email + "</td><td>" + role + "</td></tr>";
            $(rows).appendTo("#umsTable tbody");

        }


        // function SaveData() {
        //
        //     var rows = "";
        //     var serial = "";
        //     var name = document.getElementById("username").value;
        //     var email = document.getElementById("email").value;
        //     var role = document.getElementById("role").value;
        //
        //     rows += "<tr><td>" + serial + "</td><td>" + name + "</td><td>" + email + "</td><td>" + role + "</td></tr>";
        //     $(rows).appendTo("#tabledata tbody");
        // }


        // function AddRow() {
        //
        //     var table = document.getElementById("tabledata").insertRow(tabledata.rows.length - 0);
        //     var ser = table.insertCell(0);
        //     var name = table.insertCell(1);
        //     var email = table.insertCell(2);
        //     var role = table.insertCell(3);
        //
        //     ser.innerHTML = "";
        //     name.innerHTML = "";
        //     email.innerHTML = "";
        //     role.innerHTML = "";
        // }
    </script>

        <?php $this->load->view('admin/inc/footer');?>