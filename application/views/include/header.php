<?php
$active='active';
?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Welcome | Bandhan Tourism  </title>
      <link rel="shortcut icon" href="img/icon.bmp" type="image/x-icon">
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

<div class="container-fluid bg-yellow">
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
          <a class="nav-link" href="<?php echo base_url(); ?>Website/home">Home </a>
        </li>
        <li class="nav-item <?php if($page=='about'){ echo $active; }?>">
          <a class="nav-link" href="<?php echo base_url(); ?>Website/about">About Us</a>
        </li>
        <li class="nav-item <?php if($page=='domestic'){ echo $active; }?> d-block d-sm-none">
          <a class="nav-link" href="domestic_list.php">Domestic</a>
        </li>
        <li class="nav-item <?php if($page=='international'){ echo $active; }?> d-block d-sm-none ">
          <a class="nav-link" href="international_list.php">International</a>
        </li>
        <li class="nav-item <?php if($page=='northeast'){ echo $active; }?> d-block d-sm-none ">
          <a class="nav-link" href="northeast_list.php">Northeast</a>
        </li>
        <li class="nav-item <?php if($page=='social'){ echo $active; }?> d-block d-sm-none ">
          <a class="nav-link" href="social_list.php">Social</a>
        </li>
      <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle d-none d-sm-block" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tours
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <div class="row">
              <div class="col-lg-3" >
                <br>
                <h5 class="text-black ">Domestic</h5>
                <div class="row margin-small mb-3">
                  <div class="underline-small"></div>
                </div>
                <a class="dropdown-item" href="kashmir-sp.php">Best Of Kashmir</a>
                <a class="dropdown-item" href="vaishno-kashmir.php">Kashmir with Vishnodevi</a>
                <a class="dropdown-item" href="leh-ladakh.php">Special Leh Ladak</a>
                <a class="dropdown-item" href="kargil.php">Leh ladak with Kargil</a>
                <a class="dropdown-item" href="shimla.php">Shimala Manali Special</a>
                <a class="dropdown-item" href="nainital.php">Special Nainital</a>
                <a class="dropdown-item" href="bhutan-sp.php">Bhutan Special</a>
                <a class="dropdown-item" href="rajasthan-marwad.php">Rajastan Marwad Special </a>
                <a class="dropdown-item" href="rajasthan-mewad.php">Rajasthan Mewad Special</a>
                <a class="dropdown-item" href="rajasthan.php">Royal Rajastan</a>
            </div>
              <div class="col-lg-3">
                  <h5 class="text-black text-center"> <br> </h5>
                <a class="dropdown-item " href="all_gujarat.php">Sampurn Gujrath</a>
                <a class="dropdown-item" href="gujarat.php">Gujarat Rann Utsav</a>
                <a class="dropdown-item" href="statue-unity.php">Statue of Unity special</a>
                <a class="dropdown-item" href="mini_mp.php">Mini Madhya Pradesh </a>
                <a class="dropdown-item" href="mp.php">Madhya Pradesh Highlights</a>
                <a class="dropdown-item" href="all_mp.php">Golden Madhya Pradesh</a>
                <a class="dropdown-item" href="khajuraho.php"> Chitrakoot Khajuraho</a>
                <a class="dropdown-item" href="karnataka.php">Costal Karnataka</a>
                <a class="dropdown-item" href="banglore.php">Banglore Mysore  Ooty Kodaicanal</a>
                <a class="dropdown-item" href="hampi.php">Mazical Hampi Badami </a>
            </div>
              <div class="col-lg-3">
                  <h5 class="text-black text-center"> <br> </h5>
                <a class="dropdown-item" href="kerala-sp.php"> Kerala Special</a>
                <a class="dropdown-item" href="kerala.php">Kerala with Kanyakumari</a>
                <a class="dropdown-item" href="kerala-mini.php">Mini Kerala</a>
                <a class="dropdown-item" href="andaman.php">Andaman</a>
                <br>
                <h4 class="text-black ">International</h4>
                <div class="row margin-small mb-3">
                  <div class="underline-small"></div>
                </div>
                <a class="dropdown-item" href="singapore.php">Singapore </a>
                <a class="dropdown-item" href="bali.php">Amazing Bali </a>
                <a class="dropdown-item" href="bangkok.php">Bangkok </a>
                <a class="dropdown-item" href="dubai.php">Dubai </a>
                <a class="dropdown-item" href="malaysia.php">Singapore Malaysia </a>
              </div>
              <div class="col-lg-3">
                <br>
                <h5 class="text-black ">Northeast</h5>
                <div class="row margin-small mb-3">
                  <div class="underline-small"></div>
                </div>
                <a class="dropdown-item" href="assam.php">Assam Special </a>
                <a class="dropdown-item" href="sikkim.php">Sikkim - Darjeeling </a>
                <a class="dropdown-item" href="three-sisters.php">Assam - Meghalay <br> Arunachal Pradesh </a>
                <a class="dropdown-item" href="two-sisters.php">Assam - Meghalaya </a>
                <br>
                <h4 class="text-black ">Social</h4>
                <div class="row margin-small mb-3">
                  <div class="underline-small"></div>
                </div>
                <a class="dropdown-item" href="anandvan.php">Anandvan - Hemalkasa </a>
               <a class="dropdown-item" href="melghat.php">Melghat - Chikhaldara </a>
               <a class="dropdown-item" href="snehalay.php">Snehalay - Raleganshidhhi </a>
              </div>
            </div>
          </ul>
        </li>
         <li class="nav-item <?php if($page=='contact'){ echo $active; }?>">
          <a class="nav-link" href="<?php echo base_url(); ?>Website/contact">Contact  </a>
        </li>
     </ul>
      </div>
    </nav>
  </div>
</div>
