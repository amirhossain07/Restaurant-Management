<?php
session_start();
require_once("connection.php");
 $username = $_REQUEST["username"];
 $password = $_REQUEST["password"];


$getuserinput = "SELECT * FROM employee WHERE name='$username'AND pass='$password' ";

$runloginquery = mysqli_query($conn,$getuserinput);
$checkcount = mysqli_num_rows($runloginquery);
if($runloginquery==true)
{
    if($checkcount==1)
    {
        
        $_SESSION["user"]=$username;
        header("location: profile.php?success");
    }
   else{
    header("location: acount.php?wrong");
   }
}




?>