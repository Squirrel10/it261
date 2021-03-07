<?php
//Switch
include('config.php');
include('includes/header.php');
//echo date('Y');
//echo '<br>';
//echo date('l');

//if today is Thursday, show me Thursday's content.


//Global variables, capitalized, and the global variables have many attributes
//$_POST
//$_GET
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
        $mountain = 'Friday is my Mount Rainier day!'; 
        $pic = 'rainier.png';
        $alt = "Rainier";
        $content = 'This beautiful mountain sits at a whopping 14,410 feet in the state of Washington.';
        $background = 'first';
        break;
        
        case 'Saturday':
        $mountain = 'Saturday is my Mount Denali day'; 
        $pic = 'denali.jpg';
        $alt = "Denali";
        $content = 'Denali is the highest peak in the Untied States topping out around 20,308 feet in the state of Alaska.';
        $background = 'second';
        break;
        
          case 'Sunday':
        $mountain = 'Sunday is my Mount Shasta day!'; 
        $pic = 'shasta.jpg';
        $alt = "Shasta";
        $content = 'Mount Shasta is one of the tallest in California sitting around the same height as Rainier at 14,180 feet.';
        $background = 'third';
        break;
        
        case 'Monday':
        $mountain = 'Monday is my Devils Tower day'; 
        $pic = 'devilstower.jpg';
        $alt = "Devils Tower";
        $content = ' Devils Tower is situated in Wyoming sitting at 5,112 feet it is a very odd formation but fun to visit!';
        $background = 'fourth';
         break;
        
        case 'Tuesday':
        $mountain = 'Tuesday is my Mansfield Mountain day!'; 
        $pic = 'mansfield.jpg';
        $alt = "Mansfield";
        $content = 'East Coast moutains don\'t get as much attention as West Coast ones but this is the tallest moutain in the state of Vermont at 4,393 feet!';
        $background = 'fifth';
         break;
        
        case 'Wednesday':
        $mountain = 'Wednesday is my Mount Hood day'; 
        $pic = 'hood.jpg';
        $alt = "Hood";
        $content = 'Mount Hood is really not that far away from us in Seattle, it is the tallest moutain in the State of Oregon at around 11,250 feet.';
        $background = 'sixth';
         break;
        
        case 'Thursday':
        $mountain = 'Thursday is my Mount St. Helens day!'; 
        $pic = 'helens.jpg';
        $alt = "Helens";
        $content = 'This is a very interesting formation! This moutain erupted in May of 1980 and before it did it was 9,677 feet and now it is 8,366 feet.';
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
			color:orangered;
			font-family: 'Neucha', cursive;
			margin-left: 240px;
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
		margin-left:8px;
}
		
		.p-switch {
			font-size: 20px;
			background: white;
			width: 1000px;
			margin-top: 20px;
			margin-bottom: 20px;
			/*margin-left:475px;*/
	        }

		
		.ul-switch  {
			list-style-type: none;
			text-decoration: none;
			
			
		}
		
		.img-switch {
		
		border: 5px solid white;
		margin-left: 120px;
		}
		
		
		
         body.first {
            background: #e8d3a3;
        }
        
         body.second {
            background:#6186ff;
            
        }
        
        body.third {
            background:#a1c5ff;
        }
    
        
        body.fourth {
            background:#cda1ff;
            
        }
        
         body.fifth {
            background:grey;
            
        }
        
         body.sixth {
         background:lightblue;
            
        }
        
        body.seventh {
        background:#d08aff;
            
        }
		
	#wrapper { width: 1000px; 
	           height: 1000px;
		       border-radius: 5px;
			   margin-bottom: 20px;
			  
		}	
        
    </style>
    </head>
  


  <body class="<?php echo $background;?>">
	  
	<h2 class="h2-switch">Welcome to My Mountain of the Day Page</h2>  
	  
<div id="wrapper">
	        

<h1 class="h1-switch"><?php
        if($todayDate <= 11 ) {
    echo 'Good morning<br>';
}
elseif ($todayDate <= 15) {
    echo 'Good afternoon <br>';
}
else {
    echo 'Good evening <br>';
}
    
        
echo $mountain; 
	
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
	
	
	    <?php include('includes/footer.php');?>
	  </div>
	</body>
</html>
	

