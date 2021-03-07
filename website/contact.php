<?php
include('config.php');
include('includes/header.php');


?>
	
	<div id="wrapper">
    <h1 class="contact-h1">Welcome to my Contact Page</h1>

<main>
	
		<?php include('includes/form.php');?>
	
</main>
<aside>
	
	<?php	
	$photos[0] = 'photo1';	
	$photos[1] = 'photo2';	
    $photos[2] = 'photo3';	
    $photos[3] = 'photo4';	
    $photos[4] = 'photo5';
        
    $i = rand(0,4);
    $selectedImage =
   'images/'.$photos[$i].'.jpg';
    echo '<img src = "'.$selectedImage.'"
    alt="'.$photos[$i].'" width="500" height="600">';
	 
    ?>		
		
</aside>
	
			

	<?php
		include('includes/footer.php');?>

</div>
		
		
	
