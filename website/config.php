<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));


date_default_timezone_set('America/Los_Angeles');

$nav['index.php']= 'Home';
$nav['about.php']= 'About';
$nav['daily.php']= 'Daily';
$nav['people.php']= 'People & Desserts';
$nav['contact.php']= 'Contact';
$nav['gallery.php']= 'Gallery';


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
		$title = 'Home Page!'; 
		$body ='home';
				break;
		
		case'about.php' :
		$title = 'About Page!'; 
		$body ='home';
				break;
		
		
		case'daily.php' :
		$title = 'Daily!'; 
		$body ='daily';
				break;
		
		
		case'people.php' :
		$title = 'People Page!'; 
		$body ='people';
				break;
		
		
		
		case'contact.php' :
		$title = 'Contact Page!'; 
		$body ='contact';
				break;
		
		case'gallery.php' :
		$title = 'gallery Page!'; 
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














