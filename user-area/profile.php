<?php
 include "../admin_area/connection.php";

 include "../function.php";
//  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"> -->
    <!-- <link rel="stylesheet" href="../index.css"> -->
    <link rel="stylesheet" href="profile.css">
    <!-- <link rel="stylesheet" href="cathegory.css"> -->
</head>
<body>
   <section class="header">
    <a href=""><img src="../image/logo.png" alt=""></a>
        <div>
            <ul class="navbar">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../shopping.php">Shop</a></li>
            <li><a href="../blog.php">Blog</a></li>
            <li><a href="../contact.php">Contact</a></li>
            <li><a href="../about.php">About</a></li>
            <a class="close" href=""><i class="fa fa-times"></i></a>
        </ul>
        </div>
        <div class="bar">
            <a href=""><i class="fa fa-shopping-bag"></i></a>
            <i id="hamburger" class="fas fa-outdent hamburger"></i>
        </div>
    
    </section>

    <section class="profile">
        <div class="profile-container">
        <?php
        // session_start();
        if(isset($_SESSION['email'])){
          $email=$_SESSION['email'];
            $query="SELECT * FROM user where email='$email'";
            $resul=mysqli_query($conn,$query);
            $data=mysqli_fetch_assoc($resul);
            $name=$data['username'];
            echo "<div class='prof-contain'>
            <img src='../image/profile.png' alt=''>
            <h2>".$name."</h2>
            <a href='profile.php?edit_account'>Edite my Account</a>
            <a href='profile.php?my_order'>My orders</a>
            <a href='profile.php?pending_order'>Pending order</a>
            <a href='profile.php?delete_account'>Delete my Account</a>
            <a href='logout.php'>logout</a>
             </div>";
           
        }else{
            echo "<div class='prof-contain'>
            <img src='../image/profile.png' alt=''>
            <h2>wellcome guest</h2>
            </div>";
        }

        if(isset($_SESSION['email'])){
            echo "<div class='prof-contain'>
            </div>";
        }else{
            echo "<div class='guest'>
            <a href='./login.php'>login</a>
            </div> ";
        }

      
      
?>
      

        </div>
       <div class="display">
       <?php
if(isset($_SESSION['email'])){
   
              
                    if(isset($_GET['my_order'])){
                  echo"  <div class='orders'>
                    <div class='details'>
                        <h4>order Image</h4>
                        <h4>order quantity</h4>
                        <h4>order Price</h4>
                        <h4>order Date</h4>
                        <h4>Click To Pay</h4>
                    </div>";
                   
        
                    getUserItem();
                }
                if(isset($_GET['pending_order'])){
                    echo"  <div class='orders'>
                    <div class='details'>
                        <h4>order Image</h4>
                        <h4>order quantity</h4>
                        <h4>order Price</h4>
                        <h4>order Date</h4>
                        <h4>order Status</h4>
                    </div>";
                   
        
                    getUserItem();
                  }

                if(isset($_GET['edit_account'])){
                    
                    include('editeaccount.php');
                  
                }

                if(!isset($_GET['my_order'])){
                    if(!isset($_GET['pending_order'])){
                        if(!isset($_GET['edit_account'])){
                            $ip = geIpAddress();
                            $quer="SELECT * FROM orders where userId='$ip'";
                            $resl=mysqli_query($conn,$quer);
                            $dat=mysqli_fetch_assoc($resl);
                            $totalItem=mysqli_num_rows($resl);
                            echo " <h4>You Have $totalItem Orders, Click On My Order To Show</h4>";

                        }
                    }
                }
            }
            ?>
       </div>


        </div>
    </section>
   <?php

if(isset($_GET['my_order'])){

}


?>

</body>
</html>