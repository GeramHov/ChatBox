<?php
session_start();
include_once "config.php";
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($email) && !empty($password)) {
    // checking user email and password matching to database data
$sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND '{$password}'");
if(mysqli_num_rows($sql) > 0) {
    $row = mysqli_fetch_assoc($sql);
    $_SESSION['unique_id'] = $row['unique_id'];
    echo "success";
} else {
    echo "E-mail or Password is incorrect!";
}
} else {
    echo "All input fields are required!";
}

?>