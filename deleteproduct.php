<?php

    require_once 'connection.php'; 

    if(isset($_GET) && !empty($_GET)){
        $id = $_GET['id'];
    }

    
    $sql = "DELETE FROM products WHERE id='$id'";
    $query = mysqli_query($conn, $sql);
    if($query){
        echo "<script>
        alert ('Deleted Sucessfully ');
    </script>";
    header('location: products.php');
    }else{
        echo "<script>
        alert ('Failed to delete ');
    </script>";
    header('location: products.php');
      }

?>