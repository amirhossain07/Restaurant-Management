<?php
session_start();
require_once("connection.php");
 $username = $_REQUEST["username"];
 $password = $_REQUEST["password"];


$getuserinput = "SELECT * FROM adminlogin WHERE username='$username'AND password='$password' ";

$runloginquery = mysqli_query($conn,$getuserinput);
$checkcount = mysqli_num_rows($runloginquery);
if($runloginquery==true)
{
    if($checkcount==1)
    {
        
        $_SESSION["user"]=$username;
        header("location: dashboard.php?success");
    }
   else{
    header("location: admin.php?wrong");
   }
}




?>