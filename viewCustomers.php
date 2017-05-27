<?php
	require 'db/session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<title></title>
</head>
<body>
<?php include 'elements/navbar.php';?>
<?php switch ($_SESSION['login_access']) {
		case '1':
		case '2':
		case '3':
			$error = '';
?>

<!-- Code goes here... -->
	<header class="w3-container w3-red" style="padding:30px 16px 1px 16px" id="header">
			<h1 class="w3-margin w3-jumbo">View Customers</h1>
	</header>
	<div class="w3-container w3-margin" id="main">
		<div class="w3-container w3-margin" id="form">
			<form method="POST">
				<table class="w3-table w3-border" style="width: 50%">
					<tr>
						<td style="width: 20%; vertical-align: middle;"><label>Customer ID</label></td>
						<td><input class="w3-input" style="width: 80px" type="text" name="id" id="id"></td>
						<td class="w3-center" style="width: 30%; vertical-align: middle;" rowspan="2">
							<button type="submit" class="w3-button w3-red">Submit</button>
						</td>
					</tr>
					<tr>
						<td style="width: 15%; vertical-align: middle;"><label>Customer Name</label></td>
						<td><input class="w3-input" type="text" name="name" id="name"></td>
				</table>
				<span style="color: red;"><i><?php echo '<center>', $error, '</center>'; ?></i></span>
			</form>
		</div>

		<div class="w3-container w3-center" id="results">
		<?php
			if (isset($_POST['submit'])) {
				if (empty($_POST['id']) && empty($_POST['name'])) {
					$error = 'Enter either a customer name or id';
				} else {
					$result = $db->query("SELECT * FROM `tab_customer` WHERE `cust_no` = '$id'");
					$row = $result->fetch_object();
				}
		?>
			<table class="w3-table w3-border">
				<tr>
					<th>Name</th>
				</tr>
				<tr>
					<td><?php echo $row->first_name, ' ', $row->last_name; ?></td>
				</tr>
			</table>	
		</div>
	</div>

<?php
			}
 		break;
		
		default:
			header("Access Denied. Your access level is insufficient to view this page");
			break;
	}
	
?>
</body>
</html>