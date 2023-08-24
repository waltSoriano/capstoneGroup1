<?php 
function get_products_from_database() {
    // Connect to the database.
    $conn = new mysqli('localhost', 'root', '', 'capstone');
  
    // Check if the connection was successful.
    if ($conn->connect_error) {
      die('Connection failed: ' . $conn->connect_error);
    }
  
    // Get all of the products from the database.
    $sql = 'SELECT * FROM products';
    $result = $conn->query($sql);
  
    // Check if there were any products returned.
    if ($result->num_rows > 0) {
      // Initialize an empty array to store the products.
      $products = array();
  
      // Loop through the results and add each product to the array.
      while ($row = $result->fetch_assoc()) {
        $products[] = array(
          'product_id' => $row['product_id'],
          'product_name' => $row['product_name'],
          'product_price' => $row['product_price'],
          'product_quantity' => $row['product_quantity'],
          'product_image' => $row['product_image'],
          'product_description' => $row['product_description'],
        );
      }
  
      // Return the array of products.
      return $products;
    } else {
      // Return an empty array if there were no products returned.
      return array();
    }
  }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Matchaverse | Products</title>
        <!-- Css Link -->
        <link rel="stylesheet" href="style.css">
    
    
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
        <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    
    
    </head>
    <body>
        <header> 
            <a href="index.php" class="brand"><img src="photos/Matcha.png" alt="" width="250"></a>
    
            <ul class="navmenu">
                <li><a href="index.php" >Home</a></li>
                <li><a href="#" class="active">Products</a></li>
                <li><a href="display_reviews.php">Reviews</a></li>
                <li><a href="FAQ.php">FAQ</a></li>
            </ul>
    
            <div class="nav-icon">
                
                <a href="welcome.php"><i class='bx bx-user'></i></a>
                <a href="#"><i class='bx bx-cart'></i></a>
    
                
            </div>
            
        </header>
        <header class="header2"> 
            
    
            <ul class=" categories">
                <li><a href="" class="pactive" >All products</a></li>
                <li><a href="matchapowder.php" >Matcha Powders</a></li>
                <li><a href="whisks.php" >Whisks</a></li>
                <li><a href="mugs.php">Mugs/Glasses</a></li>
                <li><a href="coasters.php">Coasters</a></li>
                <li><a href="spoons.php">Spoons</a></li>
                <li><a href="plates.php">Plates</a></li>
                <li><a href="straws.php">Straws</a></li>
                <li><a href="frothers.php">Frothers</a></li>
                
            </ul>
    
            
            
        </header>

        <br>
        <br>
        <br>
        <br>

        <!-- Shop -->



