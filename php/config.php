<?php 
    $conn = mysqli_connect("localhost", "root", "", "chat");
    if(!$conn) {
        echo "Database is connected successfully :(";
    }
?>