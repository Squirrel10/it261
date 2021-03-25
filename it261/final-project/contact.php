<?php // index.php this is our wonderful home page that can only be reached if you login successfully!


session_start();
include('config.php');
include('includes/header.php');


if(!isset($_SESSION['UserName'])) {
    $_SESSION['msg'] = 'You must log in first';
    header('location:login.php');
}

if(isset($_GET['logout'])) {
       session_destroy();
       unset($_SESSION['UserName']);
       header('location:login.php');
}

//include('includes/header.php');

//Notification message
if(isset($_SESSION['success'])):?>
<div class="seccess">
<h3>
<?php echo $_SESSION['success'] ; 
  unset($_SESSION['success']);
?>
    
    
</h3>
</div>    
<?php endif; 

    
if(isset($_SESSION['UserName'])):?>     
<div class="welcome-logout">
<h3> Hello,
<?php echo $_SESSION['UserName'] ;?>  
</h3>    

<a href="index.php?logout='1' ">Log out!</a>        
</div>    
    <?php endif; ?>







<?php

$firstName = '';
$lastName = '';
$email = '';
$gender = '';
$movies = '';
$region = '';
$comments = '';
$agree = '';
$phone = '';


$firstNameErr = '';
$lastNameErr = '';
$emailErr = '';
$genderErr = '';
$moviesErr = '';
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
	
	
if(empty($_POST['movies'])) {
$moviesErr = 'What, no movies?';		
} else {
$movies = $_POST['movies'];	
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
	
function myMovies (){
	$myReturn = '';
	//if my movies array is not empty, implode it
if(!empty($_POST['movies'])) {
	
	$myReturn = implode(',' , $_POST['movies']);
	
}	return $myReturn;
	
}	// close the function
	

if(isset($_POST['firstName'],
		$_POST['lastName'],
		 $_POST['email'],
		 $_POST['gender'],
		 $_POST['movies'],
		 $_POST['region'],
		 $_POST['comments'],
		 $_POST['agree'],  )) {
		// if everything is set.. 
	
	
	$to = 'szemeo@mystudentswa.com';
	$subject = 'Test email for my form 1, ' .date('m/d/y'); // date function 
	$body = 'First and Last Name:  '.$firstName.' '.$lastName.'' .PHP_EOL.'
	 Email is: '.$email.''.PHP_EOL.'
     Phone Number '.$phone. ''.PHP_EOL.'
	 Gender is: '.$gender.''.PHP_EOL.'
	 Comments: '.$comments.''.PHP_EOL.'
	 Favorite Region: '.$region. ''.PHP_EOL.'
	 Favorite Movies: '.myMovies().''; 

      $headers = array(
     'From' => 'no-reply@patricksportalpage.com',
     'Reply-to' => ' '.$email.''
      );
	 
	 
		// joining operator	
	
	if($_POST['firstName'] !== '' &&  
	 $_POST['lastName'] !== '' &&
	 $_POST['email'] !== '' &&
	 $_POST['movies'] !== '' &&
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
<title>Contact page</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"> <!-- displaying form action with $_SERVER['PHP_SELF'] -->

<h1>Contact us!</h1>		
 
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
	
<label>Favorite Movies</label>
	
<ul>	
<li><input type="checkbox" name="movies[]" value="movie1" <?php  if(isset($_POST['movies']) && in_array('cab', $movies)) echo 'check="checked"';?>>The Big Lebowski</li>
<li><input type="checkbox" name="movies[]" value="movie2"<?php  if(isset($_POST['movies']) && in_array('marlot', $movies)) echo 'check="checked"';?>>Napoleon Dynamite</li>
<li><input type="checkbox" name="movies[]" value="movie3" <?php  if(isset($_POST['movies']) && in_array('syrah', $movies)) echo 'check="checked"';?>>Mrs. Doubtfire</li>
<li><input type="checkbox" name="movies[]" value="movie4" <?php  if(isset($_POST['movies']) && in_array('malbec', $movies)) echo 'check="checked"';?>>Liar Liar</li>
<li><input type="checkbox" name="movies[]" value="movie5" <?php  if(isset($_POST['movies']) && in_array('shiraz', $movies)) echo 'check="checked"';?>>Forest Gump</li>
</ul>
	
<span class="err"><?php echo $moviesErr ;?></span>		
<label>Regions</label>
	
<select name="region">
<option value="NULL" <?php if(isset($_POST['region']) && $_POST['region'] == 'NULL') echo 'selected = "unselected"' ;?>>Select One</option>	
<option value="nw" <?php if(isset($_POST['region']) && $_POST['region'] == 'nw') echo 'selected = "selected"' ;?>>Northwest</option>
<option value="sw" <?php if(isset($_POST['region']) && $_POST['region'] == 'sw') echo 'selected = "selected"' ;?>>Southwest</option>
<option value="mw"<?php if(isset($_POST['region']) && $_POST['region'] == 'mw') echo 'selected = "selected"' ;?>>Midwest</option>
<option value="ne"<?php if(isset($_POST['region']) && $_POST['region'] == 'ne') echo 'selected = "selected"' ;?>>Northeast</option>
<option value="south"<?php if(isset($_POST['region']) && $_POST['region'] == 'south') echo 'selected = "selected"' ;?>>South</option>
	
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


<wrapper>


</wrapper>




</div>
<?php include('includes/footer.php');





























