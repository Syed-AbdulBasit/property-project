<!DOCTYPE html>
<html lang="en">
<?php

include "includes/head.php";
include "admin/includes/process.php";

$inventory= $sql->query("SELECT * FROM inventory LIMIT 3")or die ($sql->error);
$project= $sql->query("SELECT * FROM project LIMIT 2")or die ($sql->error);
$team2= $sql->query("SELECT * FROM team LIMIT 4")or die ($sql->error);
$notification= $sql->query("SELECT * FROM notification")or die ($sql->error);


?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
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
















:root {
  --surface-color: #fff;
  --curve: 40;
}

* {
  box-sizing: border-box;
}



.cards {

  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
  margin: 4rem 5vw;
  padding: 0;
  list-style-type: none;
}

.card {
	box-shadow: 5px 10px 18px #888888;
  position: relative;
  display: block;
  height: 100%;  
  border-radius: calc(var(--curve) * 1px);
  overflow: hidden;
  text-decoration: none;
}

.card__image {      
  width: 100%;
  height: 350px;
}

.card__overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;      
  border-radius: calc(var(--curve) * 1px);    
  background-color: var(--surface-color);      
  transform: translateY(100%);
  transition: .2s ease-in-out;
}

.card:hover .card__overlay {
  transform: translateY(0);
}

.card__header {
  position: relative;
  display: flex;
  align-items: center;
  gap: 2em;
  padding: 2em;
  border-radius: calc(var(--curve) * 1px) 0 0 0;    
  background-color: var(--surface-color);
  transform: translateY(-100%);
  transition: .2s ease-in-out;
}

.card__arc {
  width: 80px;
  height: 80px;
  position: absolute;
  bottom: 100%;
  right: 0;      
  z-index: 1;
}

.card__arc path {
  fill: var(--surface-color);
  d: path("M 40 80 c 22 0 40 -22 40 -40 v 40 Z");
}       

.card:hover .card__header {
  transform: translateY(0);
}

.card__thumb {
  flex-shrink: 0;
  width: 50px;
  height: 50px;      
  border-radius: 50%;      
}

.card__title {
  font-size: 1.25em;
  margin: 0 0 .3em;
  color: #6A515E;
}

.card__tagline {
  display: block;
  margin: 1em 0;
  font-family: "MockFlowFont";  
  font-size: .8em; 
  color: #D7BDCA;  
}

.card__status {
  font-size: .8em;
  color: #D7BDCA;
}

.card__description {
  padding: 0 2em 2em;
  margin: 0;
 
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
  overflow: hidden;
}  









</style>
<script>
$(document).ready(function(){
    /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $("#cartoonVideo").attr('src');
    
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#myModal").on('hide.bs.modal', function(){
        $("#cartoonVideo").attr('src', '');
    });
    
    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#myModal").on('show.bs.modal', function(){
        $("#cartoonVideo").attr('src', url);
    });
});
</script>
<script>
    $(document).ready(function(){
        $("#myModal2").modal('show');
    });
</script>
  <body>
    
<?php

include "includes/nav.php";

?>
    <!-- END nav -->
    
    <section class="hero-wrap" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.3">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
          <div class="col-md-10 col-lg-7 ftco-animate d-flex align-items-end">
          	<div class="text">
	            <h1 class="mb-4">Multan <span>Estate linkers</span> & Builders</h1>
	            <p style="font-size: 18px;">Our real estate consultancy is here to provide you with expert assistance.</p>
	            <div class="d-flex meta">
		            <div class=""><p class="mb-0"><a href="project.php" class="btn btn-primary py-3 px-2 px-md-4">Explore Projects</a></p></div>
		           <a href="#myModal" class="d-flex align-items-center button-link" data-toggle="modal" data-target="#myModal">
		            	<div class="button-video d-flex align-items-center justify-content-center">
			            	<span class="fa fa-play"></span>
			            </div>
			            <span>Watch our video</span>
		            </a>
		          </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <?php while ($row4 = $notification->fetch_assoc()) { ?>
    <div class="modal fade bd-example-modal-lg" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
<div align="center">
                <!-- <p>Subscribe to our mailing list to get the latest updates straight in your inbox.</p> -->
                <img src="admin/uploads/files/<?php echo $row4['Image'] ?>" width="80%">
              </div>
    </div>
     <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>

  </div>
</div>
    
<?php } ?>
    
<div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div id="video" class="embed-responsive embed-responsive-16by9">

   <iframe id="cartoonVideo"  width="560" height="315" src="https://www.youtube.com/embed/C9ANJfUDoOo" title="DHA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div>
    </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
  </div>
