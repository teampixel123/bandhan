<!DOCTYPE html>
<html lang="en">
<?php $page_title = 'Bandhan | Add Itinerary'; ?>
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
              <h4 class="font-weight-bold text-dark mb-4">Add Itinerary</h4>
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
                  <h4 class="card-title mb-3">Tour Details</h4>
                  <form class="forms-sample">
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Tour Title: </label>
                      <label for="exampleInputUsername2" class="col-sm-9 col-form-label text-left"><b><?php echo $tour_details[0]['tour_name']; ?></b></label>
                    </div>
                  </form>
                  <?php if($itinerary_list){
                  ?>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Day</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th style="width:15%">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $i = 1;
                          foreach ($itinerary_list as $itinerary_data) {
                            $j = $i++;
                          ?>
                          <tr>
                            <td><?php echo $j; ?></td>
                            <td>Day <?php echo $itinerary_data->itinerary_day_num; ?></td>
                            <td><?php echo $itinerary_data->itinerary_day_title; ?></td>
                            <td><?php echo $itinerary_data->itinerary_day_description; ?></td>
                            <td>
                              <div class="row">
                                <div class="col-md-6">
                                  <form class="" action="<?php echo base_url() ?>Dashboard/add_itinerary" method="post">
                                    <input type="hidden" class="itinerary_id" name="itinerary_id" value="<?php echo $itinerary_data->id; ?>">
                                    <button type="submit" class="btn btn-sm btn-light btn-rounded btn-fw"><i id="edit_<?php echo $j; ?>" class="fa fa-edit" style="color:#3794fc;"></i></button>
                                  </form>
                                </div>
                                <div class="col-md-6">
                                  <button type="button" class="btn btn-sm btn-light btn-rounded btn-fw" data-toggle="modal" data-target="#myModal_<?php echo $itinerary_data->id; ?>"><i class="fa fa-trash" style="color:red;"></i></button>
                                </div>

                                <!-- Modal -->
                                <div id="myModal_<?php echo $itinerary_data->id; ?>" class="modal fade" role="dialog">
                                  <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                        <h4 class="modal-title">Delete Itinerary</h4>
                                      </div>
                                      <div class="modal-body">
                                        <p>do you want to delete this itinerary</p>
                                        <p>Day <?php echo $itinerary_data->itinerary_day_num; ?> - <?php echo $itinerary_data->itinerary_day_title; ?></p>
                                      </div>
                                      <div class="modal-footer">
                                        <form class="" action="<?php echo base_url() ?>Dashboard/delete_itinerary" method="post">
                                          <input type="hidden" class="itinerary_id" name="itinerary_id" value="<?php echo $itinerary_data->id; ?>">
                                          <button type="submit" class="btn btn-danger">Yes</button>
                                        </form>
                                        <button type="button" class="btn btn-info" data-dismiss="modal">No</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- Modal End -->
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

              <!-- Update Itinerary Start -->
            <?php if($itinerary_details){ ?>
              <div id="update_itinerary" class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title mb-3">Update Itinerary Information</h4>
                    <form action="<?php echo base_url(); ?>Dashboard/update_itinerary" method="post" class="forms-sample">
                      <input type="hidden" name="itinerary_id" id="itinerary_id" value="<?php echo $itinerary_details[0]['id']; ?>">
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Day Number</label>
                        <div class="col-sm-9">
                          <select class="form-control form-control-lg" name="itinerary_day_num" id="itinerary_day_num" required>
                            <option value="<?php echo $itinerary_details[0]['itinerary_day_num'] ?>">Day <?php echo $itinerary_details[0]['itinerary_day_num'] ?></option>
                            <option value="1">Day 1</option>
                            <option value="2">Day 2</option>
                            <option value="3">Day 3</option>
                            <option value="4">Day 4</option>
                            <option value="5">Day 5</option>
                            <option value="6">Day 6</option>
                            <option value="7">Day 7</option>
                            <option value="8">Day 8</option>
                            <option value="9">Day 9</option>
                            <option value="10">Day 10</option>
                            <option value="11">Day 11</option>
                            <option value="12">Day 12</option>
                            <option value="13">Day 13</option>
                            <option value="14">Day 14</option>
                            <option value="15">Day 15</option>
                            <option value="16">Day 16</option>
                            <option value="17">Day 17</option>
                            <option value="18">Day 18</option>
                            <option value="19">Day 19</option>
                            <option value="20">Day 20</option>
                            <option value="21">Day 21</option>
                            <option value="22">Day 22</option>
                            <option value="23">Day 23</option>
                            <option value="24">Day 24</option>
                            <option value="25">Day 25</option>
                          </select>
                          <!-- <input type="number" class="form-control form-control-sm" name="itinerary_day_num" id="itinerary_day_num" placeholder="Day Number"> -->
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Title</label>
                        <div class="col-sm-9">
                          <input type="text" value="<?php echo $itinerary_details[0]['itinerary_day_title'] ?>" class="form-control form-control-sm" name="itinerary_day_title" id="itinerary_day_title" placeholder="Itinerary Title" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Description</label>
                        <div class="col-sm-9">
                          <textarea class="form-control" name="itinerary_day_description" id="itinerary_day_description" rows="6" required><?php echo $itinerary_details[0]['itinerary_day_description'] ?></textarea>
                        </div>
                      </div>
                      <div class="form-actions mt-4">
                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- Update Itinerary End -->
              <!-- Add New Itinerary Start -->
            <?php  } else { ?>
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title mb-3">Insert New Itinerary Information</h4>
                    <form action="<?php echo base_url(); ?>Dashboard/save_itinerary" method="post" class="forms-sample">
                      <input type="hidden" name="tour_id" id="tour_id" value="<?php echo $tour_details[0]['tour_id']; ?>">
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Day Number</label>
                        <div class="col-sm-9">
                          <select class="form-control form-control-lg" name="itinerary_day_num" id="itinerary_day_num" required>
                            <option value="1">Day 1</option>
                            <option value="2">Day 2</option>
                            <option value="3">Day 3</option>
                            <option value="4">Day 4</option>
                            <option value="5">Day 5</option>
                            <option value="6">Day 6</option>
                            <option value="7">Day 7</option>
                            <option value="8">Day 8</option>
                            <option value="9">Day 9</option>
                            <option value="10">Day 10</option>
                            <option value="11">Day 11</option>
                            <option value="12">Day 12</option>
                            <option value="13">Day 13</option>
                            <option value="14">Day 14</option>
                            <option value="15">Day 15</option>
                            <option value="16">Day 16</option>
                            <option value="17">Day 17</option>
                            <option value="18">Day 18</option>
                            <option value="19">Day 19</option>
                            <option value="20">Day 20</option>
                            <option value="21">Day 21</option>
                            <option value="22">Day 22</option>
                            <option value="23">Day 23</option>
                            <option value="24">Day 24</option>
                            <option value="25">Day 25</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Title</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control form-control-sm" name="itinerary_day_title" id="itinerary_day_title" placeholder="Itinerary Title" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Description</label>
                        <div class="col-sm-9">
                          <textarea class="form-control" name="itinerary_day_description" id="itinerary_day_description" rows="6" required></textarea>
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
            <?php  } ?>
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
<?php if($itinerary_details){ ?>
  <script type="text/javascript">
    $(document).ready(function () {
      $('html, body').animate({
          scrollTop: $('#update_itinerary').offset().top
      }, 'slow');
    });
  </script>
<?php } ?>
<?php if($this->session->flashdata('save_itinerary_success')){ ?>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#success_msg').html('<strong>Save Success!</strong> Itinerary saved successfully.');
      $('#success_msg').show().delay('7000').fadeOut();
    });
  </script>
<?php } ?>
<?php if($this->session->flashdata('update_itinerary_success')){ ?>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#success_msg').html('<strong>Update Success!</strong> Itinerary updated successfully.');
      $('#success_msg').show().delay('7000').fadeOut();
    });
  </script>
<?php } ?>
<?php if($this->session->flashdata('delete_itinerary_success')){ ?>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#danger_msg').html('<strong>Delete Success!</strong> Itinerary deleted successfully.');
      $('#danger_msg').show().delay('7000').fadeOut();
    });
  </script>
<?php } ?>
  <!-- End custom js for this page-->
</body>

</html>
