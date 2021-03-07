<?php
include('config.php');
include('includes/header.php');


?>
	
// include('includes/header.php);
<?php
// we need to connect to the database!!!
// we need to create a variable 
$sql = 'SELECT * FROM week8People';

//and now create another variable
// use the mysqli_connect function and call out DB_NAME... etc..........!



$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
or die(myError(__FILE__,__LINE__,mysqli_connect_error())); // if we cannot connect ...


// now call out another variable

$result = mysqli_query($iConn, $sql) 
//If we cannot extract data....
 or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));	

if(mysqli_num_rows($result) > 0) {
	
 while($row=mysqli_fetch_assoc($result)) {
	 
	  echo '<ul>';
	  echo '<li>For more information <a href="people-view.php?id='.$row['week8PeopleId'].'">'.$row['firstName'].'</a></li>';
	  echo '</ul>';
	  echo'<li><b>First Name:</b> '.$row['firstName'].'</li>';
	  echo'<li><b>Last Name:</b> '.$row['lastName'].'</li>';
	  echo'<li><b>Occupation Name:</b> '.$row['occupation'].'</li>';
	 
	 
	 
	 
	 
	// this array is going to display the contents of the row
	// this array is going to display the contents of the row
	 
	 
	 
	 
} //ending while loop
	
	
		
} else {

	echo 'Nobody home';
	
	
} //close if mysqli num of rows

// releasing the web server

mysqli_free_result($result);

// close the connection 

mysqli_close($iConn);





