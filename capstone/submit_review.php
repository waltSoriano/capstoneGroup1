<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $rating = $_POST["rating"];
    $review = $_POST["review"];
    
    $reviewData = "Name: $name\nRating: $rating stars\nReview: $review\n\n";
    
    // Path to the text file where reviews will be stored
    $filePath = "reviews.txt";
    
    // Open the file in append mode and write the review data
    $file = fopen($filePath, "a");
    fwrite($file, $reviewData);
    fclose($file);
    
    echo "Thank you for submitting your review!";
} else {
    echo "Invalid request.";
}
?>
