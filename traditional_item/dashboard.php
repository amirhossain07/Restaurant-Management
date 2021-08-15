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
            <h3>Coding <span>Snow</span></h3>
        </div>
        <div class="right-area">
        <ul class="navbar">
        <li>  <a href="#" class="logout_btn">Logout</a></li>
          <li>  <a href="index.php" class="logout_btn">Home</a></li>
           
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
            <a href="profile.php"><i class="fa fa-desktop" aria-hidden="true"></i><span>Dashboard</span></a>
            <a href="admininsert.php"><i class="fa fa-cogs" aria-hidden="true"></i><span>Add Food </span></a>
            <a href="admin_edt_dlt.php"><i class="fa fa-table" aria-hidden="true"></i><span>Update Food</span></a>
            <a href="#"><i class="fa fa-th" aria-hidden="true"></i><span>Froms</span></a>
            <a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i><span>About</span></a>
            <a href="#"><i class="fa fa-sliders-h" aria-hidden="true"></i><span>Settings</span></a>
            
        </div>

        
    
</body>
</html>