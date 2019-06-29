<?php 
session_start();
 include('navbar.php'); 
require_once 'connection.php'; 

    $category_sql = "SELECT * FROM category";
    $category_query = mysqli_query($conn,$category_sql);
    while($category_row = mysqli_fetch_assoc($category_query)){ ?>
        <h1><?php echo $category_row['category_name']; ?></h2>
        
        <?php 
        $id = $category_row['id'];
        $product_sql = "SELECT * FROM products where product_category='$id'"; 
        $product_query = mysqli_query($conn,$product_sql);
        while($product_row = mysqli_fetch_assoc($product_query) ){ ?>
        
            <h5><?php echo $product_row['product_name']; ?></h5>
            <h5><?php echo $product_row['product_description']; ?></h5>
            <h5><?php echo $product_row['product_price']; ?></h5>
            <img src="<?php  echo $product_row['product_image']; ?>" alt="" width="100px" height="100px" >
            <a href="addtocart.php?id=<?php echo $product_row['id']; ?>">add to cart</a>
            
        <?php } ?>
    <?php } ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">

</head>
<body>
<?php include('footer.php'); ?>
</body>
</html>