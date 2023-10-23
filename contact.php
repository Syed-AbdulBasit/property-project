<!DOCTYPE html>
<html lang="en">
  <?php

include "includes/head.php";
include "admin/includes/process.php";

?>
  <body>
    
	 <?php

include "includes/nav.php";

?>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact us <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-3 bread">Contact us</h1>
          </div>
        </div>
      </div>
    </section>
    
	  <section class="ftco-section contact-section">
	              <div class="row justify-content-center">
        	<div class="col-md-12">
        		<div id="map" class="bg-white"></div>
        	</div>
        </div>
        
        
        
        
        	<h2 class="text-center mt-5" >If you got any questions please do not hesitate to send us a message</h2>
                <div class="row d-flex mb-5 contact-info justify-content-center">
        	<div class="col-md-12">
        		<div class="row mb-5">
		          <div class="col-md-4 text-center py-4">
		          	<div class="icon">
		          		<span class="fa fa-map"></span>
		          	</div>
		            <p><span>Address:</span> DHA Multan</p>
		          </div>
		          <div class="col-md-4 text-center border-height py-4">
		          	<div class="icon">
		          		<span class="fa fa-phone"></span>
		          	</div>
		            <p><span>Phone:</span> <a href="tel://03000093630
">0300 009 3630
</a></p>
		          </div>
		          <div class="col-md-4 text-center py-4">
		          	<div class="icon">
		          		<span class="fa fa-paper-plane"></span>
		          	</div>
		            <p><span>Email:</span> <a href="mailto:	multanestatelinkers@gmail.com">	multanestatelinkers@gmail.com</a></p>
		          </div>
		        </div>
          </div>
        </div>
      <div class="container">
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-8 mb-md-5">
            <form action="admin/includes/process.php" method="POST" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" name="First_name" pattern="[A-Za-z\s]+" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="email" name="Email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}"  class="form-control" placeholder="Your Email">
              </div>
               <div class="form-group">
                <input type="text" name="Phone" pattern="[0-9]{4}-[0-9]{3}[0-9]{4}" class="form-control" placeholder="Your Phone">
              </div>
              <div class="form-group">
                <input type="text" name="Subject" pattern="[A-Za-z\s]+" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="Message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="save_contact" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
            <?php 

                if (isset($_SESSION['message3'])): 

                ?>
                <div id="Head"  class="alert alert-<?= $_SESSION['msg_type3']; ?>">
                    <?php

                    echo $_SESSION['message3'];
                    unset($_SESSION['message3']);

                    ?>


                </div>

<?php endif ?>
          
          </div>
        </div>


      </div>
    </section>	

    <?php

include "includes/footer.php";

?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>