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
    <link rel="stylesheet" href="details.css">
    <link rel="stylesheet" href="cart.css">
</head>
<body>
    <section class="header">
        <a href=""><img src="/image/logo.png" alt=""></a>
            <div>
                <ul class="navbar">
                <li><a class="active" href="">Home</a></li>
                <li><a  href="shop.html">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="about.html">About</a></li>
                <li><a class="bag" href=""><i class="fa fa-basket-shopping"></i></a><span class="number">0</span></li>
                <a class="close" href=""><i class="fa fa-times"></i></a>
            </ul>
            </div>
            <div class="bar">
                <a href=""><i class="fa fa-shopping-bag"></i></a>
                <i id="hamburger" class="fas fa-outdent hamburger"></i>
            </div>
        
        </section>
   
   
    <section class="product-name  section-p1">
    <?php
      addToCart();
  
      productDetails();
       
      $ip = geIpAddress();  
      echo 'User Real IP Address - '.$ip;  
     ;
    ?>

    </section>
   
    <section class="product section-p1">
        <h2>Feature Products</h2>
        <p>Summer collecion New Modern Design</p>
        <div class="pro-container">
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
                <a href=""><i class="fa-solid fa-cart-arrow-down cart"></i></a>
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
                <a href=""><i class="fa-solid fa-cart-arrow-down cart"></i></a>
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
                <a href=""><i class="fa-solid fa-cart-arrow-down cart"></i></a>
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
                <a href=""><i class="fa-solid fa-cart-arrow-down cart"></i></a>
            </div>
            
            
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
    <section class="Cart">
        <div class="cart-container">
           <div class="cart-icon">
               <i class="fa fa-basket-shopping"> <span>Cart</span></i>
           </div>
           <div class="cart-details">
               <h3>Item</h3>
               <h3>Unit price</h3>
               <h3>Units</h3>
           </div>

           <div class="cartItem">
           <!-- <div class="cartItem-element">
               <div class="product-image">
               <img src="/image/diamon12.png" alt="">
               <h4>daimond</h4>
              </div>
               <p>12</p>
               <div class="product-unit">
                  <a class="lost"> <i class="fa fa-minus"></i></a>
                   <p>1</p>
                   <a><i class="fa fa-plus"></i></a>
               </div>
           </div> -->
       </div>
           <div class="cart-subtotal">
               <h3 class="subtotal">Subtotal <span>(Item)</span></h3>
               <h3>Proceed to CheckOut</h3>

           </div>
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
       <script src="details.js"></script>
      
</body>
</html>