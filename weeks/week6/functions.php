<?php 

function sayHello() {
	echo 'Hello PHP function!!!';
}

sayHello(); // calling the function!
echo '<br>';

function sayHello2($name) {  // added an argument
	echo 'Hello ' .$name.'';
	
}
sayHello2('Patrick');
echo '<br>';
sayHello2('Camden');
echo '<br>';
sayHello2('Casey');
echo '<br>';



function sayHello3($name, $age) {  // added an argument
	echo 'Hello ' .$name.', and you are '.$age.' years old!';
	
}
sayHello3('Patrick', 28); // so you can essentially take these two arguments $name and $age and they'll be passed back up to the function
echo '<br>';             //  "Hello Patrick($name), and you are 28($age) years old"
sayHello3('Camden', 28);
echo '<br>';
sayHello3('Casey', 27);
echo '<br>';
echo '<h2>Math problems</h2>';

function cube($n) {
$cubing = $n * $n * $n; 
echo $cubing;
}

cube(15);





echo '<h2>Celcius Converter!</h2>';

function celciusConverter($temp) { // creating a function "celciusConverter!"
$far = ($temp * 9/5) + 32;	
echo $far;
}
celciusConverter(5); // putting a 5 where the variable $temp is so $temp equals 5 and then it goes back into the equation


echo '<h2>Area and volume math problem</h2>';

function areaVolume($value1, $value2, $value3) { // passing arguments! 
$area = $value1 * $value2;
$volume = $value1 * $value2 * $value3;
return array($area, $volume); // you cannot return two arguments but you can return an array!	
}

$result = areaVolume(10, 5, 2); // take the function and pass the numbers through  
// but how do we echo the array? 
echo '<b>Area :</b>  '.$result[0].'';
echo '<br>';
echo '<b>Volume :</b> '.$result[1].'';
echo '<br>';


function areaVolume2($value1a, $value2a, $value3a) { // passing arguments! 
$area2 = $value1a * $value2a;
$volume2 = $value1a * $value2a * $value3a;
return array($area2, $volume2); // you cannot return two arguments but you can return an array!	
}
list($myArea, $myVolume) = areaVolume2(10, 5, 2);// another function list function 
echo $myArea;
echo '<br>';
echo $myVolume;
