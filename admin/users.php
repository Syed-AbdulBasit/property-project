 <!DOCTYPE html>
<html lang="en">

<?php

 session_start();
 if(! isset($_SESSION['aid']))
    header("location:auth-signin.php");

?>
<?php error_reporting(0); ?>
<?php include "includes/head.php";
include"includes/connection.php";
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
				<!-- [ form-element ] start -->
            <!-- <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Component [ v1 ]</h5>
                    </div>
                    <div class="card-body">
                        <form class="form-v1">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-label-group">
                                        <input type="email" id="inputEmail0" class="form-control" placeholder="Email address" required autofocus>
                                        <label class="form-label" for="inputEmail0">Email address</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-label-group">
                                        <input type="password" id="inputPassword0" class="form-control" placeholder="Password" required>
                                        <label class="form-label" for="inputPassword0">Password</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-label-group">
                                        <input type="email" id="inputEmail1" class="form-control">
                                        <label class="form-label" for="inputEmail1">Email address</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-label-group">
                                        <input type="password" id="inputPassword1" class="form-control">
                                        <label class="form-label" for="inputPassword1">Password</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Component [ v2 ]</h5>
                    </div>
                    <div class="card-body">
                        <form class="form-v2">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label" for="Email">Default value</label>
                                        <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" value="123">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label" for="Text">Placeholder</label>
                                        <input type="text" class="form-control" id="Text" placeholder="123" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label" for="password">Normal</label>
                                        <input type="password" class="form-control" id="password" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->
            <div class="col-md-12">
            	<div class="card">
            		<div class="card-header">
            			<h5>Add User</h5>
            		</div>
            		<div class="card-body">
            			<h5>User Form</h5>
            			<hr>

<!--             			<div class="row">
            				<div class="col-md-6">
            					<form>
            						<div class="form-group">
            							<label class="form-label" for="exampleInputEmail1">Email address</label>
            							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            						</div>
            						<div class="form-group">
            							<label class="form-label" for="exampleInputPassword1">Password</label>
            							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            						</div>
            						<div class="form-group form-check">
            							<input type="checkbox" class="form-check-input" id="exampleCheck1">
            							<label for="exampleCheck1">Check me out</label>
            						</div>
            						<button type="submit" class="btn  btn-primary">Submit</button>
            					</form>
            				</div>
            				<div class="col-md-6">
            					<form>
            						<div class="form-group">
            							<label class="form-label">Text</label>
            							<input type="text" class="form-control" placeholder="Text">
            						</div>
            						<div class="form-group">
            							<label class="form-label" for="exampleFormControlSelect1">Example select</label>
            							<select class="form-control" id="exampleFormControlSelect1">
            								<option>1</option>
            								<option>2</option>
            								<option>3</option>
            								<option>4</option>
            								<option>5</option>
            							</select>
            						</div>
            						<div class="form-group">
            							<label class="form-label" for="exampleFormControlTextarea1">Example textarea</label>
            							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            						</div>
            					</form>
            				</div>
            			</div> -->








 <?php 


 $result= $sql->query("SELECT * FROM user")or die ($sql->error); ?>




            			<form method="POST" action="includes/process.php" class="needs-validation" novalidate>
            				<div class="row">
            					<div class="col-md-6 mb-3">
            						<label class="form-label" for="validationCustom01">User Full Name</label>
            						<input type="hidden" name="id" value="<?php echo $id; ?>">
            						<input type="text" name="User_Name" class="form-control" id="validationCustom01" placeholder="User Name" value="<?php echo $User_Name; ?>" required>
            						<div class="valid-feedback" >
            							Looks good!
            						</div>
            					</div>
            					<div class="col-md-6 mb-3">
            						<label class="form-label" for="validationCustom02">Enter Username</label>
            						<input type="text" name="Username" class="form-control" id="validationCustom02" placeholder="Enter Username" value="<?php echo $Username; ?>" required>
            						<div class="valid-feedback">
            							Looks good!
            						</div>
            					</div>

            				</div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationCustom01">User Email</label>
                                   
                                    <input type="email" name="User_Email" class="form-control" id="password" placeholder="User Email" value="<?php echo $User_Email; ?>" required>
                                    <div class="valid-feedback" >
                                        Looks good!
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationCustom01">User Password</label>
                                   
                                    <input type="password" onkeypress="checkPass();" name="User_Password" class="form-control" id="password" placeholder="User Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" value="<?php echo $User_Password; ?>" required>
                                    <div class="valid-feedback" >
                                        Looks good!
                                    </div>
                                </div>

                            </div>
