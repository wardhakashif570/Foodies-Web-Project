<?php 
    session_start();
    if(isset($_SESSION['admin_email']) & !empty($_SESSION['admin_email'])){

        require_once 'connection.php';
        $false=FALSE;
        $sql = "SELECT * FROM orders WHERE accepted='$false'";
        $query = mysqli_query($conn,$sql);

        while($row = mysqli_fetch_assoc($query)){

        $customersql = "SELECT * FROM customer WHERE id={$row['customer_id']}";
        $customerquery =  mysqli_query($conn,$customersql);
        $customernameresult = mysqli_fetch_assoc($customerquery);
        

            ?>
                


                <h3><?php echo $customernameresult['fname'] . " " . $customernameresult['lname']; ?></h3>
                <?php 
                $id = $row["id"];
                $orderdproductsql = "SELECT * FROM ordered_products WHERE order_id='$id'"; 
                $products_query =  mysqli_query($conn,$orderdproductsql);
                while($orderdetailsrow = mysqli_fetch_assoc($products_query)){

                    $productnamesql = "SELECT * FROM products WHERE id={$orderdetailsrow['product_id']}";
                    $productnamequery =  mysqli_query($conn,$productnamesql);
                    $productnameresult = mysqli_fetch_assoc($productnamequery);
        
                    ?>
                    <p><?php echo $productnameresult['product_name'] . " " . $productnameresult['product_price']; ?></p>
                    
               <?php } ?>

               <h5>total price : <?php echo $row['order_price']; ?></h5>

                <a href="accept_order.php?accepted_orderid=<?php echo $row['id']; ?>">Accept Order</a>

               <?php   }

    }else{
        header('location: admin_login.php');
    }
?>