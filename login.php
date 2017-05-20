<?php
	session_start(); // Starting Session
	$error=''; // Variable To Store Error Message
	if (isset($_POST['submit'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Please enter a username and password";
		} else {
		// Define $username and $password
		$username=$_POST['username'];
		$password=$_POST['password'];
		// Calls the 'connect.php' to connect to the database and select the database
		require 'db/connect.php'; 
		// To protect MySQL injection for Security purpose
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
		/*// Selecting Database
		$db = mysql_select_db("company", $connection);*/
		// SQL query to fetch information of registerd users and finds user match.
		$result = $db->query("SELECT * FROM `users` WHERE 'usr_pwd'='$password' AND 'usr_name'='$username'");
		if ($result->num_rows == 1) {
			$_SESSION['login_user']=$username; // Initializing Session
			header("location: test.php"); // Redirecting To Other Page
		} else {
			$error = "Username or Password is invalid";
		}
		mysqli_close($db); // Closing Connection
		}
	}
?>