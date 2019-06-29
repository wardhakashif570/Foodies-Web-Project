<?php 

require_once 'connection.php'; 

if(isset($_GET) && !empty($_GET)){
    $id = $_GET['id'];
}
        
        $sql = "DELETE FROM category WHERE id='$id'";
        $query = mysqli_query($conn, $sql);
        if($query){
            echo "<script>
            alert ('Deleted Sucessfully ');
        </script>";
        header('location: categories.php');
        }else{
            echo "<script>
            alert ('Failed to delete ');
        </script>";
            
          }
      
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
      <input type="text" name="id" placeholder="enter id of category">
      <input type="submit" name="delete_category" value="delete_category">
    </form>
</body>
</html> -->