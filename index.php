<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <script>
      $(Document).ready(function(){
        $(".button").click(function(){
          var name = $(this).attr("data-filter");
          if(name == "all")
          {
            $(".filter").show("2000");
          }
          else{
            $(".filter").not("."+name).hide("2000");
            $(".filter").filter("."+name).show("2000");
          }
        });
        $(".menubar a").click(function(){
          $(this).addClass("active").siblings().removeClass("active");
        });
      });
    </script>

<script>
      $(Document).ready(function(){
        $(".buttonn").click(function(){
          var photo = $(this).attr("data-filter");
          if(photo == "all")
          {
            $(".filterr").show("2000");
          }
          else{
            $(".filterr").not("."+photo).hide("2000");
            $(".filterr").filter("."+photo).show("2000");
          }
        });
        $(".menubar a").click(function(){
          $(this).addClass("active").siblings().removeClass("active");
        });
      });
    </script>

    

    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>


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
        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#feature">Offer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#menu">Menu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#reservation">Reservation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="traditional_item/index.php">Traditional Food</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="food_order.php">Order</a>
      </li>
      
    </ul>
  </div>
</nav>
</section>

<section id="home">
<div id="slider">
<div id="header-slider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#header-slider" data-slide-to="0" class="active"></li>
    <li data-target="#header-slider" data-slide-to="1"></li>
    <li data-target="#header-slider" data-slide-to="2"></li>
  </ol>

  <?php
require_once("connection.php");

$myquery = "SELECT * FROM slidepic WHERE id=1;";
$run_query = mysqli_query($conn,$myquery);
?>

  <div class="carousel-inner">
    <div class="carousel-item active">
    <?php  while($mydata = mysqli_fetch_array($run_query))
{?>
      <img src="images/<?php echo $mydata["picture"]; ?>" class="d-block w-100" alt="...">
     <div class="carousel-caption">
       <h2>WELCOME TO <span>DINING LOUNGE</span> </h2>
       <a href="reservation.php" class="btn btn-half">Reservation Now</a>
<?php } ?>           
</div>
</div>
<?php
require_once("connection.php");

$myquery = "SELECT * FROM slidepic WHERE id=2;";
$run_query = mysqli_query($conn,$myquery);
?>
    <div class="carousel-item">
    <?php  while($mydata = mysqli_fetch_array($run_query))
{?>
      <img src="images/<?php echo $mydata["picture"]; ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption">
       <h2>OUR MENU </br> <span>SEE WHAT'S NEW TODAY</span> </h2>
       <a href="#menu" class="btn btn-half">Today's Menu</a>
       <?php } ?>   
    </div>
</div>
<?php
require_once("connection.php");

$myquery = "SELECT * FROM slidepic WHERE id=3;";
$run_query = mysqli_query($conn,$myquery);
?>
    <div class="carousel-item">
    <?php  while($mydata = mysqli_fetch_array($run_query))
{?>
      <img src="images/<?php echo $mydata["picture"]; ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption">
       <h2>GET READY TO </br> <span>JOIN WITH US</span> </h2>
       <a href="traditional_item/account.php" class="btn btn-half">Join Us</a>
<?php } ?>
    </div>
</div>
  </div>
  <a class="carousel-control-prev" href="#header-slider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#header-slider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
    </section>

<!----About--->
<?php
require_once("connection.php");

