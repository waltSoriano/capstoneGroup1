<!DOCTYPE html>
<html>
<head>
    <title>Review System</title>
</head>
<body>
    <h2>Add a Review</h2>
    <form action="add_review.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>
        <label for="rating">Rating:</label>
        <input type="number" name="rating" min="1" max="5" required><br>
        <label for="comment">Comment:</label>
        <textarea name="comment" required></textarea><br>
        <button type="submit">Submit Review</button>
    </form>
</body>
</html>
