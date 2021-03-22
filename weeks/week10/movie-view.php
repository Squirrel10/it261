<?php // index.php this is our wonderful home page that can only be reached if you login successfully!


session_start();
include('config.php');
include('includes/header.php');


if(!isset($_SESSION['UserName'])) {
    $_SESSION['msg'] = 'You must log in first';
    header('location:login.php');
}

if(isset($_GET['logout'])) {
       session_destroy();
       unset($_SESSION['UserName']);
       header('location:login.php');
}

//include('includes/header.php');

//Notification message
if(isset($_SESSION['success'])):?>
<div class="seccess">
<h3>
<?php echo $_SESSION['success'] ; 
  unset($_SESSION['success']);
?>
    
    
</h3>
</div>    
<?php endif; 

    
if(isset($_SESSION['UserName'])):?>     
<div class="welcome-logout">
<h3> Hello,
<?php echo $_SESSION['UserName'] ;?>   
</h3>    

<a href="index.php?logout='1' ">Log out!</a>        
</div>    
    <?php endif; ?>







<?php // movie-view.php

include('config.php');

if(isset($_GET[''])) {
	$id = (int)$_GET['id'];
} else {
	header('Location:project.php');
}

$sql = 'SELECT * FROM final7Movie WHERE final7MovieId = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) 
 or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));	

if(mysqli_num_rows($result) > 0) {
	
 while($row=mysqli_fetch_assoc($result)) {
$movieName = stripslashes ($row['movieName']);
$yearReleased = stripslashes ($row['yearReleased']);
$email = stripslashes ($row['email']);
$productionDate = stripslashes ($row['productionDate']);	 
$movieType = stripslashes ($row['movieType']);
$description = stripslashes ($row['description']);
$feedback = '';	
	 
} // closing while
	
	
} else {
	
$feedback = 'Lunch break time, will be back!';	
	
} //closing else
?>

<div id="wrapper" style="width:940px; margin:0 auto;">
<main style="width:580px; float left;">
<h1>Awesome! We're here</h1>
<h2>You are on<?php echo $movieName; ?>'s Page</h2>
<?php
if($feedback == '') {
  echo '<ul>';
  echo '<li><b>Movie Name:</b> '.$movieName.'</li>';		
  echo '<li><b>Year Released:</b> '.$yearReleased.'</li>';	
  echo '<li><b>Production Date:</b> '.$productionDate.'</li>';	
  echo '<li><b>Email:</b> '.$email.'</li>';		
  echo '<li><b>Movie Type:</b> '.$movieType.'</li>';
  echo '</ul>';	
  echo '<p>'.$description.'</p>';
  echo'<p><a href="movie.php">Return to our movie page</a></p>';	
	
	
} else{
	
   echo $feedback;
}

?>
</main>
	
<aside style="width:340px; float: right;">
	
<?php
	if($feedback == '') { // if feedback is empty show me my image
	  echo '<img src="images/movie'.$id.'.jpg" alt="'.$movieName.'" >';	// here is the image (go find my image inside my image folder, all the images are nammed movie)
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

























































<h1>Welcome to our home page!</h1>
        

<wrapper>

<img src="images/abides.jpg" alt="cookie" width="300" height="200">

</wrapper>




</div>
<?php include('includes/footer.php');





























