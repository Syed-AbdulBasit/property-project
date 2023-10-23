<!DOCTYPE html>
<html lang="en">
  <?php

include "includes/head.php";

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
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Projects <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-3 bread">Projects</h1>
          </div>
        </div>
      </div>
    </section>
    
	  <section class="ftco-section ftco-portfolio">
    	<div class="container">
    		<div class="row no-gutters">






<?php 



    
         include "admin/includes/connection.php";
          $result= $sql->query("SELECT * FROM project")or die ($sql->error);

          $rowcount=mysqli_num_rows($result);
          $rowcount;

                              // echo"<pre>";
                              // print_r($result);
                              // echo"</pre>";
?>

<?php while ($row = $result->fetch_assoc()) { ?>


	  			<div class="col-md-12 portfolio-wrap">
	  				<div class="row no-gutters align-items-center">
	  					<div class="col-md-5 img js-fullheight" style="background-image: url(admin/uploads/files/<?php echo $row['P_Image'] ?>);">
	  						
	  					</div>
	  					<div class="col-md-7">
	  						<div class="text pt-5 pl-0 pl-lg-5 pl-md-4 ftco-animate">
	  							<div class="px-4 px-lg-4">
	  								<div class="desc">
		  								<div class="top">
			  								<span class="subheading">Date {<?= $row['P_Date']; ?>}</span>
				  							<h2 class="mb-4"><a href="#"><?= $row['P_Title']; ?></a></h2>
			  							</div>
			  							<div class="absolute">
				  							<p><?= $row['P_Description']; ?></p>
				  							<p><a href="project_details.php?View_pro=<?php echo $row['ID'];?>" class="custom-btn">View Project Details</a></p>
			  							</div>
		  							</div>
	  							</div>
	  						</div>
	  					</div>
	  				</div>
	  			</div>

<?php } ?>



















<!-- 	  			

	  			<div class="col-md-12 portfolio-wrap">
	  				<div class="row no-gutters align-items-center">
	  					<div class="col-md-5 order-md-last img js-fullheight" style="background-image: url(images/work-2.jpg);">
	  						
	  					</div>
	  					<div class="col-md-7">
	  						<div class="text pt-5 pr-md-5 ftco-animate">
	  							<div class="px-4 px-lg-4">
	  								<div class="desc text-md-right">
		  								<div class="top">
			  								<span class="subheading">Furniture {12/07/2020}</span>
				  							<h2 class="mb-4"><a href="work.html">Twin Office</a></h2>
			  							</div>
			  							<div class="absolute">
				  							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
				  							<p><a href="#" class="custom-btn">View Portfolio</a></p>
			  							</div>
		  							</div>
	  							</div>
	  						</div>
	  					</div>
	  				</div>
	  			</div> -->

	<!--   			<div class="col-md-12 portfolio-wrap">
	  				<div class="row no-gutters align-items-center">
	  					<div class="col-md-5 img js-fullheight" style="background-image: url(images/work-3.jpg);">
	  						
	  					</div>
	  					<div class="col-md-7">
	  						<div class="text pt-5 pl-md-5 pl-md-4 ftco-animate">
	  							<div class="px-4 px-lg-4">
	  								<div class="desc">
		  								<div class="top">
			  								<span class="subheading">Building {12/07/2020}</span>
				  							<h2 class="mb-4"><a href="work.html">Cultural Complex Centre</a></h2>
			  							</div>
			  							<div class="absolute">
				  							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
				  							<p><a href="#" class="custom-btn">View Portfolio</a></p>
			  							</div>
		  							</div>
	  							</div>
	  						</div>
	  					</div>
	  				</div>
	  			</div>
 -->
<!-- 	  			<div class="col-md-12 portfolio-wrap">
	  				<div class="row no-gutters align-items-center">
	  					<div class="col-md-5 order-md-last img js-fullheight" style="background-image: url(images/work-4.jpg);">
	  						
	  					</div>
	  					<div class="col-md-7">
	  						<div class="text pt-5 pr-md-5 ftco-animate">
	  							<div class="px-4 px-lg-4">
	  								<div class="desc text-md-right">
		  								<div class="top">
			  								<span class="subheading">Furniture {12/07/2020}</span>
				  							<h2 class="mb-4"><a href="work.html">Twin Office</a></h2>
			  							</div>
			  							<div class="absolute">
				  							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
				  							<p><a href="#" class="custom-btn">View Portfolio</a></p>
			  							</div>
		  							</div>
	  							</div>
	  						</div>
	  					</div>
	  				</div>
	  			</div> -->

