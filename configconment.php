<?php 

$server = "localhost";
$username = "root";
$password = "";
$database = "comments";
$PORT= '3306';

$conn = mysqli_connect($server, $username, $password, $database,$PORT);

if (!$conn) { // If Check Connection
    die("<script>alert('Connection Failed.')</script>");
}

?>