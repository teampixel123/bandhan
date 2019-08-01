<?php

$page='tours';
$page_title =  $tour_details[0]['tour_name'];
include("include/header.php");
?>
<div class="container-fluid it-banner">
  <div class="row image_tur_ban">
    <div class="col-lg-12">
      <img class="banner-image d-none d-sm-block" src="<?php echo base_url(); ?>assets/images/tours/<?php echo $tour_details[0]['tour_banner_img']; ?>" alt="" width="100%">
      <img class="banner-image-mobile d-block d-sm-none" src="<?php echo base_url(); ?>assets/images/tours/<?php echo $tour_details[0]['tour_mobile_img']; ?>" alt="" width="100%">
    </div>
  </div>
</div>
 <!-- sticky navbar -->

<div class="container sticky-cont">
  <div class="header">
    <div class="container sticky-cont">
    <nav class="navbar navbar-expand-sm  d-none d-sm-block" id="menu-center">
       <!-- Links -->
       <ul class="navbar-nav">
         <!-- <li class="nav-item">
           <a class="nav-link sticky-nav-head active" href="#overview" >Overview</a>
         </li> -->
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
          <!-- <a class="active" href="#overview" >Overview</a> -->
          <a href="#itinarary" >Itinerary</a>
          <a href="#inclusion" >Inclusions</a>
          <a href="#exclusion" >Exclusions</a>
        </div>
  </div>
</div>
</div>
<!-- sticky navbar -->
  <!-- Overview start-->
  <!-- <div class="container overview" id="overview">
    <div class="row">
        <h4></h4>
    </div>
      <div class="row">
          <div class="col-md-8 mt-3">
            <p class="mb-0"><?php echo $tour_details[0]['tour_overview']; ?></p>
          </div>
          <div class="col-md-4 align-self-center">
            <img class="img-iti-svg" src="<?php echo base_url(); ?>assets/images/shape.svg" alt="" >
            <div class="text-on-svg">
              <h4 class="border-bottom"> <strong>Cities <?php echo $tour_details[0]['tour_city_num']; ?></strong></h4>
              <h4> <strong>Days <?php echo $tour_details[0]['tour_day_num']; ?></strong></h4>
            </div>
          </div>
      </div>
  </div> -->
<!-- Overview ends -->
<!-- itinarary Start -->

  <div class="container" id="itinarary">
    <div class="row border-bottom">
        <h4>Itinarary</h4>
    </div>
      <div class="row itinarary-start-row mt-0 mb-0">
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
          <?php if($cost_list){ ?>
          <div class="cost-table">
            <h4 class="border-bottom text-center" style="margin-bottom :5px!important;">Tour Cost </h4>
            <h6 class="tour-bcp">Per Person Ex. <?php echo $tour_details[0]['tour_start_city']; ?></h6>
            <!-- <h5 class="tour-bcp2">&#8377; <?php echo $tour_details[0]['tour_price']; ?> /-<span >+ 5 % GST </span> </h5> -->
            <h4 class="final-price">&#8377; <?php echo $tour_details[0]['tour_price']; ?>/- <sup>*</sup></h4>
              <?php foreach ($cost_list as $cost_list): ?>
                <h6><?php echo $cost_list->cost_person_type; ?> : <span class="price-desc"> <?php echo $cost_list->cost_rate; ?>/-</span></h6>
              <?php endforeach; ?>
          </div>
          <?php } ?>
            <br>
            <br>
            <br>
            <?php if($date_list){ ?>
            <div class="cost-table">
              <h4 class="text-center" style="margin-bottom :15px!important;">Departure Dates </h4>
              <h4 class="final-price" style="background-color:rgb(128,128,128, 0.5)!important;"> <?php echo $tour_details[0]['tour_start_city']; ?> to <?php echo $tour_details[0]['tour_end_city']; ?></h4>
                <?php foreach ($date_list as $date_list): ?>
                  <h6 class="text-center"><?php echo $date_list->departure_date; ?></h6>
                <?php endforeach; ?>
              </div>
            <?php } ?>
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
          <p>We will be pleased to serve you whole some, hygienic Maharashtra North – Indian and Chinese pure Vegetarian Cuisine includes tea/coffeewith breakfast. Lunch evening Tea
             or coffee with delicious snacks and dinner. And on the way food will be provide in Dhaba/ Restaurants.</p>
          <!-- <p class="mb-0">Meal Plan: -
            <ul class="paragraph">
              <li>EP: Room only</li>
              <li>CP: Room + Breakfast</li>
              <li>MAP: Room+ Breakfast + Lunch or Dinner</li>
              <li>AP: Room + Breakfast + Lunch + Dinner</li>
            </ul>
          </p> -->
      </div>
      <div class="col-md-6">
          <h4 class="border-bottom">Accomodation</h4>
          <p>All accommodation service provide by us region wise Good
             and Confortable star category Hotels/ Resorts. This is clean and also used by our satisfied customers.</p>

      </div>
  </div>