</div>














    <section class="ftco-section ftco-no-pb ftco-no-pt bg-primary">
      <div class="container">
        <div class="row d-flex no-gutters">
          <div class="col-md-4 d-flex align-items-stretch ftco-animate">
            <div class="media block-6 services services-bg d-block text-center px-4 py-5">
            	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-system"></span></div>
              <div class="media-body py-md-4">
                <h3>Design Process</h3>
                
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-items-stretch ftco-animate">
            <div class="media block-6 services services-bg services-darken d-block text-center px-4 py-5">
            	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-supervised"></span></div>
              <div class="media-body py-md-4">
                <h3>Supervision of Project</h3>
                
              </div>
            </div>      
          </div>
          <!-- <div class="col-md-3 d-flex align-items-stretch ftco-animate">
            <div class="media block-6 services services-bg services-lighten d-block text-center px-4 py-5">
            	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-accounting"></span></div>
              <div class="media-body py-md-4">
                <h3>Budget Planning For You</h3>
                
              </div>
            </div>      
          </div> -->
          <div class="col-md-4 d-flex align-items-stretch ftco-animate">
            <div class="media block-6 services services-bg d-block text-center px-4 py-5">
            	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-blueprint"></span></div>
              <div class="media-body py-md-4">
                <h3>Build a Home For You</h3>
                
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    
    <section class="ftco-section ftco-no-pb ftco-no-pt" id="about">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 order-md-last d-md-flex align-items-stretch">
						<div class="img w-100 img-2 mr-md-2" style="background-image: url(images/about.jpg); margin-top: 10px;"></div>
						<div class="img w-100 img-2 img-overlay ml-md-2 p-4" style="background-image: url(images/about-2.jpg); margin-top: 10px;">
							<div class="request-quote py-5">
	    					<div class="py-2">
	    						<span class="subheading">Be Part of our Business</span>
	    						<h3>Request A Quote</h3>
	    					</div>
	    					<form action="admin/includes/process.php" method="POST" class="request-form ftco-animate">
			    				<div class="form-group">
			    					<input type="text" name="First_name" class="form-control" placeholder="First Name">
			    				</div>
			    				<div class="form-group">
			    					<input type="text" name="Last_name" class="form-control" placeholder="Last Name">
			    				</div>
			    				<div class="form-group">
			    					<input type="text" name="Service" class="form-control" placeholder="Service">
			    				</div>
		    					<!-- <div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon-arr"><span class="ion-ios-arrow-down"></span></div>
	                      <select name="" style="color:#18191B;" id="" class="form-control">
	                      	<option  value="">Select Your Services</option>
	                        <option value="">Construction</option>
	                        <option value="">Renovation</option>
	                        <option value="">Interior Design</option>
	                        <option value="">Exterior Design</option>
	                        <option value="">Painting</option>
	                      </select>
	                    </div>
			              </div>
			    				</div> -->
		    					<div class="form-group">
			    					<input type="text" name="Phone" class="form-control" placeholder="Phone">
			    				</div>
		    					<div class="form-group">
			              <textarea name="Message" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
			            </div>

			            <div class="form-group">
			              <input type="submit" name="request_quote" value="Request A Quote" class="btn btn-primary py-3 px-4">
			            </div>
			    			</form>
	    				</div>
	    				<?php 

                if (isset($_SESSION['message2'])): 

                ?>
                <div class="alert alert-<?= $_SESSION['msg_type2']; ?>">
                    <?php

                    echo $_SESSION['message2'];
                    unset($_SESSION['message2']);

                    ?>


                </div>

<?php endif ?>
						</div>
					</div>
					<div class="col-lg-5 wrap-about py-md-5 ftco-animate">
	          <div class="heading-section pr-md-5">
	            <h2 class="mb-4">MELB</h2>

	            <p style="text-align: justify;" ">Real estate is the land along with any permanent improvements attached to the land, whether natural or man-made?including water, trees, minerals, buildings, homes, fences, and bridges.</p><p style="text-align: justify;"> Real estate is a form of real property. It differs from personal property, which are things not permanently attached.</p>
	            
	          </div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-counter img" id="section-counter">
    	<div class="container">
    		<div class="row pt-md-5">
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-md-5 mb-md-4">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="10">0</strong>
                <span>Years of <br>Experienced</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-md-5 mb-md-4">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="25">0</strong>
                <span>Project <br>Done</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-md-5 mb-md-4">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="50">0</strong>
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

