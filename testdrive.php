<?php
	require_once("mydb/o-db.php");
	session_start();
	if (array_key_exists("user", $_SESSION)) {
		include("pHeader.php");
	} else {
		include("header.php");
	}
?>

<!-- 
	#EAE7DC
	#D8C3A5
	#8E8D8A
	#E98074
	#E85A4F
 -->
<section class="container border" style="margin-top: 20px; margin-bottom: 75px; background-color: #D6D7D3">
	<div>
		<h1 style="text-align: center;">Lets Book a Test Drive</h1>
		<h4 style="text-align: center;">Just fill out this form</h4>
		<div  style="text-align: center;">
			<?php 
				if (isset($_GET['signup'])) {
					if ($_GET['signup'] == 'email') {
						echo '
							<div class="alert alert-warning" role="alert" style="text-align: center;">
								Email already exists or encountered an error
							</div>';
					} elseif ($_GET['signup'] == 'mobile') {
						echo '
							<div class="alert alert-warning" role="alert" style="text-align: center;">
								Mobile number already exists or encountered an error
							</div>';
					} elseif ($_GET['signup'] == 'username') {
						echo '
							<div class="alert alert-warning" role="alert" style="text-align: center;">
								User Name already exists or encountered an error
							</div>';
					} elseif ($_GET['signup'] == 'fail') {
						echo '
							<div class="alert alert-warning" role="alert" style="text-align: center;">
									Sign-up Has encountered an error
							</div>';
					}
				}
				if (isset($_GET['account'])) {
					if ($_GET['account'] == 'needed') {
						echo '
							<div class="alert alert-warning" role="alert" style="text-align: center;">
								you need an account or to login to book a test drive
							</div>';
					}
				}
			?>
		</div>
		<form action="mydb/o-register.db.php" method="POST" role="form" data-toggle="validator">
			<div class="row">
				<div class="form-group col-sm-6">
					<label>Enter Desired User Name</label>
					<input type="text" class="form-control" id="Uname" name="Uname" placeholder="Enter User Name" required>
					<small class="form-text text-muted">User Name must be Unique.</small>
				</div>
			</div> 
			<div class="row">    
				<div class="form-group col-sm-6">
					<label>First Name</label>
					<input type="text" class="form-control" id="Fname" name="Fname" placeholder="Enter First Name" required>
				</div>
				<div class="form-group col-sm-6">
					<label>Last Name</label>
					<input type="text" class="form-control" id="Lname" name="Lname" placeholder="Enter Last Name" required>
				</div>
			</div>
			<div class="row">    
				<div class="form-group col-sm-6">
					<label>Email address</label>
					<input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" required>
					<small class="form-text text-muted">We do not share your email with any 3rd party.</small>
				</div>
				<div class="form-group col-sm-6">
					<label>Mobile Phone</label>
					<input type="text" class="form-control" id="mPhone" name="mPhone" placeholder="Enter Mobile" required>
					<small class="form-text text-muted">We do not share your Mobile with any 3rd party.</small>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-6">
					<label>Account Password</label>
					<input type="password" class="form-control" id="PWD" name="PWD" placeholder="Enter Password" required>
				</div>
				<div class="form-group col-sm-6">
					<label>Confirm Account Password</label>
					<input type="password" class="form-control" id="inputPasswordConfirm" data-match="#PWD" placeholder="Confirm Password" required>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-6">
					<button class="btn btn-success" type="submit">
						Submit
					</button>
				</div> 
			</div>   
		</form>
	</section>

<?php
	include("footer.php");
?>