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
            <a class="navbar-brand" href="#pablo">Students List</a>
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
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Students List</h4>
              </div>
              <div class="card-body">
                <div class="table">
                  <table class="table cell-border" id="umsTable">
                    <thead class="text-primary text-center">
                    <th>
                        #
                    </th>
                    <th>
                        Name
                      </th>
                      <th>
                        Country
                      </th>
                      <th>
                        City
                      </th>
                      <th>
                          Email Verified
                      </th>
                      <th>
                        Status
                      </th>
                    </thead>
                    <tbody class="text-center">
                      <tr><td>1</td><td>Sage Rodriguez</td><td>Netherlands</td><td>Baileux</td><td>Yes</td><td class="text-right"></td></tr>
                      <tr><td>2</td><td>Sage Rodriguez</td><td>Netherlands</td><td>Baileux</td><td>Yes</td><td class="text-right"></td></tr>
                      <tr><td>3</td><td>Sage Rodriguez</td><td>Netherlands</td><td>Baileux</td><td>Yes</td><td class="text-right"></td></tr>
                      <tr><td>4</td><td>Sage Rodriguez</td><td>Netherlands</td><td>Baileux</td><td>Yes</td><td class="text-right"></td></tr>
                      <tr><td>5</td><td>Sage Rodriguez</td><td>Netherlands</td><td>Baileux</td><td>Yes</td><td class="text-right"></td></tr>
                      <tr><td>6</td><td>Sage Rodriguez</td><td>Netherlands</td><td>Baileux</td><td>Yes</td><td class="text-right"></td></tr>
                      <tr><td>7</td><td>Sage Rodriguez</td><td>Netherlands</td><td>Baileux</td><td>Yes</td><td class="text-right"></td></tr>
                      <tr><td>8</td><td>Sage Rodriguez</td><td>Netherlands</td><td>Baileux</td><td>Yes</td><td class="text-right"></td></tr>
                      <tr><td>9</td><td>Sage Rodriguez</td><td>Netherlands</td><td>Baileux</td><td>Yes</td><td class="text-right"></td></tr>
                      <tr><td>10</td><td>Sage Rodriguez</td><td>Netherlands</td><td>Baileux</td><td>Yes</td><td class="text-right"></td></tr>
                      <tr><td>11</td><td>Sage Rodriguez</td><td>Netherlands</td><td>Baileux</td><td>Yes</td><td class="text-right"></td></tr>
                      <tr><td>12</td><td>Sage Rodriguez</td><td>Netherlands</td><td>Baileux</td><td>Yes</td><td class="text-right"></td></tr>
                      <tr><td>13</td><td>Sage Rodriguez</td><td>Netherlands</td><td>Baileux</td><td>Yes</td><td class="text-right"></td></tr>
                      <tr><td>14</td><td>Sage Rodriguez</td><td>Netherlands</td><td>Baileux</td><td>Yes</td><td class="text-right"></td></tr>
                      <tr><td>15</td><td>Sage Rodriguez</td><td>Netherlands</td><td>Baileux</td><td>Yes</td><td class="text-right"></td></tr>
                      <tr><td>16</td><td>Sage Rodriguez</td><td>Netherlands</td><td>Baileux</td><td>Yes</td><td class="text-right"></td></tr>
                      <tr><td>17</td><td>Sage Rodriguez</td><td>Netherlands</td><td>Baileux</td><td>Yes</td><td class="text-right"></td></tr>
                      <tr><td>18</td><td>Sage Rodriguez</td><td>Netherlands</td><td>Baileux</td><td>Yes</td><td class="text-right"></td></tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
          <script>
              $(document).ready( function () {
                  $('#umsTable').DataTable();
              } );
          </script>
          <?php $this->load->view('admin/inc/footer');?>
