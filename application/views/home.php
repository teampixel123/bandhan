<?php
$page='home';
$page_title = 'Bandhan Tourism | Welcome';
include('include/header.php');

?>

<div id="preloader"   ></div>

<!--img slider start-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="assam.php">
      <div class="banner1 ">
      <div class="carousel-caption heartBeat ">
        <img class="b1 img-responsive center-block " src="<?php echo base_url(); ?>assets/images/bg_img/Tour-05.png" alt="First slide">
      </div>
    </div>
    </a>
   </div>

   <div class="carousel-item ">
     <a href="three-sisters.php">
     <div class="banner2">
     <div class="carousel-caption heartBeat ">
       <img class="b1 img-responsive center-block " src="<?php echo base_url(); ?>assets/images/bg_img/Tour-02.png" alt="First slide">
     </div>
   </div>
   </a>
  </div>
  <div class="carousel-item ">
    <a href="two-sisters.php">
    <div class="banner3 ">
    <div class="carousel-caption heartBeat  ">
      <img class="b1 img-responsive center-block " src="<?php echo base_url(); ?>assets/images/bg_img/Tour-03.png" alt="First slide">
    </div>
  </div>
  </a>
 </div>
</div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- img slider end -->


<!-- silder1 -->
<!--end slider1   -->
  <br>
  <div class="container-fluid bg-white  "  >
      <div class="container pt-5 pb-3">
      <div class="center text-dark">
        <div class="row text-center">
        <h3 class="col-lg-12" >FEATURED TOURS</h3>
      </div>
        </div>
        <!-- <div class="row ">
          <div class="underline"></div>
        </div> -->
      </div>

      <div class="container-fluid" id="grad1">


          <div class="container " >
          <div class="owl-container">


          <div class="owl-carousel owl-theme">

            <div class="item">
              <a href="bangkok.php">
              <div class="card" >
                <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/owl/owl5.jpg" width="100%" alt="Card image cap">
                  <div class="card-img-overlay">
                    <h3 class="card-title text-white">Bangkok</h3>
                  </div>
              </div>
              </a>
            </div>
            <div class="item">
              <a href="assam.php">
              <div class="card" >
                <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/owl/owl4.jpg" width="100%" alt="Card image cap">
                  <div class="card-img-overlay">
                    <h3 class="card-title text-white">Assam</h3>
                  </div>
              </div>
              </a>
            </div>
            <div class="item">
              <a href="kashmir-sp.php">
              <div class="card" >
                <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/owl/owl7.jpg" width="100%" alt="Card image cap">
                  <div class="card-img-overlay">
                    <h3 class="card-title text-white">Kashmir </h3>
                  </div>
              </div>
              </a>
            </div>
            <div class="item">
              <a href="singapore.php">
              <div class="card" >
                <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/owl/owl1.jpg" width="100%" alt="Card image cap">
                  <div class="card-img-overlay">
                    <h3 class="card-title text-white">Singapore</h3>
                  </div>
              </div>
            </a>
            </div>
            <div class="item">
              <a href="gujarat.php">
              <div class="card" >
                <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/owl/owl3.jpg" width="100%" alt="Card image cap">
                  <div class="card-img-overlay">
                    <h3 class="card-title text-white">Rann Utsav</h3>
                  </div>
              </div>
              </a>
            </div>

            <div class="item">
              <a href="two-sisters.php">
              <div class="card" >
                <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/owl/owl6.jpg" width="100%" alt="Card image cap">
                  <div class="card-img-overlay">
                    <h3 class="card-title text-white">Meghalaya</h3>
                  </div>
              </div>
              </a>
            </div>
            <div class="item">
              <a href="banglore.php">
              <div class="card" >
                <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/owl/owl8.jpg" width="100%" alt="Card image cap">
                  <div class="card-img-overlay">
                    <h3 class="card-title text-white">Banglore </h3>
                  </div>
              </div>
              </a>
            </div>

        </div>
      </div>
        </div>
      </div>
  </div>
<br>
<div class="container-fluid bg-orange ">
   <div class="container pt-st pi ">

      <div class="center margin-small mb-1">
        <h3 class="text-dark font">Special Toures</h3>
      </div>

      <div class="row margin-small mb-3">
        <div class="underline-yellow"></div>
      </div>

   </div>
</div>

  <!-- tours Pills section -->
  <div class="container pills-container">

    <div class="row">
      <div class="col-md-3">
  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <a class="nav-link active  nav-link-pills" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Domestic</a>
    <a class="nav-link nav-link-pills" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">International</a>
    <a class="nav-link nav-link-pills" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Northeast India Special</a>
    <a class="nav-link nav-link-pills" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Social</a>
    <!-- <a class="nav-link nav-link-pills" id="v-pills-ladies-tab" data-toggle="pill" href="#v-pills-ladies" role="tab" aria-controls="v-pills-ladies" aria-selected="false">Ladies Special</a> -->
  </div>
  </div>

  <div class="col-md-9">
  <div class="tab-content index-tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
      <div class="row  ">

