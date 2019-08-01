<div class="sidebar" data-color="white" data-active-color="danger">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo">
        <a href="" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="<?php echo base_url()?>application/assets/img/logo-small.png">
            </div>
        </a>
        <a href="" class="simple-text logo-normal">
            Administration
            <!-- <div class="logo-image-big">
              <img src="../assets/img/logo-big.png">
            </div> -->
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="active ">
                <a href="<?php echo base_url()?>admin/index">
                    <i class="nc-icon nc-bank"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url()?>admissionrequests">
                    <i class="nc-icon nc-badge"></i>
                    <p>Admission Requests</p>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url()?>studentlist">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>Students List</p>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url()?>users">
                    <i class="fas fa-users"></i>
                    <p>Users</p>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url()?>user">
                    <i class="nc-icon nc-single-02"></i>
                    <p>User Profile</p>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url()?>statistics">
                    <i class="nc-icon nc-chart-bar-32"></i>
                    <p>Statistics</p>
                </a>
            </li>
        </ul>
    </div>
</div>