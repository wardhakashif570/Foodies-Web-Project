<?php
    session_start();
    if(isset($_SESSION['admin_email']) & !empty($_SESSION['admin_email'])){

        require_once 'connection.php';

        if(isset($_GET) && !empty($_GET)){
            $accepted_orderid = $_GET['accepted_orderid'];
        }else{
            header('location: orderspending.php');
        }

        $true = TRUE;    
       
        $sql = "UPDATE orders SET accepted = '$true' WHERE id = '$accepted_orderid'";
        $query = mysqli_query($conn, $sql);
        
        if($query){
            echo "<script>
            alert ('Updated Sucessfully ');
        </script>";
        header('location: orderspending.php');
        }else{
            echo "<script>
            alert ('Failed to update');
        </script>";
        header('location: orderspending.php');
        }

    }else{
        header('location: admin_login.php');
    }
?>