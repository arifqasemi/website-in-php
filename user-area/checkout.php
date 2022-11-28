<?php
include "../admin_area/connection.php";
// include "../function.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="../cathegory.css">
</head>
<body>
   <section class="header">
    <a href=""><img src="/image/logo.png" alt=""></a>
        <div>
            <ul class="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a class="active" href="shopping.php">Shop</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
            <a class="close" href=""><i class="fa fa-times"></i></a>
        </ul>
        </div>
        <div class="bar">
            <a href=""><i class="fa fa-shopping-bag"></i></a>
            <i id="hamburger" class="fas fa-outdent hamburger"></i>
        </div>
    
    </section>
    <section class="checkout">
   

<!-- <div class="container1"> -->
<?php
        if(!isset($_SESSION['fullname'])){
     include('userRegisteration.php');
        }else{
            include('payment.php');
        }
       ?>
<!-- </div> -->
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
    <script>
        

     </script>
    <script src="main.js"></script>
    <!-- <script src="shop.js"></script> -->

</body>
</html>