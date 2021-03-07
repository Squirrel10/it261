<?php
//Switch

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
        $mountain = 'Sunday is my Mt.Shasta day!'; 
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
    <title>Switch</title>
    <meta charset="UTF-8">
    <style>
		
		
		
		
.h1-switch { color:black;
			text-shadow: 1px 1px white;
			background-color: #a28dd9;
			border: 1px solid grey;
			border-radius: 10px;
			font-family: 'Neucha', cursive;
		    padding: 20px;
			width: 1000px;
			margin-left:375px;
		}
	
		.h2-switch {
			color:black;
			margin-bottom: 20px;
			margin-top: 20px;
			font-size: 35px;
			text-shadow: 2px 2px white;
			margin-left:375px;
			
		}
		
		img {
		border-radius: 50%;
		border: 2px solid black;
		 box-shadow: 5px 2px  white;
	}
		
		.navigation {
	
		height: 50px;
		width: 1000px;
		background-image: linear-gradient(#f6c5fc 20%, #fad6ff 50%);
		border: 1px solid grey;
		border-radius: 5px;
	    margin-left:375px;
		margin-bottom: 20px;
	
		}
		
	
		.navigation a {
			text-decoration: none;
			font-weight: 300;
			font-size: 20px;
			color: blue;
			line-height: 20px;
		}
		
		.navigation a:hover {
		color:forestgreen;
		background-image: url(images/purple.jpg);
		border: 1px solid black;
		border-radius: 5px;
		
		
		}
		

		.navigation li { 
		float: left;
    	list-style-type: none;
		line-height: 17px;
		margin-left:8px;
}
		
		.p-switch {
			font-size: 20px;
		    margin-left:400px;
			background: white;
			width: 1000px;
			  margin-left:375px;
	        }

		
		.ul-switch  {
			list-style-type: none;
			text-decoration: none;
			margin-left: 150px;
			
		}
		
		.img-switch {
			margin-left: 520px;
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
		
        
    </style>
    </head>
  
	

  <body class="<?php echo $background;?>">

	
    <h1 class="h1-switch"><?php
        if($todayDate <= 11 ) {
    echo 'Good morning to you!! <br>';
}
elseif ($todayDate <= 15) {
    echo 'Good Afternoon to you!! <br>';
}
else {
    echo 'Good evening to you!! <br>';
}
    
        
echo $mountain; 
	
?>
		
	
</h1>
	  <h2 class="h2-switch">Which mountain lands on which day of the week click below:</h2>
	  <nav class="navigation"> 
        <ul class="ul-switch">            
                        <li><a href="switch.php?today=Friday">Friday</a></li>
                        <li><a href="switch.php?today=Saturday">Saturday</a></li>
                        <li><a href="switch.php?today=Sunday">Sunday</a></li>
                        <li><a href="switch.php?today=Monday">Monday</a></li>
                        <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
                        <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
                        <li><a href="switch.php?today=Thursday">Thursday</a></li>
        </ul>
	  </nav>		
    <img class="img-switch" src="../../images/<?php echo $pic; ?>" alt="<? echo $alt; ?>">
	  
	
        <p class="p-switch"><?php echo $content; ?></p>
	  
	  


    </body>
</html>