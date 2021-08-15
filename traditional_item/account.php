<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="traditionstyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

    <!----Account page--->
    
    <div class="account-page">
        <div class="container">
            <div class="row">
               <div class="col-2">
                    <img src="image/5f59a730012ac.jpg">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">LogIn</span>
                            <span onclick="register()">Register</span>
                            <hr id="indicator">
                        </div>
                       
                        <form name="myForm" id="loginform" action="login_core.php" method="post">
                        <?php

                                            if(isset($_REQUEST["wrong"]))
                                            {
                                                echo "<font color='green'>your email or password is incorrect..!!</font>";
                                            }
                                            ?>
                            <input type="email" name="email" id="email" placeholder="Email"  >
                            <input type="password" name="password" id="pass" placeholder="Password" >
                            <input type="submit" name="submit" id="submitbtn" class="btn" value="Login" >
                            <a hre="">Forgot password..!</a>
                        </form> 

                        <form name="Myform" id="regform" action="insert_core.php" method="post">
                            <input type="text" name="username" id="username" placeholder="User Name" >
                            <input type="email" name="email" id="emaill" placeholder="Email"  >
                            <input type="password" name="password" id="passs" placeholder="Password"  >
                            <input type="text" name="number" id="phone" placeholder="Phone Number" >
                            <input type="submit" name="submit4" class="btn" value="Register" >
                        </form>
                    </div>
                </div>
            </div>
                
            
        </div>
    </div>
   
    
   
<script>
var loginform = document.getElementById("loginform");
var regform = document.getElementById("regform");
var indicator = document.getElementById("indicator");

function register(){
    regform.style.transform = "translateX(0px)";
    loginform.style.transform = "translateX(0px)";
    indicator.style.transform = "translateX(100px)";

}


function login(){
    regform.style.transform = "translateX(300px)";
    loginform.style.transform = "translateX(300px)";
    indicator.style.transform = "translateX(0px)";
}

</script>

<script>

			var my_form = document.forms.myForm;

			my_form.onsubmit = function(){
				var email = document.getElementById("email").value;
			  	var password = document.getElementById("pass").value;
			  	
			  	if (email == "" || password == "") {
			    	alert("email or Password must be filled out");
			    	return false;
			  	}
			  	
            };

        
        </script>
<script>

var my_form = document.forms.Myform;

my_form.onsubmit = function(){
    var username = document.getElementById("username").value;
    var emaill = document.getElementById("emaill").value;
      var passwordd = document.getElementById("passs").value;
      var phone = document.getElementById("phone").value;
      
      if ( username == "" || emaill == "" || passwordd == "" || phone == "") {
        alert("All should be fill up..");
        return false;
      }
      
};
    </script>


</body>
</html>