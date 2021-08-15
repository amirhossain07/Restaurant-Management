<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require_once("dashboard/dashboard.php");
    
?>



<div class="content">
    <div class="form">
    <?php

if(isset($_REQUEST["inserted"]))
{
   echo "<font color='yellow'>Data Has Been Inserted..</font>";
}
else
    {
        echo "<font color='yellow'>Data Not insert</font>";
    }


?>
    <h1>Add Gellary Picture</h1>
    <form enctype="multipart/form-data" action="dashboard_core.php" method="post">
    
    <font color="green"> <p> Frontside Photo :</p><input type="file" name="picture"></font>
    <input type="submit" name="submit1" value="Save Data">
    
   </form>

   <form enctype="multipart/form-data" action="dashboard_core.php" method="post">
    
   <font color="green"> <p> Appearanceside photo :</p><input type="file" name="picture"></font>
    <input type="submit" name="submit2" value="Save Data">
    
   </form>

   <form enctype="multipart/form-data" action="dashboard_core.php" method="post">
    
   <font color="green"> <p> Kitchenside photo :</p><input type="file" name="picture"></font>
    <input type="submit" name="submit3" value="Save Data">
    
   </form>
   <a class="btn btn-primary" href="showgellarypic.php" role="button">View Photo</a>
   </div>
   
   </div>
   
</body>
</html>