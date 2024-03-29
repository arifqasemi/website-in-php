<?php
 include "admin_area/connection.php";

 include "function.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="cart.css">

</head>
<body>
   <section class="header">
    <a href=""><img src="image/logo.png" alt=""></a>
        <div>
            <ul class="navbar">
            <li><a class="active" href="">Home</a></li>
            <li><a  href="shopping.php">Shop</a></li>
            <li><a  href="admin_area/admin.php">Admin page</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
            <li><a class="bag" href="cart.php"><i class="fa fa-basket-shopping" ></i></a><span class="number"><?php totalItem(); ?></span></li>
            <a class="close" href=""><i class="fa fa-times"></i></a>
            <a class="account" href="./user-area/profile.php"><i class="fa fa-user"></i></a>
        </ul>
        </div>
        <div class="bar">
            <a href=""><i class="fa fa-shopping-bag"></i></a>
            <i id="hamburger" class="fas fa-outdent hamburger"></i>
        </div>
    
    </section>

    <section class="hero">
        <div class="container">
        <div class="content">
        <h4>Trade in offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <P>Save more with coupons & up to 70% off!</P>
        <button class="btn">Shop Now</button>
    </div>
    <!-- <img src="/image/model1.png" alt=""> -->
    
</div>
    </section>

    <section class="feature section-p1">
        <div class="fe-box">
            <img src="image/icon1.png">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="image/icon2.png">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="image/icon5.png">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="image/icon4.png">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="image/icon2.png">
            <h6>F24/7Support</h6>
        </div>
        <div class="fe-box">
            <img src="image/diamond6.png">
            <h6>Free Shipping</h6>
        </div>

    </section>
     <section class="testing">
        <div class="test">
            
        </div>
     </section>
    <section class="product section-p1">
        <h2>Feature Products</h2>
        <p>Summer collecion New Modern Design</p>
        <div class="pro-container">
          <?php
        getProduct();
            ?>
        </div>
    </section>
    <section class="banner section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span>70% off</span> All the jewelry accessory</h2>
        <button class="btn">Explore More</button>
    </section>
    <section class="product section-p1">
        <h2>New Arrivals</h2>
        <p>Summer collecion New Modern Design</p>
        <!-- <div class="pro-container">
            <div class="pro">
                <img src="image/diamond7.png">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Engagement Daimond</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$100</h4>
                </div>
                <a ><i class="fa-solid fa-cart-arrow-down cart"></i></a>
            </div>
            <div class="pro">
                <img src="image/diamond7.png">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Engagement Daimond</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$100</h4>
                </div>
                <a ><i class="fa-solid fa-cart-arrow-down cart"></i></a>
            </div>
            <div class="pro">
                <img src="image/diamond7.png">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Engagement Daimond</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$100</h4>
                </div>
                <a ><i class="fa-solid fa-cart-arrow-down cart"></i></a>
            </div>
            <div class="pro">
                <img src="image/diamond7.png">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Engagement Daimond</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$100</h4>
                </div>
                <a ><i class="fa-solid fa-cart-arrow-down cart"></i></a>
            </div>
            <div class="pro">
                <img src="image/diamond7.png">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Engagement Daimond</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$100</h4>
                </div>
                <a><i class="fa-solid fa-cart-arrow-down cart"></i></a>
            </div>
            <div class="pro">
                <img src="image/diamond7.png">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Engagement Daimond</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$100</h4>
                </div>
                <a ><i class="fa-solid fa-cart-arrow-down cart"></i></a>
            </div>
            <div class="pro">
                <img src="image/diamond7.png">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Engagement Daimond</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$100</h4>
                </div>
                <a ><i class="fa-solid fa-cart-arrow-down cart"></i></a>
            </div>
            <div class="pro">
                <img src="image/diamond7.png">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Engagement Daimond</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$100</h4>
                </div>
                <a ><i class="fa-solid fa-cart-arrow-down cart"></i></a>
            </div>
            
        </div> -->
        <div class="pro-container">
          <?php
        getProduct();
            ?>
    </section>

    <section class="sm-banner section-p1">
        <div class="banner-box ">
     <h4>Crazy deals</h4>
     <h2>buy i get 1 free</h2>
     <span>The best classic dress is on sale at cara</span>
     <button class="btn1">Learn More</button>
    </div>
    <div class="banner-box ">
        <h4>Crazy deals</h4>
        <h2>buy i get 1 free</h2>
        <span>The best classic dress is on sale at cara</span>
        <button class="btn1">Learn More</button>
       </div>
    </section>

    <section class="banner3">
        <div class="banner-box ">
            <h2>buy i get 1 free</h2>
            <h3>Winter Collection -50% off</h3>
           </div>
           <div class="banner-box ">
            <h2>buy i get 1 free</h2>
            <h3>Winter Collection -50% off</h3>
           </div>
           <div class="banner-box ">
            <h2>buy i get 1 free</h2>
            <h3>Winter Collection -50% off</h3>
           </div>
    </section>

    <section class="newsletter section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletter</h4>
            <p>Get E-mail update About Your Latest Shop And <span>Special Offers.</span></p>
        </div>
         <div class="form">
            <Input type="text" placeholder="Your Email"></Input>
            <button class="btn1">Sign Up</button>
         </div>
    </section>
   

    <footer class="footer section-p1">
        
            <div class="Contact">
                <h3>Contact</h3>
                <p><span>Address:</span> 526 Wellingto Road Streat 32 San Francisco</p>
                <p><span>Phone:</span> +1222305/(+9)0345683516</p>
                <p><span>Hours:</span> 10.00-18.00,Mon-Son</p>
                <div class="follow">
                    <h3>Follow Us:</h3>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-youtube"></i>
                </div>

            </div>
            <div class="About">
                <h3>About</h3>
                <p>About Us</p>
                <p>Delivery Information</p>
                <p>Privacy Policy</p>
                <p>Terms & Condition</p>
                <p>Contact Us</p>

            </div>
            <div class="Instal-app">
                <h3>My Account</h3>
                <p>Sign In</p>
                <p>View Cart</p>
                <p>My Wishlist</p>
                <p>Track My Order</p>
                <p>Help</p>

            </div>
            <div class="My-account">
                <h3>Install App</h3>
                <p>From App Store Or Google Play</p>
                <div class="row">
                <img src="image/iconapp.png" alt="">
                <img src="image/iconapp1.png" alt="">
            </div>
               <p>Secure Payment Getways</p>
               <img src="image/pay.png" alt="">
            </div>
            <div class="copyright">
                <p>© 2022, Arif Sultani-HTML,CSS Ecommerce</p>
            </div>
    </footer>
   <script src="main.js"></script>
</body>
</html>