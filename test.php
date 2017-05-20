<?php
// error_reporting(0);
require 'db/connect.php';  // Connecting to the db

if($result = $db->query('SELECT * FROM users')) { 
    if($result->num_rows) {
        while($row = $result->fetch_object()) { // Fetches the results of the query as an object and iterates through each field
            echo 'User name: ', $row->usr_name, ' ', 'Access level: ', $row->access_lvl, '</br>';

        }
    }
}

/*if(!isset($_SESSION['login'])) { //if login in session is not set
    header("Location: http://www.example.com/login.php");
}*/

?>