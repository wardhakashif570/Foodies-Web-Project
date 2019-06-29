<?php
     $conn= mysqli_connect("localhost","root","","registrations");

     if($conn->connect_error){
         die("Connection Failed");
     }
?>