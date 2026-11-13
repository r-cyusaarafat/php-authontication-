<?php


$host = "localhost";
$user = "root";
$password = "";
$dbname = "l4sod26";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    echo "Connection failed ";
}