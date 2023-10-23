<!DOCTYPE html>
<html lang="en">
  <?php

include "includes/head.php";
include "admin/includes/process.php";

$faq= $sql->query("SELECT * FROM faq")or die ($sql->error);

?>
<style type="text/css">
	

.accordion{
  margin: 40px 0;
}
.accordion .item {
    border: none;
    margin-bottom: 50px;
    background: none;
}
.t-p{
  color: black;
  padding: 40px 30px 0px 30px;
}
.accordion .item .item-header h2 button.btn.btn-link {
    background: #28a745;
    color: white;
    border-radius: 0px;
    font-family: 'Poppins';
    font-size: 16px;
    font-weight: 400;
    line-height: 2.5;
    text-decoration: none;
}
.accordion .item .item-header {
    border-bottom: none;
    background: transparent;
    padding: 0px;
    margin: 2px;
}

.accordion .item .item-header h2 button {
    color: black;
    font-size: 20px;
    padding: 15px;
    display: block;
    width: 100%;
    text-align: left;
    font-family: 'Poppins';
}

.accordion .item .item-header h2 i {
    float: right;
    font-size: 30px;
    color: #fcfcfc;
    background-color: #6cfc8b;
    width: 60px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 5px;
}

button.btn.btn-link.collapsed i {
    transform: rotate(0deg);
}

button.btn.btn-link i {
    transform: rotate(180deg);
    transition: 0.5s;
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
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>FaQs <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-3 bread">FaQs</h1>
          </div>
        </div>
      </div>
    </section>
    



<section class="ftco-section">
<div class="container">
<div class="accordion" id="accordionExample">


<?php while ($row2 = $faq->fetch_assoc()) { ?>
    
  <div class="item">
     <div class="item-header" id="headingOne">
        <h2 class="mb-0">
           <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
              data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
           <?= $row2['Question']; ?>
           <i class="fa fa-angle-down"></i>
           </button>
        </h2>
     </div>
     <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
        data-parent="#accordionExample">
        <div class="t-p">
<?= $row2['Answer']; ?>
        </div>
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