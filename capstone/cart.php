<?php
    function get_products_from_cart() {
        // Get the session variable that stores the shopping cart data.
        $cart = $_SESSION['cart'];
      
        // Initialize an empty array to store the products.
        $products = array();
      
        // Loop through the shopping cart data and add each product to the array.
        foreach ($cart as $key => $value) {
          $products[] = array(
            'product_id' => $key,
            'product_name' => $value['product_name'],
            'product_price' => $value['product_price'],
            'product_quantity' => $value['product_quantity'],
            'product_image' => $value['product_image'],
            'product_description' => $value['product_description'],
          );
        }
      
        // Return the array of products.
        return $products;
      }
?>

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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

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


<h1>Cart Page</h1>
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
$products = get_products_from_cart();
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
<br>
<a href="checkout.php">Proceed to checkout</a>

	

<!-- 
    <div class="cart_container">
        <h2>My Cart</h2>
        <?php
            $query = "SELECT * FROM product ORDER BY id ASC";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result)>0){

                while ($row = mysqli_fetch_array($result)){

              
        ?>

            <div class="col-md-3">
                <form action="cart.php?action=add&id=<?php echo $row["id"] ?>" method="post">
                    <div class="product">
                        <img src="<?php echo["image"];?>" alt="">
                        <h5 class="text-info"><?php $row["pname"]; ?></h5>
                        <h5 class="text-danger"><?php $row["price"]; ?></h5>
                        <input type="text" name="quantity" class="form-control" value="1">
                        <input type="hidden" name="hidden_name"<?php echo["pname"];?>>
                        <input type="hidden" name="hidden_price"<?php echo["price"];?>>
                        <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart">
                    </div>
                </form>
            </div>
            <?php 
            }
        }
            ?>
    </div>

    <div style="clear: both"></div>
    <h3 class="title2">SHOPPPING CART DETAILS</h3>
    <div class="table table-bordered">
        <tr>
            <th width="30%">Product</th>
            <th width="10%">Quantity</th>
            <th width="13%">Price Details</th>
            <th width="10%">Total Price</th>
            <th width="17%">Remove Item</th>
        </tr>
        <?php
        if(!empty($_SESSION["cart"])){
            $total = 0;
            foreach ($_SESSION["cart"] as $key => $value){
            ?>
        <tr>
            <td><?php echo $value["item_name"]; ?></td>
            <td><?php echo $value["item_quantity"]; ?></td>
            <td>$<?php echo $value["product_price"]; ?></td>
            <td>$ <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
            <td><a href="cart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span class="text-danger">Remove Item</span></a></td>
        </tr>   
        <?php
            $total = $total + ($value["item_quantity"] * $value["product_price"]);
        ?>
        <tr>
            <td colspan="3" align="right">Total</td>
            <th align="right">$ <?php echo number_format($total, 2);?></th>
        </tr>
        <?php
            }
        }
        ?>
    </div>
        </div>










 -->




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
</html