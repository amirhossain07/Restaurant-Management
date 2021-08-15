<?php

require_once("connection.php");

if(isset($_REQUEST["submitt"]))
{
    $foodname = $_REQUEST["foodname"];
    $item = $_REQUEST["item"];
    $price = $_REQUEST["price"];
    $editingId = $_REQUEST["editingId"];

$updatequery = "UPDATE `pizzamenu` SET `Foodname` = '$foodname',`Item` = '$item', `Price` = '$price' WHERE `id` = $editingId ";
$runquery = mysqli_query($conn,$updatequery);

if($runquery==true)
{
    header("location: pizzamenu.php?edited");
}

}

elseif(isset($_REQUEST["submit1"]))
{
    $foodname = $_REQUEST["foodname"];
    $item = $_REQUEST["item"];
    $price = $_REQUEST["price"];
    $editingId = $_REQUEST["editingId"];

$updatequery = "UPDATE `chickenmenu` SET `Foodname` = '$foodname',`Item` = '$item', `Price` = '$price' WHERE `id` = $editingId ";
$runquery = mysqli_query($conn,$updatequery);

if($runquery==true)
{
    header("location: chickenmenu.php?edited");
}
}

elseif(isset($_REQUEST["submit2"]))
{
    $foodname = $_REQUEST["foodname"];
    $item = $_REQUEST["item"];
    $price = $_REQUEST["price"];
    $editingId = $_REQUEST["editingId"];

$updatequery = "UPDATE `burgermenu` SET `Foodname` = '$foodname',`Item` = '$item', `Price` = '$price' WHERE `id` = $editingId ";
$runquery = mysqli_query($conn,$updatequery);

if($runquery==true)
{
    header("location: burgermenu.php?edited");
}
}

elseif(isset($_REQUEST["submit3"]))
{
    $foodname = $_REQUEST["foodname"];
    $item = $_REQUEST["item"];
    $price = $_REQUEST["price"];
    $editingId = $_REQUEST["editingId"];

$updatequery = "UPDATE `setmenu` SET `Foodname` = '$foodname',`Item` = '$item', `Price` = '$price' WHERE `id` = $editingId ";
$runquery = mysqli_query($conn,$updatequery);

if($runquery==true)
{
    header("location: setmenu.php?edited");
}
}

elseif(isset($_REQUEST["submit4"]))
{
    $foodname = $_REQUEST["foodname"];
    $item = $_REQUEST["item"];
    $price = $_REQUEST["price"];
    $editingId = $_REQUEST["editingId"];

$updatequery = "UPDATE `desartmenu` SET `Foodname` = '$foodname',`Item` = '$item', `Price` = '$price' WHERE `id` = $editingId ";
$runquery = mysqli_query($conn,$updatequery);

if($runquery==true)
{
    header("location: desartmenu.php?edited");
}
}

elseif(isset($_REQUEST["submit5"]))
{
    $foodname = $_REQUEST["foodname"];
    $item = $_REQUEST["item"];
    $price = $_REQUEST["price"];
    $editingId = $_REQUEST["editingId"];

$updatequery = "UPDATE `beveragemenu` SET `Foodname` = '$foodname',`Item` = '$item', `Price` = '$price' WHERE `id` = $editingId ";
$runquery = mysqli_query($conn,$updatequery);

if($runquery==true)
{
    header("location: beveragemenu.php?edited");
}
}

elseif(isset($_REQUEST["submit6"]))
{
    $offername1 = $_REQUEST["offername1"];
    $deteils1 = $_REQUEST["deteils1"];
    $offername2 = $_REQUEST["offername2"];
    $deteils2 = $_REQUEST["deteils2"];
    $offername3 = $_REQUEST["offername3"];
    $deteils3 = $_REQUEST["deteils3"];
    $editingId = $_REQUEST["editingId"];

$updatequery = "UPDATE `menuoffer` SET `offername1` = '$offername1',`deteils1` = '$deteils1', `offername2` = '$offername2' , `deteils2` = '$deteils2' , `offername3` = '$offername3' , `deteils3` = '$deteils3' WHERE `id` = $editingId ";
$runquery = mysqli_query($conn,$updatequery);

if($runquery==true)
{
    header("location: offeradd.php?edited");
}
else
{
    header("location: offeradd.php?error");
}
}

