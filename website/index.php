<?php
include('config.php');
include('includes/header.php');


?>
	
	<div id="wrapper">
    <h1>Hi! The homepage is here</h1>
	<div id="hero">
        
	<?php	
	$photos[0] = 'zebra';	
	$photos[1] = 'lion';	
    $photos[2] = 'hippo';	
    $photos[3] = 'giraffe';	
    $photos[4] = 'rhino';
        
    $i = rand(0,4);
    $selectedImage =
   'images/'.$photos[$i].'.jpg';
    echo '<img src = "'.$selectedImage.'"
    alt="'.$photos[$i].'" width="900" height="300">';
	 
    ?>	
	</div> <!-- end hero-->
<main>
	
		
		
</main>
<aside>

		
		
</aside>
	
		
	<?php
		include('includes/footer.php');