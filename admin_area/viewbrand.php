<?php
include "connection.php";
include "../function.php";



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="javascript">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="view.css">
    <title>Document</title>
</head>
<body>
    <section class="product section-p1">
        <div class="pro-container">
            <div class="center">
        <h4>All Brands</h4>
<?php
if(isset($_GET['view-brand'])){
    $uery="SELECT * from brand";
    $send=mysqli_query($conn,$uery);
    
    while($data=mysqli_fetch_array($send)){
        $brand=$data['brandtitle'];
        $brandid=$data['id'];
      echo "<div class='contianer-cath'>
       <div class='cathe'>
       <p>Brand-Id: $brandid</p>
       <h4>$brand</h4>
       <a href='admin.php?delete-brand= $brandid'><i class='fa-solid fa-trash-can'></i></a>
       </div>
       </div>";
    }
}

?>
        </div>
        </div>

    </section>


</body>
</html>

<?php

if(isset($_GET['delete-brand'])){
   $cahtId=$_GET['delete-brand'];
    $que="delete from brand where id='$cahtId'";
    $sendquery=mysqli_query($conn,$que);
   
    if($sendquery){
        echo "<script>alert('succesfully deleted')</script>";
        echo"<script>window.open('admin.php','_self')</script>";
    }
}
?>