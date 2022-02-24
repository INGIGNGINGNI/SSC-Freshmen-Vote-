<?php
    $servername = "us-cdbr-east-05.cleardb.net";
    $username = "b856bd9ca7f47d";
    $password = "726fa9ad";
    $dbname = "heroku_3dbe55d574660bf";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>