<?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'u632695648_root';
    $DATABASE_PASS = 'Matcha123!';
    $DATABASE_NAME = 'u632695648_auth_db';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
// Template header
function template_header($title) {
    // Get the number of items in the shopping cart, which will be displayed in the header.
$num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	</head>
	<body>
        <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="index.php"><img src="imgs/Matcha.png" alt="" width="250"></a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?page=products">Products</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="index.php?page=display_reviews">Reviews</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="index.php?page=FAQ">FAQ'S</a>
              </li>
            </ul>
  
            <div class="link-icons">
                      <a href="welcome.php"><i class='bx bx-user'></i></a>
                      <a href="index.php?page=cart">
                          <i class="fas fa-shopping-cart"><span>$num_items_in_cart</span></i>
                      </a>
            </div>
          </div>
        </div>
      </nav>
        </header>
        <main>
EOT;
}
// Template footer
function template_footer() {
$year = date('Y');
echo <<<EOT
        </main>
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
EOT;
}
?>