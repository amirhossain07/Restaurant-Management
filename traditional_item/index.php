
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
           <a href="index.php"> <img src="image/logo.jpg" width="75px"></a>
            
        </div>
        <div class="caption">DINIG LOUNGE</div>
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="account.php">Account</a></li>
                
            </ul>
        </nav>
    </div>

    <div class="row">
        <div class="col-2">
            <h1>Give your workout </br> own style</h1>
            <p>Before to amiss in on of, still childe to their vexed sighed losel run wins,</br> change waste thy fulness florid. </p>
            <a href="#" class="btn"> Explore Now &#8594; </a>
        </div>
        <div class="col-2">
            <img src="image/gellary2.jpg">
        </div>
</div>
    </div>
    </div>

    <!------featured categories---->

    <div class="categories">
        <div class="small-container">
        <div class="row">
            <div class="col-3">
                <img src="image/food.jpg">
            </div>
            <div class="col-3">
            <img src="image/food1.jpg">
            </div>
            <div class="col-3">
            <img src="image/biriyanii.jpg">
            </div>
        </div>
        </div>
    </div>

    <!------featured products---->
    <div class="small-container">
        <h2 class="title"> Featured Item </h2>
        <div class="row">
            <div class="col-4">
            <?php
require_once("connection.php");

$myquery = "SELECT * FROM post2 WHERE id=1;";
$run_query = mysqli_query($conn,$myquery);
?>
 <?php  while($mydata = mysqli_fetch_array($run_query))
{?>
            <img src="image/<?php echo $mydata["picture"]; ?>">
            <h4><?php echo $mydata["itemname"]; ?></h4>
            
            </div>
            <?php } ?>


            <div class="col-4">
            <?php
require_once("connection.php");
            $myquery = "SELECT * FROM post2 WHERE id=2;";
$run_query = mysqli_query($conn,$myquery);
?>
 <?php  while($mydata = mysqli_fetch_array($run_query))
{?>
            <img src="image/<?php echo $mydata["picture"]; ?>">
            <h4><?php echo $mydata["itemname"]; ?></h4>
            
            </div>
            <?php } ?>

            <div class="col-4">
            <?php
require_once("connection.php");
            $myquery = "SELECT * FROM post2 WHERE id=3;";
$run_query = mysqli_query($conn,$myquery);
?>
 <?php  while($mydata = mysqli_fetch_array($run_query))
{?>
            <img src="image/<?php echo $mydata["picture"]; ?>">
            <h4><?php echo $mydata["itemname"]; ?></h4>
            
            </div>
<?php } ?>

            <div class="col-4">
            <?php
require_once("connection.php");
            $myquery = "SELECT * FROM post2 WHERE id=4;";
$run_query = mysqli_query($conn,$myquery);
?>
 <?php  while($mydata = mysqli_fetch_array($run_query))
{?>
            <img src="image/<?php echo $mydata["picture"]; ?>">
            <h4><?php echo $mydata["itemname"]; ?></h4>
            
            </div>
            <?php } ?>
            
        </div>

        <h2 class="title"> Latest Item </h2>
        

        <div class="row">
        <?php   require_once("connection.php");

$myquery = "SELECT * FROM `post`ORDER BY id DESC limit 8;";
$run_query = mysqli_query($conn,$myquery);
?>
<?php  while($mydata = mysqli_fetch_array($run_query))
{?>
            <div class="col-4">
        
            <a href="productdeteils.php?id=<?php echo $mydata["id"]; ?>"> <img src="image/<?php echo $mydata["picture"]; ?>"></a>
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
   <! ------offer----->
   <div class="offer">
       <div class="small-container">
           <div class="row">
           <?php
require_once("connection.php");


        $myquery = "SELECT * FROM `post3` WHERE id=1;";
$run_query = mysqli_query($conn,$myquery);
?>
<?php  while($mydata = mysqli_fetch_array($run_query))
{?>
               <div class="col-2">
               <img src="offerimg/<?php echo $mydata["picture"]; ?>" class="offer-img">
                   
               </div>
               <div class="col-2">
                   <p><?php echo $mydata["title"]; ?></p>
                   <h1><?php echo $mydata["itemname"]; ?></h1>
                   <small><?php echo $mydata["description"]; ?>
                   </small></br>
                   <?php } ?>
                   <a href="product_order.php?id3=1" class="btn"> Buy Now &#8594; </a>
               </div>
               
           </div>
       </div>
   </div>

   <!----getintouch--->
<section id="contact">
  <div class="containerr">
    <h1>Get In Touch</h1>
    <div class="row">
      <div class="col-md-6">
      <form action="insert_core.php" method="post" class="contact-form">
          <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Your Name">
          </div>
          <div class="form-group">
            <input type="number" name="number" class="form-control" placeholder="Phone No.">
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Your Email">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="msg" rows="4" placeholder="Write Message"></textarea>
          </div>
          <button type="submit" name="submit6" class="btn btn-primary">SEND MESSAGE</button>
        </form>
      </div>
      <div class="col-md-6 contact-info">
        <div class="follow"><b>Address: </b>XYZ Road,Dhaka Bangladesh</div>
        <div class="follow"><b>Phone: </b>++8801521495184</div>
        <div class="follow"><b>Email: </b>dinniglounge@gmail.com</div>
        <div class="follow"><label><b>Get Social: </b></label>
        <a href="#"><i class="fa fa-facebook-official"></i></a>
        <a href="#"><i class="fa fa-youtube-play"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-google-plus"></i></a>
        </div>
      </div>
     
    </div>
  </div>
</section>

<!----footer--->
<section id="footer">
  <div class="container">
    <h1><b><i>Dining Lounge</i></b></h1>
  </div>
</section>




</body>
</html>