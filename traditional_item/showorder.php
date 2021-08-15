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

    <h1>My Order</h1>
    <?php
require_once("connection.php");

$username = $_SESSION["user"];
$query1 =("SELECT * FROM traditionlogin WHERE email='$username'");
$runquery1 = mysqli_query($conn,$query1);
$row1 = mysqli_fetch_array($runquery1);
$id = $row1["id"];
$myquery = "SELECT * FROM productorder WHERE user_id='$id' ";
$run_query = mysqli_query($conn,$myquery);
?>
   
   <div class="table-wrapper-scroll-y my-custom-scrollbar">

<table class="table table-bordered table-striped mb-0">
  <thead>
<tr>

<th>Product name</th>
<th>Price</th>
<th>Quantity</th>
<th>Total</th>
<th>Customer name</th>
<th>Email</th>
<th>Address</th>
<th>Phone</th>
<th>Action</th>

</tr>
</thead>


<tbody>

<?php while($mydata = mysqli_fetch_array($run_query))
{?>
    <tr>
    <td><?php echo $mydata["productname"]; ?> </td>
    <td><?php echo $mydata["price"]; ?> </td>
    <td><?php echo $mydata["quantity"]; ?> </td>
    <td><?php echo $mydata["total"]; ?> </td>
    <td><?php echo $mydata["uname"]; ?> </td>
    <td><?php echo $mydata["email"]; ?> </td>
    <td><?php echo $mydata["addr"]; ?> </td>
    <td><?php echo $mydata["phone"]; ?> </td>
    <td> <a href="post_edit.php?id=<?php echo $mydata["id"]; ?>" >Send mail</a></td>
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


