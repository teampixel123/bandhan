<?php
$page='list';
$page_title = 'Bandhan Tourism | Tour list';
include('include/header.php');
?>
<style>
  .card{
    margin-top: 0px;
  }
</style>
<!-- <div class="container-fluid" >
  <div class="row" style="margin-top:100px; margin-bottom:20px; padding:20px;">
    <div class="col-md-3">
      <h2 style="margin-top:60px;"><b>Himachal Pradesh</b></h2>
      <p style="padding-right:20px;">The Himalayan land of pristine nature, encompasses the noble souls, just like its soil and snow, being the heaven’s true glow.</p>
    </div>
    <div class="col-md-9">
      <p>The region full of picturesque, popular and yet offbeat places lie in this mystical land, full of flawless natural treasures. Bollywood’s personal favourite and a lively winter sport destination, it is the dearest choice of every travel enthusiast. The world of new experiences await you! Experience adventure with thrilling sports like horse riding, paragliding, mountain biking, zorbing at Solang Valley and equally enchanting sightseeing experiences at Shimla and Rohtang Pass. Veena World understands the best of your interests and preferences. The land of divinity with two most ancient temples in India, namely the Hidimba Devi Temple and Vashisht Kund Temple along with the residence of His Holiness Dalai Lama, Dharamshala are the star highlights of our Himachal tour packages. The northern part of India, a pure delight for the mountain and nature lovers, has inspired some of our well-assorted Himachal Pradesh tour packages. The ambience of Himachal Pradesh is welcoming just like the warm-hearted people of this state. The thrill of winter adventure, lures every explorer’s adrenaline urge. The poetic feel of the destination is so romantic that we carefully hand-pick special Himachal tour package for couples. We use our passionate unrivalled knowledge to design your perfect Himalayan vacation!</p>
    </div>
  </div>
</div>

<hr> -->



<div class="container-fluid" style="margin-top:20px; margin-bottom:80px; padding:20px;" >

  <div class="row" style="padding-top: 40px;margin:0px;">
    <div class="col-md-9">
      <div class="row">
        <h3 style="text-align:left!important;padding-bottom: 25px;"><b>Himachal Pradesh</b></h3>
      </div>
      <div class="row">

        <?php if($tour_list){
          foreach ($tour_list as $tour_list) { ?>
            <div class="col-md-4">
              <div class="card"  id="demo">
                <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/tours/<?php echo $tour_list->tour_mobile_img; ?>" alt="Card image cap">
                <!-- <i class="fa fa-eye ml-1 card-icon"  aria-hidden="true" id="show"></i> -->
                <div class="card-body">
                  <h5 class="card-title" id="card-text"><?php echo $tour_list->tour_name; ?></h5>
                  <div class="row d-flex justify-content-around">
                      <p class="card-text">Start From</p>
                      <p class="card-text">City</p>
                      <p class="card-text">Days</p>
                  </div>
                  <div class="row d-flex justify-content-around">
                      <p class="card-text" style="font-weight:bold;">&#8377;<?php echo $tour_list->tour_price; ?></p>
                      <p class="card-text" style="font-weight:bold;"><?php echo $tour_list->tour_city_num; ?></p>
                      <p class="card-text" style="font-weight:bold;"><?php echo $tour_list->tour_day_num; ?></p>
                  </div>
                </div>
              </div>

            </div>
        <?php  }
        } ?>




        <!-- <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/owl/owl4.jpg" alt="Card image cap">
            <div class="card-body" style="top:10%;">
              <h5 class="card-title" id="card-text">Assam Special</h5>
              <div class="row d-flex justify-content-around">
                  <p class="card-text">Start From</p>
                  <p class="card-text">City</p>
                  <p class="card-text">Days</p>
              </div>

              <div class="row d-flex justify-content-around">
                  <p class="card-text" style="font-weight:bold;">&#8377;25,000</p>
                  <p class="card-text" style="font-weight:bold;">8</p>
                  <p class="card-text" style="font-weight:bold;">10</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" >
            <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/owl/owl8.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title" id="card-text">Assam Special</h5>
              <div class="row d-flex justify-content-around">
                  <p class="card-text">Start From</p>
                  <p class="card-text">City</p>
                  <p class="card-text">Days</p>
              </div>

              <div class="row d-flex justify-content-around">
                  <p class="card-text" style="font-weight:bold;">&#8377;25,000</p>
                  <p class="card-text" style="font-weight:bold;">8</p>
                  <p class="card-text" style="font-weight:bold;">10</p>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
    <div class="col-md-3">
      <img width="100%" src="<?php echo base_url(); ?>assets/images/Screenshot_3.jpg" alt="">
    </div>
  </div>

  <div class="row" style="margin-top:100px; margin-bottom:80px; padding:20px;">
    <div class="col-md-9">
      <div class="row">
        <div class="col-md-4">
          <img src="<?php echo base_url(); ?>assets/images/Screenshot_2.jpg" alt="">
        </div>
        <div class="col-md-4">
          <img src="<?php echo base_url(); ?>assets/images/Screenshot_2.jpg" alt="">
        </div>
        <div class="col-md-4">
          <img src="<?php echo base_url(); ?>assets/images/Screenshot_2.jpg" alt="">
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <!-- <img src="<?php echo base_url(); ?>assets/images/Screenshot_3.jpg" alt=""> -->
    </div>
  </div>
</div>



<?php  include('include/footer.php');
?>
