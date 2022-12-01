<?php
include "../admin_area/connection.php";
include "../function.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="javascript">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="edit.css">
    <title>Document</title>
</head>
<body>
    <div class="edit-container">

   
    <h3>Confirm Payment</h3>
<?php
if(isset($_GET['productId'])){
    $productId=$_GET['productId'];
    $ip = geIpAddress();
    $query="SELECT * FROM orders where userId='$ip' AND id='$productId'";
    $sendquery=mysqli_query($conn,$query);
    $fetch=mysqli_fetch_assoc($sendquery);
    $amount=$fetch['amount'];
    $totalprice=$fetch['totalPrice'];
    $itemId=$fetch['id'];

//    echo"<a href='profile.php' name='pay'>Submit</a>";
                    
}
//     if(isset($_GET['pay'])){
       
//         // $email=$_SESSION['email'];
//         $query="update orders set orderStatus='paid' where userId='$ip' AND id='$productId'";
//         $resu=mysqli_query($conn,$query);
//         if($resu){
//             echo "<script>alert('Paid successfully!')</script>";
//             echo "<script>window.open('profile.php','_self')</script>";

//         }
        
            
    
// }

?>
<h4>Total Price:<?php echo   $totalprice;?></h4>
<h4>Total Item:<?php echo    $amount;?></h4>
<a class="confirm" href="confirm.php?pay=<?php echo $itemId;?>" >Submit</a>

    </div>

<?php
    if(isset($_GET['pay'])){
       $itemid=$_GET['pay'];
        // $email=$_SESSION['email'];
        $query=("UPDATE orders SET orderStatus='paid' WHERE id='$itemid'");
        $resu=mysqli_query($conn,$query);
        
        if($resu){
            echo "<script>alert('Paid successfully! check your orders it is writtin paid')</script>";
            echo "<script>window.open('profile.php','_self')</script>";

        }
        
            
    
}

    ?>
</body>
</html>