<div data-aos="fade-up">
      <div class="row">

        <div class=" col-md-6 col-sm-6 col-xs-12 ">
          <a href="andaman.php">
       <div class="hovereffect">
           <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/domestic/domestic_tour1.jpg" alt="">
           <div class="overlay">
              <h2>Andaman</h2>
              <a class="info" href="andaman.php">View More</a>
           </div>
       </div></a>
   </div>
   <div class=" col-md-6 col-sm-6 col-xs-12">
     <a href="kashmir-sp.php">
  <div class="hovereffect">
      <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/domestic/domestic_tour2.jpg" alt="">
      <div class="overlay">
         <h2>Best of Kashmir</h2>
         <a class="info" href="kashmir-sp.php">View More</a>
      </div>
  </div></a>
</div>

        </div>
        </div>

  </div>
  <div class="row   ">


      <div class="row">
        <div class=" col-md-6 col-sm-6 col-xs-12 ">
          <a href="rajasthan-mewad.php">
        <div class="hovereffect">
           <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/domestic/domestic_tour3.jpg" alt="">
           <div class="overlay">
              <h2>Rajastan Mewad Special</h2>
              <a class="info" href="rajasthan-mewad.php">View More</a>
           </div>
        </div></a>
        </div>
        <div class=" col-md-6 col-sm-6 col-xs-12">
          <a href="shimla.php">
        <div class="hovereffect">
           <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/domestic/domestic_tour4.jpg" alt="">
           <div class="overlay">
              <h2>Shimala Manali Special</h2>
              <a class="info" href="shimla.php">View More</a>
           </div>
        </div></a>
        </div>
  </div>
</div>
<div class="row  ">


<div class="row">
  <div class=" col-md-6 col-sm-6 col-xs-12 ">
    <a href="vaishno-kashmir.php">
  <div class="hovereffect">
     <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/domestic/domestic_tour9.jpg" alt="">
     <div class="overlay">
        <h2>Kashmir With Vaishno Devi </h2>
        <a class="info" href="vaishno-kashmir.php">View More</a>
     </div>
  </div></a>
  </div>
  <div class=" col-md-6 col-sm-6 col-xs-12">
    <a href="statue-unity.php">
  <div class="hovereffect">
     <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/domestic/domestic_tour10.jpg" alt="">
     <div class="overlay">
        <h2>Statue of Unity Special</h2>
        <a class="info" href="statue-unity.php">View More</a>
     </div>
  </div></a>
  </div>

</div>
</div>
</div>
    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
      <div class="row  ">

<div data-aos="fade-up">
      <div class="row">

        <div class=" col-md-6 col-sm-6 col-xs-12 ">
          <a href="singapore.php">
       <div class="hovereffect">
           <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/int/international1.jpg" alt="">
           <div class="overlay">
              <h2>Singapore</h2>
              <a class="info" href="singapore.php">View More</a>
           </div>
       </div></a>
   </div>
   <div class=" col-md-6 col-sm-6 col-xs-12">
     <a href="bali.php">
  <div class="hovereffect">
      <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/int/international2.jpg" alt="">
      <div class="overlay">
         <h2>Amazing Bali</h2>
         <a class="info" href="bali.php">View More</a>
      </div>
  </div></a>
</div>

        </div>
        </div>

  </div>
  <div class="row   ">


      <div class="row">
        <div class=" col-md-6 col-sm-6 col-xs-12 ">
          <a href="bangkok.php">
        <div class="hovereffect">
           <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/int/international3.jpg" alt="">
           <div class="overlay">
              <h2>Bangkok</h2>
              <a class="info" href="bangkok.php">View More</a>
           </div>
        </div></a>
        </div>
        <div class=" col-md-6 col-sm-6 col-xs-12">
          <a href="dubai.php">
        <div class="hovereffect">
           <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/int/international4.jpg" alt="">
           <div class="overlay">
              <h2>Dubai</h2>
              <a class="info" href="dubai.php">View More</a>
           </div>
        </div></a>
        </div>
  </div>
</div>
<div class="container padding-0 ">


<div class="row ">
  <div class=" col-md-6 col-sm-6 col-xs-12 ">
    <a href="malaysia.php">
  <div class="hovereffect">
     <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/int/international5.jpg" alt="">
     <div class="overlay">
        <h2>Singapore Malaysia </h2>
        <a class="info" href="malaysia.php">View More</a>
     </div>
  </div>
  </a>
  </div>
  <div class=" col-md-6 col-sm-6 col-xs-12 ">

  </div>

</div>
</div>

    </div>
    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
      <div class="row padding-0 ">

