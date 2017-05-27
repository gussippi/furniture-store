<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add New Customer</title>
	<link rel="stylesheet" type="text/css" href="css/w3.css">
</head>
<body>
<?php include 'elements/navbar.php'; ?>
	<div class="w3-container" style="margin: 0 auto; width: 74%">
		<div class="w3-card-4 w3-round">
			<div class="w3-container w3-blue" style="border-top-right-radius: 5px; border-top-left-radius: 5px">
				<h1>Add New Customer :</h1>
			</div>
			<div class="w3-container w3-padding-large" style="margin: 0 auto; width: 95%" id="form">
				<form action="" method="POST" >
				<table class="w3-table">
					<tr>
						<td>
							<label style="">First Name : </label>
						</td>
						<td>
							<label style="">Last Name : </label>
						</td>
					</tr>
					<tr>
						<td><input class="w3-input" type="text" id="fname" name="fname" required></td>
						<td><input class="w3-input" type="text" id="lname" name="lname" required></td>
					</tr>
					<tr><td><label>Contact Number : </label></td></tr>	
					<tr><td><input class="w3-input" type="text" id="tel_no" name="tel_no" required></td></tr>
					<tr>
						<td><label>House No : </label></td>
						<td><label>Street 1 : </label></td>
					</tr>
					<tr>
						<td><input class="w3-input" type="text" id="house" name="house" required></td>
						<td><input class="w3-input" type="text" id="street1" name="street1" required></td>
					</tr>
					<tr>
						
						<td><label>Street 2 : </label></td>
						<td><label>City : </label></td>
					</tr>
					<tr>
						
						<td><input class="w3-input" type="text" id="street2" name="street2"></td>
						<td><input class="w3-input" type="text" id="city" name="city" required></td>
					</tr>
					<tr>
						
						<td><label>District : </label></td>
						<td><label>Postal Code : </label></td>
					</tr>
					<tr>
						
						<td><input class="w3-input" type="text" id="district" name="district" required></td>
						<td><input class="w3-input" type="text" id="zip" name="zip" required></td>
					</tr>
				</table>
				&nbsp;
				<div class="w3-container w3-padding-large w3-center">
						<input class="w3-btn w3-ripple w3-black" type="submit" name="submit">								
						<input class="w3-btn w3-ripple w3-red" type="reset" name="reset">
					</div>
				</form>
			</div>
		</div>		
	</div>
</body>
</html>

<?php

	if (isset($_POST['submit'])) {

		// Connect to the database

		require 'db/connect.php';

		// Generate unique key value

		// Get values from form and assign them to variables

		$id = $_POST['id'];
		$name = $_POST['name'];
		$type = $_POST['type'];
		$desc = $_POST['desc'];
		$type = $_POST['type'];
		$price = $_POST['price'];
		
		// Assigning value for PK field

		$db->query("INSERT INTO `furnitures` (`pc_id`, `pc_name`, `pc_type`, `description`, `price`, `stock_qty`) VALUES (NULL, '$id', '$name', '$type', '$price', '0')");
	}

?>