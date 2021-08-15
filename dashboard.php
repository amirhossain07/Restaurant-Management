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
    <link rel="stylesheet" href="adminstyle.css">
   
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
        <li>  <a href="index.php" class="logout_btn">Logout</a></li>
        <li>  <a href="#" class="logout_btn">Edit Tradition</a>
        <ul class="next">
        <li><a href="edit_feature.php" class="logout_btn">Edit Feature</a></li>
        
        </ul>
    </li>
          <li>  <a href="" class="logout_btn">Edit Website</a>
          <ul class="next">
        <li><a href="addaboutus.php" class="logout_btn">About us</a></li>
        <li><a href="offeradd.php" class="logout_btn">Add Offer</a></li>
        <li><a href="addchefs.php" class="logout_btn">Chefes Profile</a></li>
        <li><a href="addnews.php" class="logout_btn">LatestNews</a></li>
        </ul>
        </li>
        <li>  <a href="" class="logout_btn">Add Photo</a>
        <ul class="next">
        <li><a href="addslide.php" class="logout_btn">Add Slider</a></li>
        
        <li><a href="gellarypic.php" class="logout_btn">Add Gellary</a></li>
        </ul>
        </li>
         
        </ul>  
        </div>
        
    </header>

    <!---sidebar-->
    
        <div class="sidebar">
            <center>
                <img src="images/chef3.jpeg" class="profile-img" alt="">
                <?php 
                if($_SESSION["user"]==true)
{?>
   <h4> <?php echo $_SESSION["user"]?> </h4>;
    
<?php }?>
            </center>
            <a href="#"><i class="fa fa-desktop" aria-hidden="true"></i><span>Dashboard</span></a>
            <a href="admininsert.php"><i class="fa fa-cogs" aria-hidden="true"></i><span>Add Food</span></a>
            <a href="admin_edt_dlt.php"><i class="fa fa-table" aria-hidden="true"></i><span>Update Food</span></a>
            <a href="tradition_user.php"><i class="fa fa-th" aria-hidden="true"></i><span>Tradition User</span></a>
            <a href="showofferlist.php"><i class="fa fa-info-circle" aria-hidden="true"></i><span>Offer List</span></a>
            <a href="employee_reg.php"><i class="fa fa-sliders-h" aria-hidden="true"></i><span>Employee</span></a>
           
            
        </div>
        
        
<div class="content">
   <div class="tableform1">
        <h1>Show Party Reservation List</h1>
        <a href="partybooklist.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Booking List</a>
   </div>
</div>

<div class="content">
   <div class="tableform2">
        <h1>Show Traditional item OrderList</h1>
        <a href="showorder.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">See List</a>
   </div>
</div>

<div class="content">
   <div class="tableform3">
        <h1>Show Customer's Feedback</h1>
        <a href="showfeedback.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">See List</a>
   </div>
</div>
  
     
    
</body>
</html>