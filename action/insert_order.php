<?php

$name = $_POST["name"];
$payment = $_POST["payment"];
$usage_type = $_POST["usage_type"];
$image = $_POST["image"];
$room_id = $_POST["room_id"];


     include "connect.php";
     // Report all PHP errors
error_reporting(E_ALL);

// Force errors to be displayed on the screen
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

     $sql = "INSERT INTO `orders`
         (`name`, `payment`, `usage_type`, `room_id`, `image`)
           VALUES
         ('$name','$payment','$usage_type','$room_id','$image')";

     //     echo $sql;
            
          $result = mysqli_query($con, $sql);

    if(!$result){
        echo "Error";
    }else{   
        header("location: ../index.php");
        exit;
    }