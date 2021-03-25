<?php // index.php this is our wonderful home page that can only be reached if you login successfully!


session_start();
include('config.php');

if(!isset($_SESSION['UserName'])) {
    $_SESSION['msg'] = 'You must log in first';
    header('location:login.php');
}

if(isset($_GET['logout'])) {
       session_destroy();
       unset($_SESSION['UserName']);
       header('location:login.php');
}

include('includes/header.php'); ?>
<main>
<?php
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

<h1>Welcome to the daily page</h1>   

    
<?php  
date_default_timezone_set('America/Los_Angeles');
$todayDate = date('H:i A');

//IS TODAY SET???
//isset is a function -- isset()
if(isset($_GET['today'])) {
    $today = $_GET['today'] ;
} else {
    $today = date('l'); // today is the date function.
}

switch($today) {
        
        
        case 'Friday':
        $movie = 'Friday is my Jack Nicholson day...'; 
        $pic = 'nicholson.jpg';
        $alt = "Nicholson actor";
        $content = 'One steller at wit and sarcasm.';
        $background = 'first';
        break;
        
        case 'Saturday':
        $movie = 'Saturday is Ellen Ripley day'; 
        $pic = 'ripley.jpg';
        $alt = "Ripley actor";
        $content = 'Ellen played in the movie Alien!';
        $background = 'second';
        break;
        
          case 'Sunday':
        $movie = 'Sunday is my Melissa Mccarthy day!'; 
        $pic = 'melissa.jpg';
        $alt = "Mccarthy actor";
        $content = 'I love her in the movie Spy!';
        $background = 'third';
        break;
        
        case 'Monday':
        $movie = 'Monday is my John Cleese day'; 
        $pic = 'cleese.jpg';
        $alt = "Cleese actor";
        $content = 'Everyone knows him from Faulty Towers! Right!?';
        $background = 'fourth';
         break;
        
        case 'Tuesday':
        $movie = 'Tuesday is my Taye Diggs day!'; 
        $pic = 'diggs.jpg';
        $alt = "Diggs actor";
        $content = 'I remember him vividly in his role in Malibu\'s Most Wanted!';
        $background = 'fifth';
         break;
        
        case 'Wednesday':
        $movie = 'Wednesday is my Ted Danson day'; 
        $pic = 'danson.jpg';
        $alt = "Danson actor";
        $content = 'Ted Danson is good in Cheers but I love him in The Good Place TV show';
        $background = 'sixth';
         break;
        
        case 'Thursday':
        $movie = 'Thursday is my Regina Hall day!'; 
        $pic = 'hall.jpg';
        $alt = "Hall actor";
        $content = 'She does a great job in Scary Movie!';
        $background = 'seventh';
         break;
            
        
        
}


?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Switch</title>
<style>
		
		
		
		


.h1-switch { 
    color:black;
    font-family: 'Neucha', cursive;
    margin-left: 180px;
    margin-bottom: 20px;
    width: 700px;
	}
	
 .h2-switch {
    color:black;
    font-size: 50px;
    margin-left: 500px;
    margin-bottom: 20px;
}
		
		
  .navigation {
	height: 50px;
    width: 1000px;
    border-radius: 5px;
    margin-bottom: 20px;
}
		

   .navigation a {
     text-decoration: none;
     font-weight: 300;
     font-size: 20px;
     color: blue;
}    

		
    .navigation a:hover {
      color:black;
      border-radius: 5px;
      font-size: 30px;
}
		

    .navigation li { 
       float: left;
       list-style-type: none;
       line-height:2px;
       margin-left:55px;
}
		
     .p-switch {
       font-size: 20px;
       background: white;
       width: 939px;
       margin-top: 20px;
       margin-bottom: 20px;
       border-top: 2px solid yellow;
       border-bottom: 2px solid yellow;
}

		
      .ul-switch  {
       list-style-type: none;
       text-decoration: none;
}
		
      .img-switch {
		
        height: 400px;
        width: 600px;
		border: 5px solid white;
		margin-left: 150px;
}

</style>
</head>
  


<body class="<?php echo $background;?>">
	  
	  
<div id="wrapper1">
	        

<h1 class="h1-switch"><?php
        if($todayDate <= 11 ) {
    echo 'Morning! is in order. <br>';
}
elseif ($todayDate <= 15) {
    echo 'Good afternoon, cup of tea?<br>';
}
else {
    echo 'Good evening, getting late isn\'t it? <br>';
}
    
        
echo $movie; 
	
?>
		

</h1>
		

	  <nav class="navigation"> 
        <ul class="ul-switch">            
                        <li><a style="color:<?php
							if ($today == 'Friday') {
								echo 'red';
							} else {
								echo 'blue';
							}  ;?>"  
					     href="daily.php?today=Friday">Friday</a></li>
                        <li><a style="color:<?php 
							if ($today == "Saturday") {
								echo 'purple';
							
							} else {
								echo 'blue';
								
							}
							
						;?>" href="daily.php?today=Saturday">Saturday</a></li>
                        <li><a style="color:<?php
							if ($today == 'Sunday') {
								echo 'green';
							} else {
								echo 'blue';
							}  ;?>"  href="daily.php?today=Sunday">Sunday</a></li>
                        <li><a style="color:<?php
							if ($today == 'Monday') {
								echo 'violet';
							} else {
								echo 'blue';
							}  ;?>"  href="daily.php?today=Monday">Monday</a></li>
                        <li><a style="color:<?php
							if ($today == 'Tuesday') {
								echo 'black';
							} else {
								echo 'blue';
							}  ;?>"  href="daily.php?today=Tuesday">Tuesday</a></li>
                        <li><a style="color:<?php
							if ($today == 'Wednesday') {
								echo 'skyblue';
							} else {
								echo 'blue';
							}  ;?>"   href="daily.php?today=Wednesday">Wednesday</a></li>
                        <li><a style="color:<?php
							if ($today == 'Thursday') {
								echo 'maroon';
							} else {
								echo 'blue';
							}  ;?>"  href="daily.php?today=Thursday">Thursday</a></li>
        </ul>
	  </nav>		
    <img class="img-switch" src="images/<?php echo $pic; ?>" alt="<? echo $alt; ?>">
	  
	
        <p class="p-switch"><?php echo $content;?></p>
	
	
	  
	  </div>
	</body>
</html>
	    
    
</main>
<aside>

</aside>

</div>
<?php include('includes/footer.php');






























