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
            <div class="col-sm-12 mb-xl-0">
              <h4 class="font-weight-bold text-dark mb-4">Tour Details</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <h4 class="card-title mb-1">Tour Name</h4>
                      <p class="mb-3"><?php echo $tour_details[0]['tour_name']; ?></p>
                    </div>
                    <div class="col-md-6">
                      <h4 class="card-title mb-1">State</h4>
                      <p class="mb-3"><?php echo $tour_details[0]['tour_state']; ?></p>
                    </div>
                    <div class="col-md-6">
                      <h4 class="card-title mb-1">Number of Days</h4>
                      <p class="mb-3"><?php echo $tour_details[0]['tour_day_num']; ?></p>
                    </div>
                    <div class="col-md-6">
                      <h4 class="card-title mb-1">Number of Cities</h4>
                      <p class="mb-3"><?php echo $tour_details[0]['tour_city_num']; ?></p>
                    </div>
                    <div class="col-md-6">
                      <h4 class="card-title mb-1">Price</h4>
                      <p class="mb-3"><?php echo $tour_details[0]['tour_price']; ?></p>
                    </div>
                  </div><hr>
                  <h4 class="card-title mb-1">Overview</h4>
                  <p class="mb-3"><?php echo $tour_details[0]['tour_overview']; ?></p>
                  <hr>

                  <img src="<?php echo base_url(); ?>assets/images/tours/<?php echo $tour_details[0]['tour_banner_img']; ?>" alt="image">

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
  <!-- End custom js for this page-->
</body>

</html>
