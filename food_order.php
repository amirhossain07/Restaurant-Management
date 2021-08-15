<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="traditional_item/traditionstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
   
</head>
<body>
  <div class="foodback">



<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="images/logo.jpg"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="caption">DINIG LOUNGE</div>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="traditional_item/index.php">Traditional Food</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
      
    </ul>
  </div>
</nav>
</section>

    <!----Order page--->
    
    
            
                    

                
                    <div class="order-container">
                    <button onclick="calculation()">Calculate total price</button>
                    
                    <div class="form-btn">
                            <span onclick="menu1()">Biriyani</span>
                            <span onclick="menu2()">chinese</span>
                            <span onclick="menu3()">Italian</span>
                            <span onclick="menu4()">Setmenu</span>
                            <span onclick="menu5()">Desert</span>
                            <span onclick="menu6()">Beverage</span>
                            <hr id="indicator">
                        </div>
                        <form id="form1" action="dashboard_core.php" method="post">

                        <div class="row">
                        
                        <div class="col-3">
                        <table border="1px">
                              <tr>
                              <th>Food Name</th>
                              <th>Price</th>
                              <th>Action</th>
                              </tr>
                              <?php
                                  require_once("connection.php");

                                  $myquery = "SELECT * FROM pizzamenu;";
                                  $run_query = mysqli_query($conn,$myquery);

                                  while($mydata = mysqli_fetch_array($run_query))
                                  {?>

                                          <tr>
                                            <td><?php echo $mydata["Foodname"]; ?> </td>
                                            <td><?php echo $mydata["Price"]; ?> </td>
                                            <td> <a href="food_order.php?id1=<?php echo $mydata["id"]; ?>" >Add</a> </td>
                                            </tr>
                             
                                      <?php } ?> 
                                  </table></br>
                                  <?php 
                                  if(isset($_REQUEST["id1"]))
                                  {
                                    $getId = $_REQUEST["id1"];
                                    $myquery = "SELECT * FROM pizzamenu WHERE id=$getId;";
                                    $run_query = mysqli_query($conn,$myquery);

                                    while($mydata = mysqli_fetch_array($run_query))
                                    {?>
                                    <input type="text" class="namee" id="itemname" name="foodname"  value="<?php echo $mydata["Foodname"];?>"></br>
                                    <input type="text" class="namee" id="num1" name="price" value="<?php echo $mydata["Price"];?> ">
                                    <input type="text" class="namee" id="num2" name="qty" placeholder="Enter your quantity"></br>
                                    total is : <input type="text" name="total" class="namee" id="answer">
                                    <?php }}  ?>
                                    
                              </div>
                              
                              <div class="col-3">
                        <input type="text" class="namee" id="uname" name="uname" placeholder="Enter your Name" >
                        <input type="email" class="namee" id="email" name="email" placeholder="Enter your Email" >
                        <input type="text" class="namee" id="address" name="address" placeholder="Enter your Address" >
                        <input type="number" class="namee" id="number" name="number" placeholder="Enter your Number" >
                        
                        </div>
                        </div>

                        <input type="submit" name="submit8" class="btn" value="Book" >
                        </form> 



                        <form id="form2" action="dashboard_core.php" method="post">
                        <div class="row">
                        
                        <div class="col-3">
                        <table border="1px">
                              <tr>
                              <th>Food Name</th>
                              <th>Price</th>
                              <th>Action</th>
                              </tr>
                              <?php
                                  require_once("connection.php");

                                  $myquery = "SELECT * FROM burgermenu;";
                                  $run_query = mysqli_query($conn,$myquery);

                                  while($mydata = mysqli_fetch_array($run_query))
                                  {?>

                                          <tr>
                                            <td><?php echo $mydata["Foodname"]; ?> </td>
                                            <td><?php echo $mydata["Price"]; ?> </td>
                                            <td> <a href="food_order.php?id2=<?php echo $mydata["id"]; ?>" >Add</a> </td>
                                            </tr>
                             
                                      <?php } ?> 
                                  </table></br>
                                  <?php 
                                  if(isset($_REQUEST["id2"]))
                                  {
                                    $getId = $_REQUEST["id2"];
                                    $myquery = "SELECT * FROM burgermenu WHERE id=$getId;";
                                    $run_query = mysqli_query($conn,$myquery);

                                    while($mydata = mysqli_fetch_array($run_query))
                                    {?>
                                    <input type="text" class="namee" name="foodname"  value="<?php echo $mydata["Foodname"];?>"></br>
                                    <input type="text" class="namee" id="num1" name="price" value="<?php echo $mydata["Price"];?> ">
                                    <input type="text" class="namee" id="num2" name="qty" placeholder="Enter your quantity"></br>
                                    total is : <input type="text" name="total" class="namee" id="answer">
                                    <?php }}  ?>
                                    
                              </div>
                              
                              <div class="col-3">
                        <input type="text" class="namee" name="uname" placeholder="Enter your Name" >
                        <input type="email" class="namee" name="email" placeholder="Enter your Email" >
                        <input type="text" class="namee" name="address" placeholder="Enter your Address" >
                        <input type="number" class="namee" name="number" placeholder="Enter your Number" >
                        
                        </div>

                        </div>

                        <input type="submit" name="submit8" class="btn" value="Book" >
                        </form>

                      
                        <form name="myForm" id="form3" action="dashboard_core.php" method="post">
                          <div class="row">
                          <div class="col-3">
                          <table border="1px">
                              <tr>
                              <th>Food Name</th>
                              <th>Price</th>
                              <th>Action</th>
                              </tr>
                              <?php
                                  require_once("connection.php");

                                  $myquery = "SELECT * FROM setmenu;";
                                  $run_query = mysqli_query($conn,$myquery);

                                  while($mydata = mysqli_fetch_array($run_query))
                                  {?>

                                          <tr>
                                            <td><?php echo $mydata["Foodname"]; ?> </td>
                                            <td><?php echo $mydata["Price"]; ?> </td>
                                            <td> <a href="food_order.php?id3=<?php echo $mydata["id"]; ?>" >Add</a> </td>
                                            </tr>
                             
                                      <?php } ?> 
                                  </table></br>
                                  <?php 
                                  if(isset($_REQUEST["id3"]))
                                  {
                                    $getId = $_REQUEST["id3"];
                                    $myquery = "SELECT * FROM setmenu WHERE id=$getId;";
                                    $run_query = mysqli_query($conn,$myquery);

                                    while($mydata = mysqli_fetch_array($run_query))
                                    {?>
                                    <input type="text" class="namee" id="itemname" name="foodname"  value="<?php echo $mydata["Foodname"];?>"></br>
                                    <input type="text" class="namee" id="num1" name="price" value="<?php echo $mydata["Price"];?> ">
                                    <input type="text" class="namee" id="num2" name="qty" placeholder="Enter your quantity"></br>
                                    total is : <input type="text" name="total" class="namee" id="answer">
                                    <?php }}  ?>
                                    
                              </div>
                              
                              <div class="col-3">
                        <input type="text" class="namee" id="uname" name="uname" placeholder="Enter your Name" >
                        <input type="email" class="namee" id="email" name="email" placeholder="Enter your Email" >
                        <input type="text" class="namee" id="address" name="address" placeholder="Enter your Address" >
                        <input type="number" class="namee" id="number" name="number" placeholder="Enter your Number" >
                        
                        </div>

                          </div>
                         
                          
                            <input type="submit" name="submit8" class="btn" value="Book" >

                       
  	                      </form>
                          
                          

                        <form id="form4" action="dashboard_core.php" method="post">
                        <div class="row">
                        
                        <div class="col-3">
                        <table border="1px">
                              <tr>
                              <th>Food Name</th>
                              <th>Price</th>
                              <th>Action</th>
                              </tr>
                              <?php
                                  require_once("connection.php");

                                  $myquery = "SELECT * FROM chickenmenu;";
                                  $run_query = mysqli_query($conn,$myquery);

                                  while($mydata = mysqli_fetch_array($run_query))
                                  {?>

                                          <tr>
                                            <td><?php echo $mydata["Foodname"]; ?> </td>
                                            <td><?php echo $mydata["Price"]; ?> </td>
                                            <td> <a href="food_order.php?id4=<?php echo $mydata["id"]; ?>" >Add</a> </td>
                                            </tr>
                             
                                      <?php } ?> 
                                  </table></br>
                                  <?php 
                                  if(isset($_REQUEST["id4"]))
                                  {
                                    $getId = $_REQUEST["id4"];
                                    $myquery = "SELECT * FROM chickenmenu WHERE id=$getId;";
                                    $run_query = mysqli_query($conn,$myquery);

                                    while($mydata = mysqli_fetch_array($run_query))
                                    {?>
                                    <input type="text" class="namee" name="foodname"  value="<?php echo $mydata["Foodname"];?>"></br>
                                    <input type="text" class="namee" id="num1" name="price" value="<?php echo $mydata["Price"];?> ">
                                    <input type="text" class="namee" id="num2" name="qty" placeholder="Enter your quantity"></br>
                                    total is : <input type="text" name="total" class="namee" id="answer">
                                    <?php }}  ?>
                                    
                              </div>
                              
                              <div class="col-3">
                        <input type="text" class="namee" name="uname" placeholder="Enter your Name" >
                        <input type="email" class="namee" name="email" placeholder="Enter your Email" >
                        <input type="text" class="namee" name="address" placeholder="Enter your Address" >
                        <input type="number" class="namee" name="number" placeholder="Enter your Number" >
                        
                        </div>

                        </div>

                        <input type="submit" name="submit8" class="btn" value="Book" >
                        </form>



                        <form id="form5" action="dashboard_core.php" method="post">
                        <div class="row">
                        
                        <div class="col-3">
                        <table border="1px">
                              <tr>
                              <th>Food Name</th>
                              <th>Price</th>
                              <th>Action</th>
                              </tr>
                              <?php
                                  require_once("connection.php");

                                  $myquery = "SELECT * FROM desartmenu;";
                                  $run_query = mysqli_query($conn,$myquery);

                                  while($mydata = mysqli_fetch_array($run_query))
                                  {?>

                                          <tr>
                                            <td><?php echo $mydata["Foodname"]; ?> </td>
                                            <td><?php echo $mydata["Price"]; ?> </td>
                                            <td> <a href="food_order.php?id5=<?php echo $mydata["id"]; ?>" >Add</a> </td>
                                            </tr>
                             
                                      <?php } ?> 
                                  </table></br>
                                  <?php 
                                  if(isset($_REQUEST["id5"]))
                                  {
                                    $getId = $_REQUEST["id5"];
                                    $myquery = "SELECT * FROM desartmenu WHERE id=$getId;";
                                    $run_query = mysqli_query($conn,$myquery);

                                    while($mydata = mysqli_fetch_array($run_query))
                                    {?>
                                    <input type="text" class="namee" name="foodname"  value="<?php echo $mydata["Foodname"];?>"></br>
                                    <input type="text" class="namee" id="num1" name="price" value="<?php echo $mydata["Price"];?> ">
                                    <input type="text" class="namee" id="num2" name="qty" placeholder="Enter your quantity"></br>
                                    total is : <input type="text" name="total" class="namee" id="answer">
                                    <?php }}  ?>
                                    
                              </div>
                              
                              <div class="col-3">
                        <input type="text" class="namee" name="uname" placeholder="Enter your Name" >
                        <input type="email" class="namee" name="email" placeholder="Enter your Email" >
                        <input type="text" class="namee" name="address" placeholder="Enter your Address" >
                        <input type="number" class="namee" name="number" placeholder="Enter your Number" >
                        
                        </div>

                        </div>

                        <input type="submit" name="submit8" class="btn" value="Book" >
                        </form>



                        <form id="form6" action="dashboard_core.php" method="post">
                        <div class="row">
                        
                        <div class="col-3">
                        <table border="1px">
                              <tr>
                              <th>Food Name</th>
                              <th>Price</th>
                              <th>Action</th>
                              </tr>
                              <?php
                                  require_once("connection.php");

                                  $myquery = "SELECT * FROM beveragemenu;";
                                  $run_query = mysqli_query($conn,$myquery);

                                  while($mydata = mysqli_fetch_array($run_query))
                                  {?>

                                          <tr>
                                            <td><?php echo $mydata["Foodname"]; ?> </td>
                                            <td><?php echo $mydata["Price"]; ?> </td>
                                            <td> <a href="food_order.php?id6=<?php echo $mydata["id"]; ?>" >Add</a> </td>
                                            </tr>
                             
                                      <?php } ?> 
                                  </table></br>
                                  <?php 
                                  if(isset($_REQUEST["id6"]))
                                  {
                                    $getId = $_REQUEST["id6"];
                                    $myquery = "SELECT * FROM beveragemenu WHERE id=$getId;";
                                    $run_query = mysqli_query($conn,$myquery);

                                    while($mydata = mysqli_fetch_array($run_query))
                                    {?>
                                    <input type="text" class="namee" name="foodname"  value="<?php echo $mydata["Foodname"];?>"></br>
                                    <input type="text" class="namee" id="num1" name="price" value="<?php echo $mydata["Price"];?> ">
                                    <input type="text" class="namee" id="num2" name="qty" placeholder="Enter your quantity"></br>
                                    total is : <input type="text" name="total" class="namee" id="answer">
                                    <?php }}  ?>
                                    
                              </div>
                              
                              <div class="col-3">
                        <input type="text" class="namee" name="uname" placeholder="Enter your Name" >
                        <input type="email" class="namee" name="email" placeholder="Enter your Email" >
                        <input type="text" class="namee" name="address" placeholder="Enter your Address" >
                        <input type="number" class="namee" name="number" placeholder="Enter your Number" >
                        
                        </div>

                        </div>

                        <input type="submit" name="submit8" class="btn" value="Book" >
                        </form>
                  
                                    
