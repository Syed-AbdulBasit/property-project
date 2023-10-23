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
           $result= $sql->query("SELECT * FROM inventory")or die ($sql->error);

           $rowcount=mysqli_num_rows($result);
           $rowcount;
           $result2= $sql->query("SELECT * FROM quote")or die ($sql->error);

           $rowcount2=mysqli_num_rows($result2);
           $result3= $sql->query("SELECT * FROM team")or die ($sql->error);

           $rowcount3=mysqli_num_rows($result3);
           $result4= $sql->query("SELECT * FROM contact")or die ($sql->error);

           $rowcount4=mysqli_num_rows($result4);

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
<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- support-section start -->

            <div class="col-xl-12 col-md-12">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card prod-p-card background-pattern">
                            <div class="card-body">
                                <div class="row align-items-center m-b-0">
                                    <div class="col">
                                        <h6 class="m-b-5">Total Inventory</h6>
                                        <!--<h3 class="m-b-0"><?php echo $rowcount; ?></h3>-->
                                    </div>
                                    <div class="col-auto">
                                        <h3 class="m-b-0"><?php echo $rowcount; ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card prod-p-card bg-primary background-pattern-white">
                            <div class="card-body">
                                <div class="row align-items-center m-b-0">
                                    <div class="col">
                                        <h6 class="m-b-5 text-white">Total Team Members</h6>
                                        <!--<h3 class="m-b-0 text-white"><?php echo $rowcount3; ?></h3>-->
                                    </div>
                                    <div class="col-auto">
                                        <h3 class="m-b-0 text-white"><?php echo $rowcount3; ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card prod-p-card bg-primary background-pattern-white">
                            <div class="card-body">
                                <div class="row align-items-center m-b-0">
                                    <div class="col">
                                        <h6 class="m-b-5 text-white">Total Quotes</h6>
                                        <!--<h3 class="m-b-0 text-white"><?php echo $rowcount2; ?></h3>-->
                                    </div>
                                    <div class="col-auto">
                                        <h3 class="m-b-0 text-white"><?php echo $rowcount2; ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card prod-p-card background-pattern">
                            <div class="card-body">
                                <div class="row align-items-center m-b-0">
                                    <div class="col">
                                        <h6 class="m-b-5">Total Quries</h6>
                                        <!--<h3 class="m-b-0"><?php echo $rowcount4; ?></h3>-->
                                    </div>
                                    <div class="col-auto">
                                        <h3 class="m-b-0"><?php echo $rowcount4; ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<!--                 <div class="card feed-card">
                    <div class="card-header">
                        <h5>Feeds</h5>
                    </div>
                    <div class="feed-scroll" style="height:385px;position:relative;">
                        <div class="card-body">
                            <div class="row m-b-25 align-items-center">
                                <div class="col-auto p-r-0">
                                    <i data-feather="bell" class="bg-light-primary feed-icon p-2 wid-30 hei-30"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted float-right f-14">Just Now</span></h6>
                                    </a>
                                </div>
                            </div>
                            <div class="row m-b-25 align-items-center">
                                <div class="col-auto p-r-0">
                                    <i data-feather="shopping-cart" class="bg-light-danger feed-icon p-2 wid-30 hei-30"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6 class="m-b-5">New order received <span class="text-muted float-right f-14">30 min ago</span></h6>
                                    </a>
                                </div>
                            </div>
                            <div class="row m-b-25 align-items-center">
                                <div class="col-auto p-r-0">
                                    <i data-feather="file-text" class="bg-light-success feed-icon p-2 wid-30 hei-30"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted float-right f-14">Just Now</span></h6>
                                    </a>
                                </div>
                            </div>
                            <div class="row m-b-25 align-items-center">
                                <div class="col-auto p-r-0">
                                    <i data-feather="bell" class="bg-light-primary feed-icon p-2 wid-30 hei-30"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6 class="m-b-5">You have 4 tasks Done. <span class="text-muted float-right f-14">1 hours ago</span></h6>
                                    </a>
                                </div>
                            </div>
                            <div class="row m-b-25 align-items-center">
                                <div class="col-auto p-r-0">
                                    <i data-feather="file-text" class="bg-light-success feed-icon p-2 wid-30 hei-30"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6 class="m-b-5">You have 2 pending tasks. <span class="text-muted float-right f-14">Just Now</span></h6>
                                    </a>
                                </div>
                            </div>
                            <div class="row m-b-25 align-items-center">
                                <div class="col-auto p-r-0">
                                    <i data-feather="shopping-cart" class="bg-light-danger feed-icon p-2 wid-30 hei-30"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6 class="m-b-5">New order received <span class="text-muted float-right f-14">4 hours ago</span></h6>
                                    </a>
                                </div>
                            </div>
                            <div class="row m-b-25 align-items-center">
                                <div class="col-auto p-r-0">
                                    <i data-feather="shopping-cart" class="bg-light-danger feed-icon p-2 wid-30 hei-30"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6 class="m-b-5">New order Done <span class="text-muted float-right f-14">Just Now</span></h6>
                                    </a>
                                </div>
                            </div>
                            <div class="row m-b-25 align-items-center">
                                <div class="col-auto p-r-0">
                                    <i data-feather="file-text" class="bg-light-success feed-icon p-2 wid-30 hei-30"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6 class="m-b-5">You have 5 pending tasks. <span class="text-muted float-right f-14">5 hours ago</span></h6>
                                    </a>
                                </div>
                            </div>
                            <div class="row m-b-0 align-items-center">
                                <div class="col-auto p-r-0">
                                    <i data-feather="bell" class="bg-light-primary feed-icon p-2 wid-30 hei-30"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6 class="m-b-5">You have 4 tasks Done. <span class="text-muted float-right f-14">2 hours ago</span></h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- customer-section end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/feather.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script> -->
    <!-- <script src="assets/js/plugins/clipboard.min.js"></script> -->
    <!-- <script src="assets/js/uikit.min.js"></script> -->

<!-- Apex Chart -->
<script src="assets/js/plugins/apexcharts.min.js"></script>
<!-- <script>
    $("body").append('<div class="fixed-button active"><a href="https://gumroad.com/dashboardkit" target="_blank" class="btn btn-md btn-success"><i class="material-icons-two-tone text-white">shopping_cart</i> Upgrade To Pro</a> </div>');
</script> -->

<!-- custom-chart js -->
<script src="assets/js/pages/dashboard-sale.js"></script>
</body>

</html>
