<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matchaverse</title>
    <!-- Css Link -->
    <link rel="stylesheet" href="style.css">
    


    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">


</head>
<body>
    <header> 
        <a href="#" class="brand"><img src="photos/Matcha.png" alt="" width="250"></a>

        <ul class="navmenu">
            <li><a href="#" class="active">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="display_reviews.php">Reviews</a></li>
            <li><a href="FAQ.php">FAQ</a></li>
        </ul>

        <div class="nav-icon">
            
            <a href="welcome.php"><i class='bx bx-user'></i></a>
            <a href="#"><i class='bx bx-cart'></i></a>

           
        </div>
    </header>

    <section class="main-home">
        <div class="main-text">
            <h5>Enjoy a much more healthier caffeine.</h5>
            <p>Matcha, a Japanese green tea powder made from green tea leaves from the Camellia Sinensis plant.<br> This is the same plant that green tea is from. However, matcha is grown and processed different than <br>regular green tea.</p>
            
            <div class="main-button">
                <a href="products.php" class="main-btn"> Shop Now &#8594;</a>
            </div>
        </div>
        
        <!-- <div class="down-arrow">
            <a href="#trending" class="down"> <i class='bx bx-down-arrow-alt'></i></a>
        </div> -->
    </section>
    

    <!-- categories products -->

    <section class="collection-products" id="trending">
        <div class="center-text">
            <h2>Collections</h2>
        </div>

        <div class="products">
            <div class="row">
                <div class="col-3">
                    <img src="photos/spoon.jpg" alt="This is photo of a spoon.">
                </div>
                <div class="col-3">
                    <img src="photos/whisk.jpg" alt="This is a photo of a wooden whisk"></div>
                <div class="col-3">
                    <img src="photos/powder.jpg" alt="This is a photo of a powder.">
                </div>
                </div>
            </div>
        </div>       
    </section>

    <!-- Featured Collections -->

    <section class="shop-container">
            <div class="center-text" style="margin-bottom: 20px">
                <h2>Featured Products</h2>
            </div>
        <!-- content -->
        <div class="shop-content">
            <!-- box 1 -->
            <div class="product-box">
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                
                <img src="photos/glass jar mug.jpg" alt="" class="product-image">
                <div class="heart-icon">
                    <a href="account.html"><i class="bx bx-heart"></i></a>
                </div>
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half' ></i>
                    <i class='bx bx-star'></i>
                </div>
                <h2 class="production-title">Glass Jar Mug</h2>
                <span class="price">₱ 145.00</span>
                <a href="account.html"><i class="bx bx-shopping-bag add-cart"></i></a>
                
            </div>


            <!-- box 2 -->
            <div class="product-box">
                <!-- <div class="product-text">
                    <h5>Sale</h5>
                </div> -->
                
                <img src="photos/ceremonial.jpg" alt="" class="product-image">
                
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    
                    
                </div>
                <h2 class="production-title">Ceremonial Matcha Powder</h2>
                <span class="price">₱ 120.00 per 100g</span>
                <a href="account.html"><i class="bx bx-shopping-bag add-cart"></i></a>
                
            </div>

            <!-- box 3 -->
            <div class="product-box">
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                
                <img src="photos/rabbit mug.jpg" alt="" class="product-image">
                
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    
                </div>
                <h2 class="production-title">Rabbit Mug</h2>
                <span class="price">₱ 200.00</span>
                <a href="account.php"><i class="bx bx-shopping-bag add-cart"></i></a>
                
            </div>
            <!-- box 4 -->
            <div class="product-box">
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                
                <img src="photos/genmaicha.png" alt="" class="product-image">
               
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                </div>
                <h2 class="production-title">Genmaicha Powder</h2>
                <span class="price">₱ 105.00 per 100g</span>
                <a href="account.php"><i class="bx bx-shopping-bag add-cart"></i></a>
                
            </div>
             
           
           
        </div>





    </section>

<!-- Testimonials -->
<div class="testimonial">
    <div class="client-reviews">
        <h2>Reviews</h2>
    </div>
    <div class="small-container">
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
                    <img src="photos/image1.JPG" alt="This is a photo of a person.">
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
                    <img src="photos/image2.JPG" alt="This is a photo of a person.">
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
                    <img src="photos/image3.JPG" alt="This is a photo of a person.">
                    <h3>Rusell</h3>
                </div>
            </div>
        </div>
    </div>
</div>


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
