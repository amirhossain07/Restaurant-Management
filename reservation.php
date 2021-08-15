<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="traditional_item/traditionstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

</head>
<body>
  <div class="back">



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
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="traditional_item/index.php">Traditional Food</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
      
    </ul>
  </div>
</nav>
</section>

    <!----Reservation page--->
    
    
            
                    

                
                    <div class="reservation-container">
                        <div class="form-btn">
                            <span onclick="party()">For Party</span>
                            <span onclick="table()">For table</span>
                            <hr id="indicator">
                        </div>
                        <form name="myForm" id="partyform" action="dashboard_core.php" method="post">

                        <input type="text" name="username" placeholder="Your Name" id="username">
                            
                            <input type="email" name="email" placeholder="Your Email" id="email">
                           
                           
                            <input type="date" name="date" placeholder="Choose your date" id="date">
                            
                            <input type="time" name="time" placeholder="Time" id="time">

                            <select name="type" id="type">
                            <option value="" disabled selected>Please select a party type..</option>
                            <option value="Birthday">Birthday</option>
                            <option value="Anniversary">Anniversary</option>
                            <option value="Hangout">Hangout</option>
                            <option value="Wedding party">Wedding party</option>
                           
                            </select>
                            
                            <input type="number" name="number" placeholder="How many people's" id="number">
                          
                            <input type="submit" name="submit5" class="btn" value="book" >
                        </form> 

                        <form name="Myform" id="tableform" action="dashboard_core.php" method="post">
                       
                            
                             <input type="text" name="username" placeholder="Your Name" id="usernamee">
                            
                            <input type="email" name="email" placeholder="Your Email" id="emaill">
                           
                           
                            <input type="date" name="date" placeholder="Choose your date" id="datee">
                            
                            <input type="time" name="time" placeholder="Time" id="timee">
                            
                            <input type="number" name="number" placeholder="How many people's" id="numberr">
                          
                            
                           
                            <input type="submit" name="submit6" class="btn" value="Book" >
                        </form>
                    </div>
               
  
</div>              
            
 
   
    
   
<script>
var partyform = document.getElementById("partyform");
var tableform = document.getElementById("tableform");
var indicator = document.getElementById("indicator");

function table(){
    tableform.style.transform = "translateX(0px)";
    partyform.style.transform = "translateX(0px)";
    indicator.style.transform = "translateX(100px)";

}


function party(){
    tableform.style.transform = "translateX(700px)";
    partyform.style.transform = "translateX(700px)";
    indicator.style.transform = "translateX(0px)";
}

</script>
  
<script>

			var my_form = document.forms.myForm;

			my_form.onsubmit = function(){
				var username = document.getElementById("username").value;
        var email = document.getElementById("email").value;
        var date = document.getElementById("date").value;
        var time = document.getElementById("time").value;
        var type = document.getElementById("type").value;
				var number = document.getElementById("number").value;
			  	
			  	if (username == "" || email == "" || date == "" || time == "" || type == "" || number == "") {
			    	alert("all feild must be filled out");
			    	return false;
			  	}
			  	
            };
            </script>
            <script>
            var my_form = document.forms.Myform;
            my_form.onsubmit = function(){
				var usernamee = document.getElementById("usernamee").value;
        var emaill = document.getElementById("emaill").value;
        var datee = document.getElementById("datee").value;
        var timee = document.getElementById("timee").value;
				var numberr = document.getElementById("numberr").value;
			  	
			  	if (usernamee == "" || emaill == "" || datee == "" || timee == "" || numberr == "") {
			    	alert("all feild must be filled out");
			    	return false;
			  	}
			  	
            };
        </script>


</body>
</html>