<h1>Products Page</h1>
<table>
<tr>
<th>Product ID</th>
<th>Product Name</th>
<th>Product Price</th>
<th>Product Quantity</th>
<th>Product Image</th>
<th>Product Description</th>
</tr>
<?php
$products = get_products_from_database();
foreach ($products as $product) {
?>
<tr>
<td><?php echo $product['product_id']; ?></td>
<td><?php echo $product['product_name']; ?></td>
<td><?php echo $product['product_price']; ?></td>
<td><?php echo $product['product_quantity']; ?></td>
<td><?php echo $product['product_image']; ?></td>
<td><?php echo $product['product_description']; ?></td>
</tr>
<?php
}
?>
</table>


        
     <!-- first products row -->         
     <section class="shop-container">
            
        <!-- content -->
        <div class="shop-content">
            <!-- box 1 -->
            <div class="product-box">
                <!-- <div class="product-text">
                    <h5>Sale</h5>
                </div> -->
                
                <img src="photos/ceremonial.jpg" alt="" class="product-image">
                <div class="heart-icon">
                    <a href="account.php"><i class="bx bx-heart"></i></a>
                </div>
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    
                    
                </div>
                <h2 class="production-title">Ceremonial Matcha Powder</h2>
                <span class="price">₱ 120.00 per 100g</span>
                <div class="myDIV">Description</div>

                <a href="account.php"><i class="bx bx-shopping-bag add-cart"></i></a>
            </div>


            <!-- box 2 -->
            <div class="product-box">
                <!-- <div class="product-text">
                    <h5>Sale</h5>
                </div> -->
                
                <img src="photos/premium.jpg" alt="" class="product-image">
                <div class="heart-icon">
                    <a href="account.php"><i class="bx bx-heart"></i></a>
                </div>
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half' ></i>
                    <i class='bx bx-star'></i>
                </div>
                <h2 class="production-title">Premium Matcha Powder</h2>
                <span class="price">₱ 100.00 per 100g</span>
                <div class="myDIV">Description</div>

                <a href="account.php"><i class="bx bx-shopping-bag add-cart"></i></a>
            </div>

            <!-- box 3 -->
            <div class="product-box">
                <!-- <div class="product-text">
                    <h5>Sale</h5>
                </div> -->
                
                <img src="photos/culinary.jpg" alt="" class="product-image">
                <div class="heart-icon">
                    <a href="account.php"><i class="bx bx-heart"></i></a>
                </div>
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half' ></i>
                    
                </div>
                <h2 class="production-title">Culinary Matcha Powder</h2>
                <span class="price">₱ 95.00 per 100g</span>
                <div class="myDIV">Description</div>
                <a href="account.php"><i class="bx bx-shopping-bag add-cart"></i></a>
            </div>
            <!-- box 4 -->
            <div class="product-box">
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                
                <img src="photos/Hojicha.jpg" alt="" class="product-image">
                <div class="heart-icon">
                    <a href="account.php"><i class="bx bx-heart"></i></a>
                </div>
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half' ></i>
                    <i class='bx bx-star'></i>
                </div>
                <h2 class="production-title">Hojicha Powder</h2>
                <span class="price">₱ 105.00 per 100g</span>
                <div class="myDIV">Description</div>
                <a href="account.php"><i class="bx bx-shopping-bag add-cart"></i></a>
            </div>
            <!-- box 5 -->
            <div class="product-box">
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                
                <img src="photos/genmaicha.png" alt="" class="product-image">
                <div class="heart-icon">
                    <a href="account.php"><i class="bx bx-heart"></i></a>
                </div>
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                </div>
                <h2 class="production-title">Genmaicha Powder</h2>
                <span class="price">₱ 105.00 per 100g</span>
                <div class="myDIV">Description</div>
                <a href="account.php"><i class="bx bx-shopping-bag add-cart"></i></a>
            </div>
             
           
        </div>





        </section>



        <!-- second products row -->         
        <section class="shop-container">
            
            <!-- content -->
            <div class="shop-content">
                <!-- box 1 -->
                <div class="product-box">
                    <div class="product-text">
                        <h5>Sale</h5>
                    </div>
                    
                    <img src="photos/glass jar mug.jpg" alt="" class="product-image">
                    <div class="heart-icon">
                        <a href="account.php"><i class="bx bx-heart"></i></a>
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
                    <div class="myDIV">Description</div>
                    <a href="account.php"><i class="bx bx-shopping-bag add-cart"></i></a>
                </div>


                <!-- box 2 -->
                <div class="product-box">
                    <!-- <div class="product-text">
                        <h5>Sale</h5>
                    </div>
                     -->
                    <img src="photos/limegreenmug.jpg" alt="" class="product-image">
                    <div class="heart-icon">
                        <a href="account.php"><i class="bx bx-heart"></i></a>
                    </div>
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half' ></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                    </div>
                    <h2 class="production-title">Lime Green Mug</h2>
                    <span class="price">₱ 120.00</span>
                    <div class="myDIV">Description</div>
                    <a href="account.php"><i class="bx bx-shopping-bag add-cart"></i></a>
                </div>

                <!-- box 3 -->
                <div class="product-box">
                    <div class="product-text">
                        <h5>Sale</h5>
                    </div>
                    
                    <img src="photos/rabbit mug.jpg" alt="" class="product-image">
                    <div class="heart-icon">
                        <a href="account.php"><i class="bx bx-heart"></i></a>
                    </div>
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        
                    </div>
                    <h2 class="production-title">Rabbit Mug</h2>
                    <span class="price">₱ 200.00</span>
                    <div class="myDIV">Description</div>
                    <a href="account.php"><i class="bx bx-shopping-bag add-cart"></i></a>
                </div>
                <!-- box 4 -->
                <div class="product-box">
                    <!-- <div class="product-text">
                        <h5>Sale</h5>
                    </div> -->
                    
                    <img src="photos/whitemug2.jpg" alt="" class="product-image">
                    <div class="heart-icon">
                        <a href="account.php"><i class="bx bx-heart"></i></a>
                    </div>
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half' ></i>
                        
                    </div>
                    <h2 class="production-title">White Mug</h2>
                    <span class="price">₱ 105.00</span>
                    <div class="myDIV">Description</div>
                    <a href="account.php"><i class="bx bx-shopping-bag add-cart"></i></a>
                </div>
                <!-- box 5 -->
                <div class="product-box">
                    <div class="product-text">
                        <h5>Sale</h5>
                    </div>
                    
                    <img src="photos/glass mug.jpg" alt="" class="product-image">
                    <div class="heart-icon">
                        <a href="account.php"><i class="bx bx-heart"></i></a>
                    </div>
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bx-star'></i>
                    </div>
                    <h2 class="production-title">Glass Mug</h2>
                    <span class="price">₱ 145.00</span>
                    <div class="myDIV">Description</div>
                    <a href="account.php"><i class="bx bx-shopping-bag add-cart"></i></a>
                </div>
                 
               
            </div>





        </section>

   

        <!-- third products row -->         
        <section class="shop-container">
        
            <!-- content -->
            <div class="shop-content">
                <!-- box 1 -->
                <div class="product-box">
                    <!-- <div class="product-text">
                        <h5>Sale</h5>
                    </div> -->
                    
                    <img src="photos/corkcoasters.webp" alt="" class="product-image">
                    <div class="heart-icon">
                        <a href="account.php"><i class="bx bx-heart"></i></a>
                    </div>
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        
                        
                    </div>
                    <h2 class="production-title">Cork Coasters</h2>
                    <span class="price">₱ 130.00</span>
                    <a href="account.php"><i class="bx bx-shopping-bag add-cart"></i></a>
                </div>
    
    
                <!-- box 2 -->
                <div class="product-box">
                    <!-- <div class="product-text">
                        <h5>Sale</h5>
                    </div> -->
                    
                    <img src="photos/beachresincoaster.jpg" alt="" class="product-image">
                    <div class="heart-icon">
                        <a href="account.php"><i class="bx bx-heart"></i></a>
                    </div>
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half' ></i>
                        <i class='bx bx-star'></i>
                    </div>
                    <h2 class="production-title">Beach Resin Coaster</h2>
                    <span class="price">₱ 100</span>
                    <a href="account.php"><i class="bx bx-shopping-bag add-cart"></i></a>
                </div>
    
                <!-- box 3 -->
                <div class="product-box">
                    <!-- <div class="product-text">
                        <h5>Sale</h5>
                    </div> -->
                    
                    <img src="photos/colorfulstraws.jpg" alt="" class="product-image">
                    <div class="heart-icon">
                        <a href="account.php"><i class="bx bx-heart"></i></a>
                    </div>
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half' ></i>
                        
                    </div>
                    <h2 class="production-title">Colorful Metal Straws</h2>
                    <span class="price">₱ 50.00</span>
                    <a href="account.php"><i class="bx bx-shopping-bag add-cart"></i></a>
                </div>
                <!-- box 4 -->
                <div class="product-box">
                    <div class="product-text">
                        <h5>Sale</h5>
                    </div>
                    
                    <img src="photos/featherspoon.jpg" alt="" class="product-image">
                    <div class="heart-icon">
                        <i class="bx bx-heart"></i>
                    </div>
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half' ></i>
                        <i class='bx bx-star'></i>
                    </div>
                    <h2 class="production-title">Feather Spoon</h2>
                    <span class="price">₱ 60.00 </span>
                    <a href="account.php"><i class="bx bx-shopping-bag add-cart"></i></a>
                </div>
                <!-- box 5 -->
                <div class="product-box">
                    <div class="product-text">
                        <h5>Sale</h5>
                    </div>
                    
                    <img src="photos/glossyblackplate.jpg" alt="" class="product-image">
                    <div class="heart-icon">
                        <i class="bx bx-heart"></i>
                    </div>
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bx-star'></i>
                        <i class='bx bx-star'></i>
                    </div>
                    <h2 class="production-title">Glossy Black Plate</h2>
                    <span class="price">₱ 125.00</span>
                    <a href="account.php"><i class="bx bx-shopping-bag add-cart"></i></a>
                </div>
                    
                
            </div>
    
    
    
    
    
        </section>
        




<!-- Footer -->

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