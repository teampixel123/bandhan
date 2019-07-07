<!DOCTYPE html>
<html lang="en">
<?php $page_title = 'Bandhan | Add Tour Cost'; ?>
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
              <h4 class="font-weight-bold text-dark mb-4">Add Tour Cost</h4>
              <!-- <p class="font-weight-normal mb-2 text-muted">APRIL 1, 2019</p> -->
            </div>
          </div>
          <div class="alert alert-success" id="success_msg" style="display:none;">
          </div>
          <div class="alert alert-danger" id="danger_msg" style="display:none;">
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body pb-2">
                  <h4 class="card-title mb-3">Tour Cost</h4>
                  <form class="forms-sample">
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Tour Title: </label>
                      <label for="exampleInputUsername2" class="col-sm-9 col-form-label text-left"><b><?php echo $tour_details[0]['tour_name']; ?></b></label>
                    </div>
                  </form>
                  <?php if($cost_list){ ?>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Person Type</th>
                            <th>Rate</th>
                            <th style="width:15%">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $i = 1;
                          foreach ($cost_list as $cost_list) {
                            $j = $i++;
                          ?>
                          <tr>
                            <td><?php echo $j; ?></td>
                            <td><?php echo $cost_list->cost_person_type; ?></td>
                            <td><?php echo $cost_list->cost_rate; ?></td>
                            <td>
                              <div class="row">
                                <div class="col-md-6">
                                  <button type="button" class="btn btn-sm btn-light btn-rounded btn-fw" data-toggle="modal" data-target="#myModal_<?php echo $cost_list->id; ?>"><i class="fa fa-trash" style="color:red;"></i></button>
                                </div>
                                <div id="myModal_<?php echo $cost_list->id; ?>" class="modal fade" role="dialog">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title">Delete Tour Cost</h4>
                                      </div>
                                      <div class="modal-body">
                                        <p>Do you want to delete this Tour Cost</p>
                                        <p><?php echo $cost_list->cost_person_type; ?>: <?php echo $cost_list->cost_rate; ?> Rs.</p>
                                      </div>
                                      <div class="modal-footer">
                                        <form class="" action="<?php echo base_url() ?>Dashboard/delete_cost" method="post">
                                          <input type="hidden" class="cost_id" name="cost_id" value="<?php echo $cost_list->id; ?>">
                                          <button type="submit" class="btn btn-danger">Yes</button>
                                        </form>
                                        <button type="button" class="btn btn-info" data-dismiss="modal">No</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>

            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-3">Insert New Tour Cost Information</h4>
                  <form action="<?php echo base_url(); ?>Dashboard/save_cost" method="post" class="forms-sample">
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Person Type</label>
                      <div class="col-sm-9">
                        <select class="form-control form-control-sm" name="cost_person_type" id="cost_person_type" required>
                          <option>Per Adult</option>
                          <option>Extra Adult (Above 12 Yrs Triple Sharing)</option>
                          <option>Child With Bed(5-11yrs)</option>
                          <option>Child Without Bed (5-11yrs)</option>
                          <option>Infant ( Below 5 Yrs)</option>
                          <option>Single Sharing</option>
                        </select>
                        <!-- <input type="number" class="form-control form-control-sm" name="cost_num" id="cost_num" placeholder="Sort Number"> -->
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Rate</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" name="cost_rate" id="cost_rate" placeholder="Insert Amount" required>
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
        <!-- update_cost_success -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

<?php include('script.php'); ?>
<?php if($this->session->flashdata('save_cost_success')){ ?>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#success_msg').html('<strong>Save Success!</strong> Tour Cost saved successfully.');
      $('#success_msg').show().delay('7000').fadeOut();
    });
  </script>
<?php } ?>
<?php if($this->session->flashdata('delete_cost_success')){ ?>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#danger_msg').html('<strong>Delete Success!</strong> Tour Cost deleted successfully.');
      $('#danger_msg').show().delay('7000').fadeOut();
    });
  </script>
<?php } ?>
  <!-- End custom js for this page-->
</body>

</html>
Tour Cost
