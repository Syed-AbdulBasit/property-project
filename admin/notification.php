<!DOCTYPE html>
<html lang="en">
<?php

 session_start();
 if(! isset($_SESSION['aid']))
    header("location:auth-signin.php");

?>
<?php error_reporting(0); ?>
<?php include "includes/head.php";
include "includes/connection.php";
 ?>
<?php include "includes/process.php"; ?>

<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ Mobile header ] start -->
	<div class="pc-mob-header pc-header">
		<div class="pcm-logo">
			<img src="assets/images/logo.svg" alt="" class="logo logo-lg">
		</div>
		<div class="pcm-toolbar">
			<a href="#!" class="pc-head-link" id="mobile-collapse">
				<div class="hamburger hamburger--arrowturn">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
			</a>
			<a href="#!" class="pc-head-link" id="headerdrp-collapse">
				<i data-feather="align-right"></i>
			</a>
			<a href="#!" class="pc-head-link" id="header-collapse">
				<i data-feather="more-vertical"></i>
			</a>
		</div>
	</div>
	<!-- [ Mobile header ] End -->

	<!-- [ navigation menu ] start -->
	<?php include "includes/nav.php"; ?>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<?php include "includes/header.php"; ?>
	<!-- [ Header ] end -->

	<!-- [ Main Content ] start -->
	<section class="pc-container">
		<div class="pcoded-content">
			<!-- [ breadcrumb ] start -->
			
			<!-- [ breadcrumb ] end -->
			<!-- [ Main Content ] start -->
			<div class="row">


                <?php 

                if (isset($_SESSION['message'])): 

                ?>
                <div class="alert alert-<?= $_SESSION['msg_type']; ?>">
                    <?php

                    echo $_SESSION['message'];
                    unset($_SESSION['message']);

                    ?>


                </div>

<?php endif ?>


            <div class="col-md-12">
            	<div class="card">
            		<div class="card-header">
            			<h5>Add Notification</h5>
            		</div>
            		<div class="card-body">
            			<h5>Notification</h5>
            			<hr>
                        








 
 <?php 


 $result= $sql->query("SELECT * FROM notification")or die ($sql->error); ?>




            			<form method="POST" action="includes/process.php" class="needs-validation" enctype="multipart/form-data" novalidate>

                            <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationCustom02">Notification Image</label>
                                    <input type="file" name="Notification_Image" class="form-control" id="validationCustom02" placeholder="Notification Image"  value="uploads/files/<?php echo $About_Image; ?>" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
            				<?php
    if($update== true):
    ?>
    <?php else :
    ?>  
    <BUTTON type="submit" class= "btn btn-info" name="save_Notification"> Save </BUTTON>
  <?php endif; ?>
            			</form>
            			<script>
                            // Example starter JavaScript for disabling form submissions if there are invalid fields
                            (function() {
                            	'use strict';
                            	window.addEventListener('load', function() {
                                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                    var forms = document.getElementsByClassName('needs-validation');
                                    // Loop over them and prevent submission
                                    var validation = Array.prototype.filter.call(forms, function(form) {
                                    	form.addEventListener('submit', function(event) {
                                    		if (form.checkValidity() === false) {
                                    			event.preventDefault();
                                    			event.stopPropagation();
                                    		}
                                    		form.classList.add('was-validated');
                                    	}, false);
                                    });
                                }, false);
                            })();
                        </script>


                    </div>
                </div>
            </div>
            <div class="col-sm-12">
            	<!-- Input group -->

            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->

    </div>
</section>





<section class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->



            
              <?php 



    
         include "includes/connection.php";
          $result= $sql->query("SELECT * FROM notification")or die ($sql->error);

          $rowcount=mysqli_num_rows($result);
          $rowcount;

                              // echo"<pre>";
                              // print_r($result);
                              // echo"</pre>";
      ?>

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Notification</h5>
                        <!-- <span class="d-block m-t-5">use class <code>table-striped</code> inside table element</span> -->
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table" id="data-table">
                                <thead>
                                    <tr>
                                        
                                        <th>#</th>
              

              <th>Image</th>
              
              <th>Delete</th>
 
              
                                    </tr>
                                </thead>
                                <tbody>
     <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
              <td><?= $row['ID']; ?></td>


              <td><img src="uploads/files/<?php echo $row['Image'] ?>" width="100px" height="100px"></td>

             
               <td><a href="includes/process.php?delete_notification=<?php echo $row['ID']; ?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">
                Delete
              </a></td>
              
            </tr>
            <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>








    	<!-- Required Js -->
    	<script src="assets/js/vendor-all.min.js"></script>
    	<script src="assets/js/plugins/bootstrap.min.js"></script>
    	<script src="assets/js/plugins/feather.min.js"></script>
    	<script src="assets/js/pcoded.min.js"></script>
    	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script> -->
    	<!-- <script src="assets/js/plugins/clipboard.min.js"></script> -->
    	<!-- <script src="assets/js/uikit.min.js"></script> -->

<!-- <script>
    $("body").append('<div class="fixed-button active"><a href="https://gumroad.com/dashboardkit" target="_blank" class="btn btn-md btn-success"><i class="material-icons-two-tone text-white">shopping_cart</i> Upgrade To Pro</a> </div>');
</script> -->

</body>

</html>
