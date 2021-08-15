<?php
require_once("connection.php");
if(isset($_REQUEST["id"]))
{
    $getId = $_REQUEST["id"];
    $dltquery = "DELETE FROM pizzamenu WHERE id=$getId";
$rundltquery = mysqli_query($conn,$dltquery);
if($rundltquery==true)
{
    header("location: pizzamenu.php?deleted");
    
}
}



elseif(isset($_REQUEST["id1"]))
{
    $getId = $_REQUEST["id1"];
    $dltquery = "DELETE FROM chickenmenu WHERE id=$getId";
$rundltquery = mysqli_query($conn,$dltquery);
if($rundltquery==true)
{
    header("location: chickenmenu.php?deleted");
    
}
}

elseif(isset($_REQUEST["id2"]))
{
    $getId = $_REQUEST["id2"];
    $dltquery = "DELETE FROM burgermenu WHERE id=$getId";
$rundltquery = mysqli_query($conn,$dltquery);
if($rundltquery==true)
{
    header("location: burgermenu.php?deleted");
    
}
}

elseif(isset($_REQUEST["id3"]))
{
    $getId = $_REQUEST["id3"];
    $dltquery = "DELETE FROM setmenu WHERE id=$getId";
$rundltquery = mysqli_query($conn,$dltquery);
if($rundltquery==true)
{
    header("location: setmenu.php?deleted");
    
}
}

elseif(isset($_REQUEST["id4"]))
{
    $getId = $_REQUEST["id4"];
    $dltquery = "DELETE FROM desartmenu WHERE id=$getId";
$rundltquery = mysqli_query($conn,$dltquery);
if($rundltquery==true)
{
    header("location: desartmenu.php?deleted");
    
}
}

elseif(isset($_REQUEST["id5"]))
{
    $getId = $_REQUEST["id5"];
    $dltquery = "DELETE FROM beveragemenu WHERE id=$getId";
$rundltquery = mysqli_query($conn,$dltquery);
if($rundltquery==true)
{
    header("location: beveragemenu.php?deleted");
    
}
}

elseif(isset($_REQUEST["id6"]))
{
    $getId = $_REQUEST["id6"];
    $dltquery = "DELETE FROM gellaryslide WHERE id=$getId";
$rundltquery = mysqli_query($conn,$dltquery);
if($rundltquery==true)
{
    header("location: showgellarypic.php?deleted");
    
}
}

elseif(isset($_REQUEST["id7"]))
{
    $getId = $_REQUEST["id7"];
    $dltquery = "DELETE FROM gellaryslide2 WHERE id=$getId";
$rundltquery = mysqli_query($conn,$dltquery);
if($rundltquery==true)
{
    header("location: showgellarypic2.php?deleted");
    
}
}

elseif(isset($_REQUEST["id8"]))
{
    $getId = $_REQUEST["id8"];
    $dltquery = "DELETE FROM gellaryslide3 WHERE id=$getId";
$rundltquery = mysqli_query($conn,$dltquery);
if($rundltquery==true)
{
    header("location: showgellarypic3.php?deleted");
    
}
}

elseif(isset($_REQUEST["id9"]))
{
    $getId = $_REQUEST["id9"];
    $dltquery = "DELETE FROM chefsinfo WHERE id=$getId";
$rundltquery = mysqli_query($conn,$dltquery);
if($rundltquery==true)
{
    header("location: addchefs.php?deleted");
    
}
}




?>

