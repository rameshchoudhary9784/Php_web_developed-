<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'blog';

$conn = mysqli_connect($server, $username, $password, $database);

if($conn == false) {
    echo 'database connection unsuccesfull';
}
?>