elseif(isset($_REQUEST["submit7"]))
{
    $avatar_name = $_FILES["picture"] ["name"];
    $avater_tmpName = $_FILES["picture"] ["tmp_name"];
    $location = "images/";
    $nameforpic = uniqid();

    move_uploaded_file($avater_tmpName,$location."$nameforpic.jpg");

$updatequery = "UPDATE `slidepic` SET `picture` = '$nameforpic.jpg' WHERE `id` = 1 ";
$runquery = mysqli_query($conn,$updatequery);

if($runquery==true)
{
    header("location: addslide.php?edited");
}
else
{
    header("location: addslide.php?error");
}
}

elseif(isset($_REQUEST["submit8"]))
{
    $avatar_name = $_FILES["picture"] ["name"];
    $avater_tmpName = $_FILES["picture"] ["tmp_name"];
    $location = "images/";
    $nameforpic = uniqid();

    move_uploaded_file($avater_tmpName,$location."$nameforpic.jpg");

$updatequery = "UPDATE `slidepic` SET `picture` = '$nameforpic.jpg' WHERE `id` = 2 ";
$runquery = mysqli_query($conn,$updatequery);

if($runquery==true)
{
    header("location: addslide.php?edited");
}
else
{
    header("location: addslide.php?error");
}
}

elseif(isset($_REQUEST["submit9"]))
{
    $avatar_name = $_FILES["picture"] ["name"];
    $avater_tmpName = $_FILES["picture"] ["tmp_name"];
    $location = "images/";
    $nameforpic = uniqid();

    move_uploaded_file($avater_tmpName,$location."$nameforpic.jpg");

$updatequery = "UPDATE `slidepic` SET `picture` = '$nameforpic.jpg' WHERE `id` = 3 ";
$runquery = mysqli_query($conn,$updatequery);

if($runquery==true)
{
    header("location: addslide.php?edited");
}
else
{
    header("location: addslide.php?error");
}
}

elseif(isset($_REQUEST["featuresubmit1"]))
{
    $name = $_REQUEST["name"];
    $avatar_name = $_FILES["picture"] ["name"];
    $avater_tmpName = $_FILES["picture"] ["tmp_name"];
    $location = "traditional_item/image/";
    $nameforpic = uniqid();

    move_uploaded_file($avater_tmpName,$location."$nameforpic.jpg");

$updatequery = "UPDATE `post2` SET `picture` = '$nameforpic.jpg', `itemname` = '$name' WHERE `id` = 1 ";
$runquery = mysqli_query($conn,$updatequery);

if($runquery==true)
{
    header("location: edit_feature.php?edited");
}
else
{
    header("location: edit_feature.php?error");
}
}

elseif(isset($_REQUEST["featuresubmit2"]))
{
    $name = $_REQUEST["name"];
    $avatar_name = $_FILES["picture"] ["name"];
    $avater_tmpName = $_FILES["picture"] ["tmp_name"];
    $location = "traditional_item/image/";
    $nameforpic = uniqid();

    move_uploaded_file($avater_tmpName,$location."$nameforpic.jpg");

$updatequery = "UPDATE `post2` SET `picture` = '$nameforpic.jpg', `itemname` = '$name' WHERE `id` = 2 ";
$runquery = mysqli_query($conn,$updatequery);

if($runquery==true)
{
    header("location: edit_feature.php?edited");
}
else
{
    header("location: edit_feature.php?error");
}
}

elseif(isset($_REQUEST["featuresubmit3"]))
{
    $name = $_REQUEST["name"];
    $avatar_name = $_FILES["picture"] ["name"];
    $avater_tmpName = $_FILES["picture"] ["tmp_name"];
    $location = "traditional_item/image/";
    $nameforpic = uniqid();

    move_uploaded_file($avater_tmpName,$location."$nameforpic.jpg");

$updatequery = "UPDATE `post2` SET `picture` = '$nameforpic.jpg', `itemname` = '$name' WHERE `id` = 3 ";
$runquery = mysqli_query($conn,$updatequery);

if($runquery==true)
{
    header("location: edit_feature.php?edited");
}
else
{
    header("location: edit_feature.php?error");
}
}

