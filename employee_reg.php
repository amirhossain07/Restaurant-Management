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

if(isset($_REQUEST["insert"]))
{
   
        echo "<font color='green'>Data Inserted</font>";
    
  
}

?>
          <h1>Add Employee</h1>
            <form name="myForm" enctype="multipart/form-data" action="dashboard_core.php" method="post">
            <p>Name :</p>
            <input type="file" name="picture" id="name" ></br>
            <p>Name :</p>
            <input type="text" name="uname" id="name" ></br>
            <p>address :</p>
            <input type="text" name="address" id="price"></br>
            <p>Select Category</p>
            <select name="type" id="category">
              <option value="" disabled selected>Please select a category..</option>
              <option value="chef's">chef's</option>
              <option value="manager">manager</option>
              <option value="waiter">waiter</option>
              <option value="guard">guard</option>
            </select></br>
            <p>Salary :</p>
            <input type="text" name="salary" id="salary"></br>
            <p>joining date :</p>
            <input type="date" name="date" id="date"></br>
            
            <input type="submit" name="submit7" value="submit" >
            
            </form>
            <form action="showemployee.php" method="">
              <input type="submit" name="" value="Show Registered Employee" >
             </form>
          </div>
        </div>
        
        <div class="content">

        </div>
</body>

<script>

			var my_form = document.forms.myForm;

			my_form.onsubmit = function(){
				var name = document.getElementById("name").value;
          var item = document.getElementById("item").value;
          var price = document.getElementById("price").value;
          var salary = document.getElementById("salary").salary;
		var category = document.getElementById("category").value;
			  	
			  	if (name == "" || item == "" || price == "" || category == "" || salary == "") {
			    	alert("All item must be filled out");
			    	return false;
			  	}
			  	
            };
        </script>
</html>