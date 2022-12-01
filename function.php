<?php


include "admin_area/connection.php";
session_start();



function getProduct(){

  global $conn;



    if(!isset($_GET['brand'])){
    if(!isset($_GET['cathegory'])){
    $query = "SELECT * FROM product";
    $result = mysqli_query($conn,$query);
    while($res=mysqli_fetch_assoc($result)){
        $productTitle=$res['producttitle'];
        $productDescription=$res['productdescription'];
        $selectProductCathegory=$res['productcathegory'];
        // $selectProductBrand=$res['productBrand'];
        $productprice=$res['productprice'];
        $productimage1=$res['productimage1'];

        echo "<a href='productDetails.php?producttitle=$productTitle' class='a-tag'>
        <div class='pro' >
            <img src='./admin_area/image/$productimage1' class='image'>
            <div class='des'>
                <span> $productTitle</span>
                <h5>$productDescription</h5>
                <div class='star'>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                    <i class='fas fa-star'></i>
                </div>
                <h4>$ $productprice</h4>
            </div>
        </div>
        </a>";
    }


   
    }
}
}


// getting unique cathegory

function cathegory(){
    global $conn;
    if(isset($_GET['cathegory'])){
        $cathegory_title=$_GET['cathegory'];
        $query = "SELECT * FROM product WHERE productcathegory='$cathegory_title'";
        $result = mysqli_query($conn,$query);
        while($res=mysqli_fetch_assoc($result)){
            $productTitle=$res['producttitle'];
            $productDescription=$res['productdescription'];
            $selectProductCathegory=$res['productcathegory'];
            $productprice=$res['productprice'];
            $productimage1=$res['productimage1'];
            $product_Id=$res['id'];
    
            echo "<a href='productDetails.php?producttitle=$productTitle' class='a-tag'>
            <div class='pro'>
                <img src='./admin_area/image/$productimage1' class='image'>
                <div class='des'>
                    <span> $productTitle</span>
                    <h5>$productDescription</h5>
                    <div class='star'>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                    </div>
                    <h4>$ $productprice</h4>
                </div>
            </div>
            </a>";
        }
    
    
       
        }

}


function brand(){
    global $conn;
    if(isset($_GET['brand'])){
        $brand_title=$_GET['brand'];
        $query ="SELECT * FROM product WHERE productbrand='$brand_title'";
        $result =mysqli_query($conn,$query);
        $num_rows=mysqli_num_rows($result);
        if($num_rows==0){
            echo'no product';
        }else{
        while($res=mysqli_fetch_assoc($result)){
            $productTitle=$res['producttitle'];
            $productDescription=$res['productdescription'];
            $selectProductCathegory=$res['productcathegory'];
            $productprice=$res['productprice'];
            $productimage1=$res['productimage1'];
            $product_Id=$res['id'];
    
            echo "<a href='productDetails.php?producttitle=$productTitle' class='a-tag'>
            <div class='pro' >
                <img src='./admin_area/image/$productimage1' class='image'>
                <div class='des'>
                    <span> $productTitle</span>
                    <h5>$productDescription</h5>
                    <div class='star'>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                    </div>
                    <h4>$ $productprice</h4>
                </div>
            </div>
            </a>";
        }
        }
    
       
        }
}


// filter product
function getCathegory(){

    global $conn;
    $check = "SELECT * FROM cathegory";
    $result = mysqli_query($conn,$check);
    while($fatch = mysqli_fetch_assoc($result)){
        $cathegory_title = $fatch['cathegorytitle'];
        $cathegory_id = $fatch['id'];
        echo "<a href='shopping.php?cathegory=$cathegory_title'>$cathegory_title</a>";
    }
    }


function getBrand(){
    global $conn;
    $check = "SELECT * FROM brand";
    $result = mysqli_query($conn,$check);
    while($fatch = mysqli_fetch_assoc($result)){
        $brand_title = $fatch['brandtitle'];
        $brand_id = $fatch['id'];
        echo "<a href='shopping.php?brand= $brand_title'>$brand_title</a>";
    }
}

