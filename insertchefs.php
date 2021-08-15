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
    <div class="form1">

    




<form enctype="multipart/form-data" action="dashboard_core.php" method="post">
      <div class="modal-body">
     
            <p>upoload Photo :</p>
            <input type="file" name="picture"></br>
            <p>About :</p>
            <input type="text" name="about"  ></br>
            
            
           
            
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit4" class="btn btn-primary">Add Offer</button>
      </div>
</form>

<form action="addchefs.php" method="post">
     
      <div class="modal-footer">
        <button type="submit" name="submit4" class="btn btn-primary">Add Offer</button>
      </div>
</form>


</div>
</div>

</body>
</html>