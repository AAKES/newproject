<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login form</title>
</head>
<body>
<?php
$name = $email = $website = $comment = $gender = "";
if($_SERVER['REQUESTED_METHOD']=="GET"){
	$name=test_input($_POST['$name']);
$email=test_input($_POST['$email']);
$website=test_input($_POST['$website']);
$comment=test_input($_POST['$comment']);
$gender=test_input($_POST['$gender']);
}
function test_input($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
}
?>
<form method="post" action="<?php
echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
Name:<input type="text" name="name">
<br>
E-mail:<input type="text" name="email">
<br>
Website:<input type ="text" name="website">
<br>
Comment:<textarea name="comment"></textarea>
<br>
Gender:
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="other">Other
<br>
<input type ="submit" value="login">
</form>
<?php
echo "<h1> Your input:</h1>";
echo "<br>";
echo $_POST['name'];
echo "<br>";
echo $_POST['email'];
echo "<br>";
echo $_POST['website'];
echo "<br>";
echo $_POST['comment'];
echo "<br>";
echo $_POST['gender'];
?>
</body>
</html>