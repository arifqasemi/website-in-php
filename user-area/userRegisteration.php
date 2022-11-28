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
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="form.css">
    <!-- <link rel="stylesheet" href="../index.css"> -->
    <title>Document</title>
</head>
<body>
    <section class="loginform">
    <div class="container1">
    <h4>Registeration Form</h4>

    <form action="" method="post" class="form">
        <?php

            $eror='';
        if(isset($_POST['submit'])){
    
    $username=$_POST['fullname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password_hash=password_hash($password,PASSWORD_DEFAULT);
    $repeatPassword=$_POST['repeat_password'];
    $ip = geIpAddress();
    $check="SELECT * FROM user where email='$email'";
    $sendq=mysqli_query($conn,$check);
    $resu=mysqli_num_rows($sendq);
    if($password!=$repeatPassword){
        echo "password didn't match";
    }
   else if($resu>0){
    echo "already exists";
   }else{
       $query="INSERT INTO user (username,email,password,IpAddress) Values('$username','$email','$password_hash','$ip')";
       $result=mysqli_query($conn, $query);
   
   $ip = geIpAddress();
   $check="SELECT * FROM cartdetails WHERE IpAddress='$ip'";
   $resultcheck=mysqli_query($conn, $check);
   $fetch=mysqli_num_rows($resultcheck);
   if($fetch>0){
    $_SESSION['fullname']=$username;
    echo "<script>alert('you have some orders in the cart')</script>";
    echo "<script>window.open('../payment.php','_self')</script>";

   }else{
    echo "<script>window.open('../shopping.php','_self')</script>";

   }
   }

}
        ?>
         
           
    <input type="text" class="form-control" name="fullname" placeholder="Full Name:">
    <input type="emamil" class="form-control" name="email" placeholder="Email:">
    <input type="password" class="form-control" name="password" placeholder="Password:">
    <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:">
    <input type="submit" class="btn" value="Register" name="submit">

        </form>
      </div>

      </section>
</body>
</html>


