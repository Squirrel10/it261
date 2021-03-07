<?php
//if statements
//if(there is a condition) {
// do something

    
    
//}

//$temp = '75';
//if($temp <= 60) {
  //  echo 'It\'s not too hot';
//} else { 
   // echo 'It could be hot!';
//}

$temp = '90';
if($temp <= 60) {
    echo 'It\'s not too hot';
} elseif($temp <= 70) { 
    echo 'It\ getting warmer!';
} elseif($temp <= 80) {
    echo 'It\'s getting really hot';
} 

$salary = '200000';
if($salary == 200000) {
    echo 'I\'m happy';
} 

//If my salary is still 200000. If I make a quota of selling 800,000, I will then make 10% of my salary as bonus what will be my total salary.
//If I make only 750,000, then I will only make 5% bonus
//If I sell only 500,000 I don't make any bonus
echo '</br>';
$sales = 499000;
if($sales <= 500000){
    $salary  *= 1;
    echo $salary;
} elseif($sales <= 799000){
    $salary *= 1.05;
        echo $salary;

} elseif($sales >= 800000){
    $salary *= 1.10;
        echo $salary;

}else {
    echo 'No bonus';
} 