</div>
  
  
</div>              
            
 <!----footer--->
<section id="footer">
  <div class="container">
    <h1><b><i>Dining Lounge</i></b></h1>
  </div>
</section>
   
<script>
  function calculation()
  {
    var num1 = document.getElementById("num1").value;
    var num2 = document.getElementById("num2").value;

    var result = parseInt(num1)*parseInt(num2);
    if(!isNaN(result))
    {
      document.getElementById("answer").value=result;
    }
  }
  </script>

<script>

var my_form = document.forms.myForm;

my_form.onsubmit = function(){
  var itemname = document.getElementById("itemname").value;
  var num1 = document.getElementById("num1").value;
  var num2 = document.getElementById("num2").value;
  var uname = document.getElementById("uname").value;
  var email = document.getElementById("email").value;
  var address = document.getElementById("address").value;
  var number = document.getElementById("number").value;
    
    if (itemname == "" || num1 == "" || num2 == "" || uname == "" || email == "" || address == "" || number == "") {
      alert("all feild must be filled out");
      return false;
    }
    
      };
      </script>

   
<script>
var form1 = document.getElementById("form1");
var form2 = document.getElementById("form2");
var form3 = document.getElementById("form3");
var form4 = document.getElementById("form4");
var form5 = document.getElementById("form5");
var form6 = document.getElementById("form6");
var indicator = document.getElementById("indicator");

