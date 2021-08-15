<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../adminstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
</head>
<body>
<?php
    require_once("profile.php");
    
?>



<div class="content">
    <div class="formtable">
   
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

    <h1>My Post</h1>
    <?php
require_once("connection.php");

$username = $_SESSION["user"];
$query1 =("SELECT * FROM traditionlogin WHERE email='$username'");
$runquery1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_array($runquery1);
$id = $row1["id"];
$myquery = "SELECT * FROM post WHERE user_id='$id' ";
$run_query = mysqli_query($conn,$myquery);
?>
   
   <div class="table-wrapper-scroll-y My-custom-scrollbarr">

<table class="table table-bordered table-striped mb-0">
  <thead>
<tr>
<th>ID</th>
<th>Picture</th>
<th>itemname</th>
<th>heading</th>
<th>price</th>
<th>description</th>
<th>Action</th>

</tr>
</thead>


<tbody>

<?php while($mydata = mysqli_fetch_array($run_query))
{?>
    <tr>
    <td><?php echo $mydata["id"]; ?> </td>
  
    <td><center><img width="60px" src="image/<?php echo $mydata["picture"]; ?>"></center></td>
    <td><?php echo $mydata["itemname"]; ?> </td>
    <td><?php echo $mydata["heading"]; ?> </td>
    <td><?php echo $mydata["price"]; ?> </td>
    <td><?php echo $mydata["description"]; ?> </td>
    <td> <a href="post_edit.php?id=<?php echo $mydata["id"]; ?>" >Edit</a> | <a href="deletedata_core.php?id=<?php echo $mydata["id"]; ?>">Delete</a></td>
    </tr>
<?php }

?>

</tbody>
</table>

</div>

            
    </div>
    </div>

    <div class="content">
    </div>
</body>
</html>


