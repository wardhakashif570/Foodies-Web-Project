<?php 
    require_once 'connection.php'; 

       if(isset($_GET['id']) & !empty($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT product_image FROM products WHERE id=$id";
        $res = mysqli_query($conn, $sql);
        $r = mysqli_fetch_assoc($res);
        
          if(unlink($r['product_image'])){
            $delsql = "UPDATE products SET product_image='' WHERE id=$id";
            if(mysqli_query($conn, $delsql)){
              header("location:editproduct.php?id={$id}");
            }
          }else{
            $delsql = "UPDATE products SET product_image='' WHERE id=$id";
            if(mysqli_query($conn, $delsql)){
              header("location:editproduct.php?id={$id}");
            }else{
      header("location:editproduct.php?id={$id}");
    }
}
       } 
?>