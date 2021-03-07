<?php



//
//$a = 20;
//$b = 30;
//$c = $a + $b;
//echo $c;
//echo '<br>';
//
//$a = 20;
//$b = 30;
//$c = $a - $b;
//echo $c;
//echo '<br>';
//
//$a = 20;
//$b = 30;
//$c = $a * $b;
//echo $c;
//echo '<br>';

//below is an assignment operator
//and another wonderful function - rounds down
$money = 100;
$money /= 7;
//rounding down = floor(); floor function 
//rounding up = ceil(); ceil function
$moneyFriendly = floor($money);
$moneyFriendly = ceil($money);
echo '<br>';
echo $money;
echo '<br>';
echo $moneyFriendly;


//logic - arithmetic caluclations
//circumference of a circle C=2πr 3.14 radius!

$radius = 10;
$pie = 3.14;
$circumference = (2 * $pie) * $radius;
echo '<br>';
echo $circumference;

// 22 degrees celcius = how much fahrenheit? (0°C × 9/5) + 32 = 32°F
echo '<br>';
$celcius = 20;
$farenheit = ($celcius * 9/5) + 32;
echo $farenheit;

//currency! canada --- what is the exchange rate?
echo '<br>';
//$canada = 100;
//$exchange =.79;
//$american = $canada * $exchange;
//echo $american;

$canada = 100;
$canada *= .79;
echo $canada;

