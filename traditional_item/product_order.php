<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="traditionstyle.css">
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



  <div class="header">
    <div class="container">
    <div class="navbar">
        <div class="logo">
           <a href="index.php"> <img src="image/logo.jpg" width="75px"></a>
            
        </div>
        <div class="caption">DINIG LOUNGE</div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="account.php">Account</a></li>
                
            </ul>
        </nav>
    </div>


    <!----Order page--->
    
    
            
                    

                
                    <div class="order-container">
                    
                    <button onclick="calculation()">Calculate total price</button>
                    
                        <form name="myForm" id="form" action="insert_core.php" method="post">
                        <?php

if(isset($_REQUEST["insert"]))
{
   echo "<font color='green'>Your Order has been submited..</font>";
}
?>
                        <div class="row">
                        
                        <div class="col-3">
                        <table border="1px">
                              <tr>
                              <th>Item Name</th>
                              <th>Price</th>
                              <th>Order Id</th>
                              <th>Action</th>
                              </tr>
                              <?php
                                  require_once("connection.php");
                                  if(isset($_REQUEST["id"]))
                                  {
                                    $getId = $_REQUEST["id"];

                                  $myquery = "SELECT * FROM post WHERE id=$getId;";
                                  $run_query = mysqli_query($conn,$myquery);

                                  while($mydata = mysqli_fetch_array($run_query))
                                  {?>

                                          <tr>
                                            <td><?php echo $mydata["itemname"]; ?> </td>
                                            <td><?php echo $mydata["price"]; ?> </td>
                                            <td><?php echo $mydata["user_id"]; ?> </td>
                                            <td> <a href="product_order.php?id1=<?php echo $mydata["id"]; ?>" >Add</a> </td>
                                            </tr>
                             
                                      <?php }} ?> 
                                     <?php
                                      if(isset($_REQUEST["id3"]))
                                  {
                                    $getId = $_REQUEST["id3"];

                                  $myquery = "SELECT * FROM post3 WHERE id=$getId;";
                                  $run_query = mysqli_query($conn,$myquery);

                                  while($mydata = mysqli_fetch_array($run_query))
                                  {?>

                                          <tr>
                                            <td><?php echo $mydata["itemname"]; ?> </td>
                                            <td><?php echo $mydata["price"]; ?> </td>
                                            <td><?php echo $mydata["user_id"]; ?> </td>
                                            <td> <a href="product_order.php?id2=<?php echo $mydata["id"]; ?>" >Add</a> </td>
                                            </tr>
                             
                                      <?php }} ?> 
                                  </table></br>
                                  <?php 
                                  if(isset($_REQUEST["id1"]))
                                  {
                                    $getId = $_REQUEST["id1"];
                                    $myquery = "SELECT * FROM post WHERE id=$getId;";
                                    $run_query = mysqli_query($conn,$myquery);

                                    while($mydata = mysqli_fetch_array($run_query))
                                    {?>
                                    <input type="text" class="namee" id="itemname" name="foodname"  value="<?php echo $mydata["itemname"];?>"></br>
                                    <input type="text" class="namee" id="num1" name="price" value="<?php echo $mydata["price"];?> ">
                                    <input type="hidden" class="namee" id="num3" name="userid" value="<?php echo $mydata["user_id"];?> ">
                                    Enter your quantity here : <input type="number" class="namee" id="num2" name="qty" value="1" ></br>
                                    total is : <input type="text" name="total" class="namee" id="answer">
                                    <?php }}  ?>

                                   <?php
                                    if(isset($_REQUEST["id2"]))
                                  {
                                    $getId = $_REQUEST["id2"];
                                    $myquery = "SELECT * FROM post3 WHERE id=$getId;";
                                    $run_query = mysqli_query($conn,$myquery);

                                    while($mydata = mysqli_fetch_array($run_query))
                                    {?>
                                    <input type="text" class="namee" id="itemname" name="foodname"  value="<?php echo $mydata["itemname"];?>"></br>
                                    <input type="text" class="namee" id="num1" name="price" value="<?php echo $mydata["price"];?> ">
                                    <input type="hidden" class="namee" id="num3" name="userid" value="<?php echo $mydata["user_id"];?> ">
                                    Enter your quantity here : <input type="number" class="namee" id="num2" name="qty" value="1" ></br>
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

                        <input type="submit" name="submit5" class="btn" value="Book" >
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
  var num3 = document.getElementById("num3").value;
  var uname = document.getElementById("uname").value;
  var email = document.getElementById("email").value;
  var address = document.getElementById("address").value;
  var number = document.getElementById("number").value;
    
    if (itemname == "" || num1 == "" || num2 == "" || num3 == "" || uname == "" || email == "" || address == "" || number == "") {
      alert("all feild must be filled out");
      return false;
    }
    
      };
      </script>




</body>
</html>