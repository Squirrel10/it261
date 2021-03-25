<?php
// Patrick, a couple of things - you call out the include for your config twice - it is called once at the very beginning

// logic - the session start is saying if the user name is not set, you have to login first
// then if logout is set, we are directed back to the login page - NO HTML YET, therefore NO HEADER INCLUDE!!!!
session_start();
include('config.php');
if(!isset($_SESSION['UserName'])) {
    $_SESSION['msg'] = 'You must log in first';
    header('Location: login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['UserName']);
     header('Location: login.php');
}

// the isset below is referring to your movie database AND your if(isset) on line 60, was missing the 'id' 
//this was yours ....if(isset($_GET[''])) {
if(isset($_GET['id'])) {
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
	
$feedback = 'Nobody is home - they are out to lunch';	
	
} //closing else
?>



<?php

// NOW, WE CONNECT TO THE DATABASE - NO HEADER INCLUDE YET!!!

// AFTER YOUR else statement regarding your $feedback is where you call out your header include

// NEXT, YOU HAVE YOUR NOTIFICATION MESSAGE.  You are now in HTML

if(isset($_SESSION['success'])) :?>
<div class="success">
<h3>
  <?php
    echo $_SESSION['success'];
    unset($_SESSION['success']);
     ?>
     </h3>
</div>  <!--end success-->
<?php endif ?>


<?php
    if(isset($_SESSION['UserName'])) : ?>
<div class="welcome-logout">
    <h3> Hello,
<?php echo $_SESSION['UserName'] ;     ?>
</h3>  

<a href="index.php?logout='1' ">Log out!</a>
</div>  <!--end welcome logout-->
<?php endif  ?>

<main>
<h1>Awesome! We're here</h1>
<h2>You are on <?php echo $movieName; ?>'s Page</h2>
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
  echo'<p><a href="project.php">Return to our movie page</a></p>';	
	
	
} else{
	
   echo $feedback;

}
  
?>
    
<aside style="width:340px; float: left;">
	
<?php
	if($feedback == '') { // if feedback is empty show me my image
	  echo '<img src="images/movie'.$id.'.jpg" alt="'.movieName.'" >';	// here is the image (go find my image inside my image folder, all the images are nammed people)
	}
	?>
	
</aside>
	    
</main>

