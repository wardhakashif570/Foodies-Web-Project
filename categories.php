<?php   
session_start();
if(isset($_SESSION['admin_email']) & !empty($_SESSION['admin_email'])){
require_once 'connection.php'; 

  $sql = "SELECT * FROM category";
  $query = mysqli_query($conn, $sql); 
  while ($row = mysqli_fetch_assoc($query)) {
?>
  <tr>
    <th scope="row"><?php echo $row['id']; ?></th>
    <td><?php echo $row['category_name']; ?></td>
    <td><a href="editcategory.php?id=<?php echo $row['id']; ?>&category_name=<?php echo $row['category_name']; ?>">Edit</a> | <a href="deletecategory.php?id=<?php echo $row['id']; ?>">Delete</a></td>
  </tr>
<?php } 
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
    <h3>Categories</h3>
    <a href="addcategory.php">add new category</a>
</body>
</html>
<?php 
}
else{
  header('location: admin_login.php');
} 
?>