<!--             				<div class="row">
            					<div class="col-md-4 mb-3">
            						<label class="form-label" for="validationCustom03">City</label>
            						<input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
            						<div class="invalid-feedback">
            							Please provide a valid city.
            						</div>
            					</div>
            					<div class="col-md-4 mb-3">
            						<label class="form-label" for="validationCustom04">State</label>
            						<input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
            						<div class="invalid-feedback">
            							Please provide a valid state.
            						</div>
            					</div>
            					<div class="col-md-4 mb-3">
            						<label class="form-label" for="validationCustom05">Zip</label>
            						<input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
            						<div class="invalid-feedback">
            							Please provide a valid zip.
            						</div>
            					</div>
            				</div> -->
<!--             				<div class="form-group">
            					<div class="form-check">
            						<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            						<label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
            						<div class="invalid-feedback">
            							You must agree before submitting.
            						</div>
            					</div>
            				</div> -->
            				<?php
    if($update== true):
    ?>
      <BUTTON type="submit" class= "btn btn-info" name="update_user"> Update </BUTTON>
    <?php else :
    ?>  
    <BUTTON type="submit" class= "btn btn-info" name="save_user"> Save </BUTTON>
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
















<!--                         <h5 class="mt-5">Sizing</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <input class="mb-3 form-control form-control-lg" type="text" placeholder=".form-control-lg">
                                <input class="mb-3 form-control" type="text" placeholder="Default input">
                                <input class="mb-3 form-control form-control-sm" type="text" placeholder=".form-control-sm">
                            </div>
                            <div class="col-md-6">
                                <select class="mb-3 form-control form-control-lg">
                                    <option>Large select</option>
                                </select>
                                <select class="mb-3 form-control">
                                    <option>Default select</option>
                                </select>
                            </div>
                        </div> -->
<!--                         <h5 class="mt-5">Color</h5>
                        <hr>
                        <form>
                            <div class="form-group">
                                <label for="exampleColorInput" class="form-label">Color picker</label>
                                <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">
                            </div>
                        </form>
                        <h5 class="mt-5">Datalist</h5>
                        <hr>
                        <form>
                            <div class="form-group">
                                <label for="exampleDataList" class="form-label">Datalist example</label>
                                <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                                <datalist id="datalistOptions">
                                    <option value="San Francisco">
                                    <option value="New York">
                                    <option value="Seattle">
                                    <option value="Los Angeles">
                                    <option value="Chicago">
                                </datalist>
                            </div>
                        </form> -->
<!--                         <div class="row">
                            <div class="col-md-6">
                                <h5 class="mt-5">Readonly</h5>
                                <hr>
                                <input class="form-control" type="text" placeholder="Readonly input here…" readonly>
                            </div>
                            <div class="col-md-6">
                                <h5 class="mt-5">Readonly plain Text</h5>
                                <hr>
                                <form>
                                    <div class="form-group row">
                                        <label class="form-label" for="staticEmail" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="form-label" for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> -->
<!--                         <h5 class="mt-5">Inline</h5>
                        <hr>
                        <form class="row row-cols-md-auto g-3 align-items-center">
                            <div class="col-12">
                                <label class="sr-only" for="inlineFormInputName">Name</label>
                                <input type="text" class="form-control" id="inlineFormInputName" placeholder="Jane Doe">
                            </div>
                            <div class="col-12">
                                <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                                <div class="input-group">
                                    <div class="input-group-text">@</div>
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="sr-only" for="inlineFormSelectPref">Preference</label>
                                <select class="form-select" id="inlineFormSelectPref">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                    <label class="form-check-label" for="inlineFormCheck">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form> -->
<!--                         <h5 class="mt-5">Form Grid</h5>
                        <hr>
                        <form>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="inputPassword4">Password</label>
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="inputAddress2">Address 2</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="form-label" for="inputState">State</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>select</option>
                                        <option>Large select</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label class="form-label" for="inputZip">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">Check me out</label>
                                </div>
                            </div>
                            <button type="submit" class="btn  btn-primary">Sign in</button>
                        </form> -->
