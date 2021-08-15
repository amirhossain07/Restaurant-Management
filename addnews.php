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
          
<h1>add News</h1>



<table border="1px">
<tr>
<th>id</th>
<th>Picture</th>
<th>Title</th>
<th>Sub Title</th>
<th>News</th>
<th>Action</th>
</tr>

<?php
require_once("connection.php");

$myquery = "SELECT * FROM latestnews;";
$run_query = mysqli_query($conn,$myquery);

while($mydata = mysqli_fetch_array($run_query))
{?>
   <tr>
   <td><?php echo $mydata["id"]; ?> </td>
   <td><center><img width="60px" src="images/<?php echo $mydata["picture"]; ?>"></center></td>
   <td><?php echo $mydata["title"]; ?> </td>
   <td><?php echo $mydata["subtitle"]; ?> </td>
   <td><?php echo $mydata["news"]; ?> </td>
  
   <td> <a href="news_edit.php?id6=<?php echo $mydata["id"]; ?>" >Update</a> </td>
   </tr>
    
    
<?php } ?>



</table>



</div>
</div>
</div>
</body>
</html>