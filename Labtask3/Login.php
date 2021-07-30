<<<<<<< HEAD
<!DOCTYPE HTML>
<html>  
<body>




<?php

$name = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $password = test_input($_POST["password"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>LogIn</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  Password: <input type="text" name="password">
  <br><br>
  <input type="submit" name="submit" value="Submit">  







 

 

  </form>
</body>
</html
=======
<!DOCTYPE HTML>
<html>  
<body>




<?php

$name = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $password = test_input($_POST["password"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>LogIn</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  Password: <input type="text" name="password">
  <br><br>
  <input type="submit" name="submit" value="Submit">  







 

 

  </form>
</body>
</html
>>>>>>> 47a9d7a699ca914eaec09f779f1b5fb6b77e6d73