$myquery = "SELECT * FROM aboutus WHERE id=1;";
$run_query = mysqli_query($conn,$myquery);
?>
<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2> ABOUT US </h2>
        <?php  while($mydata = mysqli_fetch_array($run_query))
{?>
        <div class="about-content">
        <?php echo $mydata["about"]; ?>
          </div>

</div>
     <div class="col-md-6 skills-bar">
       <p><?php echo $mydata["name"]; ?></p>
       <div class="progress">
         <div class="progress-bar" style="width:<?php echo $mydata["progress"]; ?>"><?php echo $mydata["progress"]; ?> </div>
         
</div>
<p><?php echo $mydata["name2"]; ?> </p>
       <div class="progress">
         <div class="progress-bar" style="width:<?php echo $mydata["progress2"]; ?>"><?php echo $mydata["progress2"]; ?> </div>
</div>
<p><?php echo $mydata["name3"]; ?> </p>
       <div class="progress">
         <div class="progress-bar" style="width:<?php echo $mydata["progress3"]; ?>"><?php echo $mydata["progress3"]; ?></div>
</div>
<p><?php echo $mydata["name4"]; ?> </p>
       <div class="progress">
         <div class="progress-bar" style="width:<?php echo $mydata["progress4"]; ?>"><?php echo $mydata["progress4"]; ?> </div>
         <?php } ?>
</div>
</div>
</div>
</div>
</section>
<!----Offer--->
<section class="feature-area" id="feature">
    < class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title">
            <div class="col-sm-12 text-center">
              <h1>SPECIAL PACKAGES</h1>
              <div class="sub-heading">
                
                <div class="leftdiv">
          <div class="feature-mockup">
          
          </div>
        </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
require_once("connection.php");
$myquery = "SELECT * FROM menuoffer";
$run_query = mysqli_query($conn,$myquery);
?>



<?php while($mydata = mysqli_fetch_array($run_query))
{?>
<div class="container1">

<div class="box">
<h2 class="h">Special Package..!!</br> <?php echo $mydata["offername1"]; ?></h2>

<div class="content">
<h3><?php echo $mydata["deteils1"]; ?></h3>
<a href="food_order.php" class="btn btn-half">Order Now</a>
</div>
</div>
<div class="box">
<h2 class="h">Special package..!!</br> <?php echo $mydata["offername2"]; ?></h2>
<div class="content">
<h3><?php echo $mydata["deteils2"]; ?></h3>
<a href="food_order.php" class="btn btn-half">Order Now</a>
</div>
</div>
<div class="box">
<h2 class="h">Special Package..!!</br><?php echo $mydata["offername3"]; ?></h2>
<div class="content">
<h3><?php echo $mydata["deteils3"]; ?></h3>
<a href="food_order.php" class="btn btn-half">Order Now</a>
<?php } 
?>
</div>
</div>
</div>
</div>
</div>

<div class="col-sm-12">
          <div class="title">
            <div class="col-sm-12 text-center">
              <h2>ENJOY OUR OFFER</br><p>Good Food Good Life</p></h2>
</div>
</div>
</div>
     
</section>

<!----Menuu--->

<section id="menu">
<div id="menuitem">
<h1>Todays Menu</h1>
<div class="menubar">
<a  data-filter="all" class="button active">All</a>
<a  data-filter="breakfast" class="button">Breakfast</a>
<a  data-filter="lunch" class="button">Lunch</a>
<a  data-filter="dinner" class="button">Dinner</a>

</div>
</div>
<div class="itemcontainerr">

<div class="filter breakfast dinner lunch">
      <div class="leftdiv">

       <div class="imgdiv">
         <img  class="profileimg" src="images/pizza.jpg">
       </div>

      <div class="menudiv">
         <h1>ITALIAN</h1>
        <table border="2">
        <tr>
        <th>Food Name</th>
        <th>Item's</th>
       <th>Price</th>
       </tr>

<?php
require_once("connection.php");

$myquery = "SELECT * FROM pizzamenu;";
$run_query = mysqli_query($conn,$myquery);

while($mydata = mysqli_fetch_array($run_query))
{
    echo '<tr>
    <td>'.$mydata["Foodname"].'</td>
    <td>'.$mydata["Item"].'</td>
    <td>'.$mydata["Price"].'</td>
    </tr>';
}

?>

</table>
</div>
</div>
</div>

<div class="filter lunch ">
<div class="rightdiv">

