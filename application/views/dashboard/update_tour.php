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
              <h4 class="font-weight-bold text-dark mb-4">Update Tour</h4>
              <!-- <p class="font-weight-normal mb-2 text-muted">APRIL 1, 2019</p> -->
            </div>
          </div>
          <div id="tour_update_error" class="alert alert-danger" style="display:none;"  role="alert"></div>
          <!-- Update Information -->
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-3">Update Tour Information</h4>
                  <form class="forms-sample" action="<?php echo base_url(); ?>Dashboard/update_tour_db" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Tour Name</label>
                      <div class="col-sm-9">
                        <input type="text" value="<?php echo $tour_details[0]['tour_name']; ?>" class="form-control form-control-sm" name="tour_name" id="tour_name" placeholder="Tour Name" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">State</label>
                      <div class="col-sm-6">
                        <select class="form-control form-control-lg" name="tour_state" id="tour_state">
                          <option><?php echo $tour_details[0]['tour_state']; ?></option>
                          <option>Andhra Pradesh</option>
                          <option>Andaman Islands</option>
                          <option>Arunachal Pradesh</option>
                          <option>Bhutan</option>
                          <option>Bihar</option>
                          <option>Chhattisgarh</option>
                          <option>Goa</option>
                          <option>Gujarat</option>
                          <option>Himachal Pradesh</option>
                          <option>International</option>
                          <option>Jammu and Kashmir</option>
                          <option>Jharkhand</option>
                          <option>Karnataka</option>
                          <option>Kerala</option>
                          <option>Madhya Pradesh</option>
                          <option>Maharashtra</option>
                          <option>North East</option>
                          <option>Odisha</option>
                          <option>Punjab</option>
                          <option>Rajasthan</option>
                          <option>Sikkim</option>
                          <option>Tamil Nadu</option>
                          <option>Telangana</option>
                          <option>Uttar Pradesh</option>
                          <option>Uttarakhand</option>
                          <option>West Bengal</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Price</label>
                      <div class="col-sm-6">
                        <input type="number" value="<?php echo $tour_details[0]['tour_price']; ?>" class="form-control form-control-sm" name="tour_price" id="tour_price" placeholder="Tour Price" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Price with GST</label>
                      <div class="col-sm-6">
                        <input type="number" value="<?php echo $tour_details[0]['tour_price_withgst']; ?>" class="form-control form-control-sm" name="tour_price_withgst" id="tour_price_withgst" placeholder="Tour Price + GST" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Total Number of Cities</label>
                      <div class="col-sm-6">
                        <input type="number" value="<?php echo $tour_details[0]['tour_city_num']; ?>" class="form-control form-control-sm" name="tour_city_num" id="tour_city_num" placeholder="Total Number of Cities" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Total Number of Days</label>
                      <div class="col-sm-6">
                        <input type="number" value="<?php echo $tour_details[0]['tour_day_num']; ?>" class="form-control form-control-sm" name="tour_day_num" id="tour_day_num" placeholder="Total Number of Days" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Tour Start City</label>
                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $tour_details[0]['tour_start_city']; ?>" class="form-control form-control-sm" name="tour_start_city" id="tour_start_city" placeholder="Total Number of Days" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Tour End City</label>
                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $tour_details[0]['tour_end_city']; ?>" class="form-control form-control-sm" name="tour_end_city" id="tour_end_city" placeholder="Total Number of Days" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Overview</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" name="tour_overview" id="tour_overview" rows="8" required><?php echo $tour_details[0]['tour_overview']; ?></textarea>
                      </div>
                    </div>
                    <div class="form-actions mt-4">
                      <button type="submit" class="btn btn-primary mr-2">Update</button>
                      <button class="btn btn-light">Cancel</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <!-- Update Image -->
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-3">Update Tour Image</h4>
                  <form class="forms-sample mb-4" action="<?php echo base_url(); ?>Dashboard/update_tour_image" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="tour_banner_img_old" value="<?php echo $tour_details[0]['tour_banner_img']; ?>">
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Select Image</label>
                      <div class="col-sm-9">
                        <input type="file" class="form-control form-control-sm" name="tour_banner_img" id="tour_banner_img" placeholder="Total Number of Days" required>
                        <label for="exampleInputUsername2" class="col-form-label text-left">Select .jpg image</label>
                      </div>
                    </div>
                    <div class="form-actions mt-0">
                      <button type="submit" class="btn btn-primary mr-2">Update Image</button>
                      <button class="btn btn-light">Cancel</button>
                    </div>
                  </form>
                    <img style="width:100%;" src="<?php echo base_url(); ?>assets/images/tours/<?php echo $tour_details[0]['tour_banner_img']; ?>" alt="image">
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-3">Update Mobile Image</h4>
                  <form class="forms-sample mb-4" action="<?php echo base_url(); ?>Dashboard/update_mobile_image" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="tour_mobile_img_old" value="<?php echo $tour_details[0]['tour_mobile_img']; ?>">
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Select Image</label>
                      <div class="col-sm-9">
                        <input type="file" class="form-control form-control-sm" name="tour_mobile_img" id="tour_mobile_img" placeholder="Total Number of Days" required>
                        <label for="exampleInputUsername2" class="col-form-label text-left">Select .jpg image</label>
                      </div>
                    </div>
                    <div class="form-actions mt-0">
                      <button type="submit" class="btn btn-primary mr-2">Update Image</button>
                      <button class="btn btn-light">Cancel</button>
                    </div>
                  </form>
                    <img style="width:100%;" src="<?php echo base_url(); ?>assets/images/tours/<?php echo $tour_details[0]['tour_mobile_img']; ?>" alt="image">
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
  <input type="text" id="status" name="status" value="<?php echo $status; ?>">
  <script type="text/javascript">
    $(document).ready(function(){
       var status = $('#status').val();
       $('#tour_update_error').html('<b>Image Update Error</b>'+status);
       $('#tour_update_error').show().delay('10000').fadeOut();
    });
  </script>
<?php } ?>
  <!-- End custom js for this page -->
</body>

</html>
