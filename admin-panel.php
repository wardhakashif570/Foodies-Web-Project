<?php
    session_start();
    if( isset($_SESSION['admin_email'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link rel="stylesheet" href="top off website.css"> 
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="body.css">

</head>
<body>
<?php include('admin_navbar.php'); ?>
<!-- <img src="pictures/firehouse.png" id="first">
<img src="pictures/firehouse.png" id="second"> -->
<img src="pictures/foodies-and-friends.png" id="first">
 <div class="first"> 
<ul>
       <!-- <img src="pictures/admin.webp"/> -->
    <button class="third"><li class="second"><a href="products.php" class="third" >products</a></li></button><br>
    <button class="third"><li class="second"><a href="categories.php" class="third"  >categories</a></li></button><br>
    <button class="third"><li class="second"><a href="menuU.php" class="third">menu</a></li></button><br>
       
   </ul>
</div>
</body>
</html>

<?php
    } 
    else{
        header('location: admin_login.php');
    }
?>