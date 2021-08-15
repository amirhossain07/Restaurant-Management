<?php
require_once("connection.php");
if(isset($_REQUEST["id"]))
{
    $getId = $_REQUEST["id"];
    $dltquery = "DELETE FROM post WHERE id=$getId";
$rundltquery = mysqli_query($conn,$dltquery);
if($rundltquery==true)
{
    header("location: postupdate.php?deleted");
    
}
}

?>