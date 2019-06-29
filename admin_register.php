<?php 
        session_start(); 

        $nerr = $eerr = $perr = $cperr =  "";
        $admin_name = $admin_email = $admin_password = $cpassword =  "";
        $vname = $vemail = $vpswd = $vcpassword =  false;
        
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            function validate_input($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            function strlenght($str){
                $ln = strlen($str);
                if($ln>15){
                    return "password should be less then 15 characters";
                }elseif($ln < 5 && $ln >= 1){
                    return "password should be greater than 4 characters";
                }
                return false;
            }

            if(empty($_POST['admin_name']))
            {
                $nerr="name is required";
            }else{
                $admin_name = validate_input($_POST['admin_name']);
                $vname = true;
               
            }

            if(empty($_POST['admin_email'])){
                $eerr="E-mail required";
            }elseif(!filter_var($_POST['admin_email'],FILTER_VALIDATE_EMAIL)){
                $eerr = "Invalid Email";
            }else{
                $admin_email = validate_input($_POST['admin_email']);
                $vemail=true;
            }

            $lenght = strlenght($_POST['admin_password']);

            if(empty($_POST['admin_password'])){
                $perr = "password field required";
            }elseif($lenght){
                $perr = $lenght;
            }else{
                $admin_password = validate_input($_POST['admin_password']);
                $vpswd = true;
            }

            if(empty($_POST['cpassword'])){
                $cperr = "confirm password required";
            }elseif($_POST['cpassword'] != $admin_password){
                $cperr = "password do not match";
            }
            elseif($_POST['cpassword']==$admin_password){
                $vcpassword = true;
            }

            
        }

        require_once 'connection.php'; 


      
        if(isset($_POST['register_admin']) && $vname && $vemail && $vcpassword  )
        {
           
              $sql = "SELECT * FROM admin_table WHERE admin_email = '$admin_email'" ;  
              $result = mysqli_query($conn,$sql);
               
              if(mysqli_num_rows($result)>0)
              {
                echo "<script>
                        alert ('you already have an account');
                    </script>";
              }else {

                $sql =  "INSERT INTO admin_table (admin_name,admin_email,admin_password) VALUES ('$admin_name','$admin_email','$admin_password')";
                $query = mysqli_query($GLOBALS['conn'],$sql);
                
                if($query){
                    echo "<script>
                        alert ('Record Inserted Sucessfully ');
                    </script>";
                    $_SESSION['admin_email'] = $admin_email;
                    header('location: admin-panel.php');
                }

                
              }

            
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
    

</head>
<body>

<?php include('admin_navbar.php'); ?>
    <form enctype="multipart/form-data" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="container  text-center">
            <div class="inner">
                <div class="title">
                    <h2>Admin Register</h2>
                    <div class="content">
                        <div class=txt>
                            <input type="text" name="admin_name" placeholder="Enter your name">
                        </div>
                        <span id="span"><?php echo $nerr; ?></span>
                        <div class="txt">
                            <input type="email" name="admin_email" placeholder="Enter your email address">
                        </div>
                        <span id="span"><?php echo $eerr; ?></span>
                        <div class="txt">
                            <input type="password" name="admin_password" placeholder="Enter your password">
                        </div>
                        <span id="span"><?php echo $perr; ?></span>
                        <div class="txt">
                            <input type="password" name="cpassword" placeholder="Confirm password">
                        </div>
                        <span id="span"><?php echo $cperr; ?></span>
                        
                        <div class="btnsub">
                            <input type="submit" name="register_admin" value="register_admin">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>