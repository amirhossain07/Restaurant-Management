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


if(isset($_REQUEST["id6"]))
{
    $editId = $_REQUEST["id6"];
    $selectinfo = "SELECT * FROM menuoffer WHERE id=$editId";
$runinfo = mysqli_query($conn,$selectinfo);

while($getData = mysqli_fetch_array($runinfo))
{
?>

<form action="editdata_core.php" method="post">
      <div class="modal-body">
     
            <p>OfferName1 :</p>
            <input type="text" name="offername1" value="<?php echo $getData["offername1"];?>" ></br>
            <p>Deteils1 :</p>
            <input type="text" name="deteils1" value="<?php echo $getData["deteils1"];?>" ></br>
            <p>OfferName2 :</p>
            <input type="text" name="offername2"  value="<?php echo $getData["offername2"];?>"></br>
            <p>Deteils2 :</p>
            <input type="text" name="deteils2"  value="<?php echo $getData["deteils2"];?>"></br>
            <p>OfferName3 :</p>
            <input type="text" name="offername3"  value="<?php echo $getData["offername3"];?>"></br>
           
            <p>Deteils3 :</p>
            <input type="text" name="deteils3" value="<?php echo $getData["deteils3"];?>" ></br>
            <input type="hidden" name="editingId" value="<?php echo $editId;?>" >
           
            
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit6" class="btn btn-primary">Add Offer</button>
      </div>
</form>
<?php } }
?>

</div>
</div>





           
            
</body>
</html>