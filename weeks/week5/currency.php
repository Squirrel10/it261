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
		}
	fieldset{
		padding: 10px;
	}
	
	label {
		display: block;
		margin-bottom: 5px;
		margin-left: 
	}
                       /*	attribute selector*/
	input[type=text],   
	input[type=email] {
		
		width:100%;
		margin-bottom: 10px;
		
	}
	
	form ul {
		margin-left: 20px;
	    list-style-type: none;	
		margin-bottom: 10px;
	}
	
	.box {width:400px;
		  margin: 20px auto;
		  background: beige;
		  padding: 10px;
	
	
	}
</style>	
</head>

<body>
	
<form action="" method="post">
<fieldset>
<label>Name</label>
<input type="text" name="name">
<label>Email</label>
<input type="email" name="email">
<label>How much money do you have?</label>
<input type="text" name="amount">
<label>Choose your currency</label>
	
<ul>	
<li><input type="radio" name="currency" value="0.013">Rubles</li>
<li><input type="radio" name="currency" value="0.76">Canadian</li>
<li><input type="radio" name="currency" value="1.28">Pounds</li>
<li><input type="radio" name="currency" value="1.18">Euros</li>
<li><input type="radio" name="currency" value="0.0094">Yen</li>
</ul>

<input type="submit" value="Convert it!">	
	<p><a href="">Reset</a></p>
	
</fieldset>		
</form>
<?php
	
	
if($_SERVER['REQUEST_METHOD']=='POST'){
		
if(empty ($_POST['name'])) {
echo '<p>Please fill out your name!</p>'; 
}
   
 if(empty ($_POST['email'])) {
echo '<p>Please fill out your email!</p>';
}
   
if(empty ($_POST['amount']) || !is_numeric($_POST['amount'])) {
echo '<p>Show me the money or enter a number!!!</p>';
}
		
if(empty ($_POST['currency'])) {
echo '<p>Choose your currency!</p>';
} 
	
   	   if(isset($_POST['name'],
				$_POST['email'],
				$_POST['amount'],
			    $_POST['currency']) &&
	 is_numeric($_POST['amount']) //another function asking if our amount and currency is numeric... and
//		   is_numeric($_POST['currency']) // is numeric post currency....
//				 
	  
		 ) {
	
			$name = $_POST['name'];
	   		$email = $_POST['email'];
	   		$amount = $_POST['amount'];
	        $currency = $_POST['currency'];
			$total = $amount * $currency;
	   ?>
	
	
	
	<div class="box">
   <?php
	echo '<h2>Hello '.$name.'</h2>';
	echo '<p>you have $ '.$total.'</p>';
	
	?>
	</div>
	<?php
	   
	   
	   
	   
	 
	
}// end elseif 
   
} // close server request method

	
	
	
	
	
	
	
	
	
	
?>	
</body>
</html>