<!DOCTYPE html>
<html lang="en">
<?php $page_title = 'Bandhan | Tour Details'; ?>
<?php include('head.php'); ?>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include('navbar.php'); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php include('sidebar.php'); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-9 mb-xl-0">
              <h4 class="font-weight-bold text-dark mb-4">Tour Details</h4>
            </div>
            <div class="col-sm-3 mb-xl-0">
              <form class="" action="<?php echo base_url() ?>Dashboard/update_tour" method="post">
                <input type="hidden" class="tour_id" name="tour_id" value="<?php echo $tour_details[0]['tour_id']; ?>">
                <button type="submit" title="Update" style="width:30px; height:30px; padding:0px;" class="float-right btn btn-sm btn-light btn-rounded btn-fw "><i class="fa fa-edit" style="color:#3794fc;"></i></button>
              </form>
            </div>
          </div>
          <div id="tour_update_success" class="alert alert-success" style="display:none;"  role="alert"></div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <h4 class="card-title mb-1">Tour Name</h4>
                      <p class="mb-3"><?php echo $tour_details[0]['tour_name']; ?></p>
                    </div>
                    <div class="col-md-4">
                      <h4 class="card-title mb-1">State</h4>
                      <p class="mb-3"><?php echo $tour_details[0]['tour_state']; ?></p>
                    </div>
                    <div class="col-md-4">
                      <h4 class="card-title mb-1">Number of Days</h4>
                      <p class="mb-3"><?php echo $tour_details[0]['tour_day_num']; ?></p>
                    </div>
                    <div class="col-md-4">
                      <h4 class="card-title mb-1">Number of Cities</h4>
                      <p class="mb-3"><?php echo $tour_details[0]['tour_city_num']; ?></p>
                    </div>
                    <div class="col-md-4">
                      <h4 class="card-title mb-1">Price</h4>
                      <p class="mb-3"><?php echo $tour_details[0]['tour_price']; ?></p>
                    </div>
                    <div class="col-md-4">
                      <h4 class="card-title mb-1">Price With GST</h4>
                      <p class="mb-3"><?php echo $tour_details[0]['tour_price_withgst']; ?></p>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                      <h4 class="card-title mb-1">Tour Start City</h4>
                      <p class="mb-3"><?php echo $tour_details[0]['tour_start_city']; ?></p>
                    </div>
                    <div class="col-md-4">
                      <h4 class="card-title mb-1">Tour End City</h4>
                      <p class="mb-3"><?php echo $tour_details[0]['tour_end_city']; ?></p>
                    </div>
                    <div class="col-md-12">
                      <hr>
                      <h4 class="card-title mb-1">Overview</h4>
                      <p class="mb-3"><?php echo $tour_details[0]['tour_overview']; ?></p>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <h4 class="card-title mb-1">Banner Image:</h4>
                      <img style="width:100%;" src="<?php echo base_url(); ?>assets/images/tours/<?php echo $tour_details[0]['tour_banner_img']; ?>" alt="image">
                    </div>
                    <div class="col-md-6">
                      <h4 class="card-title mb-1">Mobile Image</h4>
                      <img style="width:100%;" src="<?php echo base_url(); ?>assets/images/tours/<?php echo $tour_details[0]['tour_mobile_img']; ?>" alt="image">
                    </div>

                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include('footer.php'); ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

<?php include('script.php'); ?>
<?php if($this->session->flashdata('status')){
      $status = $this->session->flashdata('status');
  ?>
  <input type="hidden" id="status_msg" name="status_msg" value="<?php echo $status; ?>">
  <script type="text/javascript">
    $(document).ready(function(){
      var status_msg = $('#status_msg').val();
      if(status_msg == 'tour_add_success'){
        $('#tour_update_success').html('<b>Tour Save</b> Tour added successfully.');
        $('#tour_update_success').show().delay('6000').fadeOut();
      }
      if(status_msg == 'tour_update_success'){
        $('#tour_update_success').html('<b>Tour Update</b> Tour updated successfully.');
        $('#tour_update_success').show().delay('6000').fadeOut();
      }
      if(status_msg == 'tour_image_update_success'){
        $('#tour_update_success').html('<b>Image Update</b> Tour image updated successfully.');
        $('#tour_update_success').show().delay('6000').fadeOut();
      }
      if(status_msg == 'mobile_image_update_success'){
        $('#tour_update_success').html('<b>Image Update</b> Tour Mobile image updated successfully.');
        $('#tour_update_success').show().delay('6000').fadeOut();
      }
    });
  </script>
<?php
} ?>
  <!-- End custom js for this page-->
</body>

</html>