function searchProduct(){

    global $conn;


    if(isset($_POST['search'])){
        $inputValue= $_POST['inputValue'];
        // echo $inputValue;


        $query = "SELECT * FROM product where producttitle like '%$inputValue%'";
        $result = mysqli_query($conn,$query);
        while($res=mysqli_fetch_assoc($result)){
            $productTitle=$res['producttitle'];
            $productDescription=$res['productdescription'];
            $selectProductCathegory=$res['productcathegory'];
            $productprice=$res['productprice'];
            $productimage1=$res['productimage1'];
            $product_Id=$res['id'];
    
            echo "<a href='productDetails.php?productId= $product_Id' class='a-tag'>
            <div class='pro' >
                <img src='./admin_area/image/$productimage1' class='image'>
                <div class='des'>
                    <span> $productTitle</span>
                    <h5>$productDescription</h5>
                    <div class='star'>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                    </div>
                    <h4>$ $productprice</h4>
                </div>
            </div>
            </a>";
        }
        
    }
}


// product details


function productDetails(){

    global $conn;
    if(isset($_GET['producttitle'])){
        $product_title=$_GET['producttitle'];
        $query ="SELECT * FROM product WHERE producttitle ='$product_title'";
        $result =mysqli_query($conn,$query);
        $num_rows=mysqli_num_rows($result);
        if($num_rows==0){
            echo'no product';
        }else{
        while($res=mysqli_fetch_assoc($result)){
            $productTitle=$res['producttitle'];
            $productDescription=$res['productdescription'];
            $selectProductCathegory=$res['productcathegory'];
            $productprice=$res['productprice'];
            $productimage1=$res['productimage1'];
            $product_Id=$res['id'];
        
            echo " 
            <div class='contain'>
      <div class='image'>
      <img src='./admin_area/image/$productimage1' alt=''>
      </div>
      <div class='detials'>
       <h5>name: $productTitle</h5>
       <h5>price: $ $productprice</h5>
       <h5>instock:  $selectProductCathegory</h5>
       <div class='size'>
       <select >
                  <option>Select Size</option>
                  <option>XL</option>
                  <option>XXL</option>
                  <option>Small</option>
                  <option>Large</option>
                 
       </select>
       <a class='cart' href='productDetails.php?productId=$product_Id'>add to card</a>
       </div>
       <h5>Product Details:</h5>
       <p>$productDescription</p>
      </div>
  </div>";
        }
        }
    
       
        }

}



function geIpAddress(){
  
        //whether ip is from the share internet  
         if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                    $ip = $_SERVER['HTTP_CLIENT_IP'];  
            }  
        //whether ip is from the proxy  
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
         }  
    //whether ip is from the remote address  
        else{  
                 $ip = $_SERVER['REMOTE_ADDR'];  
         }  
         return $ip;  
    }  
    // $ip = getIPAddress();  
    // echo 'User Real IP Address - '.$ip;  



function addToCart(){
    if(isset($_GET['productId'])){
        global $conn;
        $product_Id=$_GET['productId'];
        $requst="SELECT * FROM product WHERE id='$product_Id'";
        $resul =mysqli_query($conn,$requst);
        $fetch=mysqli_fetch_assoc($resul);
        $productTitle=$fetch['producttitle'];
        $productImage=$fetch['productimage1'];
        $productPric=$fetch['productprice'];
       
        global $conn;
        $ip = geIpAddress();
        $query="SELECT * FROM cartdetails WHERE IpAddress='$ip'and ProductId=$product_Id";
        $result =mysqli_query($conn,$query);
        $num_rows=mysqli_num_rows($result);
        if($num_rows>0){
            echo"<script>alert('already exists')</script>";
            echo"<script>window.open('cart.php','_self')</script>";
        }else{
            $insert="INSERT INTO cartdetails (IpAddress,ProductId,productTitle,productImage,productPrice) 
            VALUES('$ip','$product_Id','$productTitle','$productImage','$productPric')";
            $result=mysqli_query($conn,$insert);
            echo"<script>alert(add to the cart succesfully)</script>";
            echo"<script>window.open('cart.php','_self')</script>";
        }
}
 
}
       
 
function totalItem(){
        global $conn;
    $ip = geIpAddress();
    $query= "SELECT * FROM cartdetails WHERE IpAddress='$ip'";
    $result = mysqli_query($conn,$query);
    $total =mysqli_num_rows($result);
    echo $total;
   delete();

}

