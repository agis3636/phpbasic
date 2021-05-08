<?php 

require "config.php";

    $conn = new mysqli($HOST, $USER, $PASSWORD, $DB_NAME);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

?>