function menu1(){
    form1.style.transform = "translateX(1400px)";
    form2.style.transform = "translateX(1400px)";
    form3.style.transform = "translateX(1400px)";
    form4.style.transform = "translateX(1400px)";
    form5.style.transform = "translateX(1400px)";
    form6.style.transform = "translateX(1400px)";
    indicator.style.transform = "translateX(-110px)";

}


function menu2(){
    form1.style.transform = "translateX(700px)";
    form2.style.transform = "translateX(700px)";
    form3.style.transform = "translateX(700px)";
    form4.style.transform = "translateX(700px)";
    form5.style.transform = "translateX(700px)";
    form6.style.transform = "translateX(700px)";
    indicator.style.transform = "translateX(0px)";
}

function menu3(){
    form1.style.transform = "translateX(0px)";
    form2.style.transform = "translateX(0px)";
    form3.style.transform = "translateX(0px)";
    form4.style.transform = "translateX(0px)";
    form5.style.transform = "translateX(0px)";
    form6.style.transform = "translateX(0px)";
    indicator.style.transform = "translateX(100px)";
}
function menu4(){
    form1.style.transform = "translateX(2100px)";
    form2.style.transform = "translateX(2100px)";
    form3.style.transform = "translateX(2100px)";
    form4.style.transform = "translateX(2100px)";
    form5.style.transform = "translateX(2100px)";
    form6.style.transform = "translateX(2100px)";
    indicator.style.transform = "translateX(200px)";
}
function menu5(){
    form1.style.transform = "translateX(2800px)";
    form2.style.transform = "translateX(2800px)";
    form3.style.transform = "translateX(2800px)";
    form4.style.transform = "translateX(2800px)";
    form5.style.transform = "translateX(2800px)";
    form6.style.transform = "translateX(2800px)";
    indicator.style.transform = "translateX(310px)";
}
function menu6(){
    form1.style.transform = "translateX(3500px)";
    form2.style.transform = "translateX(3500px)";
    form3.style.transform = "translateX(3500px)";
    form4.style.transform = "translateX(3500px)";
    form5.style.transform = "translateX(3500px)";
    form6.style.transform = "translateX(3500px)";
    indicator.style.transform = "translateX(410px)";
}

</script>  




</body>
</html>