<!-- 	  			<div class="col-md-12 portfolio-wrap">
	  				<div class="row no-gutters align-items-center">
	  					<div class="col-md-5 img js-fullheight" style="background-image: url(images/work-5.jpg);">
	  						
	  					</div>
	  					<div class="col-md-7">
	  						<div class="text pt-5 pl-md-5 pl-md-4 ftco-animate">
	  							<div class="px-4 px-lg-4">
	  								<div class="desc">
		  								<div class="top">
			  								<span class="subheading">Building {12/07/2020}</span>
				  							<h2 class="mb-4"><a href="work.html">Cultural Complex Centre</a></h2>
			  							</div>
			  							<div class="absolute">
				  							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
				  							<p><a href="#" class="custom-btn">View Portfolio</a></p>
			  							</div>
		  							</div>
	  							</div>
	  						</div>
	  					</div>
	  				</div>
	  			</div> -->

<!-- 	  			<div class="col-md-12 portfolio-wrap">
	  				<div class="row no-gutters align-items-center">
	  					<div class="col-md-5 order-md-last img js-fullheight" style="background-image: url(images/work-6.jpg);">
	  						
	  					</div>
	  					<div class="col-md-7">
	  						<div class="text pt-5 pr-md-5 ftco-animate">
	  							<div class="px-4 px-lg-4">
	  								<div class="desc text-md-right">
		  								<div class="top">
			  								<span class="subheading">Furniture {12/07/2020}</span>
				  							<h2 class="mb-4"><a href="work.html">Twin Office</a></h2>
			  							</div>
			  							<div class="absolute">
				  							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
				  							<p><a href="#" class="custom-btn">View Portfolio</a></p>
			  							</div>
		  							</div>
	  							</div>
	  						</div>
	  					</div>
	  				</div>
	  			</div> -->

<!-- 	  			<div class="col-md-12 portfolio-wrap">
	  				<div class="row no-gutters align-items-center">
	  					<div class="col-md-5 img js-fullheight" style="background-image: url(images/work-7.jpg);">
	  						
	  					</div>
	  					<div class="col-md-7">
	  						<div class="text pt-5 pl-md-5 pl-md-4 ftco-animate">
	  							<div class="px-4 px-lg-4">
	  								<div class="desc">
		  								<div class="top">
			  								<span class="subheading">Building {12/07/2020}</span>
				  							<h2 class="mb-4"><a href="work.html">Cultural Complex Centre</a></h2>
			  							</div>
			  							<div class="absolute">
				  							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
				  							<p><a href="#" class="custom-btn">View Portfolio</a></p>
			  							</div>
		  							</div>
	  							</div>
	  						</div>
	  					</div>
	  				</div>
	  			</div> -->

<!-- 	  			<div class="col-md-12 portfolio-wrap">
	  				<div class="row no-gutters align-items-center">
	  					<div class="col-md-5 order-md-last img js-fullheight" style="background-image: url(images/work-8.jpg);">
	  						
	  					</div>
	  					<div class="col-md-7">
	  						<div class="text pt-5 pr-md-5 ftco-animate">
	  							<div class="px-4 px-lg-4">
	  								<div class="desc text-md-right">
		  								<div class="top">
			  								<span class="subheading">Furniture {12/07/2020}</span>
				  							<h2 class="mb-4"><a href="work.html">Furniture</a></h2>
			  							</div>
			  							<div class="absolute">
				  							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
				  							<p><a href="#" class="custom-btn">View Portfolio</a></p>
			  							</div>
		  							</div>
	  							</div>
	  						</div>
	  					</div>
	  				</div>
	  			</div> -->

<!-- 	  			<div class="col-md-12 portfolio-wrap">
	  				<div class="row no-gutters align-items-center">
	  					<div class="col-md-5 img js-fullheight" style="background-image: url(images/work-9.jpg);">
	  						
	  					</div>
	  					<div class="col-md-7">
	  						<div class="text pt-5 pl-md-5 pl-md-4 ftco-animate">
	  							<div class="px-4 px-lg-4">
	  								<div class="desc">
		  								<div class="top">
			  								<span class="subheading">Building {12/07/2020}</span>
				  							<h2 class="mb-4"><a href="work.html">Decoration</a></h2>
			  							</div>
			  							<div class="absolute">
				  							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
				  							<p><a href="#" class="custom-btn">View Portfolio</a></p>
			  							</div>
		  							</div>
	  							</div>
	  						</div>
	  					</div>
	  				</div>
	  			</div> -->
	  		</div>
	  		<!-- <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div> -->
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