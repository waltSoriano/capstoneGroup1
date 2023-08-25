<?php
include 'config.php';

$sql = "SELECT * FROM reviews ORDER BY created_at DESC";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
<title>Reviews</title>
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
            margin-bottom: 15px;
            background-color: #f9f9f9;
            display: flex;
            flex-direction: column;
            border: 1px solid darkgreen;
            width: 50%;
            margin-left: 25%;
            border-radius: 10px;
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
            border-radius: 10px;
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
        #closeModal{
            margin-left: 5px;
        }
        .rating {
            padding-top: 10px;
            padding-bottom: 15px;
        }
        .rating h3 {
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <?=template_header('')?>

    <div class="testimonial" style="margin-bottom: 100px; text-align: center;">

        <h2 style="margin-bottom: 20px;">Reviews</h2>
            <div class="small-container" style="padding-top: 25px;">
                <div class="row">
                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>
                        <p>Detoxification: Chlorophyll, the green pigment in matcha, support natural detoxification processes in the body by aiding in the elimination of toxins.</p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <img src="imgs/image1.jpg" alt="This is a photo of a person.">
                            <h3>Walt </h3>
                        </div>
                    </div>
                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>
                        <p>Skin Health: The antioxidants in matcha may help protect the skin from UV damage, improve skin elasticity, and promote a healthy complexion.</p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <img src="imgs/image2.jpg" alt="This is a photo of a person.">
                            <h3>Kristine</h3>
                        </div>
                    </div>
                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>
                        <p>Brain Health: Matcha's combination of caffeine and L-theanine may support cognitive function, memory, and overall brain health.</p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <img src="imgs/image4.jpg" alt="This is a photo of a person.">
                            <h3>Rusell</h3>
                        </div>
                    </div>
                </div>
            </div>    
    </div>

    <section class="contact" style="margin-top: 50px;">
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
