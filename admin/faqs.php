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
            			<h5>Add FAQ</h5>
            		</div>
            		<div class="card-body">
            			<h5>FAQ Form</h5>
            			<hr>
                        









 <?php 


 $result= $sql->query("SELECT * FROM faq")or die ($sql->error); ?>




            			<form method="POST" action="includes/process.php" class="needs-validation" enctype="multipart/form-data" novalidate>
            				<div class="row">
            					<div class="col-md-6 mb-3">
            						<label class="form-label" for="validationCustom01">Question</label>
            						<input type="hidden" name="id" value="<?php echo $id; ?>">
            						<input type="text" name="Question" class="form-control" id=" validationCustom01" placeholder="Question" value="<?php echo $Question; ?>" required>
            						<div class="valid-feedback" >
            							Looks good!
            						</div>
            					</div>
            					<div class="col-md-6 mb-3">
            						<label class="form-label" for="validationCustom02">Answer</label>
            						<input type="text" name="Answer" class="form-control" id="validationCustom02" placeholder="Answer" value="<?php echo $Answer; ?>" required>
            						<div class="valid-feedback" >
            							Looks good!
            						</div>
            					</div>

            				</div>

            				<?php
    if($update== true):
    ?>
      <BUTTON type="submit" class= "btn btn-info" name="update_faq"> Update </BUTTON>
    <?php else :
    ?>  
    <BUTTON type="submit" class= "btn btn-info" name="save_faq"> Save </BUTTON>
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
