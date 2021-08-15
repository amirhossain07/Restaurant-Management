<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="adminstyle.css">
</head>
<body>
<?php
    require_once("dashboard/dashboard.php");
    
?>



<div class="content">
    <div class="formshowpic">
   
    <?php

if(isset($_REQUEST["deleted"]))
{
   echo "<font color='green'>Data Has Been Deleted..</font>";
}
else
    {
        echo "<font color='green'>Data Not Delete</font>";
    }


?>

    <h1>Appearance side photo</h1>
    <a class="btn btn-primary" href="showgellarypic.php" role="button">Front Photo</a></br></br>
    <a class="btn btn-primary" href="showgellarypic2.php" role="button">Appearance Photo</a></br></br>
    <a class="btn btn-primary" href="showgellarypic3.php" role="button">Kitchen Photo</a></br></br>
    <a class="btn btn-primary" href="gellarypic.php" role="button">Back</a>
            <div class="tablescroll">
         <CENTER>   <table border="1px"> </CENTER>
<tr>
<th>ID</th>
<th>Picture</th>
<th>Action</th>

</tr>

<?php
require_once("connection.php");

$myquery = "SELECT * FROM gellaryslide2;";
$run_query = mysqli_query($conn,$myquery);

while($mydata = mysqli_fetch_array($run_query))
{?>
    <tr>
    <td><?php echo $mydata["id"]; ?> </td>
  
    <td><center><img width="60px" src="images/<?php echo $mydata["picture"]; ?>"></center></td>
    <td> <a href="deletedata_core.php?id7=<?php echo $mydata["id"]; ?>">Delete</a></td>
    </tr>
<?php }

?>

</table>

</div>

            
    </div>
    </div>

    <div class="content">
    </div>
</body>
</html>