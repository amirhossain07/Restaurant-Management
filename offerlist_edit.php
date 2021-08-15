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
    <div class="form1">

    <?php


if(isset($_REQUEST["id"]))
{
    $editId = $_REQUEST["id"];
    $selectinfo = "SELECT * FROM addoffer WHERE id=$editId";
$runinfo = mysqli_query($conn,$selectinfo);

while($getData = mysqli_fetch_array($runinfo))
{
?>

<form enctype="multipart/form-data" action="editdata_core.php" method="post">
      <div class="modal-body">
     
            
            <input type="file" name="picture" ></br>
            
            <input type="text" name="itemname" value="<?php echo $getData["itemname"];?>" ></br>
            
            <input type="text" name="title" value="<?php echo $getData["title"];?>" ></br>
            
            <input type="text" name="description" value="<?php echo $getData["description"];?>" ></br>

            <input type="text" name="userid" value="<?php echo $getData["user_id"];?>" ></br>

            <input type="text" name="price" value="<?php echo $getData["price"];?>" ></br>
            
            
           
            
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit13" class="btn btn-primary">Add Offer</button>
      </div>
</form>
<?php } }
?>

</div>
</div>





           
            
</body>
</html>