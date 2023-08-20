<?php
include 'config.php';

$sql = "SELECT * FROM reviews ORDER BY created_at DESC";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
<title>Matchaverse</title>
    <!-- Css Link -->
    <link rel="stylesheet" href="style.css">
    


    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .review {
            padding: 10px;
            margin-bottom: 10px;
            background-color: #f9f9f9;
        }
        .review strong {
            color: #333;
        }
        .rating {
            color: #f39c12;
            font-weight: bold;
        }
        .no-reviews {
            text-align: center;
            margin-top: 20px;
        }
        /* Styles for modal trigger button */
        .modal-trigger {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            margin-bottom: 20px;
            margin-left: 25px;
        }

        /* Styles for the modal overlay */
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 1000;
            padding: 10px;

        }

        /* Styles for the modal content */
        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            margin: 0 auto;
            align-items: center;
            gap: 5px;
        }
        .modal-content input {
            padding: 5px;
            margin-bottom: 2px;
        }
    </style>
</head>
<body>
<header> 
        <a href="#" class="brand"><img src="photos/Matcha.png" alt="" width="250"></a>

        <ul class="navmenu">
            <li><a href="index.php" >Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="#" class="active">Reviews</a></li>
            <li><a href="FAQ.php">FAQ</a></li>
        </ul>

        <div class="nav-icon">
            
            <a href="welcome.php"><i class='bx bx-user'></i></a>
            <a href="#"><i class='bx bx-cart'></i></a>

           
        </div>
    </header>

    <div class="testimonial" style="margin-bottom: 110px; text-align: center">

    <h2>Reviews</h2>
    <?php if ($result->num_rows > 0) : ?>
        <?php while ($row = $result->fetch_assoc()) : ?>
            <div class="review">
                <p><strong>Username:</strong> <?php echo $row['username']; ?></p>
                <p><strong>Rating:</strong> <span class="rating"><?php echo $row['rating']; ?></span></p>
                <p><strong>Comment:</strong> <?php echo $row['comment']; ?></p>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <div class="no-reviews">
            No reviews yet.
        </div>
    <?php endif; ?>
</div>

<button class="modal-trigger" id="openModal">Add a Review</button>

    <!-- Modal Overlay -->
    <div class="modal-overlay" id="modalOverlay">
        <!-- Modal Content -->
        <div class="modal-content">
            <h2>Add a Review</h2>
            <form action="add_review.php" method="post" style="padding: 5px; gap: 10px">
                <label for="username">Username:</label>
                <input type="text" name="username" required><br>
                <label for="rating">Rating:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="number" name="rating" min="1" max="5" required><br>
                <label for="comment">Comment:</label>
                <textarea name="comment" required></textarea><br>
                <button type="submit">Submit Review</button>
            </form>
            <button id="closeModal">Close</button>
        </div>
    </div>

    <script>
        const openModalButton = document.getElementById('openModal');
        const closeModalButton = document.getElementById('closeModal');
        const modalOverlay = document.getElementById('modalOverlay');

        openModalButton.addEventListener('click', () => {
            modalOverlay.style.display = 'flex';
        });

        closeModalButton.addEventListener('click', () => {
            modalOverlay.style.display = 'none';
        });
    </script>

    <section class="contact">
    <div class="contact-info">
        <div class="first-info">
            <h2 class="brandF">MATCHAVERSE</h2>

            <p>Sandico Street, <br> Baguio City, Phillipines</p>
            <p>09090909099</p>
            <p>matchaverse@gmail.com</p>
            <a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i> </a>
            <a href="https://www.twitter.com/"><i class="bx bxl-twitter"></i> </a>
            <a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i> </a>
            <a href="https://www.tiktok.com/"><i class='bx bxl-tiktok'></i></a>
            <a href="https://www.pinterest.com/"><i class='bx bxl-pinterest'></i></a>
        </div>
    
    
    <div class="second-info">
        <h3 class="aboutus">About Us</h3>
        <p>We started this eccomerse website at year 2023. We sell matcha powders and matcha products directly from our suppliers. This is an eccomerce website business with no physical store.</p>
    </div>

    
    <div class="links">
        <h3 class="links">Links</h3>
        <a href="#">Coupons</a> <br>
        <a href="#">Blog Post</a><br>
        <a href="#">Return Policy</a><br>
        <a href="#">Join Affiliate</a><br>
    </div>
</div>
<hr>
<p class="copyright">© 2023 - MATCHAVERSE</p>
</section>
</body>
</html>
