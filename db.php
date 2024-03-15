<?php

$server = 'localhost';
$username = 'ramesh';
$password = 'Ramesh@9784';
$database = 'ramesh_website';

$conn = mysqli_connect($server, $username, $password, $database);

if($conn == false) {
    echo 'database connection unsuccesfull';
}
?>