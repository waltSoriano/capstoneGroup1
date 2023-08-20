
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matchaverse</title>
    <!-- Css Link -->
    <link rel="stylesheet" href="style.css">
    

    <!-- bootstrap linked -->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- google fonts linked -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <!-- NAVIGATION BAR -->
    <div class="navigationbar">
    <div class="container">
        <div class="row ">
            <div class="col" id="col1">
                <img src="./photos/logo.png" alt="this is a logo">
                <li><a href="#" class="brand">matchaverse</a></li>
                
            </div>
            <div class="col-6" id="col2">
                <li><a href="#" class="active">home</a></li>
                <li><a href="pages/products.php">products</a></li>
                <li><a href="pages/reviews.php">reviews</a></li>
                <li><a href="pages/faq's.php">faq's</a></li>

            </div>
            <div class="col" id="col3">
                <li><a href="pages/favourites.php"><i class='bx bx-heart'></i></a></li>
                <li><a href="pages/account.php"><i class='bx bx-user'></i></a></li>
                <li><a href=""><i class='bx bx-cart'></i></a></li>
            </div>
        </div>
    </div>
    </div>


    <!-- LANDING PAGE -->

    <!-- FIRST DIV -->
    <div class="first_div">
            <div class="motto">
                <p >
                    Fuel your day: <br>
                    Matcha-powered <br>
                    awesomeness!
                </p>
                <a href=""><p>Shop Now</p></a>
                
            </div>    
    </div>
        
    <!-- SECOND DIV -->

    <!-- categories products -->

    <div class="collection-products">
        <div class="second_div">
            <div class="img">
                    <img src="photos/spoon.jpg" alt="This is photo of a spoon.">
            </div>
            <div class="img">
                    <img src="photos/whisk.jpg" alt="This is a photo of a wooden whisk" >
            </div>
            <div class="img">
                    <img src="photos/powder.jpg" alt="This is a photo of a powder.">
            </div>
        </div>
    </div>
   

    <!-- Featured Collections -->
    <div class="featured_collections4">
        <div class="center-text">
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
                
                <div class="rating" id="text">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half' ></i>
                    <i class='bx bx-star'></i>
                </div>
                <h2 class="production-title" id="text">Glass Jar Mug</h2>
                <span class="price" id="text">₱ 145.00</span>
                <a href="account.html" id="text"><i class="bx bx-shopping-bag add-cart"></i></a>
                
            </div>


            <!-- box 2 -->
            <div class="product-box">
                <!-- <div class="product-text">
                    <h5>Sale</h5>
                </div> -->
                
                <img src="photos/ceremonial.jpg" alt="" class="product-image">
                
                <div class="rating" id="text">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    
                    
                </div>
                <h2 class="production-title" id="text">Ceremonial Matcha Powder</h2>
                <span class="price" id="text">₱ 120.00 per 100g</span>
                <a href="account.html" id="text"><i class="bx bx-shopping-bag add-cart"></i></a>
                
            </div>

            <!-- box 3 -->
            <div class="product-box">
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                
                <img src="photos/rabbit mug.jpg" alt="" class="product-image">
                
                <div class="rating" id="text">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    
                </div>
                <h2 class="production-title" id="text">Rabbit Mug</h2>
                <span class="price" id="text">₱ 200.00</span>
                <a href="account.html" id="text"><i class="bx bx-shopping-bag add-cart"></i></a>
                
            </div>
            <!-- box 4 -->
            <div class="product-box">
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                
                <img src="photos/genmaicha.png" alt="" class="product-image">
                
                <div class="rating" id="text">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                </div>
                <h2 class="production-title" id="text">Genmaicha Powder</h2>
                <span class="price" id="text">₱ 105.00 per 100g</span>
                <a href="account.html" id="text"><i class="bx bx-shopping-bag add-cart"></i></a>
                
            </div> 
        </div>

</div>

<!-- Testimonials -->
<div class="testimonial">
    <div class="center-text">
        <h2>Reviews</h2>
    </div>
    <div class="small-container">
        <div class="myrow">
            <div class="column">
                <i class="fa fa-quote-left"></i>
                <p>I really love matcha. It has a lot of health benefits. I am glad that this website offers quality products.</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <img src="photos/person1.JPG" alt="This is a photo of a person.">
                    <h3>Walt </h3>
                </div>
            </div>
            <div class="column">
                <i class="fa fa-quote-left"></i>
                <p>I didn't expect that these are quality products. They are so much affordable.</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <img src="photos/person1.JPG" alt="This is a photo of a person.">
                    <h3>Kurt</h3>
                </div>
            </div>
            <div class="column">
                <i class="fa fa-quote-left"></i>
                <p>I really love the color red. I wish that next time you will have products in red colors.</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <img src="photos/person1.JPG" alt="This is a photo of a person.">
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
