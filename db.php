<?php
$host = "localhost";
$user = "2535790";          
$pass = "Hoor@Alsafadi17";
$dbname = "db2535790";      

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>