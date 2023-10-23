<?php 
    session_start ( );
?>
<?php

 include "includes/connection.php";


@$uemail=$_POST['uemail'];
@$password=$_POST['password'];


$sql1="SELECT * FROM user WHERE U_Email LIKE '".$uemail."' AND U_Password = '".$password."'"; 
$i=mysqli_query($sql,$sql1);
$numrows = mysqli_affected_rows ( $sql );
$row= mysqli_fetch_array ( $i );

if ( $numrows > 0 ){
    echo ( "Successfully logged in" );
    $_SESSION['aid'] = $row['ID'];
    
    header('location:index.php');  
}
else
    //echo ( "Failed to login" );
    
mysqli_close($sql);


?>

<!DOCTYPE html>
<html lang="en">

<?php
include"includes/head.php";

?>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<!-- <img src="assets/images/logo-dark.svg" alt="" class="img-fluid mb-4"> -->
						<h4 class="mb-3 f-w-400">Admin Login</h4>
						<form action="" method="post">
						<div class="input-group mb-3">
							<span class="input-group-text"><i data-feather="mail"></i></span>
							<input type="email" name="uemail" class="form-control" placeholder="Email address">
						</div>
						<div class="input-group mb-4">
							<span class="input-group-text"><i data-feather="lock"></i></span>
							<input type="password" name="password" class="form-control" placeholder="Password">
						</div>
<!-- 						<div class="form-group text-left mt-2">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
								<label class="form-check-label" for="flexCheckChecked">
									Save credentials
								</label>
							</div>
						</div> -->
						<button class="btn btn-block btn-primary mb-4">Signin</button>
						<!-- <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html" class="f-w-400">Signup</a></p> -->
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/plugins/feather.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<!-- <script>
    $("body").append('<div class="fixed-button active"><a href="https://gumroad.com/dashboardkit" target="_blank" class="btn btn-md btn-success"><i class="material-icons-two-tone text-white">shopping_cart</i> Upgrade To Pro</a> </div>');
</script>
 -->

</body>

</html>
