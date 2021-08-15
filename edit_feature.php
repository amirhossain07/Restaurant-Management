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

if(isset($_REQUEST["edited"]))
{
   echo "<font color='yellow'>Photo Has Been Uploded..</font>";
}
else
    


?>
    <h1>Add Feature Picture</h1>
    <form name="myForm" enctype="multipart/form-data" action="editdata_core.php" method="post">
    
   <p> 1st photo :</p><input type="file" name="picture" id="photo">
   <p> Name :</p><input type="text" name="name" id="name">
    <input type="submit" name="featuresubmit1" value="Save Data">
    
</form>

<form name="myForm" enctype="multipart/form-data" action="editdata_core.php" method="post">
    
<p> 2nd photo :</p> <input type="file" name="picture" id="photo">
<p> Name :</p><input type="text" name="name" id="name">
    <input type="submit" name="featuresubmit2" value="Save Data">
    
</form>

<form name="myForm" enctype="multipart/form-data" action="editdata_core.php" method="post">
    
<p> 3rd photo :</p> <input type="file" name="picture" id="photo">
<p> Name :</p><input type="text" name="name" id="name">
    <input type="submit" name="featuresubmit3" value="Save Data">
    
</form>

<form name="myForm" enctype="multipart/form-data" action="editdata_core.php" method="post">
    
<p> 4th photo :</p> <input type="file" name="picture" id="photo">
<p> Name :</p><input type="text" name="name" id="name">
    <input type="submit" name="featuresubmit4" value="Save Data">
    
</form>
</div>
</div>
<div class="content">
</div>

<script>

			var my_form = document.forms.myForm;

			my_form.onsubmit = function(){
				var photo = document.getElementById("photo").value;
			  	var name = document.getElementById("name").value;
			  	
			  	if (photo == "" || name == "") {
			    	alert("Name or Picture must be filled out");
			    	return false;
			  	}
			  	
            };
        </script>
</body>
</html>