<!--    <section class="ftco-section ftco-portfolio">-->
<!--    	<div class="row justify-content-center no-gutters">-->
<!--        <div class="col-md-12 heading-section text-center ftco-animate mb-5">-->
<!--        	<span class="subheading">Projects</span>-->
<!--          <h2 class="mb-2">Our Unique Latest Projects</h2>-->
<!--        </div>-->
<!--      </div>-->

<!--    	<div class="container">-->
<!--    		<div class="row no-gutters">-->






<!--<?php while ($row = $project->fetch_assoc()) { ?>-->


<!--	  			<div class="col-md-12 portfolio-wrap">-->
<!--	  				<div class="row no-gutters align-items-center">-->
<!--	  					<div class="col-md-5 img js-fullheight" style="background-image: url(admin/uploads/files/<?php echo $row['P_Image'] ?>);">-->
	  						
<!--	  					</div>-->
<!--	  					<div class="col-md-7">-->
<!--	  						<div class="text pt-5 pl-0 pl-lg-5 pl-md-4 ftco-animate">-->
<!--	  							<div class="px-4 px-lg-4">-->
<!--	  								<div class="desc">-->
<!--		  								<div class="top">-->
<!--			  								<span class="subheading">Date {<?= $row['P_Date']; ?>}</span>-->
<!--				  							<h2 class="mb-4"><a href="#"><?= $row['P_Title']; ?></a></h2>-->
<!--			  							</div>-->
<!--			  							<div class="absolute">-->
<!--				  							<p><?= $row['P_Description']; ?></p>-->
<!--				  							<p><a href="project_details.php?View_pro=<?php echo $row['ID'];?>" class="custom-btn">View Portfolio</a></p>-->
<!--			  							</div>-->
<!--		  							</div>-->
<!--	  							</div>-->
<!--	  						</div>-->
<!--	  					</div>-->
<!--	  				</div>-->
<!--	  			</div>-->

<!--<?php } ?>-->
<!--	  		</div>-->
<!--    	</div>-->


<!--    </section>-->

<section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">News</span>
            <h2>Latest News</h2>
          </div>
        </div>

		<div class="col-md-12" style="margin-top: 10px;">
			<div id="video" class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/q4jx2Y3dwEo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
		</div>
	      </div>
      </div>
    </section>









    <section class="ftco-section">

        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Inventory</span>
            <h2>Our Inventory</h2>
          </div>
        </div>


           			<ul class="cards">

	<?php while ($row2 = $inventory->fetch_assoc()) { ?>
  <li>
    <a href="inventory_details.php?View_inv=<?php echo $row2['ID'];?>" class="card">
      <img src="admin/uploads/files/<?php echo $row2['Inv_Image'] ?>" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <div class="card__header-text">
            <h2 class="card__title"><?= $row2['Inv_Name']; ?></h2>
          </div>
        </div>

      <span class="card__description"><strong>Location:</strong> <?= $row2['Inv_Loaction']; ?> </span>

          <div class="row">
    <div class="col-6">
      <span class="card__description"><strong>Colony:</strong> <?= $row2['Inv_Colony']; ?></span>
    </div>
    <div class="col-6">
      <span class="card__description"><strong>Area:</strong><br> <?= $row2['Inv_Area']; ?></span>
    </div>

  </div>
        <p class="card__description"><strong>See Details</strong></p>

      </div>
    </a>
  </li>  
  <?php } ?>

</ul>

        	      <div align="center">
	      	<a href="inventory.php" class="btn btn-outline-success btn-sm">Load More</a>
	      </div>

    </section>

<!--     <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <div class="text">
                <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_1.jpg');">
	              </a>
	              <div class="meta mb-3">
                  <div><a href="#">June 01, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
	              <h3 class="heading"><a href="#">Make Peace With Your Broken Pieces</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <div class="text">
                <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_2.jpg');">
	              </a>
	              <div class="meta mb-3">
                  <div><a href="#">June 01, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
	              <h3 class="heading"><a href="#">Make Peace With Your Broken Pieces</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <div class="text">
                <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_3.jpg');">
	              </a>
	              <div class="meta mb-3">
                  <div><a href="#">June 01, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
	              <h3 class="heading"><a href="#">Make Peace With Your Broken Pieces</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <div class="text">
                <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_4.jpg');">
	              </a>
	              <div class="meta mb-3">
                  <div><a href="#">June 01, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
	              <h3 class="heading"><a href="#">Make Peace With Your Broken Pieces</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->		
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