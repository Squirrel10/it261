<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Trip Calculator!</title>
<style>
	
	*{
	    padding:0;
		margin: 0;
		box-sizing: border-box;
	
	}	
	
	body{
		background-image: url(../../images/road.jpg);
		background-size:  cover;
		
	}
	form {
		
		max-width: 600px;
		margin: 20px auto;
		margin-top: 10px;
		background: beige;
		box-shadow: 2px 3px black;
		
		
		}
	
	fieldset
	{
		padding: 15px;
		font-size: 20px;
		color: black;
		background: grey;
	
	}
	
	label {
		display: block;
		margin-bottom: 5px;
		
	}
      /*attribute selector*/
	input[type=text]   
{
		height: 25px;
		width:100%;
		margin-bottom: 10px;
	color: red;
	
		
	}
	
	form ul {
		margin-left: 20px;
		margin-bottom: 10px;
	    list-style-type: none;	
		padding: 10px;
	}
	
	.box {
		  width:400px;
		  height: 175px;
		  margin: 20px auto;
		  background: beige;
		  padding: 10px;
		  display: block;
	}
	
	
	select {
		margin-bottom: 10px;
		display: block;		
		color: blue;
	}
	
	h1{
  		color: yellow;
		margin-left: 700px;
		margin-top: 200px;
	}
	
	b {
		color: red;
		
	}

</style>	
</head>

<body>
	
	
<h1>Hello Welcome The Trip Calculator!</h1>	
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ;?>" method="post"> 	<!-- this makes it more secure! -->
<fieldset>
	

	

<label>How many miles will you be driving?</label>
	
<input type="text" name="distance" value="<?php if(isset($_POST['distance'])) echo htmlspecialchars($_POST['distance']);?>">
	
<label>How many days will you be driving?</label>
<input type="text" name="days" value="<?php if(isset($_POST['days'])) echo htmlspecialchars($_POST['days']);?>">	

<label>How many hours will you be driving?</label>
<input type="text" name="hours" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']);?>">	
	
	
	
<label>Price per gallon</label>	
<ul>	
<li><input type="radio" name="price" value="3.00"<?php	if(isset($_POST['price']) && $_POST['price'] == '3.00') echo 'checked = "checked"'  ;?>>$3.00</li>
<li><input type="radio" name="price" value="3.50"<?php	if(isset($_POST['price']) && $_POST['price'] == '3.50') echo 'checked = "checked"'  ;?>>$3.50</li>
<li><input type="radio" name="price" value="4.00"<?php	if(isset($_POST['price']) && $_POST['price'] == '4.00') echo 'checked = "checked"'  ;?>>$4.00</li>

</ul>

<label>Fuel Efficiency?</label>	
<select name="efficiency">
<option value="Null"<?php	if(isset($_POST['efficiency']) && $_POST['efficiency'] == 'NULL') echo 'selected = "unselected"'  ;?>>Select one!</option>	
<option value="20"<?php	if(isset($_POST['efficiency']) && $_POST['efficiency'] == '20 MPG') echo 'selected = "selected"' ;?>>20 MPG</option>
<option value="30"<?php	if(isset($_POST['efficiency']) && $_POST['efficiency'] == '30 MPG') echo 'selected = "selected"' ;?>>30 MPG</option>	
<option value="40"<?php	if(isset($_POST['efficiency']) && $_POST['efficiency'] == '40 MPG') echo 'selected = "selected"' ;?>>40 MPG</option>
</select>
	
	
	
<input type="submit" value="Convert it!">	
	
<input type="reset" value="Reset">		

	
</fieldset>		
</form>
	
	
	
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
		
if(empty($_POST['distance']) || !is_numeric($_POST['distance'])){
echo '<p>Please fill out how many miles you will be driving!</p>'; 
}
	
		
if(empty($_POST['days']) || !is_numeric($_POST['days'])){
echo '<p>Please fill out how many days you will be driving!</p>'; 
}

if(empty($_POST['hours']) || !is_numeric($_POST['hours'])){
	echo '<p>Please fill out how many hours you will be driving';
}	
	if(empty($_POST['price'])) {
echo '<p>Choose the price per gallon option!</p>';
} 
	
	
if ($_POST['efficiency'] == 'NULL') {
	echo 'Please choose your fuel economy!!';
}

	
	

	
	
	
	    if(isset($_POST['efficiency'],
				 $_POST['days'],
				 $_POST['hours'],
				 $_POST['price']) &&
	  is_numeric($_POST['distance'])
		   
		   
		   
		   ) {
		             
		    
		    $distance = $_POST['distance'];
			$days = $_POST['days'];
			$hours = $_POST['hours'];
	        $price = $_POST['price'];
		    $efficiency = $_POST['efficiency'];
			$marvin = 8;
			$totalDays = $days * 24 + $hours;
			$total =  $totalDays / $price * $distance;
			$totalFormat = number_format($total, 2);
		
			
			
		
			
	
			
			
			
			echo '<div class= "box">';
			echo' Your distance will be <b> '.$distance.' miles.</b>';
			echo '<br>';
			echo '<br>';
			echo 'You will be driving for <b> '.$days.' days </b>  and<b> '.$hours. '</b> hours which is <b> '.$totalDays.' hours </b> of drive time. ' ;
			echo '<br>';
			echo '<br>';
			echo 'You\'ll be spending <b> $'.$totalFormat.'!</b>';
			echo '<br>';
			echo '<br>';
			echo 'Your vehicle has a fuel efficiency rating of <b>' .$efficiency  * $marvin. ' miles per gallon. </b>';
			echo '</div>';
	    // 1.if the total is greater than or equal to something you you are really happy 
//		       if($total >= 2000){d
//			   echo '<div class= "box">';
//			   echo 'I\'m a happy camper, because I have more $'.$totalFormat.' American Dollars and I am going shopping!';
//			   echo '</div>';
//		   } else {
//			   echo '<div class= "box">';
//			   
//			   echo 'I\'m not happy because I only have $'.$totalFormat.' American Dollars!!!';
//			   echo '</div>';
//		   }
//		   
		   // 2. else you are not
}// end elseif 
   
} // close server request method
?>	
</body>
</html>