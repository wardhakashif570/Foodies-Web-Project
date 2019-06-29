<?php   
session_start();
if(isset($_SESSION['admin_email']) & !empty($_SESSION['admin_email'])){
require_once 'connection.php'; 

  $sql = "SELECT * FROM products";
  $query = mysqli_query($conn, $sql); 
  while ($row = mysqli_fetch_assoc($query)) {
?>
  <tr>
    <th scope="row"><?php echo $row['id']; ?></th>
    <td><?php echo $row['product_name']; ?></td>
    <td><?php echo $row['product_category']; ?></td>
    <td><?php echo $row['product_price']; ?></td>
    <td><img src="<?php  echo $row['product_image']; ?>" alt="" width="100px" height="100px" ></td>
    <td><?php echo $row['product_image']; ?></td>
    <td><a href="editproduct.php?id=<?php echo $row['id']; ?>">Edit</a> | <a href="deleteproduct.php?id=<?php echo $row['id']; ?>">Delete</a></td>
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
    <h3>products</h3>
    <a href="addproduct.php">add new product</a>
</body>
</html>
<?php 
} 
else{
  header('location: admin_login.php');
}
?>
