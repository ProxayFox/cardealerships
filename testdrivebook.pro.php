<?php 
	require_once("mydb/o-db.php");
	session_start();
	if (array_key_exists("user", $_SESSION)) {
		// Do Something
		include("pHeader.php");

			$carID = $_POST['carID'];
			$result = myDB::getInstance()->getBookingCar($carID);

			// Get the date
				date_default_timezone_set("Australia/Brisbane");
				$d=strtotime("today");
?>

<section class="container border" style="margin-top: 20px; margin-bottom: 75px; background-color: #D6D7D3">
	<table class="table table-sm table-striped table-bordered" style="">
			<tr>
				<th scope="col">Car ID</th>
				<th scope="col">Image</th>
				<th scope="col">Model</th>
				<th scope="col">Price</th>
				<th scope="col">ODM (KM)</th>
				<th scope="col">Colour</th>
				<th scope="col">Trans</th>
				<th scope="col">Body</th>
				<th scope="col">Drive Type</th>
				<th scope="col">Rego Plate</th>
				<th scope="col">Rego</th>
				<th scope="col">Release Date</th>
				<th scope="col">Stock</th>
				<th scope="col">FEC</th>
			</tr>
			<?php
				if ($result != FALSE) {
					while ($row = $result->fetch_row()) {
					 echo '<tr><td>'.$row[3].'</td> <td><img src="./img/imges/'.$row[4].'" style="width: 100px;"></td> <td> '.$row[5].'</td> <td>$'.$row[6].'</td> <td>'.$row[7].'</td> <td>'.$row[8].'</td> <td>'.$row[9].'</td> <td>'.$row[10].'</td> <td>'.$row[11].'</td> <td>'.$row[12].'</td> <td>'.$row[13].'</td> <td>'.$row[14].'</td> <td>'.$row[15].'</td> <td>'.$row[16].'</td>';
					 ?>
						<?php echo '</tr>';
					} } ?>
	</table>

	<form action="mydb/testdrivebook.db.php" method="POST" role="form" data-toggle="validator" accept-charset="utf-8">

		<label><input type="hidden" name="carID" value="<?php  echo $_POST['carID'];?>"></label>
		
		<div class="row">    
			<div class="form-group col-sm-6">
				<label>Time</label>
				<div class='input-group time' id='datetimepicker3'>
					<input type="date" class="form-control" min="<?php echo date("Y-m-d h:i:sa", $d) ?>" name="bDate" required>
				</div>
			</div>
			<div class="form-group col-sm-6">
				<label>Date</label>
				<div class='input-group date' id='datetimepicker3'>
					<input type='time' class="form-control" name="btime" required>
				</div>
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
		header('location: index.php?account=needed');
		exit;
	}
?>