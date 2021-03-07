<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Our first form</title>
<style>
	* {
	   padding: 0;
	   margin: 0;
	   box-sizing: border-box;
	}	
	
	form {
		width: 400px;
		margin: 30px auto;
	}
	  fieldset {
		padding: 5px;
		}
	label {
		display:block; 
		margin-bottom:5px;
		
	}
	input {
		display: block;
		margin-bottom: 10px;
		
	}
	
	input[type=text], 
	input[type=email] {
		width: 100%;
		height: 30%;
		
	}
	
	textarea{
		width: 100%;
		height 150px;
		margin-bottom: 10px;
	}
	
	.box {
		
	    width: 400px;
		margin: 0 auto;
		background: beige;
		padding: 15px;
	
	}
	.error {
		text-align: center;
		font-size: 1.5
		
	}
	
</style>
</head>

<body>
<form action="" method="post">
<fieldset>	
<label>First Name</label>	
<input type ="text" name ="firstName">
<label>Last Name</label>
<input type ="text" name ="lastName">
<label>Email</label>
<input type ="email" name ="email">
<label>Comments</label>
<textarea name= "comments"></textarea>
<input type ="submit" value="Send it">
<p><a href="">Reset</a></p>
	</fieldset>
	
</form>
<?php
	// is it isset
    // firstName -- lastName --- comments --email
   if(isset($_POST['firstName'],
			$_POST['lastName'],
			$_POST['email'],
			$_POST['comments'])){
		 
	   
	   $firstName = $_POST['firstName'];
	   $lastName = $_POST['lastName'];
	   $email = $_POST['email'];
	   $comments = $_POST['comments'];
	   
	  // if(empty $fistName && $lastName && $email && $comments)
	     if(empty($firstName && $lastName && $email && $comments)) {
	   
		  echo '<p class="error> We have a problem</p>';
		 
		   } else {
		   
//		   echo $firstName; 
//		   echo '<br>';
//		   echo $lastName; 
//		   echo '<br>';
//		   echo $email; 
//		   echo '<br>';
//		   echo $comments; 
//		   echo '<br>';
//		    
			 echo '<div class="box">';
		     echo '<ul>';
		     echo '<li><b>First Name:</b>'.$firstName.'</li>';
			 echo '<li><b>Last Name:</b>'.$lastName.'</li>';
			 echo '<li><b>Email:</b>'.$email.'</li>';
			 echo '<li><b>Comments:</b>'.$comments.'</li>';
			 echo '</ul>';
			 echo'</div>';
		   
	   } //close else
		
		
		
	} // close isset
	
	
	
	
	
	
?>
</body>
</html>