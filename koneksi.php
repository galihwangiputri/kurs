<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "kurs";

$connect = mysqli_connect($server, $username, $password, $db_name);

if ($connect->connect_error){
    die("Connection failed: " . $connect->connect_error);
    echo "Connection failed";
} else {
    // echo "Connection establish";
}
?>