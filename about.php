<!DOCTYPE html>
<html lang="en">
  <?php

include "includes/head.php";

?>
<style type="text/css">
	
.our-team {
  padding: 30px 0 40px;
  margin-bottom: 30px;
  background-color: #f7f5ec;
  text-align: center;
  overflow: hidden;
  position: relative;
}

.our-team .picture {
  display: inline-block;
  height: 130px;
  width: 130px;
  margin-bottom: 50px;
  z-index: 1;
  position: relative;
}

.our-team .picture::before {
  content: "";
  width: 100%;
  height: 0;
  border-radius: 50%;
  background-color: #96BB7C;
  position: absolute;
  bottom: 135%;
  right: 0;
  left: 0;
  opacity: 0.9;
  transform: scale(3);
  transition: all 0.3s linear 0s;
}

.our-team:hover .picture::before {
  height: 100%;
}

.our-team .picture::after {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background-color: #96BB7C;
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
}

.our-team .picture img {
  width: 100%;
  height: auto;
  border-radius: 50%;
  transform: scale(1);
  transition: all 0.9s ease 0s;
}

.our-team:hover .picture img {
  box-shadow: 0 0 0 14px #f7f5ec;
  transform: scale(0.7);
}

.our-team .title {
  display: block;
  font-size: 15px;
  color: #4e5052;
  text-transform: capitalize;
}

.our-team .social {
  width: 100%;
  padding: 0;
  margin: 0;
  background-color: #96BB7C;
  position: absolute;
  bottom: -100px;
  left: 0;
  transition: all 0.5s ease 0s;
}

.our-team:hover .social {
  bottom: 0;
}

.our-team .social li {
  display: inline-block;
}

.our-team .social li a {
  display: block;
  padding: 10px;
  font-size: 17px;
  color: white;
  transition: all 0.3s ease 0s;
  text-decoration: none;
}

.our-team .social li a:hover {
  color: white;
  background-color: #96BB7C;
}

</style>
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
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-3 bread">About Us</h1>
          </div>
        </div>
      </div>
    </section>
    <?php 



    
         include "admin/includes/connection.php";
          $about= $sql->query("SELECT * FROM about")or die ($sql->error);
          $team2= $sql->query("SELECT * FROM team LIMIT 4")or die ($sql->error);

          $rowcount=mysqli_num_rows($about);
          $rowcount;

                              // echo"<pre>";
                              // print_r($about);
                              // echo"</pre>";
      ?>
      <?php while ($row = $about->fetch_assoc()) { ?>
    <section class="ftco-section ftco-no-pb ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 order-md-last d-md-flex align-items-stretch">
						<div class="img w-100 img-2 mr-md-2" style="background-image: url(admin/uploads/files/<?php echo $row['Image'] ?>); margin-top: 10px;"></div>
					</div>
					<div class="col-lg-5 wrap-about py-md-5 ftco-animate">
	          <div class="heading-section pr-md-5">
	            <h2 class="mb-4"><?= $row['Heading']; ?></h2>

	            <p style="text-align: justify;"><?= $row['Description']; ?></p>
	          </div>
					</div>
				</div>
			</div>
		</section>
		   <?php } ?>

		<section class="ftco-counter img" id="section-counter">
    	<div class="container">
    		<div class="row pt-md-5">
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-md-5 mb-md-4">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="20">0</strong>
                <span>Years of <br>Experienced</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-md-5 mb-md-4">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="30">0</strong>
                <span>Project <br>Done</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-md-5 mb-md-4">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="10">0</strong>
                <span>Licensed <br>Architect</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-md-5 mb-md-4">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="67">0</strong>
                <span>Happy <br>Customers</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>




    <section class="ftco-section">
<div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Message</span>
            <h2>Our CEO Message</h2>
          </div>
        </div>

				<div class="row">
				
					<div class="col-lg-5 wrap-about py-md-5 ftco-animate">
	          <div class="heading-section pr-md-5">
	            <p style="text-align: justify;">As a Young Entrepreneur, I am trying to change the concept & perception of Real Estate Industry in Pakistan. I do not buy & sell seeking profit only, but as a developer who invests, plan & prepares the infrastructure and comes up with fully integrated project with all the required facilities. Thus, I serve the society gain profit, help national economy and contribute to the comprehensive development of my beloved country Pakistan.</p>
	            <p style="text-align: justify;">

My main focus is high quality of my projects to produce residential & commercial buildings reflecting the international standards. My aim is to provide my customers with first class products to win their satisfaction in sha Allah. I also invite all young Male & Female to become a part of our team, have a great learning experience and become a success story.</p>
<br>
<p style="text-align: justify;"><strong>CEO NAME</strong></p>

	          </div>
					</div>
						<div class="col-lg-7 order-md-last d-md-flex align-items-stretch">
						<div class="img w-100 img-2 mr-md-2" style="background-image: url(images/person_4.jpg);"></div>

					</div>
				</div>
			</div>

        

    </section>






   
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Agents</span>
            <h2>Our Agents</h2>
          </div>
        </div>
        <div class="row"> 



 <?php while ($row2 = $team2->fetch_assoc()) { ?>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
          <img class="img-fluid" src="admin/uploads/files/<?php echo $row2['T_Image'] ?>">
        </div>
        <div class="team-content">
          <h3 class="name"><?= $row2['T_Name']; ?></h3>
          <h4 class="title"><?= $row2['T_Position']; ?></h4>
          <h4 class="title"><?= $row2['T_Phone']; ?></h4>
          <h4 class="title"><?= $row2['T_Email']; ?></h4>
           
        </div>
        <ul class="social">
<li><a href="https://api.whatsapp.com/send?phone=<?= $row2['T_Phone']; ?>" class="fa fa-whatsapp" aria-hidden="true"> Contact</a></li>
        </ul>
      </div>
    </div>
 <?php } ?>


	      </div>
	      <div align="center">
	      	<a href="team.php" class="btn btn-outline-success btn-sm">Load More</a>
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