<?php
include "../admin_area/connection.php";
include "../function.php";
// session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="javascript">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <section class="loginform">
        <div class="container1">
            <h4>Login Form</h4>
        <form action="login.php" method="post" class="form">
            <input type="email" placeholder="Enter Email:" name="email" class="form-control">
            <input type="password" placeholder="Enter Password:" name="password" class="form-control">
            <input type="submit" value="Login" name="login" class="btn ">
      </form>
     <div><p>Not registered yet <a href="userRegisteration.php">Register Here</a></p></div>
        </div>
    </section>
</body>
</html>


<?php

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM user where email='$email'";
    $resul=mysqli_query($conn,$query);
    $data=mysqli_fetch_assoc($resul);
    $fetch=mysqli_num_rows($resul);

   

    // getting product form cart it has
    $ip = geIpAddress();
    $requst="SELECT * FROM cartdetails where IpAddress='$ip'";
   $quy=mysqli_query($conn,$requst);
   $date=mysqli_fetch_assoc($quy);
   $num_rows=mysqli_num_rows($quy);
    if($fetch>0){
        $_SESSION['email']=$email;
        if(password_verify($password,$data['password'])){
            if($fetch==1 && $num_rows==0){
                $_SESSION['email']=$email;
                header('location:profile.php');

            }else{
                $_SESSION['email']=$email;
             echo "<script>alert('you have some item in the cart')</script>";
            echo "<script>window.open('../payment.php','_self')</script>";
        }
       
        }else{
            echo "invalid password or email";
        }

    }else{
        echo "invalid password or email";
    }
}




?>