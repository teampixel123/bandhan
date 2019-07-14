<?php
$page='list';
$page_title = 'Bandhan Tourism | Tour list';
include('include/header.php');
?>

<div class="container-fluid">
  <div class="container ">
    <div class="list-continer">
      <div class="row">
        <h3 class="list-title"><b><?php echo $state2; ?></b></h3>
      </div>
        <div class="col-md-12" style="padding:0px!important;">
          <div class="row" id="list-row">
        <?php if($tour_list){
          foreach ($tour_list as $tour_list) {
            $state = $tour_list->tour_state;
            $state_uri = str_replace('-',' ',$state);
            $tour_nm = $tour_list->tour_name;
            $tour_name = str_replace(' ','-',$tour_nm);
            ?>
            <div class="col-md-4">
              <a style="color:#000;" href="<?php echo base_url(); ?>Website/itinerary_details/<?php echo $tour_list->tour_id; ?>/<?php echo $state_uri; ?>/<?php echo $tour_name; ?>">
                <div class="card"  id="demo">
                  <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/tours/<?php echo $tour_list->tour_mobile_img; ?>" alt="Card image cap">
                  <div class="card-body">
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
              </a>
            </div>
        <?php  }
        } ?>
      </div>
    </div>

</div>
</div>
</div>


<?php  include('include/footer.php');
?>
