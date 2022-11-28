<?php
include "connection.php";
if(isset($_POST['submit'])){
    $productTitle = $_POST['productTitle'];
    $productDescription = $_POST['productDescription'];
    $selectProductCathegory = $_POST['productCathegory'];
    $selectProductBrand = $_POST['selectProductBrand'];
    $productPrice = $_POST['productPrice'];
    $productImage1 = $_FILES['ProductImage1']['name'];
    $productImage2 = $_FILES['ProductImage2']['name'];
    $tempimage1 = $_FILES['ProductImage1']['tmp_name'];
    $tempimage2 = $_FILES['ProductImage2']['tmp_name'];
  // if($productTitle=='' or $productDescription=='' or $selectProductBrand=='' or $productPrice==''){
if(empty($productTitle)){
    echo 'All fields are has to be filled';
    exit;
   
  }
  
  else{



     move_uploaded_file($tempimage1,"./image/$productImage1");
     move_uploaded_file($tempimage2,"./image/$productImage2");
  

    $query = "INSERT INTO product(producttitle,productdescription,productcathegory,productbrand,productimage1,productimage2,productprice)
     VALUES('$productTitle','$productDescription', '$selectProductCathegory','$selectProductBrand','$productImage1','$productImage2','$productPrice')";
    $res = mysqli_query($conn,$query);
   
    echo'inserted successfully!';  

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
    <h2>Insert Product</h2>
       <form action="" method="post" class="form" enctype="multipart/form-data">
        <label for="input">product title</label>
           <Input class="input" placeholder="Enter Product Title" name="productTitle" id="input">
           <label for="input">product description</label>
           <Input class="input" placeholder="Enter product Description" name="productDescription" id="input">
           <select name="productCathegory" id="">
            <option value="">select cathegory</option>
            <?php

                $check = "SELECT * FROM cathegory";
                $result = mysqli_query($conn,$check);
                while($fatch = mysqli_fetch_assoc($result)){
                    $cathegory_title = $fatch['cathegorytitle'];
                    $cathegory_id = $fatch['id'];
                    echo "<option value='$cathegory_title' name='productCathegory'> $cathegory_title</option>";
                }

            ?>
           

           </select>
           <select name="selectProductBrand" id="">
            <option value="">select brand</option>
            <?php

                    $check = "SELECT * FROM brand";
                    $result = mysqli_query($conn,$check);
                    while($fatch = mysqli_fetch_assoc($result)){
                        $brand_title = $fatch['brandtitle'];
                        $brand_id = $fatch['id'];
                        echo "<option value=' $brand_title'> $brand_title</option>";
                    }

                    ?>

           </select>
           <label for="input">product image</label>
           <input type="file" class="image" name="ProductImage1">
           <label for="input">product image</label>
           <input type="file" class="image" name="ProductImage2">
           <label for="input">product price</label>
           <Input class="input" placeholder="Enter product Description" name="productPrice" id="input" autocomplete="off">
        <button name="submit" class="btn">Insert Product</button>
      </form>
    </section>

   
</body>
</html>