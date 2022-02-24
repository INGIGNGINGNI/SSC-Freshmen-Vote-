<?php
$servername = "us-cdbr-east-05.cleardb.net";
$username = "b856bd9ca7f47d";
$password = "726fa9ad";
$dbname = "heroku_3dbe55d574660bf";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>