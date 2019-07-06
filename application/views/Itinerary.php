<?php

$page='tours';
$page_title =  $tour_details[0]['tour_name'];
include("include/header.php");
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
    <img class="banner-image d-none d-sm-block" src="<?php echo base_url(); ?>assets/images/tours/<?php echo $tour_details[0]['tour_banner_img']; ?>" alt="" width="100%">
    <img class="banner-image-mobile d-block d-sm-none" src="<?php echo base_url(); ?>assets/images/sub_bg/s_img/kashmir_tur2.jpg" alt="" width="100%">
    </div>
    </div>
  </div>
</div>

<br>
<br>
<br>
 <!-- sticky navbar -->

<div class="container sticky-cont">
  <div class="header">
    <div class="container sticky-cont">
    <nav class="navbar navbar-expand-sm  d-none d-sm-block" id="menu-center">
       <!-- Links -->
       <ul class="navbar-nav">
         <li class="nav-item">
           <a class="nav-link sticky-nav-head active" href="#overview" >Overview</a>
         </li>
         <li class="nav-item">
           <a class="nav-link sticky-nav-head" href="#itinarary" >Itinerary</a>
         </li>
         <li class="nav-item">
           <a class="nav-link sticky-nav-head" href="#inclusion" >Inclusions</a>
         </li>
         <li class="nav-item">
           <a class="nav-link sticky-nav-head" href="#exclusion" >Exclusions</a>
         </li>
       </ul>
      </nav>
      <div class="scrollmenu d-block d-sm-none" id="menu-center1">
          <a class="active12" href="#overview" >Overview</a>
          <a href="#itinarary" >Itinerary</a>
          <a href="#inclusion" >Inclusions</a>
          <a href="#exclusion" >Exclusions</a>
        </div>
  </div>
</div>
</div>
<!-- sticky navbar -->
  <!-- Overview start-->
  <div class="container overview" id="overview">
      <div class="row">
          <div class="col-md-8">
            <p><?php echo $tour_details[0]['tour_overview']; ?></p>

          </div>
          <div class="col-md-4">
            <img class="img-iti-svg" src="<?php echo base_url(); ?>assets/images/shape.svg" alt="" >
            <div class="text-on-svg">
              <h4 class="border-bottom"> <strong>Cities 03</strong></h4>
              <h4> <strong>Days 13</strong></h4>
            </div>

          </div>
      </div>
  </div>
<!-- Overview ends -->
<!-- itinarary Start -->
  <div class="container" id="itinarary">
    <div class="row border-bottom">
        <h4>Itinarary</h4>
    </div>
      <div class="row itinarary-start-row">
        <div class="col-md-8">
          <?php foreach ($itinarary_days as $itinerary_data) { ?>
            <div class="itinarary-container">
            <h5>Day<?php echo $itinerary_data->itinerary_day_num;  ?></h5>
            <h3><?php echo $itinerary_data->itinerary_day_title;  ?></h3>
            <p><?php echo $itinerary_data->itinerary_day_description;  ?></p>
            </div>
          <?php } ?>
        </div>
        <div class="col-md-4">
          <div class="cost-table">
            <h4 class="border-bottom text-center" style="margin-bottom :5px!important;">Tour Cost </h4>
            <h6 class="tour-bcp">Per Person Ex. <?php echo $tour_details[0]['tour_start_city']; ?></h6>
            <h5 class="tour-bcp2">&#8377; <?php echo $tour_details[0]['tour_price']; ?> /-<span >+ 5 % GST </span> </h5>
            <h4 class="final-price">&#8377; <?php echo $tour_details[0]['tour_price_withgst']; ?>/-</h4>
            <?php if($cost_list){ ?>
              <?php foreach ($cost_list as $cost_list): ?>
                <h6><?php echo $cost_list->cost_person_type; ?> : <span class="price-desc"> <?php echo $cost_list->cost_rate; ?>/-</span></h6>
              <?php endforeach; ?>
            <?php } ?>
            <!-- <h6>EXTRA ADULT (ABOVE 12 YRS TRIPLE SHARING) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="price-desc"> 38200/-</span></h6>
            <h6>CHILD WITH BED(5-11YRS)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="price-desc" >34200/-</span></h6>
            <h6>CHILD WITHOUT BED (5-11YRS)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="price-desc" >30200/-</span></h6>
            <h6>INFANT ( BELOW 5 YRS)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="price-desc" >6900/-</span></h6>
            <h6>SINGLE SHARING&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="price-desc" >66200/-</span></h6> -->
          </div>
            <br>
            <br>
            <br>
            <div class="cost-table">
              <h4 class="text-center" style="margin-bottom :15px!important;">Departure Dates </h4>
              <h4 class="final-price" style="background-color:rgb(128,128,128, 0.5)!important;"> <?php echo $tour_details[0]['tour_start_city']; ?> to <?php echo $tour_details[0]['tour_end_city']; ?></h4>
              <?php if($date_list){ ?>
                <?php foreach ($date_list as $date_list): ?>
                  <h6 class="text-center"><?php echo $date_list->departure_date; ?></h6>
                <?php endforeach; ?>
              <?php } ?>
              <!-- <h6 class="text-center">30 Oct 2019</h6>
              <h6 class="text-center">1 Nov 2019</h6>
              <h6 class="text-center">25 Nov 2019</h6>
              <h6 class="text-center">1 Dec 2019</h6>
              <h6 class="text-center">5 Jan 2020</h6> -->
              </div>
          </div>
      </div>
  </div>
