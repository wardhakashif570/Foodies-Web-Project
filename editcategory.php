<?php 
    
     
        if(isset($_GET) && !empty($_GET)){
        $id = $_GET['id'];
        $category_name = $_GET['category_name'];
        }else{
            header('location: categories.php');
        }

      if(isset($_POST['edit_category'])){

        require_once 'connection.php'; 

        
        $category_name =  $_POST['category_name'];
        
        $sql = "UPDATE category SET category_name = '$category_name' WHERE id = '$id'";
        $query = mysqli_query($conn, $sql);
        if($query){
            echo "<script>
            alert ('Updated Sucessfully ');
        </script>";
        header('location: categories.php');
        }else{
            echo "<script>
            alert ('Failed to update');
        </script>";
        header('location: categories.php');
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
</head>
<body>
    <form action="" method="post">
      <h3>edit category</h3>
      <h4><?php echo $id; ?></h4>
      <input type="text" name="category_name" value="<?php echo $category_name; ?>" placeholder="update the name of category">
      <input type="submit" name="edit_category" value="edit_category">
    </form>
</body>
</html>

