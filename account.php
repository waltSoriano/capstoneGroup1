<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matchaverse | Account </title>
    <!-- Css Link -->
    <link rel="stylesheet" href="style.css">


    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


</head>
<body>
    <header> 
        <a href="#" class="brand"><p>MATCHAVERSE</p></a>

        <ul class="navmenu">
            <li><a href="index.php" >Home</a></li>
            <li><a href="products.php">Products</a></li>
            
            <li><a href="giftcards.php">Giftcards</a></li>
        </ul>

        <div class="nav-icon">
 
            <a href="#" ><i class='bx bx-user' id="active"></i></a>
            <a href="#"><i class='bx bx-cart'></i></a>

   
        </div>
    </header>



    <section class="account">
        <div class="mycontainer" >
            <div class="row">
                    <div class="col"><img src="photos/Matcha (1).png" alt=""></div>
                    <form action="">
                        <div class="col" id="texts"> <h3 id="getstarted">Get started with <br>your account.</h3>
                            <div class="mb-3">
                                <label for="FormControlInput1" class="form-label">Email</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@gmail.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="FormControlInput1" class="form-label">Username</label>
                                <input type="email" name="user" class="form-control" id="exampleFormControlInput1" required>
                            </div>
                            <div class="mb-3">
                                <label for="inputPassword5" class="form-label">Password</label>&nbsp;
                                <input type="password" name="password" id="inputPassword5" class="form-control" aria-labelledby="passwordHelpBlock" required>
                                <div id="passwordHelpBlock" class="form-text">
                                Your password must be 8-20 characters long.
                                </div>
                            </div>
                                
                            <div class="mb-3">
                                <div class="col-12 accountBtn">
                                    <a href="#"><button class="btn btn-primary" type="submit">Register</button></a>
                                    <a href="#"><button class="btn btn-primary" type="submit">Login</button></a>
                                </div> 
                            </div>                 
                        </div>
                    </form>                            
            </div>
        </div>

    </section>


</section>


 



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