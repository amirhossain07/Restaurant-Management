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

if(isset($_REQUEST["action"]))
{
    if($_REQUEST["action"]==true)
    {
        echo "<font color='green'>Data Inserted</font>";
    }
  
}

?>
          <h1>Add New Menu</h1>
            <form name="myForm" action="dashboard_core.php" method="post">
            <p>Food Name :</p>
            <input type="text" name="foodname" id="name" ></br>
            <p>Item's Name</p>
            <input type="text" name="item" id="item"></br>
            <p>Price</p>
            <input type="text" name="price" id="price"></br>
            <p>Select Category</p>
            <select name="type" id="category">
              <option value="" disabled selected>Please select a state..</option>
              <option value="Italian">Italian</option>
              <option value="Biriyani">Biriyani</option>
              <option value="Chinese">Chinese</option>
              <option value="Dessert">Dessert</option>
              <option value="Setmenu">Setmenu</option>
              <option value="Beverage">Beverage</option>
            </select></br>
            <input type="submit" name="submit" value="submit" >
            </form>
          </div>
        </div>
</body>

<script>

			var my_form = document.forms.myForm;

			my_form.onsubmit = function(){
				var name = document.getElementById("name").value;
          var item = document.getElementById("item").value;
          var price = document.getElementById("price").value;
			  	var category = document.getElementById("category").value;
			  	
			  	if (name == "" || item == "" || price == "" || category == "") {
			    	alert("All item must be filled out");
			    	return false;
			  	}
			  	
            };
        </script>
</html>