<?php
//This will be a page of variables!!!!
//errors!

$name = 'Patrick';
echo 'It is a rainly and windy day'; 
echo '<br>';
echo $name; //no quotes necessary when echoing a variable.
$name = 'Tawn';
$name = 'Sharon';
echo '<br>';    
echo $name;
echo '<br>';
//we are assigning a string to a variable which is a container.
$firstName = 'Patrick';
$lastName = 'Tensen';
echo $firstName. ' '.$lastName; // Join them with a "." 
//Single quotes vs double quotes. Using single quotes is easier. 

echo '<br>';

echo ' '.$firstName.' '; 

echo '<br>';

echo "$firstName";

echo '<br>';

$name = 'Patrick';
$name .= ' Red';
echo $name;
echo '<br>';
echo '<br>';
$x = 20; //integars in PhP.
$y = 25;
$z = $x + $y;
echo $z;
echo '<br>';

$x= 20;
$x += 25;
echo $x;

echo '<br>';

$a = 100;
$a /= 7;
$aFriendly = number_format($a,2); // rounding the number!
echo $a;
echo '<br>';
echo $aFriendly;

echo '<br>';
echo date('Y'); //date function
echo '<br>';

//$name[] = 'Patrick'; 
//$name[] = 'Red'; 
//$name[] = 'Blue'; 
//$name[] = 'Oink'; 
//$name[] = 'Trevor'; 
echo '<br>';
//echo $name;
//BELOW are indexed arrays.

$dairy[] = 'Milk';
$dairy[] = 'Cheese';
$dairy[] = 'Ice cream';
$dairy[] = 'Yogurt';
echo '<br>';
echo $dairy[2];
echo '<br>';
print_r($dairy);
echo '<br>';
var_dump($dairy);


//$nav[] = 'Home';
//$nav[] = 'About';
//$nav[] = 'Daily';
//$nav[] = 'Contact';
//$nav[] = 'Gallery';

//echo '<br>';
//echo $nav[2];

//$nav = array(
  //  'index.php' => 'Home',
    //'about.php' => 'About',
    //'daily.php' => 'Daily',
    //'contact.php' => 'Contact',
    //'gallery.php' => 'Gallery'


          //  )

//print_r($nav);

//$nav = [ 'index.php' => 'Home','about.php' => 'About', 'daily.php' => 'Daily','contact.php' => 'Contact','gallery.php' => 'Gallery' ]:


//Where will you see an array 

//$show = 'Schitts Creek';
//$showActor = 'Eugene Levy';
//$showGenre = 'Comedy';




