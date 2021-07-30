<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = "";
$name = $email = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {
$nameErr = "Name is required";
} else {
$name = test_input($_POST["name"]);
// check if name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
$nameErr = "Only letters and white space allowed";
$name="";
}
}
if (empty($_POST["email"])) {
$emailErr = "Email is required";
} else {
$email = test_input($_POST["email"]);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailErr = "Invalid email format";
$email ="";
}
}

if (empty($_POST["blood group"])) {
    $bloodgroupErr = "Blood group is required";
    } else {
    $bloodgroup = test_input($_POST["blood group"]);
    
    if (!filter_var($bloodgroup, FILTER_VALIDATE_BLOODGROUP)) {
    $bloodgroupErr = "Invalid blood group format";
    $bloodgroup ="";
    }
}


if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
    } else {
    $gender = test_input($_POST["gender"]);
    }
    }

    
 if (empty($_POST["degree"])) {
    $genderErr = "Degree is required";
    } else {
    $gender = test_input($_POST["degree"]);
    }
    









function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="name" value="<?php echo $name;?>">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
E-mail: <input type="text" name="email" value="<?php echo $email;?>">
<span class="error">* <?php echo $emailErr;?></span>
<br><br>

Blood group: <input type="text" name="blood group" value="<?php echo $bloodgroup;?>">
<span class="error">* <?php echo $bloodgroupErr;?></span>
<br><br>

Gender:
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
<span class="error">* <?php echo $genderErr;?></span>
<br><br>

Degree:
<input type="radio" name="degree" <?php if (isset($degree) && $degree=="ssc") echo "checked";?> value="ssc">SSC
<input type="radio" name="degree" <?php if (isset($degree) && $degree=="hsc") echo "checked";?> value="hsc">HSC
<input type="radio" name="degree" <?php if (isset($degree) && $degree=="bsc") echo "checked";?> value="bsc">BSc
<input type="radio" name="degree" <?php if (isset($degree) && $degree=="msc") echo "checked";?> value="msc">MSc
<span class="error">* <?php echo $degreeErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo $degree;
?>

</body>
</html>