<div class="imgdiv">
<img  class="profileimg" src="images/biriyanii.jpg">
</div>

<div class="menudiv">
<h1>BIRIYANI</h1>

<table border="2">
<tr>
<th>Food Name</th>
<th>Item's</th>
<th>Price</th>
</tr>

<?php
require_once("connection.php");

$myquery = "SELECT * FROM chickenmenu;";
$run_query = mysqli_query($conn,$myquery);

while($mydata = mysqli_fetch_array($run_query))
{
    echo '<tr>
    
    <td>'.$mydata["Foodname"].'</td>
    <td>'.$mydata["Item"].'</td>
    <td>'.$mydata["Price"].'</td>
    </tr>';
}

?>

</table>

</div>
</div>
</div>

  


<div class="filter lunch dinner">
<div class="leftdiv">

<div class="imgdiv">
<img  class="profileimg" src="images/chinese.jpg">
</div>

<div class="menudiv">
  <h1>CHINESE</h1>
<table border="2">
<tr>
<th>Food Name</th>
<th>Item's</th>
<th>Price</th>
</tr>

<?php
require_once("connection.php");

$myquery = "SELECT * FROM burgermenu;";
$run_query = mysqli_query($conn,$myquery);

while($mydata = mysqli_fetch_array($run_query))
{
    echo '<tr>
    
    <td>'.$mydata["Foodname"].'</td>
    <td>'.$mydata["Item"].'</td>
    <td>'.$mydata["Price"].'</td>
    </tr>';
}

?>

</table>
</div>
</div>
</div>

<div class="filter lunch dinner">
<div class="rightdiv">

<div class="imgdiv">
<img  class="profileimg" src="images/setmenu.jpg">
</div>

<div class="menudiv">
<h1>SETMENU</h1>
<table border="2">
<tr>
<th>Food Name</th>
<th>Item's</th>
<th>Price</th>
</tr>

<?php
require_once("connection.php");

$myquery = "SELECT * FROM setmenu;";
$run_query = mysqli_query($conn,$myquery);

while($mydata = mysqli_fetch_array($run_query))
{
    echo '<tr>
    
    <td>'.$mydata["Foodname"].'</td>
    <td>'.$mydata["Item"].'</td>
    <td>'.$mydata["Price"].'</td>
    </tr>';
}

?>

</table>
</div>
</div>
</div>

<div class="filter breakfast dinner lunch">
<div class="leftdiv">

<div class="imgdiv">
<img  class="profileimg" src="images/sweet.jpg">
</div>

<div class="menudiv">
  <h1>DESSERTS</h1>
<table border="2">
<tr>
<th>Food Name</th>
<th>Item's</th>
<th>Price</th>
</tr>

<?php
require_once("connection.php");

$myquery = "SELECT * FROM desartmenu;";
$run_query = mysqli_query($conn,$myquery);

while($mydata = mysqli_fetch_array($run_query))
{
    echo '<tr>
    
    <td>'.$mydata["Foodname"].'</td>
    <td>'.$mydata["Item"].'</td>
    <td>'.$mydata["Price"].'</td>
    </tr>';
}

?>

</table>
</div>
</div>
</div>

<div class="filter breakfast dinner lunch">
<div class="rightdiv">

<div class="imgdiv">
<img  class="profileimg" src="images/juice.jpeg">
</div>

<div class="menudiv">
<h1>BEVERAGE</h1>
<table border="2">
<tr>
<th>Food Name</th>
<th>Item's</th>
<th>Price</th>
</tr>

<?php
require_once("connection.php");

$myquery = "SELECT * FROM beveragemenu;";
$run_query = mysqli_query($conn,$myquery);

while($mydata = mysqli_fetch_array($run_query))
{
    echo '<tr>
    
    <td>'.$mydata["Foodname"].'</td>
    <td>'.$mydata["Item"].'</td>
    <td>'.$mydata["Price"].'</td>
    </tr>';
}

