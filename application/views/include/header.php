<?php
$active='active';
?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?php echo $page_title; ?></title>
      <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/icon.bmp" />
    <!-- Latest compiled and minified CSS -->
      <script src="<?php echo base_url('assets/js/jquery-3.2.1.slim.min.js');?>"></script>
      <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
      <script src="<?php echo base_url('assets/js/propper.min.js');?>"></script>
      <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
      <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.min.css');?>">
      <link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,400i,600,700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Acme|Anton|Fira+Sans+Condensed|Orbitron|Oswald|Roboto|Tajawal|Yanone+Kaffeesatz" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Exo+2:800|Kanit|Open+Sans+Condensed:700" rel="stylesheet">
      <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
      <link href="<?php echo base_url('assets/css/aos.css');?>" rel="stylesheet">
      <script src="<?php echo base_url('assets/js/aos.js');?>"></script>
      <link  href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
      <link href="<?php echo base_url('assets/css/font-awesome.min.css');?>" rel="stylesheet">
      <link  href="<?php echo base_url('assets/css/owl.carousel.css');?>" rel="stylesheet">
      <link  href="<?php echo base_url('assets/css/owl.theme.default.min.css');?>" rel="stylesheet">
    </head>
<body>


  <!-- Top Header -->
  <div class="container-fluid bg-white header-top" >
    <div class="container" >
      <div class="row pt-1">
        <div class="col-md-12 float-right">
      <p class="top-header d-none d-sm-block">
        <i class="fa fa-phone grey text-b" aria-hidden="true"></i>
           +91 231 2692134
        <a target="_blank" href="https://www.facebook.com/Bandhan-Tourism-588031544923443/" class="facebook"> <i class="fa fa-facebook-square grey ml-3" aria-hidden="true"></i></a>
        <a target="_blank" href="https://twitter.com/bandhan_tourism" class="twitter">  <i class="fa fa-twitter-square  grey"></i></a>
        <a target="_blank" href="https://www.instagram.com/bandhantourism/" class="instagram" >  <i class="fa fa-instagram grey"></i></a>
       <a target="_blank" href="https://www.youtube.com/channel/UCfo3jzDxgy1G_iXFGokzIpA" class="youtube" >  <i class="fa fa-youtube-square grey"></i></a>
        </p>
        <p class="d-block d-sm-none  "> <a href="tel:+91 231 2692134"> <i class="fa fa-phone text-b right" aria-hidden="true"></i></a></p>

      </div>
    </div>
      </div>
  </div>

  <!-- Navbar  -->

<div class="container-fluid bg-yellow header-top2">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-yellow ">
          <a class="navbar-brand" href="index.php">
              <img src="<?php echo base_url(); ?>assets/images/Bandhan Logo.png" class="logo_img"  alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item <?php if($page=='home'){ echo $active; }?>">
          <a class="nav-link" href="<?php echo base_url(); ?>">Home </a>
        </li>
        <li class="nav-item <?php if($page=='about'){ echo $active; }?>">
          <a class="nav-link" href="<?php echo base_url(); ?>About-Us">About Us</a>
        </li>
        <li class="nav-item <?php if($page=='tours'){ echo $active; }?> d-block d-sm-none">
          <a class="nav-link" href="<?php echo base_url(); ?>Website/tour_menu_mobile">Tours</a>
        </li>
        <!-- <li class="nav-item <?php if($page=='international'){ echo $active; }?> d-block d-sm-none ">
          <a class="nav-link" href="international_list.php">International</a>
        </li>
        <li class="nav-item <?php if($page=='northeast'){ echo $active; }?> d-block d-sm-none ">
          <a class="nav-link" href="northeast_list.php">Northeast</a>
        </li>
        <li class="nav-item <?php if($page=='social'){ echo $active; }?> d-block d-sm-none ">
          <a class="nav-link" href="social_list.php">Social</a>
        </li> -->
      <li class="nav-item dropdown d-none d-sm-block">
          <a class="nav-link dropdown-toggle " href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tours
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <div class="container" id="tour_dropdown">

            <div class="card-columns">
              <?php   $title_list = $this->Admin_Model->get_tour_menu_title();
                foreach ($title_list as $title_list) {
                  $state = $title_list->tour_state;
                  $state_uri = str_replace(' ','-',$state);
                  ?>
              <div class="card">
                <div class="card-body text-left">
                  <a href="<?php echo base_url() ?>Tour-List/<?php echo $state_uri; ?>"><h6 class="text-black tour-title mb-0"><?php echo $state; ?></h6></a>
                  <div class="underline-small mb-1"></div>
                  <?php $menu_list = $this->Admin_Model->get_tour_menu_list($state);
                    foreach ($menu_list as $menu_list) {
                      $tour_nm = $menu_list->tour_name;
                      $tour_name = str_replace(' ','-',$tour_nm);
                  ?>
                  <a class="dropdown-item pb-0" href="<?php echo base_url(); ?>Website/itinerary_details/<?php echo $menu_list->tour_id; ?>/<?php echo $state_uri; ?>/<?php echo $tour_name; ?>"><?php echo $menu_list->tour_name; ?></a>
                <?php } ?>
                </div>
              </div>
              <?php } ?>
            </div>



            </div>
            <!-- <div class="row">
              <?php   $title_list = $this->Admin_Model->get_tour_menu_title();
                foreach ($title_list as $title_list) {
                  $state = $title_list->tour_state;
                  $state_uri = str_replace(' ','-',$state);
                  ?>
                  <div class="col-lg-2" >

                    <a href="<?php echo base_url() ?>Tour-List/<?php echo $state_uri; ?>"><h6 class="text-black tour-title"><?php echo $state; ?></h6></a>
                    <div class="row margin-small mb-1">
                      <div class="underline-small"></div>
                    </div>
                    <?php $menu_list = $this->Admin_Model->get_tour_menu_list($state);
                      foreach ($menu_list as $menu_list) {
                        $tour_nm = $menu_list->tour_name;
                        $tour_name = str_replace(' ','-',$tour_nm);
                    ?>
                    <a class="dropdown-item" href="<?php echo base_url(); ?>Website/itinerary_details/<?php echo $menu_list->tour_id; ?>/<?php echo $state_uri; ?>/<?php echo $tour_name; ?>"><?php echo $menu_list->tour_name; ?></a>
                  <?php } ?>
                </div>
              <?php } ?>
            </div> -->
          </ul>
        </li>
         <li class="nav-item <?php if($page=='contact'){ echo $active; }?>">
          <a class="nav-link" href="<?php echo base_url(); ?>Contact">Contact  </a>
        </li>
     </ul>
      </div>
    </nav>
  </div>
</div>
