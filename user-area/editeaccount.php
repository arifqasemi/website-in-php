<?php
include "../admin_area/connection.php";
// include "../function.php";

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

   
    <h3>Edite Account</h3>
<?php
if(isset($_GET['edit_account'])){
    $ip = geIpAddress();
    $query="SELECT * FROM user where IpAddress='$ip'";
    $sendquery=mysqli_query($conn,$query);
    $fetch=mysqli_fetch_assoc($sendquery);
    $username=$fetch['username'];
    $emailuser=$fetch['email'];

                    
}
    if(isset($_POST['submit'])){
        $name=$_POST['fullname'];
        $email=$_POST['email'];
        // $email=$_SESSION['email'];
        $query=("UPDATE user SET username='$name' and email='$email' where IpAddress='$ip'");
        $resu=mysqli_query($conn,$query);
        // echo $query;
        if($resu){
            echo "<script>alert('data updated successfully!')</script>";
        }
        
            
    
}

?>


    <form class="form">
    <input type="text" class="form-control" value="<?php echo $username?>" name="fullname" placeholder="Full Name:">
    <input type="emamil" class="form-control" value="<?php echo $emailuser?>" name="email" placeholder="Email:">
    <input type="submit" class="btn" value="Submit" name="submit">

        
    </form>
    </div>

<?php
   

    ?>
</body>
</html>