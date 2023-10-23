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
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Our Agents <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-3 bread">Our Agents</h1>
          </div>
        </div>
      </div>
    </section>
    <?php 



    
         include "admin/includes/connection.php";
          $team= $sql->query("SELECT * FROM team")or die ($sql->error);
          $team2= $sql->query("SELECT * FROM team")or die ($sql->error);
          

          $rowcount=mysqli_num_rows($team);
          $rowcount;

                              // echo"<pre>";
                              // print_r($about);
                              // echo"</pre>";
      ?>
    <section class="ftco-section">
			<div class="container">
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