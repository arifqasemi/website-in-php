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
    <link rel="stylesheet" href="payment.css">
    <link rel="stylesheet" href="cathegory.css">
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
    <section class="payment">
        <?php
          $ip = geIpAddress();
          $requst="SELECT * FROM cartdetails where IpAddress='$ip'";
         $quy=mysqli_query($conn,$requst);
         $date=mysqli_fetch_assoc($quy);
        $user_id=$date['IpAddress'];

        ?>
        <h2>Payment Method</h2>
      <div class="contain">
        <div class="cash">
        <h4>Cash Delivery</h4>
        <a href="order.php?user_id=<?php echo $user_id;?>">Pay On Delivery</a>
        </div>
        <div class="online">
        <h4>Online Payment</h4>
        <a href="order.php?user_id=<?php echo $user_id;?>"> PayPal</a>
        <a href="order.php?user_id=<?php echo $user_id;?>"> Credite Cart</a>
        </div>
        <?php

     
        ?>
      </div>


   </section>
 

</body>
</html>