<?php

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
</head>
<h1>Thank you for filling out the form!</h1>   
<h2>Here are some of the desserts!!</h2>	
<body>
<table>
<?php
foreach($people as $name => $image) : ?>  
<tr>
<td><img src="../website/images/<?php echo substr($image, 0, 5) ;?>.jpg" alt="<?php echo $name ;?>"></td>

<td><?php echo str_replace('_',' ', $name)        ;?></td>

<td><?php echo substr($image, 6) ;?></td>    
    
    
    
</tr>    
<?php endforeach ;?>    
</table>    
</body>    



</html>
















