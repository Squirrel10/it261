<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Basic Currency Form!</title>
<style>
	
	*{
	    padding:0;
		margin: 0;
		box-sizing: border-box;
		
	}	
	form {
		max-width: 600px;
		margin: 20px auto;
		background-color: beige;
		}
	
	fieldset
	{
		padding: 10px;
		font-size: 20px;
		color: red;
	}
	
	label {
		display: block;
		margin-bottom: 5px;
	}
                       /*	attribute selector*/
	input[type=text]   
{
		
		width:100%;
		margin-bottom: 10px;
		
	}
	
	form ul {
		margin-left: 20px;
		margin-bottom: 10px;
	    list-style-type: none;	
		padding: 10px;
	}
	
	.box {
		  width:400px;
		  margin: 20px auto;
		  background: beige;
		  padding: 10px;
	}
	
	
	select {
		margin-bottom: 10px;
		display: block;		
	}
	
</style>	
</head>

<body>
	
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ;?>" method="post"> <!-- this makes it more secure! -->
<fieldset>
	

	

<label>How many miles will you be driving?</label>
<input type="text" name="distance" value="<?php if(isset($_POST['distance'])) echo htmlspecialchars($_POST['distance']);?>">
<label>Price per gallon</label>
	
<ul>	
<li><input type="radio" name="price" value="3.00"<?php	if(isset($_POST['price']) && $_POST['price'] == '3.00') echo 'checked = "checked"'  ;?>>$3.00</li>
<li><input type="radio" name="price" value="3.50"<?php	if(isset($_POST['price']) && $_POST['price'] == '3.50') echo 'checked = "checked"'  ;?>>$3.50</li>
<li><input type="radio" name="price" value="4.00"<?php	if(isset($_POST['price']) && $_POST['price'] == '4.00') echo 'checked = "checked"'  ;?>>$4.00</li>

</ul>

<label>Fuel Efficiency?</label>	
<select name="efficiency">
<option value="NULL"<?php	if(isset($_POST['bank']) && $_POST['bank'] == 'NULL') echo 'selected = "unselected"'  ;?>>Select one!</option>	
<option value="B.O.A"<?php	if(isset($_POST['bank']) && $_POST['bank'] == 'B.O.A') echo 'selected = "selected"' ;?>>Wonderful</option>
	
<option value="B.O.A"<?php	if(isset($_POST['bank']) && $_POST['bank'] == 'B.O.A') echo 'selected = "selected"' ;?>>Okay</option>	
<option value="B.O.A"<?php	if(isset($_POST['bank']) && $_POST['bank'] == 'B.O.A') echo 'selected = "selected"' ;?>>Terrible</option>
</select>
	
	
	
<input type="submit" value="Convert it!">	
	<p><a href="">Reset</a></p>
	
</fieldset>		
</form>
	
	
	saharroo
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
		
if(empty($_POST['distance']) || !is_numeric($_POST['distance'])){
echo '<p>Please fill out how many miles you will be driving!</p>'; 
}

if ($_POST['bank'] == 'NULL') {
	echo 'Please choose your fuel Efficiency!';
}
	
	
	
	
	    if(isset($_POST['distance'],
			    $_POST['price'],
			    $_POST['bank']) &&
	 is_numeric($_POST['amount']) //another function asking if our amount and currency is numeric... and
//		   is_numeric($_POST['currency']) // is numeric post currency....
  ) {
		    $distance = $_POST['distance'];
	        $currency = $_POST['currency'];
		    $bank = $_POST['bank'];
			$total = $amount * $currency;
		    $totalFormat = number_format($total, 2);
	    // 1.if the total is greater than or equal to something you you are really happy 
		       if($total >= 2000){
			   echo '<div class= "box">';
			   echo 'I\'m a happy camper, because I have more $'.$totalFormat.' American Dollars and I am going shopping!';
			   echo '</div>';
		   } else {
			   echo '<div class= "box">';
			   
			   echo 'I\'m not happy because I only have $'.$totalFormat.' American Dollars!!!';
			   echo '</div>';
		   }
		   
		   // 2. else you are not
}// end elseif 
   
} // close server request method
?>	
</body>
</html>