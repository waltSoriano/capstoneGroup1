<?php
// Get the 4 most recently added products
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT 4');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<?=template_header('Home')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<section class="main-home">
        <div class="main-text">
            <h5>Enjoy a much more healthier caffeine.</h5>
            <p>Matcha, a Japanese green tea powder made from green tea leaves from the Camellia Sinensis plant.<br> This is the same plant that green tea is from. However, matcha is grown and processed different than <br>regular green tea.</p>
            <br>
            <div class="main-button" style="margin-top: 15px;">
                <a href="index.php?page=products" class="main-btn"> Shop Now &#8594;</a>
            </div>
        </div>
        
        
    </section>
    
<!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "106842132518937");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v17.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- categories products -->

    <section class="collection-products">
        <div class="center-text">
            <h2>Collections</h2>
        </div>

        <div class="products">
            <div class="row">
                <div class="col-3">
                    <img src="imgs/spoon.jpg" alt="This is photo of a spoon.">
                </div>
                <div class="col-3">
                    <img src="imgs/whisk.jpg" alt="This is a photo of a wooden whisk"></div>
                <div class="col-3">
                    <img src="imgs/powder.jpg" alt="This is a photo of a powder.">
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
            <div class="product-box" style="padding: 10px; border-radius: 10px;">
               
                
                <img src="imgs/glass jar mug.jpg" alt="" class="product-image">
               <!-- <div class="heart-icon">
                    <a href="account.php"><i class="bx bx-heart"></i></a>
                </div> -->
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half' ></i>
                    <i class='bx bx-star'></i>
                </div>
                <h2 class="production-title">Glass Jar Mug</h2>
                <span class="price">₱ 145.00</span>
                <a href="index.php?page=products"><i class="bx bx-shopping-bag add-cart"></i></a>
                
            </div>


            <!-- box 2 -->
            <div class="product-box" style="padding: 10px; border-radius: 10px;">
               
                
                <img src="imgs/culinary.jpg" alt="" class="product-image">
                
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    
                    
                </div>
                <h2 class="production-title">Ceremonial Matcha Powder</h2>
                <span class="price">₱ 120.00 per 100g</span>
                <a href="index.php?page=products"><i class="bx bx-shopping-bag add-cart"></i></a>
                
            </div>

            <!-- box 3 -->
            <div class="product-box" style="padding: 10px; border-radius: 10px;">
                
                
                <img src="imgs/rabbit mug.jpg" alt="" class="product-image">
                
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    
                </div>
                <h2 class="production-title">Rabbit Mug</h2>
                <span class="price">₱ 200.00</span>
                <a href="index.php?page=products"><i class="bx bx-shopping-bag add-cart"></i></a>
                
            </div>
            <!-- box 4 -->
            <div class="product-box" style="padding: 10px; border-radius: 10px;">
                
                
                <img src="imgs/genmatcha.png" alt="" class="product-image">
               
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                </div>
                <h2 class="production-title">Genmatcha Powder</h2>
                <span class="price">₱ 300.00 per 100g</span>
                <a href="index.php?page=products"><i class="bx bx-shopping-bag add-cart"></i></a>
                
            </div>
             
           
           
        </div>





    </section>

<!-- Testimonials -->
<div class="testimonial">
    <div class="client-reviews">
        <h2 style="font-size: 25px; margin-bottom: 10px;">Reviews</h2>
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


</body>
</html>

<?=template_footer()?>
