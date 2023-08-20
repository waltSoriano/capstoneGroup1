<?php
$hostname = "localhost"; // Change this if your MySQL server is on a different host
$username = "root";
$password = "";
$dbname = "auth_db";

$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
