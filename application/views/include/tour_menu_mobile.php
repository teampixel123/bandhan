<?php
$page='tours';
$page_title = 'Bandhan Tourism | Welcome';
include("header.php");
?>


<div class="container">
  <h2 class="text-center mt-5 ">Domestic
    <div class="underline-small-mobile "></div>
  </h2><br>
</div>
  <div class="container">
      <div class="row  mb-1">

        <?php   $title_list = $this->Admin_Model->get_tour_menu_title();
          foreach ($title_list as $title_list) {
            $state = $title_list->tour_state;
            $state_uri = str_replace(' ','-',$state);
            ?>
            <div class="col-6" >
              <a href="<?php echo base_url() ?>Tour-List/<?php echo $state_uri; ?>"><h5 class="text-black "><?php echo $state; ?></h5></a>
                <ul style="padding:0px!important;margin:0px!important;">
                  <?php $menu_list = $this->Admin_Model->get_tour_menu_list($state);
                    foreach ($menu_list as $menu_list) {
                      $tour_nm = $menu_list->tour_name;
                      $tour_name = str_replace(' ','-',$tour_nm);
                  ?>
                  <li><a class="list" href="<?php echo base_url(); ?>Website/itinerary_details/<?php echo $menu_list->tour_id; ?>/<?php echo $state_uri; ?>/<?php echo $tour_name; ?>"><?php echo $menu_list->tour_name; ?></a></li>
                  <?php } ?>
                </ul>
          </div>
        <?php } ?>
      </div>
      </div>
<br>
<br>
<hr class="hr">
<?php
include("footer.php");
?>