?>

</table>
</div>
</div>
</div>

</div>

</section>

<!----services--->

<section id="services">
<div class="container">
<h1>Our Services</h1>
<div class="row services">
  <div class="col-md-4 text-center">
    <div class="card" style="width: 18rem;">
    <img src="images/delivery.png" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Food Delivery</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="food_order.php" class="btn btn-primary">Order</a>
    </div>
    </div>

  </div>
  <div class="col-md-4 text-center">
    <div class="card" style="width: 18rem;">
    <img src="images/partybok.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Book Table</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="reservation.php" class="btn btn-primary">Reservation</a>
    </div>
    </div>

  </div>
  <div class="col-md-4 text-center">
    <div class="card" style="width: 18rem;">
    <img src="images/traditional.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Traditional Item</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="traditional_item/products.php" class="btn btn-primary">Order</a>
    </div>
    </div>

  </div>
  
</div>
</section>
<!----chefs--->
<section id="chefs">
  <div class="container">
    <h1>Our Honorable Chefs</h1>
  <div class="row chefs">
  <div class="col-md-4 text-center">
    <div class="card" style="width: 18rem;">
    <?php
 require_once("connection.php");

$myquery = "SELECT * FROM `chefsinfo` WHERE id=3;";
$run_query = mysqli_query($conn,$myquery);
?>
<?php  while($mydata = mysqli_fetch_array($run_query))
{?>
    <img src="images/<?php echo $mydata["picture"]; ?>" class="card-img-top" alt="...">

    <div class="card-body">
    <p class="card-text"><?php echo $mydata["about"]; ?></p>
    <?php } ?>
    </div>
    </div>
</div>

<div class="col-md-4 text-center">
    <div class="card" style="width: 18rem;">
    <?php
  require_once("connection.php");

$myquery = "SELECT * FROM `chefsinfo` WHERE id=4;";
$run_query = mysqli_query($conn,$myquery);
?>
<?php  while($mydata = mysqli_fetch_array($run_query))
{?>
    <img src="images/<?php echo $mydata["picture"]; ?>" class="card-img-top" alt="...">
    <div class="card-body">
    <p class="card-text"><?php echo $mydata["about"]; ?></p>
    <?php } ?>
    </div>
    </div>
</div>

<div class="col-md-4 text-center">
    <div class="card" style="width: 18rem;">
    <?php
  require_once("connection.php");

$myquery = "SELECT * FROM `chefsinfo` WHERE id=6;";
$run_query = mysqli_query($conn,$myquery);
?>
<?php  while($mydata = mysqli_fetch_array($run_query))
{?>
    <img src="images/<?php echo $mydata["picture"]; ?>" class="card-img-top" alt="...">
    <div class="card-body">
    <p class="card-text"><?php echo $mydata["about"]; ?></p>
<?php } ?>
    </div>
    </div>
</div>
</div>

</div>
</section>
<!----reservation--->
<section id="reservation">
  <div class="container">
    <h1>BOOK A TABLE NOW..!</h1>
    <div class="button">
    <a href="reservation.php" class="btn btn-half">Book Now</a>
    </div>
  </div>
</section>


<!----gellary--->
<section id="gellary">
 <div class="container">
   <h1>Photo Gellary</h1>
   <div class="menubar">
<a  data-filter="all" class="buttonn active">All</a>
<a  data-filter="frontside" class="buttonn">FrontSide</a>
<a  data-filter="appearance" class="buttonn">Appearance</a>
<a  data-filter="kitchen" class="buttonn">Kitchen</a>
</div>
<div class="itemcontainer">
<?php
  require_once("connection.php");

$myquery = "SELECT * FROM `gellaryslide`;";
$run_query = mysqli_query($conn,$myquery);
?>
<?php  while($mydata = mysqli_fetch_array($run_query))
{?>
  <div class="filterr frontside">
    <img src="images/<?php echo $mydata["picture"]; ?>">
  </div>
<?php } ?>

