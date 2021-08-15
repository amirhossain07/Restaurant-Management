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

<div class="aboutform">

<?php

if(isset($_REQUEST["edited"]))
{
   echo "<font color='yellow'>Data Has Been Edited..</font>";
}



?>
          
<h1>add AboutUs</h1>



<table border="1px">
<tr>
<th>name1</th>
<th>name2</th>
<th>name3</th>
<th>name4</th>
<th>progress1</th>
<th>progress2</th>
<th>progress3</th>
<th>progress4</th>
<th>about</th>
</tr>

<?php
require_once("connection.php");

$myquery = "SELECT * FROM aboutus;";
$run_query = mysqli_query($conn,$myquery);

while($mydata = mysqli_fetch_array($run_query))
{?>
   <tr>
   <td><?php echo $mydata["name"]; ?> </td>
   <td><?php echo $mydata["name2"]; ?> </td>
   <td><?php echo $mydata["name3"]; ?> </td>
   <td><?php echo $mydata["name4"]; ?> </td>
   <td><?php echo $mydata["progress"]; ?> </td>
   <td><?php echo $mydata["progress2"]; ?> </td>
   <td><?php echo $mydata["progress3"]; ?> </td>
   <td><?php echo $mydata["progress4"]; ?> </td>
   <td><?php echo $mydata["about"]; ?> </td>
   <td> <a href="aboutus_edit.php?id6=<?php echo $mydata["id"]; ?>" >Change</a> </td>
   </tr>
    
    
<?php } ?>



</table>



</div>
</div>
</div>
</body>
</html>