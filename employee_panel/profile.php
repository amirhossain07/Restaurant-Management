<?php


session_start();
require_once("connection.php");



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../adminstyle.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>

<input type="checkbox" id="check">
    <!---header-->
    <header>
        <label for="check">
        <i class="fa fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left-area">
            <h3>Dining <span>Launch</span></h3>
        </div>
        <div class="right-area">
        <ul class="navbar">
        <li>  <a href="account.php" class="logout_btn">Logout</a></li>
        <li>  <a href="profile.php" class="logout_btn">Home</a></li>
        <li>  <a href="../index.php" class="logout_btn">website</a></li>
         
        
         
        </ul>  
        </div>
        
    </header>

    <!---sidebar-->
    
        <div class="sidebar">
        <?php   require_once("connection.php");
        $username = $_SESSION["user"];

$myquery = "SELECT picture FROM `employee` WHERE name='$username';";
$run_query = mysqli_query($conn,$myquery);
?>
<?php  while($mydata = mysqli_fetch_array($run_query))
{?>
            <center>
                <img src="../images/<?php echo $mydata["picture"]; ?>" class="profile-img" alt="">
<?php } ?>
                <?php 
                if($_SESSION["user"]==true)
{?>
   <h4> <?php echo $_SESSION["user"]?> </h4>;
    
<?php }?>
               
            </center>
            <a href="profile.php"><i class="fa fa-desktop" aria-hidden="true"></i><span>Dashboard</span></a>
            <a href="showfoodorder.php"><i class="fa fa-cogs" aria-hidden="true"></i><span>See Orderlist</span></a>
            <a href="showfeedback.php"><i class="fa fa-table" aria-hidden="true"></i><span>See Feedback</span></a>
            <a href="#"><i class="fa fa-th" aria-hidden="true"></i><span>Froms</span></a>
            <a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i><span>About</span></a>
            <a href="#"><i class="fa fa-sliders-h" aria-hidden="true"></i><span>Settings</span></a>
           
            
        </div>
        
        
<div class="content">
   <div class="tableform1">
        <h1>Show Party Reservation List</h1>
        <a href="partybooklist.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Booking List</a>
   </div>
</div>

<div class="content">
   <div class="tableform2">
        <h1>Show Table Reservation List</h1>
        <a href="tablebooklist.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Booking List</a>
   </div>
</div>
  
     
    
</body>
</html>