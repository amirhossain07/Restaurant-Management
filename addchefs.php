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

<div class="aboutform">

<?php

if(isset($_REQUEST["edited"]))
{
   echo "<font color='yellow'>Data Has Been Edited..</font>";
}



?>
          
<h1>add Chefs</h1>



<table border="1px">
<tr>
<th>id</th>
<th>Picture</th>
<th>About</th>
<th>Action</th>
</tr>

<?php
require_once("connection.php");

$myquery = "SELECT * FROM chefsinfo;";
$run_query = mysqli_query($conn,$myquery);

while($mydata = mysqli_fetch_array($run_query))
{?>
   <tr>
   <td><?php echo $mydata["id"]; ?> </td>
   <td><center><img width="60px" src="images/<?php echo $mydata["picture"]; ?>"></center></td>
   <td><?php echo $mydata["about"]; ?> </td>
  
   <td> <a href="chefs_edit.php?id6=<?php echo $mydata["id"]; ?>" >Update</a> </td>
   </tr>
    
    
<?php } ?>



</table>



</div>
</div>
</div>
</body>
</html>