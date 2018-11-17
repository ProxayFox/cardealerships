<?php 
	require_once("mydb/o-db.php");
	session_start();
	if (array_key_exists("user", $_SESSION)) {
		// Do Something
		include("pHeader.php");
		$result = myDB::getInstance()->getAllSavedInventory();
?>

<section class="container border" style="margin-top: 20px; margin-bottom: 75px; background-color: #D6D7D3">
	<h1 style="text-align: center;">These are your saved cars</h1>
	<h3 style="text-align: center;">You can book a test drive with these cars</h3>
	<div>
		<form action="inventorysearch.php" method="POST" role="form" data-toggle="validator">
			<div class="form-row align-items-center">
				<div class="col-auto my-1">
				<p>Price</p>
					<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="price">
						<option selected>Choose...</option>
						<option value="1000 AND 10000">$1,000 - $10,000</option>
						<option value="10000 AND 20000">$10,000 - $20,000</option>
						<option value="20000 AND 30000">$20,000 - $30,000</option>
						<option value="30000 AND 40000">$30,000 - $40,000</option>
						<option value="40000 AND 50000">$40,000 - $50,000</option>
						<option value="50000 AND 100000">$50,000 - $100,000</option>
						<option value="100000 AND 110000">$100,000 - $110,000</option>
						<option value="110000 AND 120000">$110,000 - $120,000</option>
						<option value="120000 AND 130000">$120,000 - $130,000</option>
						<option value="130000 AND 140000">$130,000 - $140,000</option>
						<option value="140000 AND 150000">$140,000 - $150,000</option>
						<option value="150000 AND 160000">$150,000 - $160,000</option>
						<option value="160000 AND 170000">$160,000 - $170,000</option>
						<option value="170000 AND 180000">$170,000 - $180,000</option>
						<option value="180000 AND 190000">$180,000 - $190,000</option>
						<option value="190000 AND 200000">$190,000 - $200,000</option>
						<option value="200000 AND 210000">$200,000 - $210,000</option>
						<option value="210000 AND 200000">$210,000 - $220,000</option>
						<option value="220000 AND 230000">$220,000 - $230,000</option>
						<option value="230000 AND 240000">$230,000 - $240,000</option>
						<option value="240000 AND 250000">$240,000 - $250,000</option>
						<option value="250000 AND 260000">$250,000 - $260,000</option>
						<option value="260000 AND 270000">$260,000 - $270,000</option>
						<option value="270000 AND 280000">$270,000 - $280,000</option>
						<option value="280000 AND 290000">$280,000 - $290,000</option>
						<option value="290000 AND 300000">$290,000 - $300,000</option>
						<option value="300000 AND 900000000000">$300,000+</option>
					</select>
				</div>
				<div class="col-auto my-1">
				<p>Color</p>
					<select class="custom-select mr-sm-2" id="inlineFormCustomSelect"name="colour">
						<option selected>Choose...</option>
						<option value="Silver">Silver</option>
						<option value="White">White</option>
						<option value="Black">Black</option>
						<option value="DarkBlue">Dark Blue</option>
						<option value="DarkGray">Dark Gray</option>
						<option value="Red">Red</option>
						<option value="DarkGreen">Dark Green</option>
						<option value="Brown">Brown</option>
					</select>
				</div>
				<div class="col-auto my-1">
				<p>Drive Type</p>
					<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="drivetype">
						<option selected>Choose...</option>
						<option value="Auto">Auto</option>
						<option value="Manual">Manual</option>
					</select>
				</div>
			</div>
			<div class="col-auto my-1">
				<button class="btn btn-success" type="submit">
					Submit
				</button>
			</div>
		</form>
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
</div>
</section>

<?php
		include("footer.php");
	}else{
		header('location: index.php?account=needed');
		exit;
	}
?>