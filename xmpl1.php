<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="dashboard_core.php" method="post">
<input type="text" class="namee" id="num1" name="price" >
<input type="text" class="namee" id="num2" name="qty" placeholder="Enter your quantity"></br>
 
 total is: <input type="text" name="total" class="namee" id="answer">
 <input type="submit" name="submit9" value="send">
</form>
<button onclick="calculation()">Calculate</button>
 <script>
  function calculation()
  {
    var feild1 = document.getElementById("num1").value;
    var feild2 = document.getElementById("num2").value;

    var result = parseInt(feild1)*parseInt(feild2);
    if(!isNaN(result))
    {
      document.getElementById("answer").value=result;
    }
  }
  </script>
</body>
</html>


