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
          <a href="index.php">  <img src="image/logo.jpg" width="75px"></a>
            
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

    
   

    <!------featured products---->
    <div class="small-container">
        <h2 class="title"> All Item </h2>
        <div class="row">
        <?php   require_once("connection.php");

$myquery = "SELECT * FROM `post` ORDER BY id;";
$run_query = mysqli_query($conn,$myquery);
?>
<?php  while($mydata = mysqli_fetch_array($run_query))
{?>
            <div class="col-4">
        
            <img src="image/<?php echo $mydata["picture"]; ?>">
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
           

        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594</span>
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