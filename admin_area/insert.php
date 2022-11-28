<?php
include "connection.php";
if(isset($_POST['submit'])){
  $inputValue = $_POST['inputValue'];

  $check= mysqli_query($conn,"SELECT * FROM cathegory WHERE cathegorytitle='$inputValue'");
  if(mysqli_num_rows($check ) >0){
      echo'already stored!';
  }else{
      $insert = "INSERT INTO cathegory(cathegorytitle)  VALUES('$inputValue')";
      $result = mysqli_query($conn, $insert);
      echo 'stored successfuly!';
  }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Document</title>
</head>
<body>
    <section class="insertC"> 
    <h2>Insert Cathegory</h2>
    <form action="" method="post" class="form">
           <Input class="input" placeholder="Insert Product" name="inputValue">
        <!-- <a href="" name="submit">Insert Product</a> -->
        <button name="submit" class="btn">Insert Cathegory</button>
      </form>
    </section>
</body>
</html>