<!-- itinarary ends -->

<!-- Inclusion Exclusion start  -->
<div class="container inclusion-container" >
  <div class="row">
      <div class="col-md-6" id="inclusion">
          <h4 class="border-bottom" >Inclusion</h4>
            <?php foreach ($inclusion_list as $inclusion_list) { ?>
          <p><?php echo $inclusion_list->inclusion_description;  ?></p>
        <?php } ?>

      </div>
      <div class="col-md-6" id="exclusion">
          <h4 class="border-bottom" >Exclusion</h4>
          <?php foreach ($exclusion_list as $exclusion_list) { ?>
        <p><?php echo $exclusion_list->exclusion_description;  ?></p>
      <?php } ?>
      </div>
  </div>
</div>
<!-- Inclusion Exclusion start  -->
<!-- Food Accomodation start -->
<div class="container food-container bg-yellow" >
  <div class="row">
      <div class="col-md-6">
          <h4 class="border-bottom">Food</h4>
          <p>All Transfer A/c or Non A/c coach / Vehicle</p>
          <p>All Transfer A/c or Non A/c coach / Vehicle</p>
          <p>All Transfer A/c or Non A/c coach / Vehicle</p>
          <p>All Transfer A/c or Non A/c coach / Vehicle</p>
      </div>
      <div class="col-md-6">
          <h4 class="border-bottom">Accomodation</h4>
          <p>All Transfer A/c or Non A/c coach / Vehicle</p>
          <p>All Transfer A/c or Non A/c coach / Vehicle</p>
          <p>All Transfer A/c or Non A/c coach / Vehicle</p>
          <p>All Transfer A/c or Non A/c coach / Vehicle</p>
      </div>
  </div>
</div>
<!-- Food Accomodation ends -->

<div class="container escort-container bg-yellow" >
  <div class="row">
      <div class="col-md-6">
          <h4 class="border-bottom">Transfers and Sightseeing</h4>
          <p>All Transfer A/c or Non A/c coach / Vehicle</p>
          <p>All Transfer A/c or Non A/c coach / Vehicle</p>
          <p>All Transfer A/c or Non A/c coach / Vehicle</p>
          <p>All Transfer A/c or Non A/c coach / Vehicle</p>
      </div>
      <div class="col-md-6">
          <h4 class="border-bottom" >Tour Escort</h4>
          <p>All Transfer A/c or Non A/c coach / Vehicle</p>
          <p>All Transfer A/c or Non A/c coach / Vehicle</p>
          <p>All Transfer A/c or Non A/c coach / Vehicle</p>
          <p>All Transfer A/c or Non A/c coach / Vehicle</p>
      </div>
  </div>
