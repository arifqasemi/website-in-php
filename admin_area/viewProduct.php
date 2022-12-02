<?php
include "connection.php";
include "../function.php";



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="view.css">
    <title>Document</title>
</head>
<body>
<section class="product section-p1">
        <h2>All Products</h2>
        <div class="pro-container">
          <?php
        // getProduct();
        $query="SELECT * FROM product";
        $send=mysqli_query($conn,$query);
       
        while($fetch=mysqli_fetch_array($send)){
            $product=$fetch['producttitle'];
            $productImage=$fetch['productimage1'];
            $productPrice=$fetch['productprice'];
            $productDescription=$fetch['productdescription'];
            $productId=$fetch['id'];

            echo "<div  class='a-tag'>
        <div class='pro' >
            <img src='./image/$productImage' class='image'>
            <div class='des'>
                <span> $product</span>
                <h5>$productDescription</h5>
                <h4>$ $productPrice</h4>
                <a href='viewProduct.php?delete=$productId'><i class='fa-solid fa-trash-can'></i></a>
            </div>
        </div>
        </div>";

        }
            ?>
        </div>
    </section>
</body>
</html>



<?php

if(isset($_GET['delete'])){
    $productId=$_GET['delete'];
    $query="delete from product where id='$productId'";
    $send=mysqli_query($conn,$query);
    if($send){
        echo "<script>alert('succesfully deleted')</script>";
        echo"<script>window.open('admin.php','_self')</script>";
    }
}
?>