</div>
<!-- Food Accomodation ends -->

<div class="container escort-container bg-yellow" >
  <div class="row">
      <div class="col-md-6">
          <h4 class="border-bottom">Transfers and Sightseeing</h4>
          <p>From Ex. Destination all transfers are provided by Good Condition vehicle as per group size.
            And trying to cover all major Sightseeing in every destination.</p>
      </div>
      <div class="col-md-6">
          <h4 class="border-bottom" >Tour Escort</h4>
          <p>An experienced Escort with every group</p>
      </div>
  </div>
</div>

<div class="container notes-container">
  <div class="row">
      <div class="col-md-12">
          <h4 class="border-bottom">Notes</h4>
          <ul class="paragraph">
            <li class="mb-2">Don’t forget to carry your original photo identity card (Passport/ Driving License/ Voter ID etc) in case of Airlines, Railway Tickets & hotel bookings.</li>
            <li class="mb-2">Please recheck your Flight timings one day before your departure date. Reconfirmation of your reservation and timings from your end would avoid any inconvenience incase the flight is re-scheduled.</li>
            <li class="mb-2">We would like to attract your attention towards the rules & regulations laid by respective airlines for check in timings at the airport & we request you to check the same with respective airline understand it &adhere the same.</li>
            <li class="mb-2">Driver will be at the exit with a placard of your name.</li>
            <li class="mb-2">When Vehicle is climbing up, A/C will not work.</li>
            <li class="mb-2">If vehicle condition is not satisfactory or any problem regarding the driver, please inform the operator & mention it on the duty Slip before signing or contact us.</li>
            <li class="mb-2">Please reconfirm your next day’s program with your driver.</li>
            <li class="mb-2">Early check in & late checkout depends upon hotel’s policy & room availability.</li>
            <li class="mb-2">In case of late check in, you are requested to intimate the hotel accordingly. Hotel will wait for 02 hours from given check in time, after that hotel may release the rooms.</li>
            <li class="mb-2">Hotel / Resort selection is on the basis of "SERVICES" provided.</li>
            <li class="mb-2">Camera / handy cam fees are applicable almost for all places, which guest has to pay at actual. </li>
            <li class="mb-2">In view of the client’s safety & security, night driving is not suggested. Though vehicle is at disposal drivers are not on 24 hrs.duties. Hence you are requested to relieve the driver before 20.00 to 21.00 hrs. Otherwise extra amount of driver’s allowance will be applicable.</li>
            <li class="mb-2">The Company in no way shall be responsible for Flight  Miss, Any loss, injury or damage to person or property in connection with the transportation, caused by acts of strikes , pilferage , breakdown of machinery, accidents ,any natural calamity Etc & any additional charges for the same will be borne by the guest only. All sightseeing depend on permits, Weather & road condition.</li>

          </ul>
      </div>

  </div>
</div>

<br>
<br>
<hr class="hr">

<script>
$(window).on('scroll', function ()  {
  var it_banner = $('.it-banner').outerHeight();
  var header_top = $('.header-top').outerHeight();
  var header_top2 = $('.header-top2').outerHeight();
  var tot_height = it_banner + header_top + header_top2;
  // alert(tot_height);
        if ($(window).scrollTop() > tot_height)
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
<!-- <script type="text/javascript">
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
</script> -->

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
      $(this).removeClass('active12');

      var target = this.hash,
          menu = target;
      $target = $(target);
      $('html, body').stop().animate({
          'scrollTop': $target.offset().top+80
      }, 500, 'swing', function () {
          //window.location.hash = target;
          $(document).on("scroll", onScroll);
      });
  });
});

function onScroll(event){
  var scrollPos = $(document).scrollTop();
  $('#menu-center a').each(function () {
      var currLink = $(this);
      var refElement = $(currLink.attr("href"));
      if (refElement.position().top-150 <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
          $('#menu-center ul li a').removeClass("active");
          $('#menu-center ul li a').removeClass("active12");
          currLink.addClass("active");
          currLink.addClass('active12');
      }
      else{
          currLink.removeClass("active");
          currLink.removeClass('active12');
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
           $(this).removeClass('active');
      })
      $(this).addClass('active12');
       $(this).addClass('active');

      var target = this.hash,
          menu = target;
      $target = $(target);
      $('html, body').stop().animate({
          'scrollTop': $target.offset().top
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
          $('#menu-center1  a').removeClass("active");
          currLink.addClass("active12");
          currLink.addClass("active");
      }
      else{
          currLink.removeClass("active12");
          currLink.removeClass("active");
      }
  });
}

$(document).ready(function(){
})

</script>
<?php
include("include/footer.php");
?>
