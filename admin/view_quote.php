<!DOCTYPE html>
<html lang="en">
<?php include "includes/head.php"; ?>

<?php error_reporting(0); ?>
<?php

 session_start();
 if(! isset($_SESSION['aid']))
    header("location:auth-signin.php");

?>

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
            
              <?php 



    
         include "includes/connection.php";
          $result= $sql->query("SELECT * FROM quote")or die ($sql->error);

          $rowcount=mysqli_num_rows($result);
          $rowcount;

                              // echo"<pre>";
                              // print_r($result);
                              // echo"</pre>";
      ?>

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Quote</h5>
                        <!-- <span class="d-block m-t-5">use class <code>table-striped</code> inside table element</span> -->
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table" id="data-table">
                                <thead>
                                    <tr>
                                        
                                        <th>#</th>
              
              <th>First Name</th>
              <th>Last Name</th>
              <th>Service</th>
              <th>Phone</th>
              <th>Message</th>
             
              
              <th>Delete</th>
              
                                    </tr>
                                </thead>
                                <tbody>
     <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
              <td><?= $row['ID']; ?></td>
              <td><?= $row['Q_Name']; ?></td>
              <td><?= $row['Q_Lname']; ?></td>
              <td><?= $row['Q_Service']; ?></td>
              <td><?= $row['Q_Phone']; ?></td>
              <td><?= $row['Q_Message']; ?></td>

              
             
               <td><a href="includes/process.php?delete_quote=<?php echo $row['ID']; ?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">
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
  <script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#data-table').DataTable({
      paging: true
    });
  });
  </script>
</body>
</html>
