<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "win";

$conn = new mysqli($servername, $username, $password, $database);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
?>