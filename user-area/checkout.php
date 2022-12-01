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
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"> -->
    <!-- <link rel="stylesheet" href="../index.css"> -->
    <link rel="stylesheet" href="form.css">
    <!-- <link rel="stylesheet" href="../cathegory.css"> -->
</head>
<body>
   
    <section class="checkout">
   


<?php


        if(!isset($_SESSION['fullname'] )){
                include('login.php');
        }else{
            include('../payment.php');
        }

       
       ?>

   </section>


</body>
</html>