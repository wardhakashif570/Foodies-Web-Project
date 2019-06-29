<?php

    session_start();

    if(! isset($_SESSION['email']) & empty($_SESSION['email'])){

       require_once 'connection.php'; 

        $loginerr = "";
    
        if(isset($_POST['login'])){
            
    
            $email = $_POST['email'];
            $pswd = $_POST['pswd'];
    
            $sql = "SELECT * FROM customer WHERE email = '$email' AND pswd = '$pswd'";
            $result = mysqli_query($conn,$sql);
    
             if(mysqli_num_rows($result) == 1 ){
                
                $_SESSION['email'] = $email;
                $_SESSION['cart'] = NULL;
                header("location: index.php");
            }else{
                $loginerr="invalid combination of email and password";
            }
        }
    }else{
       echo "<script> location.href='index.php' </script>";
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="bootstrap.min.css">   -->
    <link rel="stylesheet" href="sign-up.css"> 
    <link rel="stylesheet" href="top off website.css"> 
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">

</head>
<body>

    <?php include('navbar.php'); ?>

    <form enctype="multipart/form-data" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="container  text-center">
            <div class="inner">
                <div class="title">
                    <h2>LOGIN</h2>
                    <div class="content">
                        
                        <div class="txt">
                            <input type="email" name="email" placeholder="Enter your email address">
                        </div>
                        
                        <div class="txt">
                            <input type="password" name="pswd" placeholder="Enter your password">
                        </div>
                        <span id="span"><?php echo $loginerr; ?></span>
                        <div class="btnsub">
                            <input type="submit" name="login" value="login">
                        </div>
                        <div>Don't have an accout? <a href="sign-up.php">Sign-up</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php include('footer.php'); ?>

</body>
</html>