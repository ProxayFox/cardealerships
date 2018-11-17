<?php 
	require_once("mydb/o-db.php");
	session_start();
	if (array_key_exists("user", $_SESSION)) {
		// Do Something
		include("pHeader.php");
?>

	<section class="container border" style="margin-top: 20px; margin-bottom: 75px; background-color: #D6D7D3">
		<h2 style="text-align: center;">Lets Update your profile</h2>
		<div>
		<?php 
			if (isset($_GET['update'])) {
				if ($_GET['update'] == 'fail') {
					echo '
					<div class="alert alert-warning" role="alert" style="text-align: center;">
						Missing information or something went wrong
					</div>';
				}
			}
		?>
	</div>
		<form action="./mydb/update.db.php" method="POST" role="form" data-toggle="validator">
			<div class="form-group">
				<label>Address</label>
				<input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St Holland Pk">
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label>City</label>
					<input type="text" class="form-control" id="city" name="city" placeholder="Brisbane">
				</div>
				<div class="form-group col-md-4">
					<label for="inputState">State</label>
					<select id="state" name="state" class="form-control">
					<option selected>...</option>
					<option>New South Wales</option>
					<option>Queensland</option>
					<option>Tasmania</option>
					<option>Victoria</option>
					<option>Western Australia</option>
					<option>Northern Territory</option>
					<option>Australian Capital Territory</option>
					<option>South Australia</option>
					</select>
				</div>
				<div class="form-group col-md-2">
					<label for="inputZip">Post Code</label>
					<input type="number" class="form-control" id="postCode" name="postCode" placeholder="4121">
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
	}else{
		header('location: index.php?not_loged_in');
		exit;
	}
?>