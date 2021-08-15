<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../adminstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
</head>
<body>
<?php
    require_once("profile.php");
    
?>

    

 
    



<div class="content">
    <div class="formtable">
        <h1>The feedback of Customer's</h1>

        

    <div class="table-wrapper-scroll-y my-custom-scrollbar">

<table class="table table-bordered table-striped mb-0">
  <thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
require_once("connection.php");


$myquery = "SELECT * FROM feedback;";
$run_query = mysqli_query($conn,$myquery);

while($mydata = mysqli_fetch_array($run_query))
{?>
    <tr>
    
   <td><?php echo $mydata["name"]; ?> </td>
   <td><?php echo $mydata["phone"]; ?> </td>
   <td><?php echo $mydata["email"]; ?> </td>
   <td><?php echo $mydata["msg"]; ?> </td>
   <td> <a href="#?id=<?php echo $mydata["id"]; ?>" >Send Email</a>
    </tr>
<?php } ?>
  </tbody>
</table>

</div>
            
    </div>
    </div>

    
</body>
</html>