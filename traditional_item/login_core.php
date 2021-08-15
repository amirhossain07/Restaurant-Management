<?php
session_start();
require_once("connection.php");
 $email = $_REQUEST["email"];
 $password = $_REQUEST["password"];
 $username = $_REQUEST["username"];


$getuserinput = "SELECT * FROM traditionlogin WHERE email='$email'AND pass='$password' ";

$runloginquery = mysqli_query($conn,$getuserinput);
$checkcount = mysqli_num_rows($runloginquery);
if($runloginquery==true)
{
    if($checkcount==1)
    {
        
        $_SESSION["user"]=$email;
        header("location: profile.php?success");
    }
   else{
    header("location: account.php?wrong");
   }
}




?>