<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo" href="index.html"><img src="<?php echo base_url(); ?>assets/images/Bandhan Logo.png" alt="logo"/></a>
    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?php echo base_url(); ?>assets/images/Bandhan Logo.png" alt="logo"/></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="icon-menu"></span>
    </button>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown d-flex mr-4 ">
        <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
          <i class="icon-cog"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
          <p class="mb-0 font-weight-normal float-left dropdown-header">Settings</p>
          <!-- <a class="dropdown-item preview-item">
              <i class="icon-head"></i> Profile
          </a> -->
          <a class="dropdown-item preview-item" href="<?php echo base_url(); ?>Admin-Logout">
              <i class="icon-outbox"></i> Logout
          </a>
        </div>
      </li>
      <!-- <li class="nav-item dropdown mr-4 d-lg-flex d-none">
        <a class="nav-link count-indicatord-flex align-item s-center justify-content-center" href="#">
          <i class="icon-grid"></i>
        </a>
      </li> -->
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav>
