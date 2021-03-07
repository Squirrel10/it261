<?php // people-view.php

include('config.php');

if(isset($_GET[''])) {
	$id = (int)$_GET['id'];
} else {
	header('Location:people.php');
}

$sql = 'SELECT * FROM week8People WHERE week8PeopleId = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) 
 or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));	

if(mysqli_num_rows($result) > 0) {
	
 while($row=mysqli_fetch_assoc($result)) {
$firstName = stripslashes ($row['firstName']);
$lastName = stripslashes ($row['lastName']);
$email = stripslashes ($row['email']);
$occupation = stripslashes ($row['occupation']);	 
$birthDate = stripslashes ($row['birthDate']);
$description = stripslashes ($row['description']);
$feedback = '';	
	 
} // closing while
	
	
} else {
	
$feedback = 'Nobody is home - they are out to lunch';	
	
} //closing else
?>

<div id="wrapper" style="width:940px; margin:0 auto;">
<main style="width:580px; float left;">
<h1>Awesome! We're here</h1>
<h2>You are on<?php echo $firstName; ?>'s Page</h2>
<?php
if($feedback == '') {
  echo '<ul>';
  echo '<li><b>First Name:</b> '.$firstName.'</li>';		
  echo '<li><b>Last Name:</b> '.$lastName.'</li>';	
  echo '<li><b>Occupation:</b> '.$occupation.'</li>';	
  echo '<li><b>Email:</b> '.$email.'</li>';		
  echo '<li><b>Birthdate</b> '.$birthDate.'</li>';
  echo '</ul>';	
  echo '<p>'.$description.'</p>';
  echo'<p><a href="people.php">Return to our people page</a></p>';	
	
	
} else{
	
   echo $feedback;
}

?>
</main>
	
<aside style="width:340px; float: right;">
	
<?php
	if($feedback == '') { // if feedback is empty show me my image
	  echo '<img src="images/people'.$id.'.jpg" alt="'.$firstName.'" >';	// here is the image (go find my image inside my image folder, all the images are nammed people)
	}
	?>
	
</aside>
	
<?php	

// releasing the web server

mysqli_free_result($result);

// close the connection 

mysqli_close($iConn);



?>
</div>
<!--end wrapper-->
<!--don't forget you are in html land right now-->











































//LOTS OF PHP
///////LOTS




//include
//include('includes/header.php');