<!DOCTYPE html>
<html lang="en">
<head>
<?php

$current_password = $new_password = $retype_new_password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $current_password = test_input($_POST["current_password"]);
  $new_password = test_input($_POST["new_password"]);
  $retype_new_password = test_input($_POST["retype_new_password"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Change Password</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Current Password: <input type="text" name="current password">
  <br><br>
  New Password: <input type="text" name="new password">
  <br><br>
  Retype New Password: <input type="text" name="retype new password">
  <br><br>
  <input type="submit" name="submit" value="Submit">  

 

  </form>
</head>
<body>
    
</body>
</html>