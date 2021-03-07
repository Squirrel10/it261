<?php

//substr() and str_replace()

include('config.php');
include('includes/header.php');



$people['Donald_Trump'] = 'trump_Former President from NY.';
$people['Joe_Biden'] = 'biden_President from PA.';
$people['Hilary_Clinton'] = 'clint_Secretary from NY.';
$people['Bernie_Sanders'] = 'sande_Senator from VT.';
$people['Elizabeth_Warren'] = 'warre_Senator from MA.';
$people['Kamala_Harris'] = 'harri_Vice President from CA.';
$people['Cory_Booker'] = 'booke_Senator from NJ.';
$people['Andrew_Yang'] = 'ayang_Entrepreneur from NY.';
$people['Pete_Buttigieg'] = 'butti_Transportation Secretary from IN.';
$people['Amy_Klobuchar'] = 'klobu_Senator from MN.';
$people['Julian_Castro'] = 'castr_Former Housing/Urban from TX.';

?>

<!doctype html>
<html>
<head>
<title>My table of images</title>    
<meta charset="UTF-8">
</head>
    
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

<?php include('includes/footer.php');
 ?> 

</html>
















