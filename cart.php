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
            <li><a  href="shopping.php">Shop</a></li>
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
    <section class="Cart">
        <div class="cart-container">
           <div class="cart-icon">
          <a class="bag" href=""><i class="fa fa-basket-shopping"></i></a><span class="number"><?php totalItem(); ?></span>
           </div>
           <div class="cart-details">
               <h3>Item</h3>
               <h3>Unit price</h3>
               <h3>Units</h3>
           </div>

<div class="cartItem">
    <?php 
       if(isset($_POST['increment'])){
        $product_Id=$_POST['increment'];
         global $conn;
         $ip = geIpAddress();
            
         $query= "UPDATE cartdetails  SET quantity=quantity+1 WHERE IpAddress='$ip' AND ProductId='$product_Id'";
         $result = mysqli_query($conn,$query);
   
    }

         if(isset($_POST['decrement'])){
             $product_Id=$_POST['decrement'];
         global $conn;
         $ip = geIpAddress();
            $query= "UPDATE cartdetails  SET quantity=quantity-1 WHERE IpAddress='$ip' AND ProductId='$product_Id'";
            $result = mysqli_query($conn,$query);
       
         
        
         }
        //  if(isset($_POST['delete'])){
        //     $product_Id=$_POST['delete'];
        // global $conn;
        // $ip = geIpAddress();
        //    $query= "DELETE FROM cartdetails   WHERE IpAddress='$ip' AND ProductId='$product_Id'";
        //    $result = mysqli_query($conn,$query);
      
          
       
        // }

delete();
         
    ?>

<?php
    global $conn;
    $ip = geIpAddress();
    $query= "SELECT * FROM cartdetails WHERE IpAddress='$ip'";
    $result = mysqli_query($conn,$query);
    while($data=mysqli_fetch_array($result)){
        $product_Id=$data['ProductId'];
        $product_quantity=$data['quantity'];
        $product_title=$data['productTitle'];
            $product_image=$data['productImage'];
            $product_price=$data['productPrice'];
     
     
    
?>

                    <form action="" method="post">
                    <div class="cartItem-element">
                    <div class="product-image">
                    <button class="cross" name="delete"  value="<?php echo$product_Id?>"><i class="fa-solid fa-xmark" id="cross" ></i></button>
                    <img src="./admin_area/image/<?php echo$product_image?>" alt="">
                    <h4><?php echo$product_title?></h4>
                    </div>
                    <p>$<?php echo$product_price?></p>
                    <div class="product-unit">
                        <button class="icon" type="submit" name="decrement" value="<?php echo$product_Id?>"><span class="minus1">-</span></button>
                        <p class="cartNumber" id=""><?php echo$product_quantity?></p>
                        <button class="icon" type="submit"  name="increment"  value="<?php echo$product_Id?>"><span class="plus1">+</span></button>

                        </div>
                    </div>
                    </form> 
                    <?php } ?>


            

       </div>
           <div class="cart-subtotal">
               <h3 class="subtotal">Subtotal($<?php totalPrice(); ?>)</span></h3>
               <h3><a href="user-area/checkout.php" class="checkoutbtn">Proceed to CheckOut</a></h3>

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
    <script>
        

     </script>
    <script src="main.js"></script>
    <!-- <script src="shop.js"></script> -->

</body>
</html>