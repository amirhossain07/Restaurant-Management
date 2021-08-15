<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="traditionstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
    <div class="container">
    <div class="navbar">
        <div class="logo">
            <img src="image/logo.jpg" width="75px">
            
        </div>
        <div class="caption">DINIG LOUNGE</div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="account.php">Account</a></li>
                
            </ul>
        </nav>
    </div>
    
    <!----single product--->
    
   <div class="small-container">
       <div class="single-product">
       <div class="row">
       <?php
require_once("connection.php");
if(isset($_REQUEST["id"]))
{
    $getId = $_REQUEST["id"];

        $myquery = "SELECT * FROM `post` WHERE id='$getId';";
$run_query = mysqli_query($conn,$myquery);
?>
<?php  while($mydata = mysqli_fetch_array($run_query))
{?>
           <div class="col-2">
               <img src="image/<?php echo $mydata["picture"]; ?>"  height="550px" width="460px">
           </div>

           <div class="col-2">
               <p><?php echo $mydata["itemname"]; ?></p>
               <h1><?php echo $mydata["heading"]; ?></h1>
               <h4><?php echo $mydata["price"]; ?></h4>
               
               <a href="product_order.php?id=<?php echo $mydata["id"]; ?>" class="btn">Order Now </a>
               <h3>Product Deteils</h3></br>
               <p><?php echo $mydata["description"]; ?> </p>
           </div>
       </div>
       </div>
       
   </div>
   <?php }} ?>

   <?php
require_once("connection.php");
if(isset($_REQUEST["id1"]))
{
    $getId = $_REQUEST["id1"];

        $myquery = "SELECT * FROM `post3` WHERE id='$getId';";
$run_query = mysqli_query($conn,$myquery);
?>
<?php  while($mydata = mysqli_fetch_array($run_query))
{?>
           <div class="col-2">
               <img src="image/<?php echo $mydata["picture"]; ?>"  height="550px" width="460px">
           </div>

           <div class="col-2">
               <p><?php echo $mydata["itemname"]; ?></p>
               <h1><?php echo $mydata["title"]; ?></h1>
               <h4><?php echo $mydata["price"]; ?></h4>
               <input type="number" name="amount"  value="1"></br>
               <a href="" class="btn">Order Now </a>
               <h3>Product Deteils</h3></br>
               <p><?php echo $mydata["description"]; ?> </p>
           </div>
       </div>
       </div>
       
   </div>
   <?php }} ?>

   <div class="title">
   <div class="small-product">
       <h2>More Item's</h2>
   </div>
   </div>
   

    <div class="small-container">
        
        <div class="row">

             <?php   require_once("connection.php");



$myquery = "SELECT * FROM `post` ORDER BY id DESC limit 0,4;";
$run_query = mysqli_query($conn,$myquery);

?>
                   
<?php  while($mydata = mysqli_fetch_array($run_query))
{?>
           <div class="col-4">
            <a href="productdeteils.php?id=<?php echo $mydata["id"]; ?>"><img onclick="changesite()" src="image/<?php echo $mydata["picture"]; ?>"></a>
            <h4><?php echo $mydata["itemname"]; ?></h4>
            <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
            </div>
            <p><?php echo $mydata["price"]; ?></p>
            </div>
<?php } ?>

            
        </div>
        </div>
</div>      
        

<!----footer--->
<section id="footer">
  <div class="container">
    <h1><b><i>Dining Lounge</i></b></h1>
  </div>
</section>

</body>
</html>