<?php
include('config.php');
//include('includes/header.php');





// we need to connect to the database!!!
// we need to create a variable 
$sql = 'SELECT * FROM final7Movie';

//and now create another variable
// use the mysqli_connect function and call out DB_NAME... etc..........!



$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD, DB_NAME)
or die(myError(__FILE__,__LINE__,mysqli_connect_error())); // if we cannot connect 


// now call out another variable

$result = mysqli_query($iConn, $sql) 
//if we cannot extract data then:
 or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));	

if(mysqli_num_rows($result) > 0) {
	
 while($row=mysqli_fetch_assoc($result)) {
	 // this array will display the contents of the row:
     
	  echo '<ul>';
	  echo '<li>For more information <a href="movie-view.php?id='.$row['final7MovieId'].'">'.$row['movieName'].'</a></li>';
	  echo '</ul>';
	  echo'<li><b>Movie Name:</b> '.$row['movieName'].'</li>';
	  echo'<li><b>Year Released:</b> '.$row['yearReleased'].'</li>';
	  echo'<li><b>Production Date:</b> '.$row['productionDate'].'</li>';
	 
	 
	 
	 
	 
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





