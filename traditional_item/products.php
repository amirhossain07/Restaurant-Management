<?php 
session_start();
?>

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
</div>
</div>
</div>

    <?php
    global $get_page;
    if(isset($_GET["action"]))
    {
        $get_page = $_GET["action"];
    }
    if($get_page=="" || $get_page=="1")
    {
        $target_page = 1;
    }
    else
    {
        $target_page = ($get_page*2)-2;
    }
    
    ?>
   

    <!------featured products---->
    <div class="small-container">
        <h2 class="title"> All Item </h2>
        <div class="row">
        <?php   require_once("connection.php");



$myquery = "SELECT * FROM `post` ORDER BY id DESC limit $target_page,8;";
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
<?php 
$myqueryy = "SELECT * FROM `post`;";
$run_queryy = mysqli_query($conn,$myqueryy);
$count = mysqli_num_rows($run_queryy);
$i = $count/2;
$page = ceil($i);

for($target = 1 ; $target<=$page ; $target++)
{?>
    <div class="page-btn">
    <span><a href="products.php?action=<?php echo $target; ?>"> <?php echo $target; ?> </a></span>
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

<script>



</body>
</html>