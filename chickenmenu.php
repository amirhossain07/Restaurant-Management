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
          
<h1>Biriyani Menu</h1>

<?php

if(isset($_REQUEST["deleted"]))
{
   echo "<font color='green'>Data Has Been Deleted..</font>";
}


    if(isset($_REQUEST["edited"]))
{
   echo "<font color='green'>Data Has Been Edited..</font>";
}

?>

<table border="1px">
<tr>
<th>ID</th>
<th>Food Name</th>
<th>Item's</th>
<th>Price</th>
<th>Action</th>
</tr>

<?php
require_once("connection.php");

$myquery = "SELECT * FROM chickenmenu;";
$run_query = mysqli_query($conn,$myquery);

while($mydata = mysqli_fetch_array($run_query))
{?>
   <tr>
   <td><?php echo $mydata["id"]; ?> </td>
   <td><?php echo $mydata["Foodname"]; ?> </td>
   <td><?php echo $mydata["Item"]; ?> </td>
   <td><?php echo $mydata["Price"]; ?> </td>
   <td> <a href="editdata.php?id1=<?php echo $mydata["id"]; ?>" >Edit</a> | <a href="deletedata_core.php?id1=<?php echo $mydata["id"]; ?>">Delete</a></td>
   </tr>
    
    
<?php } ?>



</table>



</div>
</div>
</div>


</body>
</html>