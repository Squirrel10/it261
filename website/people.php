<?php

include('config.php');
include('includes/header.php');


$people['Berry_pancakes'] = 'panca.';
$people['Ice_cream'] = 'cream.';
$people['Cake_confetti'] = 'confet.';
$people['Yummm'] = 'Yummm.';
$people['Delicious!'] = 'delic.';
$people['Spring_cream'] = 'crean.';
$people['Brownie_plate'] = 'brown.';
$people['Delectable!'] = 'wowow.';
$people['So_nice'] = 'nicee.';
$people['Nothing better!'] = 'waffl.';
$people['Yes!!!'] = 'givee.';

?>

<!doctype html>
<html>
<head>
<title>My table of images</title>    
<meta charset="UTF-8">
<style>
	h1 {
		  font-family: "Times New Roman", Times, serif;
		  text-shadow: 1px 1px brown;
	}
	.desserts { border: 4px solid white;}	
</style>	
</head>
<h1>Here are some beautiful desserts!</h1>   
<h2></h2>	
<body>
<table>
<?php
foreach($people as $name => $image) : ?>  
<tr>
<td><img class="desserts" src="../website/images/<?php echo substr($image, 0, 5) ;?>.jpg" alt="<?php echo $name ;?>"></td>

<td><?php echo str_replace('_',' ', $name)        ;?></td>

<td><?php echo substr($image, 6) ;?></td>    
    
    
    
</tr>    
<?php endforeach ;?>    
</table>    
</body>    



</html>
















