<?php
session_start();
include_once "config.php";
$sql = mysqli_query($conn, "SELECT * FROM users");
$output = "";
if(mysqli_num_rows($sql) == 1){
    $output .= "No users are available to chat";
} elseif ($row = mysqli_num_rows($sql) > 0) {
   include_once "data.php";
}

echo $output;



?>