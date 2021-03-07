<?php
// form part 1
// dont care about the HTML, body tag..
// what i do care about is the form elements such as the <input> tag and the <label> and <form>
// name attribute and value is crucial!!! VALUE!!!
//undefined variables are the easiest to correct


if(isset($_POST['name'],
		$_POST['email'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
		//post name is going to be applied to the name
	echo $name;
	echo $email;
} 
    else {
	echo '
	<form  action="" method="post"> 
	<label>NAME</label>
	<input type ="text" name ="name"><br>
	
	<label>EMAIL</label>
	<input type ="EMAIL" name ="email"><br>
	
	<input type="submit" value="Send it"><br>
	<p><a href="">Reset</p>
	</form>
	     ';
	}