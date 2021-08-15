

<?php 

$to_email = "hemel.1997@gmail.com";
$subject = "hii";
$body = "kiree";
//$headers = "From: hemelraihan1997@gmail.com";

if(mail($to_email,$subject,$body))
{
  echo "seccess";
}
else
{
  echo "noo";
}
?>


<form id="form4" action="dashboard_core.php" method="post">
                        <?php
                            require_once("connection.php");

                            $myquery = "SELECT * FROM pizzamenu;";
                            $run_query = mysqli_query($conn,$myquery);

                            while($mydata = mysqli_fetch_array($run_query))
                            {?>
                            
                        <input type="checkbox" name="burger" class="food_item">
	  			<label><?php echo $mydata["Foodname"]; ?></label>
	  			<input placeholder="qty" type="number" name="burger_qty" class="food_item_qty" min="0" max="4" value="0"> 
	  			<label>[<?php echo $mydata["Price"]; ?>]</label></br>
                  <?php } ?>                     
                            
                           
                            <input type="submit" name="submit6" class="btn" value="Book" >
                        </form>



                        <form id="form5" action="dashboard_core.php" method="post">
                        <?php
                            require_once("connection.php");

                            $myquery = "SELECT * FROM pizzamenu;";
                            $run_query = mysqli_query($conn,$myquery);

                            while($mydata = mysqli_fetch_array($run_query))
                            {?>
                            
                        <input type="checkbox" name="burger" class="food_item">
	  			<label><?php echo $mydata["Foodname"]; ?></label>
	  			<input placeholder="qty" type="number" name="burger_qty" class="food_item_qty" min="0" max="4" value="0"> 
	  			<label>[<?php echo $mydata["Price"]; ?>]</label></br>
                  <?php } ?>                     
                            
                           
                            <input type="submit" name="submit6" class="btn" value="Book" >
                        </form>



                        <form id="form6" action="dashboard_core.php" method="post">
                        <?php
                            require_once("connection.php");

                            $myquery = "SELECT * FROM pizzamenu;";
                            $run_query = mysqli_query($conn,$myquery);

                            while($mydata = mysqli_fetch_array($run_query))
                            {?>
                            
                        <input type="checkbox" name="burger" class="food_item">
	  			<label><?php echo $mydata["Foodname"]; ?></label>
	  			<input placeholder="qty" type="number" name="burger_qty" class="food_item_qty" min="0" max="4" value="0"> 
	  			<label>[<?php echo $mydata["Price"]; ?>]</label></br>
                  <?php } ?>                     
                            
                           
                            <input type="submit" name="submit6" class="btn" value="Book" >
                        </form>







                        <script>
var form1 = document.getElementById("form1");
var form2 = document.getElementById("form2");
var form3 = document.getElementById("form3");
var form4 = document.getElementById("form4");
var form5 = document.getElementById("form5");
var form6 = document.getElementById("form6");
var indicator = document.getElementById("indicator");

function menu2(){
    form1.style.transform = "translateX(0px)";
    form2.style.transform = "translateX(0px)";
    indicator.style.transform = "translateX(100px)";

}

function menu1(){
    form1.style.transform = "translateX(1000px)";
    form2.style.transform = "translateX(1000px)";
    indicator.style.transform = "translateX(0px)";

}




</script>
