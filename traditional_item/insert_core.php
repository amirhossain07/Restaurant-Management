<?php
session_start();


require_once("connection.php");

$email = $_SESSION["user"];
$query =("SELECT * FROM traditionlogin WHERE email='$email'");
$runquery = mysqli_query($conn,$query);
$row = mysqli_fetch_array($runquery);
$id = $row["id"];

if(isset($_REQUEST["submit"]))
{
    $itemname = $_REQUEST["itemname"];
    $title = $_REQUEST["title"];
    $price = $_REQUEST["price"];
    $description = $_REQUEST["description"];
    $avatar_name = $_FILES["picture"] ["name"];
    $avater_tmpName = $_FILES["picture"] ["tmp_name"];
    $location = "image/";
    $nameforpic = uniqid();

    move_uploaded_file($avater_tmpName,$location."$nameforpic.jpg");

    
    $insertquery = "INSERT INTO post(picture,itemname,heading,price,description,user_id)VALUES('$nameforpic.jpg','$itemname','$title','$price','$description','$id')";
    $runisquery = mysqli_query($conn,$insertquery);

    if($runisquery==true)
    {
        header ("location: post.php?insert");
    }
    
}


if(isset($_REQUEST["submit1"]))
{
    $itemname = $_REQUEST["itemname"];
    $title = $_REQUEST["title"];
    $price = $_REQUEST["price"];
    $description = $_REQUEST["description"];
    $days = $_REQUEST["days"];
    $avatar_name = $_FILES["picture"] ["name"];
    $avater_tmpName = $_FILES["picture"] ["tmp_name"];
    $location = "offerimg/";
    $nameforpic = uniqid();

    move_uploaded_file($avater_tmpName,$location."$nameforpic.jpg");

    
    $insertquery = "INSERT INTO addoffer(picture,itemname,title,price,description,days,user_id)VALUES('$nameforpic.jpg','$itemname','$title','$price','$description','$days','$id')";
    $runisquery = mysqli_query($conn,$insertquery);

    if($runisquery==true)
    {
        header ("location: addoffer.php?insert");
    }
    
}



if(isset($_REQUEST["submit4"]))
{
    $username = $_REQUEST["username"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    $number = $_REQUEST["number"];
   

    $insertquery = "INSERT INTO traditionlogin(name,email,pass,phone)VALUES('$username','$email','$password',$number)";
    $runisquery = mysqli_query($conn,$insertquery);

    if($runisquery==true)
    {
        header ("location: account.php?action=true");
    }
    else 
    {
        header ("location: account.php?action=false");
    }
    
}


elseif(isset($_REQUEST["submit5"]))
{
    $foodname = $_REQUEST["foodname"];
    $quantity = $_REQUEST["qty"];
    $userid = $_REQUEST["userid"];
    $price = $_REQUEST["price"];
    $username = $_REQUEST["uname"];
    $email = $_REQUEST["email"];
    $address = $_REQUEST["address"];
    $number = $_REQUEST["number"];
    $total = $_REQUEST["total"];

    $insertquery = "INSERT INTO productorder(productname,price,quantity,total,uname,email,addr,phone,user_id)VALUES('$foodname','$price','$quantity','$total','$username','$email','$address','$number','$userid')";
    $runisquery = mysqli_query($conn,$insertquery);

    if($runisquery==true)
    {
        header ("location: product_order.php?insert");
    }
    else 
    {
        header ("location: product_order.php?wrong");
    }
}


elseif(isset($_REQUEST["submit6"]))
{
    $username = $_REQUEST["username"];
    $number = $_REQUEST["number"];
    $email = $_REQUEST["email"];
    $msg = $_REQUEST["msg"];
    

    $insertquery = "INSERT INTO feedback(name,phone,email,msg)VALUES('$username','$number','$email','$msg')";
    $runisquery = mysqli_query($conn,$insertquery);

    if($runisquery==true)
    {
        header ("location: index.php?insert");
    }
    else 
    {
        header ("location: index.php?wrong");
    }
}




?>