elseif(isset($_REQUEST["featuresubmit4"]))
{
    $name = $_REQUEST["name"];
    $avatar_name = $_FILES["picture"] ["name"];
    $avater_tmpName = $_FILES["picture"] ["tmp_name"];
    $location = "traditional_item/image/";
    $nameforpic = uniqid();

    move_uploaded_file($avater_tmpName,$location."$nameforpic.jpg");

$updatequery = "UPDATE `post2` SET `picture` = '$nameforpic.jpg', `itemname` = '$name' WHERE `id` = 4 ";
$runquery = mysqli_query($conn,$updatequery);

if($runquery==true)
{
    header("location: edit_feature.php?edited");
}
else
{
    header("location: edit_feature.php?error");
}
}



elseif(isset($_REQUEST["submit10"]))
{
    $name1 = $_REQUEST["name1"];
    $name2 = $_REQUEST["name2"];
    $name3 = $_REQUEST["name3"];
    $name4 = $_REQUEST["name4"];
    $progress1 = $_REQUEST["progress1"];
    $progress2 = $_REQUEST["progress2"];
    $progress3 = $_REQUEST["progress3"];
    $progress4 = $_REQUEST["progress4"];
    $about = $_REQUEST["about"];
    $editingId = $_REQUEST["editingId"];

$updatequery = "UPDATE `aboutus` SET `name` = '$name1',`name2` = '$name2', `name3` = '$name3' , `name4` = '$name4' , `progress` = '$progress1', `progress2` = '$progress2', `progress3` = '$progress3', `progress4` = '$progress4' , `about` = '$about' WHERE `id` = $editingId ";
$runquery = mysqli_query($conn,$updatequery);

if($runquery==true)
{
    header("location: addaboutus.php?edited");
}
else
{
    header("location: addaboutus.php?error");
}
}

elseif(isset($_REQUEST["submit11"]))
{
    $about = $_REQUEST["about"];
    $avatar_name = $_FILES["picture"] ["name"];
    $avater_tmpName = $_FILES["picture"] ["tmp_name"];
    $location = "images/";
    $nameforpic = uniqid();
    $editingId = $_REQUEST["editingId"];
    move_uploaded_file($avater_tmpName,$location."$nameforpic.jpg");

$updatequery = "UPDATE `chefsinfo` SET `picture` = '$nameforpic.jpg', `about` = '$about' WHERE `id` = $editingId ";
$runquery = mysqli_query($conn,$updatequery);

if($runquery==true)
{
    header("location: addchefs.php?edited");
}
else
{
    header("location: addchefs.php?error");
}
}

elseif(isset($_REQUEST["submit12"]))
{
    $title = $_REQUEST["title"];
    $subtitle = $_REQUEST["subtitle"];
    $news = $_REQUEST["news"];
    $avatar_name = $_FILES["picture"] ["name"];
    $avater_tmpName = $_FILES["picture"] ["tmp_name"];
    $location = "images/";
    $nameforpic = uniqid();
    $editingId = $_REQUEST["editingId"];
    move_uploaded_file($avater_tmpName,$location."$nameforpic.jpg");

$updatequery = "UPDATE `latestnews` SET `picture` = '$nameforpic.jpg', `title` = '$title', `subtitle` = '$subtitle' , `news` = '$news'WHERE `id` = $editingId ";
$runquery = mysqli_query($conn,$updatequery);

if($runquery==true)
{
    header("location: addnews.php?edited");
}
else
{
    header("location: addnews.php?error");
}
}

elseif(isset($_REQUEST["submit13"]))
{
    $title = $_REQUEST["title"];
    $description = $_REQUEST["description"];
    $itemname = $_REQUEST["itemname"];
    $userid = $_REQUEST["userid"];
    $price = $_REQUEST["price"];
    $avatar_name = $_FILES["picture"] ["name"];
    $avater_tmpName = $_FILES["picture"] ["tmp_name"];
    $location = "traditional_item/offerimg/";
    $nameforpic = uniqid();
    
    move_uploaded_file($avater_tmpName,$location."$nameforpic.jpg");

$updatequery = "UPDATE `post3` SET `picture` = '$nameforpic.jpg', `itemname` = '$itemname', `price` = '$price', `title` = '$title' , `description` = '$description ' , `user_id` = '$userid 'WHERE `id` = 1 ";
$runquery = mysqli_query($conn,$updatequery);

if($runquery==true)
{
    header("location: showofferlist.php?edited");
}
else
{
    header("location: addnews.php?error");
}
}




?>