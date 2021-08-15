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

if(isset($_REQUEST["edited"]))
{
   echo "<font color='yellow'>Data Has Been Edited..</font>";
}



?>
          
<h1>add offer</h1>



<table border="1px">
<tr>
<th>offername1</th>
<th>deteils1</th>
<th>offername2</th>
<th>deteils2</th>
<th>offername3</th>
<th>deteils</th>
</tr>

<?php
require_once("connection.php");

$myquery = "SELECT * FROM menuoffer;";
$run_query = mysqli_query($conn,$myquery);

while($mydata = mysqli_fetch_array($run_query))
{?>
   <tr>
   <td><?php echo $mydata["offername1"]; ?> </td>
   <td><?php echo $mydata["deteils1"]; ?> </td>
   <td><?php echo $mydata["offername2"]; ?> </td>
   <td><?php echo $mydata["deteils2"]; ?> </td>
   <td><?php echo $mydata["offername3"]; ?> </td>
   <td><?php echo $mydata["deteils3"]; ?> </td>
   <td> <a href="addoffer.php?id6=<?php echo $mydata["id"]; ?>" >AddOffer</a> </td>
   </tr>
    
    
<?php } ?>



</table>



</div>
</div>
</div>
</body>
</html>