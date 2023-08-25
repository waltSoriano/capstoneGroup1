<?php

$sName = "localhost";
$uName = "u632695648_root";
$pass = "Matcha123!";
$db_name = "u632695648_auth_db";

try {
    $conn = new PDO ("mysql:host=$sName;dbname=$db_name", $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " .$e->getMessage();
}

?>