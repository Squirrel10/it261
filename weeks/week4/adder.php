



<!doctype html>
<html lang="en">
<head>
<title>My Adder Assignment</title>
<style>
	
	
	*{
		padding:0;
		margin: 0;
		box-sizing: border-box;
	}
	
	body {
	
		background-image: url(../../images/clouds.jpg);
		background-size:  cover;
		
	}
	
	form{
		margin: 0px 300px 30px;
		border: 2px solid grey;
		padding: 10px;
		 box-shadow: 2px 2px black;
		background-color: lightskyblue;
	}
	
		.box {
		  width: 400px;
		  margin: 20px auto;
		  background: beige;
		  padding: 10px;
		  border: 2px solid grey;
		  box-shadow: 2px 2px black;
		  
	}
	
	h1 {
		
		margin:50px 0px 0px 300px;
		font-size: 70px;
		
	}
	
	label {
		display: block;
		
	}
	
	a {
		text-decoration: none;
		color: blue;
		font-size: 20px;
		
	
	}
</style>
</head>
<body>
<h1>Adder.php</h1> 
<form action="" method="post">
<label>Enter the first number:
</label>
<input type="text" name="num1"><br>
<label>Enter the second number:
</label>	
<input type="text" name="num2"><br>
<input type="submit" value="Add Em!!">
</form>

<?php			//adder-wrong.php

if(isset($_POST['num1'],
		$_POST['num2'])){
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$myTotal = $num1 + $num2;
	
	
	 
	
echo '<div class="box">';	
echo '<h2>You added '.$num1.' and '.$num2.'<h2>';
echo '<p> and the answer is<br><style="color:red";</style> '.$myTotal .' ! </p>';
echo '<p><a href="">Reset page</a></p>';
echo '</div>';	
}

?>

<!--here are my errors--> <!--here are my errors--><!--here are my errors--><!--here are my errors--><!--here are my errors--><!--here are my errors-->
</body>
</html>
