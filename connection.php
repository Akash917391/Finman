<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "finman";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected to database<br>";
?>