<!DOCTYPE html>
<html lang="en">
<?php $page_title = 'Bandhan | Tour List'; ?>
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
              <h4 class="font-weight-bold text-dark mb-4">Tour List</h4>
              <!-- <p class="font-weight-normal mb-2 text-muted">APRIL 1, 2019</p> -->
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-3">List of all tours</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Tour Name</th>
                          <th>State</th>
                          <th>Number of Cities</th>
                          <th>Number of Days</th>
                          <th>Price</th>
                          <th style="width:15%;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $i=1;
                        foreach ($tour_list as $tour_list) {
                          $j = $i++;
                          ?>
                          <tr>
                            <td><?php echo $j; ?></td>
                            <td><?php echo $tour_list->tour_name; ?></td>
                            <td><?php echo $tour_list->tour_state; ?></td>
                            <td><?php echo $tour_list->tour_city_num; ?></td>
                            <td><?php echo $tour_list->tour_day_num; ?></td>
                            <td><?php echo $tour_list->tour_price; ?></td>
                            <td>
                              <div class="row">
                                <div class="col-md-4">
                                  <form class="" action="<?php echo base_url() ?>Dashboard/tour_details_load" method="post">
                                    <input type="hidden" class="tour_id" name="tour_id" value="<?php echo $tour_list->tour_id; ?>">
                                    <button type="submit" style="width:30px; height:30px; padding:0px;" class="btn btn-sm btn-light btn-rounded btn-fw"><i class="fa fa-eye" style="color:#51c81c;"></i></button>
                                  </form>
                                </div>
                                <div class="col-md-4">
                                  <form class="" action="<?php echo base_url() ?>Dashboard/update_tour" method="post">
                                    <input type="hidden" class="tour_id" name="tour_id" value="<?php echo $tour_list->tour_id; ?>">
                                    <button type="submit" style="width:30px; height:30px; padding:0px;" class="btn btn-sm btn-light btn-rounded btn-fw "><i id="edit_<?php echo $j; ?>" class="fa fa-edit" style="color:#3794fc;"></i></button>
                                  </form>
                                </div>
                                <div class="col-md-4">
                                  <button type="button" style="width:30px; height:30px; padding:0px;" class="btn btn-sm btn-light btn-rounded btn-fw" data-toggle="modal" data-target="#myModal_<?php echo $tour_list->tour_id; ?>"><i class="fa fa-trash" style="color:red;"></i></button>
                                </div>
                              </div>
                            </td>
                          </tr>
                        <?php  } ?>
                      </tbody>
                    </table>
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
  <!-- End custom js for this page-->
</body>

</html>
