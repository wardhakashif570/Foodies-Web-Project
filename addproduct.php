<?php

session_start();

if( isset($_SESSION['admin_email'])){
    require_once 'connection.php'; 
    if(isset($_POST['add_product']))
    {

        
        

        $product_name = $_POST['product_name'];
        $product_description = $_POST['product_description'];
        $product_category = $_POST['product_category'];
        $product_price = $_POST['product_price'];

       
        
                    $img_name = $_FILES['product_image']['name'];
                    $img_size = $_FILES['product_image']['size'];
                    $img_type = $_FILES['product_image']['type'];
                    $tmp_name = $_FILES['product_image']['tmp_name'];
                    $extension = substr($img_name, strpos($img_name, '.') + 1);

                    
                    
                    

                    if(isset($img_name) && !empty($img_name)){
                                if($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png' || $extension == 'gif'){
                                            $location = "../pictures/";
                                            $filepath =  $location.$img_name;
                                            if(move_uploaded_file($tmp_name,$filepath)){
                                            
                                                            $sql = "INSERT INTO products (product_name, product_description, product_category, product_price, product_image) VALUES ('$product_name', '$product_description', '$product_category', '$product_price', '$filepath')";
                                                            $res = mysqli_query($conn, $sql);
                                                            if($res){ echo "<script> alert ('product added Sucessfully '); </script>";
                                                                header('location:products.php');
                                                            }else{  echo "<script> alert ('failed to add product'); </script>";}
                                            }else{ echo move_uploaded_file($tmp_name,$filepath). "<script> alert ('failed to upload file '); </script>"; }
                                }else{echo "<script> alert ('only jpeg images are allowed '); </script>";  }
                    }else{echo "<script> alert ('please select a file '); </script>";}
    }
            
    $sql = "SELECT * FROM category";
    $query = mysqli_query($conn, $sql); 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="addproduct.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="product_name" placeholder="enter product name">
        <input type="text" name="product_description" placeholder="enter product description">
        <select name="product_category" id="">
            <?php while ($row = mysqli_fetch_assoc($query)) { ?>
            <option value="<?php echo $row['id'] ?>"> <?php echo $row['category_name']; ?> </option>
            <?php } ?>
        </select>
        <input type="text" name="product_price" placeholder="enter product price">
        <input type="file" name="product_image">
        <input type="submit" name="add_product" value="add_product">
    </form>
</body>
</html>
<?php
}
else{
    header('location: admin_login.php');
}        
    
?>