</div>

<div class="container notes-container">
  <div class="row">
      <div class="col-md-12">
          <h4 class="border-bottom">Notes</h4>
          <p>Popularly known as the "Paradise on the Earth" the state is world famous for its scenic splendour, snow-capped mountains, plentiful wildlife</p>
          <p>Popularly known as the "Paradise on the Earth" the state is world famous for its scenic splendour, snow-capped mountains, plentiful wildlife</p>
          <p>Popularly known as the "Paradise on the Earth" the state is world famous for its scenic splendour, snow-capped mountains, plentiful wildlife</p>
          <p>Popularly known as the "Paradise on the Earth" the state is world famous for its scenic splendour, snow-capped mountains, plentiful wildlife</p>
      </div>

  </div>
</div>

<br>
<br>
<hr class="hr">

<script>
$(window).on('scroll', function ()  {

        if ($(window).scrollTop() > 700)
        {
          $('.header').addClass('sticky');
          //$('.page-header').addClass('hide-header');
        }
        else
        {
          $('.header').removeClass('sticky');
          //$('.page-header').removeClass('hide-header');
        }
      });
</script>
<script type="text/javascript">
function onScroll(event){
  var scrollPos = $(document).scrollTop();
  $('.navbar a').each(function () {
      var currLink = $(this);
      var refElement = $(currLink.attr("href"));
      if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
          $('.navbar ul li a').removeClass("active");
          currLink.addClass("active");
      }
      else{
          currLink.removeClass("active");
      }
  });
}
</script>

<script type="text/javascript">
$(document).ready(function () {
  $(document).on("scroll", onScroll);

  //smoothscroll
  $('a[href^="#"]').on('click', function (e) {
      e.preventDefault();
      $(document).off("scroll");

      $('a').each(function () {
          $(this).removeClass('active');
          $(this).removeClass('active12');
      })
      $(this).addClass('active');

      var target = this.hash,
          menu = target;
      $target = $(target);
      $('html, body').stop().animate({
          'scrollTop': $target.offset().top+2
      }, 500, 'swing', function () {
          window.location.hash = target;
          $(document).on("scroll", onScroll);
      });
  });
});

function onScroll(event){
  var scrollPos = $(document).scrollTop();
  $('#menu-center a').each(function () {
      var currLink = $(this);
      var refElement = $(currLink.attr("href"));
      if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
          $('#menu-center ul li a').removeClass("active");
          currLink.addClass("active");
      }
      else{
          currLink.removeClass("active");
      }
  });
}
</script>

<!-- <script type="text/javascript">
$(document).ready(function () {
$(document).on("scroll", onScroll2);
function onScroll2(event){
  var scrollPos = $(document).scrollTop();
  $('#menu-center1 a').each(function () {
      var currLink = $(this);
      var refElement = $(currLink.attr("href"));
      if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
          $('#menu-center1 a').removeClass("active12");
          currLink.addClass("active12");
      }
      else{
          currLink.removeClass("active12");
      }
  });
});
});
</script> -->

<script type="text/javascript">
$(document).ready(function () {
  $(document).on("scroll", onScroll2);

  //smoothscroll
  $('a[href^="#"]').on('click', function (e) {
      e.preventDefault();
      $(document).off("scroll");

      $('a').each(function () {
          $(this).removeClass('active12');
      })
      $(this).addClass('active12');

      var target = this.hash,
          menu = target;
      $target = $(target);
      $('html, body').stop().animate({
          'scrollTop': $target.offset().top+2
      }, 500, 'swing', function () {
          window.location.hash = target;
          $(document).on("scroll", onScroll);
      });
  });
});

function onScroll2(event){
  var scrollPos = $(document).scrollTop();
  $('#menu-center1 a').each(function () {
      var currLink = $(this);
      var refElement = $(currLink.attr("href"));
      if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
          $('#menu-center1  a').removeClass("active12");
          currLink.addClass("active12");
      }
      else{
          currLink.removeClass("active12");
      }
  });
}

</script>
<?php
include("include/footer.php");
?>