<!--                         <div class="row">
                            <div class="col-md-6">
                                <h5 class="mt-5">Horizontal Form</h5>
                                <hr>
                                <form>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="inputEmail3">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="inputPassword3">
                                        </div>
                                    </div>
                                    <fieldset>
                                        <div class="row mb-3">
                                            <legend class="col-form-label col-sm-3 pt-0">Radios</legend>
                                            <div class="col-sm-9">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                                    <label class="form-check-label" for="gridRadios1">
                                                        First radio
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                                    <label class="form-check-label" for="gridRadios2">
                                                        Second radio
                                                    </label>
                                                </div>
                                                <div class="form-check disabled">
                                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                                                    <label class="form-check-label" for="gridRadios3">
                                                        Third disabled radio
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="row mb-3">
                                        <div class="col-form-label col-sm-3 pt-0">Checkbox</div>
                                        <div class="col-sm-9">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Example checkbox
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <h5 class="mt-5">Horizontal Form Label Sizing</h5>
                                <hr>
                                <div class="row mb-3">
                                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg">
                                    </div>
                                </div>
                            </div>
                        </div> -->
















<!-- 



                        <h5 class="mt-5">Supported Elements</h5>
                        <hr>
                        <form class="was-validated">
                            <div class="mb-3">
                                <label for="validationTextarea" class="form-label">Textarea</label>
                                <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                                <div class="invalid-feedback">
                                    Please enter a message in the textarea.
                                </div>
                            </div>
                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="validationFormCheck1" required>
                                <label class="form-check-label" for="validationFormCheck1">Check this checkbox</label>
                                <div class="invalid-feedback">Example invalid feedback text</div>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>
                                <label class="form-check-label" for="validationFormCheck2">Toggle this radio</label>
                            </div>
                            <div class="form-check mb-3">
                                <input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" required>
                                <label class="form-check-label" for="validationFormCheck3">Or toggle this other radio</label>
                                <div class="invalid-feedback">More example invalid feedback text</div>
                            </div>
                            <div class="mb-3">
                                <select class="form-select" required aria-label="select example">
                                    <option value="">Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <div class="invalid-feedback">Example invalid select feedback</div>
                            </div>
                            <div class="form-file mb-3">
                                <input type="file" class="form-file-input" id="validationFormFile" required>
                                <label class="form-file-label" for="validationFormFile">
                                    <span class="form-file-text">Choose file...</span>
                                    <span class="form-file-button">Browse</span>
                                </label>
                                <div class="invalid-feedback">Example invalid form file feedback</div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit" disabled>Submit form</button>
                            </div>
                        </form>
                        <h5 class="mt-5">Tooltips</h5>
                        <hr>
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-md-4 position-relative">
                                <label for="validationTooltip01" class="form-label">First name</label>
                                <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4 position-relative">
                                <label for="validationTooltip02" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4 position-relative">
                                <label for="validationTooltipUsername" class="form-label">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                    <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                                    <div class="invalid-tooltip">
                                        Please choose a unique and valid username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 position-relative">
                                <label for="validationTooltip03" class="form-label">City</label>
                                <input type="text" class="form-control" id="validationTooltip03" required>
                                <div class="invalid-tooltip">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-3 position-relative">
                                <label for="validationTooltip04" class="form-label">State</label>
                                <select class="form-select" id="validationTooltip04" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                </select>
                                <div class="invalid-tooltip">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 position-relative">
                                <label for="validationTooltip05" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="validationTooltip05" required>
                                <div class="invalid-tooltip">
                                    Please provide a valid zip.
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </form> -->
<!--                         <h3 class="mt-5">Checkboxes and Radios</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="mt-3">Checkboxes</h5>
                                <hr>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                    <label class="form-check-label" for="customCheck1">Check this custom checkbox</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="mt-3">Switches</h5>
                                <hr>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input" id="customswitch1">
                                    <label class="form-check-label" for="customswitch1">Check this custom Switches</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="mt-5">Radios</h5>
                                <hr>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Default radio
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Default checked radio
                                    </label>
                                </div>
                                <h5 class="mt-5">Inline</h5>
                                <hr>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault11">
                                    <label class="form-check-label" for="flexRadioDefault11">
                                        Default radio
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault12" checked>
                                    <label class="form-check-label" for="flexRadioDefault12">
                                        Default checked radio
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="mt-5">Range</h5>
                                <hr>
                                <label class="form-label" for="customRange1">Example range</label>
                                <input type="range" class="form-range" id="customRange1">
                                <label class="form-label" for="customRange2">Min and max</label>
                                <input type="range" class="form-range" min="0" max="5" id="customRange2">
                                <label class="form-label" for="customRange3">Steps</label>
                                <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
            	<!-- Input group -->
