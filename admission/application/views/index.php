<?php $this->load->view('inc/header.php'); ?>

    <div class="main">
        <!-- Navbar -->
        <conatiner>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand pull-right" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </conatiner>
        <!-- End Navbar -->
        <!-- <div class="panel-header panel-header-lg">

    <canvas id="bigDashboardChart"></canvas>


  </div> -->

        <div class="content">
            <div class="row">
                <div class="col-md-8">

                </div>
                <div class="col-md-4">
                    <div class="card card-body">
                        <div class="author">
                            <h5 class="title" style="color: #51CBCE;">Signup for Admission (Fall 2019)</h5>
                        </div>
                        <div class="card-body">
                            <form action="#" method="post">
                                    <div class="form-group">
                                        <label>Universities</label>
                                        <select class="form-control" name="universities">
                                            <option>Choose University</option>
                                            <option>Karachi</option>
                                            <option>Islamabad</option>
                                            <option>Peshawar</option>
                                            <option>Lahore</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Campuses</label>
                                        <select class="form-control" name="campuses">
                                            <option>Choose Campus</option>
                                            <option>Karachi</option>
                                            <option>Islamabad</option>
                                            <option>Peshawar</option>
                                            <option>Lahore</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" id="name"  name="name" aria-describedby="nameHelp" placeholder="Enter your name">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter your email address">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp" placeholder="Enter your password">
                                    </div>
                                    <div class="form-group">
                                        <label>Renter Password</label>
                                        <input type="password" class="form-control" id="password" name="password" aria-describedby="nameHelp" placeholder="Enter your confirm password">
                                    </div>
                                    <!--<input placeholder="Search Location" name="name" type="text" required="">
                                    <input placeholder="Search Location" name="name" type="text" required="">
                                    <input placeholder="Price Range" name="name" type="text" required=""> -->
                                <button type="submit" Class="btn btn-success">Register</button>
                            </form>
                        </div>
<!--                        <div class="card-footer">-->
<!--                            <hr>-->
<!--                            <div class="button-container">-->
<!--                                <div class="row">-->
<!--                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ml-auto mr-auto">-->
<!--                                        <small><b>Any misuse or false attempt will result in cancellation of your application.-->
<!--                                                You are liable to provide the information that is true to the best of your knowledge.-->
<!--                                                Administration is not responsible for any misuse or false attempt.</b></small>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>

<?php include 'inc/footer.php';?>