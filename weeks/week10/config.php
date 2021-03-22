<?php  //config.php file 
ob_start();

define('DEBUG',  'TRUE');

include('credentials.php');
	

























	
function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}


define('THIS_PAGE', basename($_SERVER['PHP_SELF']));


date_default_timezone_set('America/Los_Angeles');

$nav['about.php']= 'About';
$nav['contact.php']= 'Contact';
$nav['project.php']= 'Project';
$nav['daily.php']= 'Daily';
$nav['index.php']= 'Home';


function makeLinks ($nav) {
$myReturn = '';
foreach($nav as $key => $value) {
if (THIS_PAGE == $key) {
$myReturn .= '<li><a class="active"
href="'.$key.'">'.$value.'</a></li>';
}
else { 
$myReturn .='<li><a href="'.$key.'">'.$value.'</a></li>';
            
} // end else
        
} // end foreach
    
    
    return $myReturn;
    
} // close function 










switch(THIS_PAGE) {
		case'index.php' :
		$title = 'Home!'; 
		$body ='home';
				break;
		
		case'about.php' :
		$title = 'About!'; 
		$body ='home';
				break;
		
		
		case'daily.php' :
		$title = 'Daily!'; 
		$body ='daily';
				break;
		
		
		case'people.php' :
		$title = 'People!'; 
		$body ='people';
				break;
		
		
		
		case'contact.php' :
		$title = 'Contact!'; 
		$body ='contact';
				break;
		
		case'gallery.php' :
		$title = 'Gallery'; 
		$body ='contact';
				break;
		
	}
	
// form php goes here and make a form include for it!

$firstName = '';
$lasatName = '';
$email = '';

$firstNameErr = '';
$lasatNameErr = '';
$emailErr = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    
    
    
    
} // closing sever request


