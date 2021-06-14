<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $email = $user_name = $password = $confirm_password = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $user_name = test_input($_POST["user_name"]);
  $password = test_input($_POST["password"]);
  $confirm_password = test_input($_POST["confirm_password"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Registration</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  User Name: <input type="text" name="user name">
  <br><br>
  Password: <input type="text" name="password">
  <br><br>
  Confirm Password: <input type="text" name="confirm password">
  <br><br>
  
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $user_name;
echo "<br>";
echo $password;
echo "<br>";
echo $confirm_password;
echo "<br>";
echo $gender;
echo "Today is " . date("Y/m/d") . "<br>";
?>

</body>
</html>