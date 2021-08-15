<?php

require_once("connection.php");

if(isset($_REQUEST["submit"]))
{
    $itemname = $_REQUEST["itemname"];
    $heading = $_REQUEST["heading"];
    $price = $_REQUEST["price"];
    $description = $_REQUEST["description"];
    $avatar_name = $_FILES["picture"] ["name"];
    $avater_tmpName = $_FILES["picture"] ["tmp_name"];
    $location = "image/";
    $nameforpic = uniqid();
    $editingId = $_REQUEST["editingId"];
    move_uploaded_file($avater_tmpName,$location."$nameforpic.jpg");

$updatequery = "UPDATE `post` SET `picture` = '$nameforpic.jpg', `itemname` = '$itemname', `heading` = '$heading' , `price` = '$price', `description` = '$description 'WHERE `id` = $editingId ";
$runquery = mysqli_query($conn,$updatequery);

if($runquery==true)
{
    header("location: postupdate.php?edited");
}
else
{
    header("location: postupdate.php?error");
}
}

?>