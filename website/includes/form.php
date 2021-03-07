<?php

$firstName = '';
$lastName = '';
$email = '';
$gender = '';
$desserts = '';
$region = '';
$comments = '';
$agree = '';
$phone = '';


$firstNameErr = '';
$lastNameErr = '';
$emailErr = '';
$genderErr = '';
$dessertsErr= '';
$regionErr = '';
$commentsErr = '';
$agreeErr = '';
$phoneErr = '';




if($_SERVER['REQUEST_METHOD'] == 'POST') {
	
if(empty($_POST['firstName'])) {
$firstNameErr = 'Please enter your first name';		
} else { 
$firstName = $_POST['firstName'];	
}
	
	
	
if(empty($_POST['lastName'])) {
$lastNameErr = 'Please enter your last name';		
} else {
$lastName = $_POST['lastName'];	
}	
	
	
if(empty($_POST['email'])) {
$emailErr = 'Please enter your email';		
} else {
$email = $_POST['email'];	
}	
	
	
if(empty($_POST['phone'])) {  // if empty, type in your number
$phoneErr = 'Your phone number please!';
} elseif(array_key_exists('phone', $_POST)){
if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
{ // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
$phoneErr = 'Invalid format!';
} else{
$phone = $_POST['phone'];
}
}	
	
if(empty($_POST['gender'])) {
$genderErr = 'Please check one';		
} else {
$gender = $_POST['gender'];	
}	
	
	
if(empty($_POST['desserts'])) {
$dessertsErr = 'What, no desserts...???';		
} else {
$desserts = $_POST['desserts'];	
}	

	

	
	
if(empty($_POST['region'] == 'NULL')) {
$regionErr = 'Please select your region';		
} else {
$region = $_POST['region'];	
}			
	

	
if(empty($_POST['comments'])) {
$commentsErr = 'How can we help you?';		
} else {
$comments = $_POST['comments'];	
}		
	
	
	
if(empty($_POST['agree'])) {
$agreeErr = 'You MUST agree!';		
} else {
$agree = $_POST['agree'];	
}		
	
function myDesserts (){
	$myReturn = '';
	//if my desserts array is not empty, implode it
if(!empty($_POST['desserts'])) {
	
	$myReturn = implode(',' , $_POST['desserts']);
	
}	return $myReturn;
	
}	// close the function
	

if(isset($_POST['firstName'],
		$_POST['lastName'],
		 $_POST['email'],
		 $_POST['gender'],
		 $_POST['desserts'],
		 $_POST['region'],
		 $_POST['comments'],
		 $_POST['agree']  )) {
		// if everything is set.. 
	
	
	$to = 'patricktensenboat@gmail.com';
	$subject = 'My desserts email, '  	.date('h:i A'); // date function .date('m/d/y');
	$body = 'First and Last Name:  '.$firstName.' '.$lastName.'' .PHP_EOL.'
	 Email is: '.$email.''.PHP_EOL.'
     Phone Number '.$phone. ''.PHP_EOL.'
	 Gender is: '.$gender.''.PHP_EOL.'
	 Comments: '.$comments.''.PHP_EOL.'
	 Favorite Region: '.$region. ''.PHP_EOL.'
	 Favorite Desserts: '.myDesserts().''; 

      $headers = array(
     'From' => 'no-reply@patricksportalpage.com',
     'Reply-to' => ' '.$email.''
      );
	 
	 
		// joining operator	
	
	if($_POST['firstName'] !== '' &&  
	 $_POST['lastName'] !== '' &&
	 $_POST['email'] !== '' &&
	 $_POST['desserts'] !== '' &&
     $_POST['comments'] !== '' &&
     $_POST['agree'] !== '' &&  
     $_POST['phone'] !== '' && 
     preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])  && 
	 $_POST['region'] !== 'NULL')   {
		
		
		
	
	
	
	mail($to, $subject, $body, $headers);
	header('Location:thx.php');
	}
	
	
}	// closing isset
	
// if something was empty, echo  the error.
	// if a field is empty we are going to create an error variable.
	
	
	
	
}// closing end-server request
?>





<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Phone and headers</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"> <!-- displaying form action with $_SERVER['PHP_SELF'] -->


