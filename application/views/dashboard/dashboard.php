<!DOCTYPE html>
<html lang="en">
<?php $page_title = 'Bandhan | Dashboard'; ?>
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
            <div class="col-sm-12 mb-4 mb-xl-0">
              <h4 class="font-weight-bold text-dark">Dashboard</h4>
              <p class="font-weight-normal mb-2 text-muted"><?php echo date('d F Y'); ?></p>

            </div>
            <div class="col-sm-12 text-center mt-5">
                <img src="<?php echo base_url(); ?>assets/images/logo_dash.png" alt="" >
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
