<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Admin</title>
</head>
<body>
    <section class="navbar">
        <img src="">
        <h1>Wellcome arif</h1>
    </section>
    <section class="manage">
        <div class="name">
        <h1>Product Management</h1>
        </div>
        
        <div class="product-details">
            <div class="profil">
                <img src="../image/arif.png" alt="">
                <h2>arif</h2>
            </div>
            <div class="product-profil">
                <a href="insertProduct.php">Insert product</a>
                <a href="admin.php?view-product">View product</a>
                <a href="admin.php?insert-Cathegory">Insert Cathegory</a>
                <a href="admin.php?view-cathegory">View Cathegory</a>
                <a href="admin.php?insert-brand">Insert Brand</a>
                <a href="admin.php?view-brand">View Brand</a>
                <a href="">All Orders</a>
                <a href="">All Payments</a>
                <a href="">List User</a>

            </div>
        </div>
    </section>

    <section class="product-area">
        <?php if(isset($_GET['insert-Cathegory'])){
            include ('insert.php');
        }
        if(isset($_GET['insert-brand'])){
            include ('insertBrand.php');
        }
        if(isset($_GET['insert-Product'])){
            include ('insertProduct.php');
        }

        if(isset($_GET['view-product'])){
            include ('viewProduct.php');
        }
        if(isset($_GET['view-cathegory'])){
            include ('viewCathegory.php');
        }

        if(isset($_GET['view-brand'])){
            include ('viewbrand.php');
        }
        ?>
    </section>

</body>
</html>