<fieldset>
<label>First Name</label>
<input type="text" name="firstName" value="<?php if(isset($_POST['firstName'])) echo htmlspecialchars($_POST['firstName']) ;?>"> 	
<span class="err"><?php echo $firstNameErr ;?></span>	
<label>Last Name</label>
<input type="text" name="lastName" value="<?php if(isset($_POST['lastName'])) echo htmlspecialchars($_POST['lastName']);?>">
<span class="err"><?php echo $lastNameErr ;?></span>
    
<label>Phone Number</label>
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']);?>">
<span class="err"><?php echo $phoneErr ;?></span>    
<label>Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>"> 	
<span class="err"><?php echo $emailErr ;?></span>	
<label>Gender</label>
<ul>	
<li><input type="radio" name="gender" value="female"<?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked = "checked"' ;?>>Female</li>
<li><input type="radio" name="gender" value="male"<?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked = "checked"' ;?>>Male</li>
<li><input type="radio" name="gender" value="other"<?php if(isset($_POST['gender']) && $_POST['gender'] == 'other') echo 'checked = "checked"' ;?>>Other</li>	
</ul>
<span class="err"><?php echo $genderErr ;?></span>	
	
<label>Favorite Desserts</label>
	
<ul>	
<li><input type="checkbox" name="desserts[]" value="lemontart" <?php  if(isset($_POST['desserts']) && in_array('lemontart', $desserts)) echo 'check="checked"';?>>Lemon Tart</li>
<li><input type="checkbox" name="desserts[]" value="madeleines"<?php  if(isset($_POST['desserts']) && in_array('madeleines', $desserts)) echo 'check="checked"';?>>Madeleines</li>
<li><input type="checkbox" name="desserts[]" value="galette des rois" <?php  if(isset($_POST['desserts']) && in_array('galette des rois', $desserts)) echo 'check="checked"';?>>Galette des Rois</li>
<li><input type="checkbox" name="desserts[]" value="pain au chocolat" <?php  if(isset($_POST['desserts']) && in_array('pain au chocolat', $desserts)) echo 'check="checked"';?>>Pain au Chocolat</li>
<li><input type="checkbox" name="desserts[]" value="cannoli" <?php  if(isset($_POST['desserts']) && in_array('cannoli', $desserts)) echo 'check="checked"';?>>Cannoli</li>
</ul>
	
	

-->
	
	
	
	
	
	
	
	
<span class="err"><?php echo $dessertsErr ;?></span>		
<label>Choose your region</label>
	
<select name="region">
	

	
	
<option value="NULL" <?php if(isset($_POST['region']) && $_POST['region'] == 'NULL') echo 'selected = "unselected"' ;?>>Select One</option>	
<option value="holland" <?php if(isset($_POST['region']) && $_POST['region'] == 'holland') echo 'selected = "selected"' ;?>>Holland</option>
<option value="france" <?php if(isset($_POST['region']) && $_POST['region'] == 'france') echo 'selected = "selected"' ;?>>France</option>
<option value="germany"<?php if(isset($_POST['region']) && $_POST['region'] == 'germany') echo 'selected = "selected"' ;?>>Germany</option>
<option value="spain"<?php if(isset($_POST['region']) && $_POST['region'] == 'spain') echo 'selected = "selected"' ;?>>Spain</option>
<option value="italy"<?php if(isset($_POST['region']) && $_POST['region'] == 'italy') echo 'selected = "selected"' ;?>>Italy</option>
	
</select>	
<span class="err"><?php echo $regionErr ;?></span>		
	
<label>Comments</label>
<textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>	
<span class="err"><?php echo $commentsErr ;?></span>	
<label>Agree</label>
<ul>
<li><input type="radio" name="agree" value="agree"<?php if(isset($_POST['agree']) && $_POST['agree'] == 'agree') echo 'checked = "checked"' ;?>>Agree</li>	
</ul>	
<span class="err"><?php echo $agreeErr ;?></span>		
<input type="submit"  value="Send it!">	
	
<p><a href="">Reset</a></p>	
	
	
	
	
</fieldset>	
</form>
</body>
</html>