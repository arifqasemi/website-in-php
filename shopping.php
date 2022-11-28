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
    <link rel="stylesheet" href="cathegory.css">
</head>
<body>
   <section class="header">
    <a href=""><img src="/image/logo.png" alt=""></a>
        <div>
            <ul class="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a class="active" href="">Shop</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
            <form method="post" class="form">
            <li><input type="text" name="inputValue" class="searchInput" placeholder="Search Product"></li>
             <button type="submit" name="search" class="btn2" >Search</button>
            </form>
            <li><a class="bag" href="cart.php"><i class="fa fa-basket-shopping"></i></a><span class="number"><?php totalItem(); ?></span></li>
            <a class="close" href=""><i class="fa fa-times"></i></a>
        </ul>
        </div>
        <div class="bar">
            <a href=""><i class="fa fa-shopping-bag"></i></a>
            <i id="hamburger" class="fas fa-outdent hamburger"></i>
        </div>
    
    </section>

    <section class="page-header">
        <h1>On all products</h1>
        <P>Save more with coupons & up to 70% off!</P>
    <!-- <img src="/image/model1.png" alt="">  -->
    </section>


   

    <section class="product section-p1">
        <div class="filter-nave">
            <div class="filterCathgory">
            <h1>Filter Cathegory</h1>
            <div class="cathegory">
            <?php

            getCathegory();
            
                    ?>
            
            </div>
                </div>
            <div class="filterBrand">
            <h1> Filter Brand</h1>
            <div class="cathegory">
            <?php

            getBrand();
                 
                    ?>
       
            </div>
                </div>
            </div>
        <div class="pro-container">
        <?php
       
     if(isset($_POST['search'])){
        searchProduct();
     }else{
        cathegory();
        brand(); 
        searchProduct();
     }
       
   

        ?>
          
            
        </div>
    </section>
    <section class="pagination section-p1">
        <a href="">1</a>
        <a href="">2</a>
        <a href=""><i class="fa fa-long-arrow-alt-right"></i></a>
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

    <!-- <section class="Cart">
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
        
             <?php
                        function displayItemToCart(){
                        if(isset($_GET['AddToCart'])){
                        $ip = geIpAddress();
                        $query="SELECT * FROM cartdetails WHERE IpAddress='$ip'";
                        $result=mysqli_query($conn,$query);
                    while($data=mysqli_fetch_assoc($result)){
                        $product_Id=$data['IpAddress'];
                        echo $product_Id;
                    }
                    
      
        // getting the product from the database
        // $query= "SELECT * FROM product WHERE id=$product_Id";
        // $result = mysqli_query($conn,$query);


    }    
}

          ?>




       </div>
           <div class="cart-subtotal">
               <h3 class="subtotal">Subtotal <span>(Item)</span></h3>
               <h3>Proceed to CheckOut</h3>

           </div>
        </div>
   </section> -->
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
    <script src="shop.js"></script>

</body>
</html>