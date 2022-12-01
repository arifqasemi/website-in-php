<?php
include "./admin_area/connection.php";
include "./function.php";
// session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="javascript">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    if(isset($_GET['user_id'])){
    // $userId=$_GET['user_id'];
    $total=0;
    $status='pending';
    $ip = geIpAddress();
    $query="SELECT * FROM cartdetails WHERE IpAddress='$ip'";
    $result=mysqli_query($conn,$query);
    while($res=mysqli_fetch_array($result)){
        $productPrice=$res['productPrice'];
        $quantity=$res['quantity'];
        $productImage=$res['productImage'];
        $productId=$res['ProductId'];
       $total+=$productPrice * $quantity;

  //add to order
  $insert="INSERT INTO orders (userId,amount,invoiceNumber,totalPrice,orderDate,orderStatus,orderImage) 
  VALUES('$ip','$quantity','','$total',NOW(),'$status','$productImage')";
  $resul=mysqli_query($conn,$insert);


    // order peding
    $insertIntop="INSERT INTO orderpending (userId,invoiceNumber,productId,quantity,orderStatus) 
    VALUES('$ip','','$productId','$quantity','$status')";
    $resu=mysqli_query($conn,$insertIntop);
    }
  }
     
    
  
  

    if($resul){
        echo "<script>alert('orders are submitted sucessfully!')</script>";
        echo "<script>window.open('./user-area/profile.php','_self')</script>";  
      }



   
   


    // deleting from cart
    $inqury="DELETE FROM cartdetails where IpAddress='$ip'";
    $resultInquey=mysqli_query($conn,$inqury);
    
?>
</body>
</html>