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

<div class="formshowpic">

<?php

if(isset($_REQUEST["insert"]))
{
   echo "<font color='yellow'>Data Has Been sent ..</font>";
}



?>
          
<h1>add Offer</h1>
<form name="myForm" enctype="multipart/form-data" action="insert_core.php" method="post">
      <div class="modal-body">
     
            <p>add Photo :</p></br>
            <input type="file" name="picture" id="photo"></br></br>
            <p>item name :</p>
            <input type="text" name="itemname" id="name" ></br></br>
            <p> Title :</p>
            <input type="text" name="title" id="title" ></br></br>
            <p> price :</p>
            <input type="text" name="price" id="price" ></br></br>
            <p>description :</p>
            <input type="text" name="description" id="desc" ></br> </br> 
            <p>How many days :</p>
            <input type="number" name="days" id="days" ></br> </br> 
            
            
            
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit1" class="btn btn-primary">Send to Admin</button>
      </div>
</form>

</div>
</div>
<div class="content">


</div>
<script>
    alert("It is a Paid system..Per day cost is BDT 200...So are you sure for adding offer..??");
    </script>
    <script>

var my_form = document.forms.myForm;

my_form.onsubmit = function(){
var photo = document.getElementById("photo").value;
var name = document.getElementById("name").value;
var title = document.getElementById("title").value;
var price = document.getElementById("price").value;
var desc = document.getElementById("desc").value;
var days = document.getElementById("days").value;
      
      if (photo == "" || name == "" || title == "" || price == "" || desc == "" || days == "") {
        alert("all feild must be filled out");
        return false;
      }
      
};
</script>
</body>
</html>