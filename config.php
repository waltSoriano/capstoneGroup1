<?php
$hostname = "localhost"; // Change this if your MySQL server is on a different host
$username = "u632695648_root";
$password = "Matcha123!";
$dbname = "u632695648_auth_db";

$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