<?php
  require_once("connection.php");

$myquery = "SELECT * FROM `gellaryslide2`;";
$run_query = mysqli_query($conn,$myquery);
?>
<?php  while($mydata = mysqli_fetch_array($run_query))
{?>
  <div class="filterr appearance">
    <img src="images/<?php echo $mydata["picture"]; ?>">
  </div>
<?php } ?>

<?php
  require_once("connection.php");

$myquery = "SELECT * FROM `gellaryslide3`;";
$run_query = mysqli_query($conn,$myquery);
?>
<?php  while($mydata = mysqli_fetch_array($run_query))
{?>
  <div class="filterr kitchen">
    <img src="images/<?php echo $mydata["picture"]; ?>">
  </div>
<?php } ?>
 
  
</div>
</div>
</section>

<!----newsslider--->

<section id="newsslider">
  <div class="container">
    <h1><i>Latest News</i></h1>
  </div>
  <div class="slider owl-carousel">
    <div class="card">
    <?php
  require_once("connection.php");

$myquery = "SELECT * FROM `latestnews` WHERE id=1;";
$run_query = mysqli_query($conn,$myquery);
?>
<?php  while($mydata = mysqli_fetch_array($run_query))
{?>
      <div class="image"><img src="images/<?php echo $mydata["picture"]; ?>" alt=""></div>
      <div class="content">
        <div class="title"><?php echo $mydata["title"]; ?></div>
        <div class="sub-title"><?php echo $mydata["subtitle"]; ?></div>
        <p><?php echo $mydata["news"]; ?> </p>
        <?php } ?>
        <div class="btn"><button>Reade More</button></div>
      </div>
    </div>
    <div class="card">
    <?php
  require_once("connection.php");

$myquery = "SELECT * FROM `latestnews` WHERE id=2;";
$run_query = mysqli_query($conn,$myquery);
?>
<?php  while($mydata = mysqli_fetch_array($run_query))
{?>
      <div class="image"><img src="images/<?php echo $mydata["picture"]; ?>" alt=""></div>
      <div class="content">
        <div class="title"><?php echo $mydata["title"]; ?></div>
        <div class="sub-title"><?php echo $mydata["subtitle"]; ?></div>
        <p><?php echo $mydata["news"]; ?> </p>
        <?php } ?>
        <div class="btn"><button>Reade More</button></div>
      </div>
    </div>
    <div class="card">
    <?php
  require_once("connection.php");

$myquery = "SELECT * FROM `latestnews` WHERE id=3;";
$run_query = mysqli_query($conn,$myquery);
?>
<?php  while($mydata = mysqli_fetch_array($run_query))
{?>
      <div class="image"><img src="images/<?php echo $mydata["picture"]; ?>" alt=""></div>
      <div class="content">
        <div class="title"><?php echo $mydata["title"]; ?></div>
        <div class="sub-title"><?php echo $mydata["subtitle"]; ?></div>
        <p><?php echo $mydata["news"]; ?></p>
        <?php } ?>
        <div class="btn"><button>Reade More</button></div>
      </div>
    </div>
  </div>
</section>
<script>
      $(".slider").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000 ,
        autoplayHoverPause: true,

      });
    </script>
<!----getintouch--->
<section id="contact">
  <div class="container">
    <h1>Get In Touch</h1>
    <div class="row">
      <div class="col-md-6">
        <form action="dashboard_core.php" method="post" class="contact-form">
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
          <button type="submit" name="submit9" class="btn btn-primary">SEND MESSAGE</button>
        </form>
      </div>
      <div class="col-md-6 contact-info">
        <div class="follow"><b>Address: </b>XYZ Road,Dhaka Bangladesh</div>
        <div class="follow"><b>Phone: </b>++8801521495184</div>
        <div class="follow"><b>Email: </b>dinnglounge@gmail.com</div>
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