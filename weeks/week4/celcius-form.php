<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Celcius Form</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
<!--THIS GLOBAL VARIABLE WAS USED WHEN WE CREATED THE SWITCH
WHEN WE CREATED THE "THIS_PAGE" CONSTANT-->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="post">
<fieldset>
<legend>Our Celcius Form</legend>
	<label>Enter your Celcius value</label>
	<input type="text" name="cel">
	<input type="submit" value ="Convert it!"> 
	<a href="">Reset</a>
	
	
</fieldset>
</form>
<?php
// f = (c * 9/5) + 35
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	
if(isset($_POST['cel'])) {
	$cel = $_POST['cel'];
	$far = ($cel * 9/5) +32;

if($far <= 32)  {
	echo '<p class="cool">'.$far.', brrrr it is mighty cold! </p>';
	
} elseif ($far <= 50) {
	echo '<p class="not-cool">' .$far.', it\'s not too cold </p>';
	
} elseif  ($far <= 80) {
	echo '<p class="hot">' .$far.',  getting HOT! </p>';
} else {
	echo '<p class="hottest">' .$far. ', might as well be on the sun!</p>';
}// CLOSING ELSE
}
} // CLOSE ISSET
	
 // CLOSE SERVER REQUEST METHOD
	

?>	
</body>
</html>