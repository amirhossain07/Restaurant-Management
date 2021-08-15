<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../adminstyle.css">
</head>
<body>
<?php
    require_once("profile.php");
    
?>
<div class="content">
    <div class="form1">

    <?php


if(isset($_REQUEST["id"]))
{
    $editId = $_REQUEST["id"];
    $selectinfo = "SELECT * FROM post WHERE id=$editId";
$runinfo = mysqli_query($conn,$selectinfo);

while($getData = mysqli_fetch_array($runinfo))
{
?>

<form enctype="multipart/form-data" action="editdata_core.php" method="post">
      <div class="modal-body">
     
            <p>upoload Photo :</p>
            <input type="file" name="picture"></br>
            <p>Item Name :</p>
            <input type="text" name="itemname" value="<?php echo $getData["itemname"];?>" ></br>
            <p>Heading :</p>
            <input type="text" name="heading" value="<?php echo $getData["heading"];?>" ></br>
            <p>Price :</p>
            <input type="text" name="price" value="<?php echo $getData["price"];?>" ></br>
            <p>Description :</p>
            <input type="text" name="description" value="<?php echo $getData["description"];?>" ></br>
            
            <input type="hidden" name="editingId" value="<?php echo $editId;?>" >
           
            
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-primary">Update Chefs</button>
      </div>
</form>
<?php } }
?>

</div>
</div>





           
            
</body>
</html>