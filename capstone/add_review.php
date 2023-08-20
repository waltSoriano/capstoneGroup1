<?php
include 'config.php';

$username = $_POST['username'];
$rating = $_POST['rating'];
$comment = $_POST['comment'];

$sql = "INSERT INTO reviews (username, rating, comment, created_at) VALUES ('$username', '$rating', '$comment', NOW())";

if ($conn->query($sql) === TRUE) {
    echo "Review added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