function totalPrice(){
    if(isset($_POST['increment'])){
        $product_Id=$_POST['increment'];
        $total=0;
        global $conn;
    $ip = geIpAddress();
        // $query= "UPDATE cartdetails  SET productPrice=quantity*productPrice WHERE IpAddress='$ip' AND ProductId='$product_Id'";

    $query= "SELECT * FROM cartdetails WHERE IpAddress='$ip'";
    $result = mysqli_query($conn,$query);
    while($res=mysqli_fetch_array($result)){
        $productPrice=$res['productPrice'];
        $quantity=$res['quantity'];
        $total+=$productPrice *  $quantity;
    }
    echo $total;
        
    }
    if(isset($_POST['decrement'])){
        $product_Id=$_POST['decrement'];
        $total=0;
        global $conn;
        $ip = geIpAddress();
        $query= "SELECT * FROM cartdetails WHERE IpAddress='$ip'";
        $result = mysqli_query($conn,$query);
        while($res=mysqli_fetch_array($result)){
            $productPrice=$res['productPrice'];
            $quantity=$res['quantity'];
            $total+=$productPrice *  $quantity;
        }
        echo $total;
    }
   
        // echo $res;
}




function delete(){
    if(isset($_POST['delete'])){
        $product_Id=$_POST['delete'];
    global $conn;
    $ip = geIpAddress();
       $query= "DELETE FROM cartdetails   WHERE IpAddress='$ip' AND ProductId='$product_Id'";
       $result = mysqli_query($conn,$query);
  
      
   
    }
    
   
}


function getUserItem(){
    global $conn;
    $ip = geIpAddress();
  $email=$_SESSION['email'];
  $requst="SELECT * FROM user where email='$email'";
  $quy=mysqli_query($conn,$requst);
  $date=mysqli_fetch_assoc($quy);
  $IpAddress=$date['IpAddress'];
//   echo $IpAddress;

if(isset($_GET['my_order'])){
$query="SELECT * FROM orders where userId='$IpAddress'";
$res=mysqli_query($conn,$query);

while($fetch=mysqli_fetch_array($res)){
$orderImage=$fetch['orderImage'];
$orderDate=$fetch['orderDate'];
$orderPrice=$fetch['totalPrice'];
$orderStatus=$fetch['orderStatus'];

echo "<div class='cartItem-element'>
<div class='prob'>
<div class='product-image'>
<img src='../image/$orderImage' alt=''>
</div>
<div class='title'>
<h4>$$orderPrice</h4>
<p>$orderDate</p>
<p>$orderStatus</p>
</div>
</div>";
}

}
if(isset($_GET['pending_order'])){
    $query="SELECT * FROM orders where userId='$IpAddress'";
    $res=mysqli_query($conn,$query);
    while($fetch=mysqli_fetch_array($res)){
        $orderImage=$fetch['orderImage'];
        $orderDate=$fetch['orderDate'];
        $orderPrice=$fetch['totalPrice'];
        $orderStatus=$fetch['orderStatus'];
        
        echo "<div class='cartItem-element'>
        <div class='prob'>
        <div class='product-image'>
        <img src='../image/$orderImage' alt=''>
        </div>
        <div class='title'>
        <h4>$$orderPrice</h4>
        <p>$orderDate</p>
        <p>$orderStatus</p>
        </div>
        </div>";
        }
    }
}



