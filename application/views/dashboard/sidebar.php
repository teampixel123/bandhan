<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="user-profile">
    <!-- <div class="user-image">
      <img src="images/faces/face28.png">
    </div> -->
    <div class="user-name">
        <?php echo $admin_details[0]['admin_name']; ?>
    </div>
    <div class="user-designation">
        <?php echo $admin_details[0]['admin_roll']; ?>
    </div>
  </div>
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>Admin-Dashboard">
        <i class="icon-box menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>Dashboard/add_tour">
        <i class="fa fa-edit menu-icon"></i>
        <span class="menu-title">Add New Tour</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>Dashboard/tour_list">
        <i class="fa fa-list menu-icon"></i>
        <span class="menu-title">Tour List</span>
      </a>
    </li>
    <?php if($this->session->userdata('tour_id')){ ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>Dashboard/add_itinerary">
          <i class="fa fa-edit menu-icon"></i>
          <span class="menu-title">Add Itinerary</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>Dashboard/add_inclusion">
          <i class="fa fa-edit menu-icon"></i>
          <span class="menu-title">Add Inclusion</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>Dashboard/add_exclusion">
          <i class="fa fa-edit menu-icon"></i>
          <span class="menu-title">Add Exclusion</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>Dashboard/add_cost">
          <i class="fa fa-money menu-icon"></i>
          <span class="menu-title">Add Tour Cost</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>Dashboard/add_date">
          <i class="fa fa-calendar menu-icon"></i>
          <span class="menu-title">Add Tour Dates</span>
        </a>
      </li>
    <?php } ?>
    <!-- <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="icon-disc menu-icon"></i>
        <span class="menu-title">UI Elements</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/forms/basic_elements.html">
        <i class="icon-file menu-icon"></i>
        <span class="menu-title">Form elements</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/charts/chartjs.html">
        <i class="icon-pie-graph menu-icon"></i>
        <span class="menu-title">Charts</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/tables/basic-table.html">
        <i class="icon-command menu-icon"></i>
        <span class="menu-title">Tables</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/icons/feather-icons.html">
        <i class="icon-help menu-icon"></i>
        <span class="menu-title">Icons</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <i class="icon-head menu-icon"></i>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
          <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="docs/documentation.html">
        <i class="icon-book menu-icon"></i>
        <span class="menu-title">Documentation</span>
      </a>
    </li> -->
  </ul>
</nav>
