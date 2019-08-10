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
                <a href="<?php echo base_url()?>index">
                    <i class="nc-icon nc-bank"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url()?>department">
                    <i class="far fa-building"></i>
                    <p>Departments</p>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url()?>degree">
                    <i class="nc-icon nc-chart-bar-32"></i>
                    <p>Degrees</p>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url()?>courses">
                    <i class="fab fa-discourse"></i>
                    <p>Courses</p>
                </a>
            </li>
        </ul>
    </div>
</div>