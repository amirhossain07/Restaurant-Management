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
    <div class="form">
    <?php

if(isset($_REQUEST["edited"]))
{
   echo "<font color='yellow'>Photo Has Been Uploded..</font>";
}
else
    


?>
    <h1>Add Slide Picture</h1>
    <form name="myForm" enctype="multipart/form-data" action="editdata_core.php" method="post">
    
   <p> 1st photo :</p><input type="file" name="picture" id="photo">
    <input type="submit" name="submit7" value="Save Data">
    
</form>

<form name="myForm" enctype="multipart/form-data" action="editdata_core.php" method="post">
    
<p> 2nd photo :</p> <input type="file" name="picture" id="photo">
    <input type="submit" name="submit8" value="Save Data">
    
</form>

<form name="myForm" enctype="multipart/form-data" action="editdata_core.php" method="post">
    
<p> 3rd photo :</p> <input type="file" name="picture" id="photo">
    <input type="submit" name="submit9" value="Save Data">
    
</form>
</div>
</div>

<script>

			var my_form = document.forms.myForm;

			my_form.onsubmit = function(){
				var photo = document.getElementById("photo").value;
			  	
			  	
			  	if (photo == "") {
			    	alert("Picture must be filled out");
			    	return false;
			  	}
			  	
            };
        </script>
</body>
</html>