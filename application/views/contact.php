<?php
$page='contact';
$page_title = 'Bandhan Tourism | Welcome';
include("include/header.php");
?>


<div class="container-fluid   pb-1">
	<div class="container">
		<div class="row pt-3">
	  	<div class="col-md-12 text-center contact1"><h2 class="">Email us with any question or inquiries.</h2>
				</div>
	  </div>
	</div>
</div>
</div>
<br>
<div class="container bg-white " >
  <div class="row padding-top-high ">
    <div class="col-lg-6 padding-left ">
 <form action="<?php echo base_url('Website/send_feedback');?>" method="post">
    <div class="row padding-left">
      <div class="col-sm-6">
        <div class="form-group">
                <input type="text" class="form-control input-contact " placeholder=" Your Name" required=""  name="name">
        </div>
      </div>
      <div class="col-sm-6"><div class="form-group">
                <input type="text" class="form-control input-contact " placeholder="Mobile" required="" name="mobile" maxlength="10" minlength="10" >
        </div>
      </div>
    </div>
    <div class="row padding-left">
      <div class="col-sm-12">
        <div class="form-group">
                <input type="email" class="form-control input-contact " placeholder="Email" required=""  name="email">
        </div>
      </div>
    </div>
     <div class="row padding-left">
      <div class="col-sm-12">
        <div class="form-group">
          <textarea   id="text" class="textarea padding-left" placeholder="Message" required="" name="message" rows="10"></textarea>
        </div>
      </div>
    </div>
    <br>
    <div class="row padding-left">
      <div class="col-sm-12 text-center">
				<p class="para">We would be happy to answer your questions and set up a meeting with you. Bandhan Tourism can help set you apart from the flock</p>
					<button class="btn btn-outline-primary" type="submit" name="submit" style="width: 27%;">
					Submit
					</button>
      </div>
    </div>
</form>
</div>
		<div class="col-lg-6">
      <div class="map">
      <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=bhandhan%20turisam%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="1" scrolling="no" marginheight="0" marginwidth="0"></iframe></div></div>
      </div>
      <br>
      <br>
      </div>
      </div>
</div>
<br>
<br>
<hr class="hr">
<?php
include("include/footer.php");
?>
