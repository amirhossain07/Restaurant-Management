<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "Restaurant Management";

$conn = mysqli_connect("localhost","root","","Restaurant Management");

if($conn==false)
{
    echo "disconnect with the database connection";
}
?>