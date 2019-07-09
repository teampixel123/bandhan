<!DOCTYPE html>
<html lang="en">
<?php $page_title = 'Bandhan | Add Tour'; ?>
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
              <h4 class="font-weight-bold text-dark mb-4">Add New Tour</h4>
              <!-- <p class="font-weight-normal mb-2 text-muted">APRIL 1, 2019</p> -->
            </div>
          </div>
          <div id="image_error" class="alert alert-danger" style="display:none;" role="alert"></div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-3">Insert New Tour Information</h4>
                  <form class="forms-sample" action="<?php echo base_url(); ?>Dashboard/save_tour" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Tour Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" name="tour_name" id="tour_name" placeholder="Tour Name" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">State</label>
                      <div class="col-sm-6">
                        <select class="form-control form-control-lg" name="tour_state" id="tour_state">
                          <option>Bhutan</option>
                          <option>Sikkim</option>
                          <option>North East</option>
                          <option>Rajastan</option>
                          <option>Kerala</option>
                          <option>Madhya Pradesh</option>
                          <option>Odisa</option>
                          <option>Uttaranchal</option>
                          <option>Kashmir</option>
                          <option>Leh</option>
                          <option>Karnataka</option>
                          <option>Telangana</option>
                          <option>Himachal Pradesh</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Price</label>
                      <div class="col-sm-6">
                        <input type="number" class="form-control form-control-sm" name="tour_price" id="tour_price" placeholder="Tour Price" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Price with GST</label>
                      <div class="col-sm-6">
                        <input type="number" class="form-control form-control-sm" name="tour_price_withgst" id="tour_price_withgst" placeholder="Tour Price + GST" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Total Number of Cities</label>
                      <div class="col-sm-6">
                        <input type="number" class="form-control form-control-sm" name="tour_city_num" id="tour_city_num" placeholder="Total Number of Cities" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Total Number of Days</label>
                      <div class="col-sm-6">
                        <input type="number" class="form-control form-control-sm" name="tour_day_num" id="tour_day_num" placeholder="Total Number of Days" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Tour Start City</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control form-control-sm" name="tour_start_city" id="tour_start_city" placeholder="Tour Start City" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Tour End City</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control form-control-sm" name="tour_end_city" id="tour_end_city" placeholder="Tour End City" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Select Banner Image</label>
                      <div class="col-sm-6">
                        <input type="file" class="form-control form-control-sm" name="files[0]" id="tour_banner_img" placeholder="Total Number of Days" required>
                      </div>
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-left">Select 1920*600 .jpg image</label>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Select Mobile Banner Image</label>
                      <div class="col-sm-6">
                        <input type="file" class="form-control form-control-sm" name="files[1]" id="tour_mobile_banner_img" placeholder="Total Number of Days" required>
                      </div>
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-left">Select 500*320 .jpg image</label>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Overview</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" name="tour_overview" id="tour_overview" rows="8" required></textarea>
                      </div>
                    </div>
                    <div class="form-actions mt-4">
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </div>
                  </form>
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
      $error = $this->session->flashdata('status');
  ?>
  <input type="hidden" id="error_msg" name="error" value="<?php echo $error; ?>">
  <script type="text/javascript">
    $(document).ready(function(){
      var error = $('#error_msg').val();
      $('#image_error').html('<b>Tour Not Saved</b>'+error);
      $('#image_error').show().delay('10000').fadeOut();
    });
  </script>
<?php } ?>
  <!-- End custom js for this page-->
</body>

</html>
