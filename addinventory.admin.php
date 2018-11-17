<?php 
	require_once("mydb/o-db.php");
	session_start();
	if ($_SESSION["user"] == "admin") {
		// Do Something
		include("pHeader.php");
?>

<section class="container border" style="margin-top: 20px; margin-bottom: 75px; background-color: #D6D7D3">
	<h1 style="text-align: center;">Welcome admin come to add another car</h1>
	<?php 
		if (isset($_GET['inventory'])) {
			if ($_GET['inventory'] == 'fail') {
				echo '
				<div class="alert alert-warning" role="alert" style="text-align: center;">
					Something whent wrong
				</div>';
			}
		}
	?>
	<form action="mydb/addvehical.db.php" method="POST" role="form" data-toggle="validator" enctype="multipart/form-data">
			<div class="row">    
				<div class="form-group col-sm-6">
					<label>Upload the Image</label>
					<br>
					<input type="file" name="imagename"required>
				</div>
				<div class="form-group col-sm-6">
					<label>Enter Price</label>
					<input type="number" class="form-control" id="price" name="price" placeholder="Enter Price" required>
				</div>
			</div>
			<div class="row">    
				<div class="form-group col-sm-6">
					<label>Enter Vehicle Name</label>
					<input type="text" class="form-control" id="vehicle" name="vehicle" placeholder="Enter Vehicle Name" required>
				</div>
				<div class="form-group col-sm-6">
					<label>Enter kilometers on odometer</label>
					<input type="number" class="form-control" id="kilometer" name="kilometer" placeholder="Enter kilometers on odometer" required>
				</div>
			</div>
			<div class="row">    
				<div class="form-group col-sm-6">
					<label>Enter Colour</label>
					<input type="text" class="form-control" id="colour" name="colour" placeholder="Enter colour" required>
				</div>
				<div class="form-group col-sm-6">
					<label>Enter Transmission Type</label>
					<input type="text" class="form-control" id="transmission" name="transmission" placeholder="Enter Transmission Type" required>
				</div>
			</div>
			<div class="row">    
				<div class="form-group col-sm-6">
					<label>Enter Body Type</label>
					<input type="text" class="form-control" id="body" name="body" placeholder="Enter Body Type" required>
				</div>
				<div class="form-group col-sm-6">
					<label>Enter Drive Type</label>
					<input type="text" class="form-control" id="drivetype" name="drivetype" placeholder="Enter Drive Type" required>
				</div>
			</div>
			<div class="row">    
				<div class="form-group col-sm-6">
					<label>Enter Regostration Plate</label>
					<input type="text" class="form-control" id="regostrationplate" name="regostrationplate" placeholder="Enter regostrationplate" required>
				</div>
				<div class="form-group col-sm-6">
					<label>Enter Regostration Status</label>
					<input type="text" class="form-control" id="regostrationstatus" name="regostrationstatus" placeholder="Enter regostrationstatus" required>
				</div>
			</div>
			<div class="row">    
				<div class="form-group col-sm-6">
					<label>Enter Release Date</label>
					<input type="date" class="form-control" id="releasedate" name="releasedate" placeholder="Enter releasedate" required>
				</div>
				<div class="form-group col-sm-6">
					<label>Enter Compliance date</label>
					<input type="date" class="form-control" id="compliancedate" name="compliancedate" placeholder="Enter Compliance Date" required>
				</div>
			</div>
			<div class="row">    
				<div class="form-group col-sm-6">
					<label>Enter Stock</label>
					<input type="text" class="form-control" id="stock" name="stock" placeholder="Enter stock" required>
				</div>
				<div class="form-group col-sm-6">
					<label>Enter Fuel Economy Combined</label>
					<input type="text" class="form-control" id="fuelEconomyCombined" name="fuelEconomyCombined" placeholder="Enter Fuel Economy Combined" required>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-6">
					<button class="btn btn-success" type="submit">
						Submit
					</button>
					<button class="btn btn-success" type="reset" value="Clear">
						Clear
					</button>
				</div>
			</div>   
	</form>
</section>

<?php
		include("footer.php");
	}else{
		header('location: index.php?pageaccess=forbidden');
		exit;
	}
?>