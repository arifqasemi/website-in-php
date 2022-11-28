<?php
include "../admin_area/connection.php";

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

    if($fetch>0){
        if(password_verify($password,$data['password'])){
            echo "<script>window.open('profile.php','_self')</script>";
        }else{
            echo "invalid password or email";
        }

    }else{
        echo "invalid password or email";
    }
}




?>