<div data-aos="fade-up">
      <div class="row">

        <div class=" col-md-6 col-sm-6 col-xs-12 ">
          <a href="assam.php">
       <div class="hovereffect">
           <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/north/Meghalaya_01.gif" alt="">
           <div class="overlay">
              <h2>Assam Special</h2>
              <a class="info" href="assam.php">View More</a>
           </div>
       </div></a>
   </div>
   <div class=" col-md-6 col-sm-6 col-xs-12">
     <a href="sikkim.php">
  <div class="hovereffect">
      <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/north/darjeeling_01.gif" alt="">
      <div class="overlay">
         <h2>Sikkim Darjeeling</h2>
         <a class="info" href="sikkim.php">View More</a>
      </div>
  </div></a>
</div>

        </div>
        </div>

  </div>
  <div class="row   ">


      <div class="row">
        <div class=" col-md-6 col-sm-6 col-xs-12 ">
          <a href="three-sisters.php">
        <div class="hovereffect">
           <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/north/Meghalaya_02.gif" alt="">
           <div class="overlay">
             <h2>Three Sister <br>
             Assam - Meghalay - Arunachal Pradesh</h2>
              <a class="info" href="three-sisters.php">View More</a>
           </div>
        </div></a>
        </div>
        <div class=" col-md-6 col-sm-6 col-xs-12">
          <a href="two-sisters.php">
        <div class="hovereffect">
           <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/north/arunachal01.gif" alt="">
           <div class="overlay">
             <h2>Two Sister<br>
                   Assam, Meghalaya</h2>
              <a class="info" href="two-sisters.php">View More</a>
           </div>
        </div></a>
        </div>
  </div>
</div>
    </div>
    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
      <div class="row">

<div data-aos="fade-up">
      <div class="row">

        <div class=" col-md-6 col-sm-6 col-xs-12 ">
          <a href="anandvan.php">
       <div class="hovereffect">
           <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/social/anandvan.jpg" alt="">
           <div class="overlay">
              <h2>Anandvan-Hemalkasa</h2>
              <a class="info" href="anandvan.php">View More</a>
           </div>
       </div></a>
   </div>
   <div class=" col-md-6 col-sm-6 col-xs-12 ">
     <a href="melghat.php">
   <div class="hovereffect">
      <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/social/social3.jpg" alt="">
      <div class="overlay">
        <h2>Melghat-Chikhaldara</h2>
         <a class="info" href="melghat.php">View More</a>
      </div>
   </div></a>
   </div>

        </div>
        </div>

  </div>
  <div class="row">
    <div class=" col-md-6 col-sm-6 col-xs-12">
      <a href="snehalay.php">
    <div class="hovereffect">
       <img class="img-responsive" src="<?php echo base_url(); ?>assets/images/social/social4.jpg" alt="">
       <div class="overlay">
         <h2>Snehalay-Raleganshidhhi</h2>
          <a class="info" href="snehalay.php">View More</a>
       </div>
    </div></a>
    </div>


</div>
  </div>
              <div class="tab-pane fade" id="v-pills-ladies" role="tabpanel" aria-labelledby="v-pills-ladies-tab">
                <div class="row">
                    <div class="col-lg-12">
                      <h2>comming soon</h2>
                    </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container text-center">
      <a href="contact.php"><button class="btn btn-outline-primary">
        Book Now
      </button></a>
    </div>

<br>
<br>
<br>
  <div class="container-fluid bg-b   mt-5 mobile">

  <div class="container  ">

    <div class="row mb-1 pt-5" >
      <div class="col-sm-6">
        <div data-aos="fade-right">
          <img src="<?php echo base_url(); ?>assets/images/intro_img2.png" class="img-respnsive intro_img intro2" alt="" >
          </div>
      </div>
        <div class="col-sm-6  text-white mt-5  text-mobile">
            <h2 class="">Popular Places Around The India  </h2>
          <p class="text-roboto mt-3 text-ban">Every traveler want to experience something unfamiliar and
             leave with new skills or knowledge. Every destination has something unique to teach visitors, and immersing themselves in
             a completely different world is the best learning experience. lets take it with Bandhan Tourism.
          </p>
          <div class="section mt-5 ">


          <div class="row mt-4 text-center icon-banner">  <i class="fa fa-line-chart book-icon " aria-hidden="true"></i>
            <span class="book text-white  "><h3 class="ml">8+ Years Experience</h3></span></div>

            <!-- <div class="row mt-4 icon-banner">  <i class="fa fa-plane book-icon" aria-hidden="true"></i>
             <span class="book text-white  "><h3 class="ml">94 Tours</h3></span>
           </div> -->
            <div class="row mt-4 icon-banner "> <i class="fa fa-users book-icon " aria-hidden="true"></i>
             <span class="book text-white "><h3 class="ml">4K Happy Customer</h3> </span>
           </div>
           </div>
           </div>
        <!-- <div class="col-sm-2">

        </div> -->

    </div>
     <br>
  </div>

  </div>

<?php  include('include/footer.php');
?>
