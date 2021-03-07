<?php

if(isset($_POST['name'],
		$_POST['confirm'])) {
		$name = $_POST['name'];
	    $confirm = $_POST['confirm'];
	    
	    $yes = 'unchecked';
		$no = 'unchecked';
	
	//if yes is checked it's a yes
	//if no is checked it''s a no
	
	if($confirm == 'yes') {
		$yes = 'checked';
		header('Location:index.php'); // if yes the page will redirect to the index.php page
	}
	
	elseif($confirm =='no')  {
		$no = 'checked';
		header('Location:member.php '); //if no this will send you to the member.php page!
	}
	
	
	
	
	
	
} else {

echo '
 <form action="" method="post">
 <label>Name</label>
 <input type="text" name="name">
 <label>Are you a member?</label>
 <input type="radio" name="confirm" value="yes">Yes
  <input type="radio" name="confirm" value="no">No
 <input type="submit" value="Send it">
 <p><a href="">Reset</p>

';
}




