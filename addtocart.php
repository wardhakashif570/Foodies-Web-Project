<?php

session_start();

    if(isset($_SESSION['email']))
    {
    
        if(isset($_GET['id']) & !empty($_GET['id'])){
            
            
            if(isset($_SESSION['cart']) & !empty($_SESSION['cart'])){
                $items = $_SESSION['cart'];
                $array_of_items = explode(",", $items);
                if(in_array($_GET['id'], $array_of_items)){
                    header('location: menuU.php');
                }else{
                    $items = $items . "," . $_GET['id'];
                    $_SESSION['cart'] = $items;
                    header('location: menuU.php');
                    }
            }else{
                $items = $_GET['id'];
                $_SESSION['cart'] = $items;
                header('location: menuU.php');
            }

        }else{
             header("location: menuU.php");
            }
        
    }else{
        header("location: sign-in.php");
    }
?>