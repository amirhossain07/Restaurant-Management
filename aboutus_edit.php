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


if(isset($_REQUEST["id6"]))
{
    $editId = $_REQUEST["id6"];
    $selectinfo = "SELECT * FROM aboutus WHERE id=$editId";
$runinfo = mysqli_query($conn,$selectinfo);

while($getData = mysqli_fetch_array($runinfo))
{
?>

<form action="editdata_core.php" method="post">
      <div class="modal-body">
     
            <p>Name1 :</p>
            <input type="text" name="name1" value="<?php echo $getData["name"];?>" ></br>
            <p>Name2 :</p>
            <input type="text" name="name2" value="<?php echo $getData["name2"];?>" ></br>
            <p>Name3 :</p>
            <input type="text" name="name3" value="<?php echo $getData["name3"];?>"></br>
            <p>Name4 :</p>
            <input type="text" name="name4" value="<?php echo $getData["name4"];?>"></br>
            <p>Progress1 :</p>
            <input type="text" name="progress1" value="<?php echo $getData["progress"];?>"></br>
            <p>Progress2 :</p>
            <input type="text" name="progress2"  value="<?php echo $getData["progress2"];?>"></br>
            <p>Progress3 :</p>
            <input type="text" name="progress3"  value="<?php echo $getData["progress3"];?>"></br>
            <p>Progress4 :</p>
            <input type="text" name="progress4"  value="<?php echo $getData["progress4"];?>"></br>
            <p>About :</p>
            <input type="text" name="about" value="<?php echo $getData["about"];?>" ></br>

            <input type="hidden" name="editingId" value="<?php echo $editId;?>" >
           
            
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit10" class="btn btn-primary">Change about</button>
      </div>
</form>
<?php } }
?>

</div>
</div>

<div class="content">
</div>




           
            
</body>
</html>