<!--                 <div class="card">
                    <div class="card-header">
                        <h5>Input Group</h5>
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">@</span>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2">@example.com</span>
                        </div>
                        <label class="form-label" for="basic-url">Your vanity URL</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <span class="input-group-text">.00</span>
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">With textarea</span>
                            <textarea class="form-control" aria-label="With textarea"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="mt-5">Sizing</h5>
                                <hr>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                </div>
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                                    <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="mt-5">Checkboxes and radios</h5>
                                <hr>
                                <div class="input-group mb-3">
                                    <div class="input-group-text">
                                        <input class="form-check-input" type="checkbox" value="" aria-label="Checkbox for following text input">
                                    </div>
                                    <input type="text" class="form-control" aria-label="Text input with checkbox">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <input class="form-check-input" type="radio" value="" aria-label="Radio button for following text input">
                                    </div>
                                    <input type="text" class="form-control" aria-label="Text input with radio button">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="mt-5">Multiple inputs</h5>
                                <hr>
                                <div class="input-group">
                                    <span class="input-group-text">First and last name</span>
                                    <input type="text" aria-label="First name" class="form-control">
                                    <input type="text" aria-label="Last name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="mt-5">Multiple addons</h5>
                                <hr>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">$</span>
                                    <span class="input-group-text">0.00</span>
                                    <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                                    <span class="input-group-text">$</span>
                                    <span class="input-group-text">0.00</span>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-5">Button Addons</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon1">Button</button>
                                    <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <button class="btn btn-outline-secondary" type="button">Button</button>
                                    <button class="btn btn-outline-secondary" type="button">Button</button>
                                    <input type="text" class="form-control" placeholder="" aria-label="Example text with two button addons">
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username with two button addons">
                                    <button class="btn btn-outline-secondary" type="button">Button</button>
                                    <button class="btn btn-outline-secondary" type="button">Button</button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="mt-5">Buttons With Dropdowns</h5>
                                <hr>
                                <div class="input-group mb-3">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <div class="input-group">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action before</a></li>
                                        <li><a class="dropdown-item" href="#">Another action before</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                    <input type="text" class="form-control" aria-label="Text input with 2 dropdown buttons">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="mt-5">Segmented Buttons</h5>
                                <hr>
                                <div class="input-group mb-3">
                                    <button type="button" class="btn btn-outline-secondary">Action</button>
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                    <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                                    <button type="button" class="btn btn-outline-secondary">Action</button>
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h3 class="mt-5">Custom Forms</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="mt-3">Custom Select</h5>
                                <hr>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                    <select class="form-select" id="inputGroupSelect01">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <select class="form-select" id="inputGroupSelect02">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <label class="input-group-text" for="inputGroupSelect02">Options</label>
                                </div>
                                <div class="input-group mb-3">
                                    <button class="btn btn-outline-secondary" type="button">Button</button>
                                    <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="input-group">
                                    <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <button class="btn btn-outline-secondary" type="button">Button</button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5 class="mt-3">Custom File Input</h5>
                                <hr>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                    <div class="form-file">
                                        <input type="file" class="form-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                        <label class="form-file-label" for="inputGroupFile01">
                                            <span class="form-file-text">Choose file...</span>
                                            <span class="form-file-button">Browse</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="form-file">
                                        <input type="file" class="form-file-input" id="inputGroupFile02">
                                        <label class="form-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">
                                            <span class="form-file-text">Choose file...</span>
                                            <span class="form-file-button">Browse</span>
                                        </label>
                                    </div>
                                    <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
                                </div>
                                <div class="input-group mb-3">
                                    <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon03">Button</button>
                                    <div class="form-file">
                                        <input type="file" class="form-file-input" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03">
                                        <label class="form-file-label" for="inputGroupFile03">
                                            <span class="form-file-text">Choose file...</span>
                                            <span class="form-file-button">Browse</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="form-file">
                                        <input type="file" class="form-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                        <label class="form-file-label" for="inputGroupFile04">
                                            <span class="form-file-text">Choose file...</span>
                                            <span class="form-file-button">Browse</span>
                                        </label>
                                    </div>
                                    <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->

    </div>
</section>
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
    	<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
    	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script> -->
    	<!-- <script src="assets/js/plugins/clipboard.min.js"></script> -->
    	<!-- <script src="assets/js/uikit.min.js"></script> -->

<!-- <script>
    $("body").append('<div class="fixed-button active"><a href="https://gumroad.com/dashboardkit" target="_blank" class="btn btn-md btn-success"><i class="material-icons-two-tone text-white">shopping_cart</i> Upgrade To Pro</a> </div>');
</script> -->

</body>

</html>