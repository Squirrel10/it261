<?php

$dice = rand(1,6);

echo $dice;
echo '<br>';

$dice1 = rand (1, 6);
$dice2 = rand (1, 6);

echo '<br>';

if ($dice1 == $dice2){
echo ' You win you have a double!';
} else {
    echo 'You lose!!!';
} 






$photos = array('photo1','photo2','photo3','photo4','photo5');

$photos = array('photo1','photo2','photo3','photo4','photo5'); // photos arrray

$nav['index.php'] = 'Home'; //associative array

$photos[0] = 'photo1'; //photos indexed
$photos[1] = 'photo2';
$photos[2] = 'photo3'; 
$photos[3] = 'photo4';
$photos[4] = 'photo5';





$i = rand(1,4); // with the parameters 1 through 4 
$selectedImage = 'images/'.$photos[$i].'.jpg'; //passing the $i variable! combining the jpg with the photos at random. 
echo '<img src="'.$selectedImage.'"  alt=".' .$photos[$i].'">'; // calling out the selected image
















