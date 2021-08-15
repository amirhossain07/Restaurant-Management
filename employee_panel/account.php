<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/adminlogin.css">
    <title>Document</title>
    
</head>
<body>
<div class="content">
<div class="loginbox">
    <img src="images/avatar.png" class="avatar">
    <h1>Login Here</h1>
    <form name="myForm" action="login_core.php" method="post">
        <p>User Name</p>
        <input type="text" name="username" id="username" placeholder="enter username">
        <p>Password</p>
        <input type="password" name="password" id="pass" placeholder="enter password">
        <input type="submit" name="submit" value="Login"></br>
        
    </form>
</div>
</div>

</div>
<script>

			var my_form = document.forms.myForm;

			my_form.onsubmit = function(){
				var username = document.getElementById("username").value;
			  	var password = document.getElementById("pass").value;
			  	
			  	if (username == "" || password == "") {
			    	alert("Name or Password must be filled out");
			    	return false;
			  	}
			  	
            };
        </script>
</body>
</html>