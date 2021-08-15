
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
    <div class="form">
<?php


if(isset($_REQUEST["id"]))
{
    $editId = $_REQUEST["id"];
    $selectinfo = "SELECT * FROM pizzamenu WHERE id=$editId";
$runinfo = mysqli_query($conn,$selectinfo);

while($getData = mysqli_fetch_array($runinfo))
{
?>

<form action="editdata_core.php" method="post">
      <div class="modal-body">
     
            <p>Food Name :</p>
            <input type="text" name="foodname" value="<?php echo $getData["Foodname"];?>" ></br>
            <p>Item's Name :</p>
            <input type="text" name="item" value="<?php echo $getData["Item"];?>" ></br>
            <p>Price :</p>
            <input type="text" name="price" value="<?php echo $getData["Price"];?>" ></br>
    
            <input type="hidden" name="editingId" value="<?php echo $editId;?>" >
            
      </div>
      <div class="modal-footer">
        
        <button type="submit" name="submitt" class="btn btn-primary">Save changes</button>
      </div>
</br>
      </form>
      <form action="pizzamenu.php" method="post">
      <button type="submit" name="submit" class="btn btn-primary">Back Now</button>
      </form>

<?php } 
}

 elseif(isset($_REQUEST["id1"]))
{
    $editId = $_REQUEST["id1"];
    $selectinfo = "SELECT * FROM chickenmenu WHERE id=$editId";
$runinfo = mysqli_query($conn,$selectinfo);

while($getData = mysqli_fetch_array($runinfo))
{
?>

<form action="editdata_core.php" method="post">
      <div class="modal-body">
     
            <p>Food Name :</p>
            <input type="text" name="foodname" value="<?php echo $getData["Foodname"];?>" ></br>
            <p>Item's Name :</p>
            <input type="text" name="item" value="<?php echo $getData["Item"];?>" ></br>
            <p>Price :</p>
            <input type="text" name="price" value="<?php echo $getData["Price"];?>" ></br>
    
            <input type="hidden" name="editingId" value="<?php echo $editId;?>" >
            
      </div>
      <div class="modal-footer">
        
        <button type="submit" name="submit1" class="btn btn-primary">Save changes</button>
      </div>
</br>
      </form>
      <form action="chickenmenu.php" method="post">
      <button type="submit" name="submit" class="btn btn-primary">Back Now</button>
      </form>

<?php
}
}
 elseif(isset($_REQUEST["id2"]))
{
    $editId = $_REQUEST["id2"];
    $selectinfo = "SELECT * FROM burgermenu WHERE id=$editId";
$runinfo = mysqli_query($conn,$selectinfo);

while($getData = mysqli_fetch_array($runinfo))
{
?>

<form action="editdata_core.php" method="post">
      <div class="modal-body">
     
            <p>Food Name :</p>
            <input type="text" name="foodname" value="<?php echo $getData["Foodname"];?>" ></br>
            <p>Item's Name :</p>
            <input type="text" name="item" value="<?php echo $getData["Item"];?>" ></br>
            <p>Price :</p>
            <input type="text" name="price" value="<?php echo $getData["Price"];?>" ></br>
    
            <input type="hidden" name="editingId" value="<?php echo $editId;?>" >
            
      </div>
      <div class="modal-footer">
        
        <button type="submit" name="submit2" class="btn btn-primary">Save changes</button>
      </div>
</br>
      </form>
      <form action="burgermenu.php" method="post">
      <button type="submit" name="submit" class="btn btn-primary">Back Now</button>
      </form>

<?php
}
}

 elseif(isset($_REQUEST["id3"]))
{
    $editId = $_REQUEST["id3"];
    $selectinfo = "SELECT * FROM setmenu WHERE id=$editId";
$runinfo = mysqli_query($conn,$selectinfo);

while($getData = mysqli_fetch_array($runinfo))
{
?>

<form action="editdata_core.php" method="post">
      <div class="modal-body">
     
            <p>Food Name :</p>
            <input type="text" name="foodname" value="<?php echo $getData["Foodname"];?>" ></br>
            <p>Item's Name :</p>
            <input type="text" name="item" value="<?php echo $getData["Item"];?>" ></br>
            <p>Price :</p>
            <input type="text" name="price" value="<?php echo $getData["Price"];?>" ></br>
    
            <input type="hidden" name="editingId" value="<?php echo $editId;?>" >
            
      </div>
      <div class="modal-footer">
        
        <button type="submit" name="submit3" class="btn btn-primary">Save changes</button>
      </div>
</br>
      </form>
      <form action="burgermenu.php" method="post">
      <button type="submit" name="submit" class="btn btn-primary">Back Now</button>
      </form>

<?php
}
}
 elseif(isset($_REQUEST["id4"]))
{
    $editId = $_REQUEST["id4"];
    $selectinfo = "SELECT * FROM desartmenu WHERE id=$editId";
$runinfo = mysqli_query($conn,$selectinfo);

while($getData = mysqli_fetch_array($runinfo))
{
?>

<form action="editdata_core.php" method="post">
      <div class="modal-body">
     
            <p>Food Name :</p>
            <input type="text" name="foodname" value="<?php echo $getData["Foodname"];?>" ></br>
            <p>Item's Name :</p>
            <input type="text" name="item" value="<?php echo $getData["Item"];?>" ></br>
            <p>Price :</p>
            <input type="text" name="price" value="<?php echo $getData["Price"];?>" ></br>
    
            <input type="hidden" name="editingId" value="<?php echo $editId;?>" >
            
      </div>
      <div class="modal-footer">
        
        <button type="submit" name="submit4" class="btn btn-primary">Save changes</button>
      </div>
</br>
      </form>
      <form action="desartmenu.php" method="post">
      <button type="submit" name="submit" class="btn btn-primary">Back Now</button>
      </form>

<?php
}
}
 elseif(isset($_REQUEST["id5"]))
{
    $editId = $_REQUEST["id5"];
    $selectinfo = "SELECT * FROM beveragemenu WHERE id=$editId";
$runinfo = mysqli_query($conn,$selectinfo);

while($getData = mysqli_fetch_array($runinfo))
{
?>

<form action="editdata_core.php" method="post">
      <div class="modal-body">
     
            <p>Food Name :</p>
            <input type="text" name="foodname" value="<?php echo $getData["Foodname"];?>" ></br>
            <p>Item's Name :</p>
            <input type="text" name="item" value="<?php echo $getData["Item"];?>" ></br>
            <p>Price :</p>
            <input type="text" name="price" value="<?php echo $getData["Price"];?>" ></br>
    
            <input type="hidden" name="editingId" value="<?php echo $editId;?>" >
            
      </div>
      <div class="modal-footer">
        
        <button type="submit" name="submit5" class="btn btn-primary">Save changes</button>
      </div>
</br>
      </form>
      <form action="beveragemenu.php" method="post">
      <button type="submit" name="submit" class="btn btn-primary">Back Now</button>
      </form>

<?php
}
}

?>
</div>
</div>

</body>
</html>




   