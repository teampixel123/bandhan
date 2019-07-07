<!DOCTYPE html>
<html lang="en">
<?php $page_title = 'Bandhan | Add Inclusion'; ?>
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
              <h4 class="font-weight-bold text-dark mb-4">Add Inclusion</h4>
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
                  <h4 class="card-title mb-3">Inclusion</h4>
                  <form class="forms-sample">
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Tour Title: </label>
                      <label for="exampleInputUsername2" class="col-sm-9 col-form-label text-left"><b><?php echo $tour_details[0]['tour_name']; ?></b></label>
                    </div>
                  </form>
                  <?php if($inclusion_list){
                  ?>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Sort Number</th>
                            <th>Description</th>
                            <th style="width:15%">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $i = 1;
                          foreach ($inclusion_list as $inclusion_list) {
                            $j = $i++;
                          ?>
                          <tr>
                            <td><?php echo $j; ?></td>
                            <td><?php echo $inclusion_list->inclusion_num; ?></td>
                            <td><?php echo $inclusion_list->inclusion_description; ?></td>
                            <td>
                              <div class="row">
                                <div class="col-md-6">
                                  <form class="" action="<?php echo base_url() ?>Dashboard/add_inclusion" method="post">
                                    <input type="hidden" class="inclusion_id" name="inclusion_id" value="<?php echo $inclusion_list->id; ?>">
                                    <button type="submit" class="btn btn-sm btn-light btn-rounded btn-fw"><i id="edit_<?php echo $j; ?>" class="fa fa-edit" style="color:#3794fc;"></i></button>
                                  </form>
                                </div>
                                <div class="col-md-6">
                                  <button type="button" class="btn btn-sm btn-light btn-rounded btn-fw" data-toggle="modal" data-target="#myModal_<?php echo $inclusion_list->id; ?>"><i class="fa fa-trash" style="color:red;"></i></button>
                                </div>

                                <div id="myModal_<?php echo $inclusion_list->id; ?>" class="modal fade" role="dialog">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title">Delete Inclusion</h4>
                                      </div>
                                      <div class="modal-body">
                                        <p>Do you want to delete this Inclusion</p>
                                        <p>#<?php echo $inclusion_list->inclusion_num; ?></p>
                                      </div>
                                      <div class="modal-footer">
                                        <form class="" action="<?php echo base_url() ?>Dashboard/delete_inclusion" method="post">
                                          <input type="hidden" class="inclusion_id" name="inclusion_id" value="<?php echo $inclusion_list->id; ?>">
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


          <?php if($inclusion_details){ ?>
            <div class="col-md-12 grid-margin stretch-card" id="update_inclusion">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-3">Update Inclusion Information</h4>
                  <form action="<?php echo base_url(); ?>Dashboard/update_inclusion" method="post" class="forms-sample">
                    <input type="hidden" name="inclusion_id" value="<?php echo $inclusion_details[0]['id']; ?>">
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Sort Number</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control form-control-sm" name="inclusion_num" id="inclusion_num" value="<?php echo $inclusion_details[0]['inclusion_num'] ?>" placeholder="Sort Number" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Description</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" name="inclusion_description" id="inclusion_description" rows="4" required><?php echo $inclusion_details[0]['inclusion_description'] ?></textarea>
                      </div>
                    </div>
                    <div class="form-actions mt-4">
                      <button type="submit" class="btn btn-info mr-2">Update</button>
                      <button class="btn btn-light">Cancel</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          <?php  } else{ ?>
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-3">Insert New Inclusion Information</h4>
                  <form action="<?php echo base_url(); ?>Dashboard/save_inclusion" method="post" class="forms-sample">
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Sort Number</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control form-control-sm" name="inclusion_num" id="inclusion_num" placeholder="Sort Number" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label text-right">Description</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" name="inclusion_description" id="inclusion_description" rows="4" required></textarea>
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
          <?php } ?>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include('footer.php'); ?>
        <!-- update_inclusion_success -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

<?php include('script.php'); ?>
<?php if($inclusion_details){ ?>
  <script type="text/javascript">
    $(document).ready(function () {
      $('html, body').animate({
          scrollTop: $('#update_inclusion').offset().top
      }, 'slow');
    });
  </script>
<?php } ?>
<?php if($this->session->flashdata('save_inclusion_success')){ ?>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#success_msg').html('<strong>Save Success!</strong> Inclusion saved successfully.');
      $('#success_msg').show().delay('7000').fadeOut();
    });
  </script>
<?php } ?>
<?php if($this->session->flashdata('update_inclusion_success')){ ?>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#success_msg').html('<strong>Update Success!</strong> Inclusion updated successfully.');
      $('#success_msg').show().delay('7000').fadeOut();
    });
  </script>
<?php } ?>
<?php if($this->session->flashdata('delete_inclusion_success')){ ?>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#danger_msg').html('<strong>Delete Success!</strong> Inclusion deleted successfully.');
      $('#danger_msg').show().delay('7000').fadeOut();
    });
  </script>
<?php } ?>
  <!-- End custom js for this page-->
</body>

</html>
