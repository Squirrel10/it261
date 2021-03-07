<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $title; ?></title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
	
<body class="<?php echo $body; ?>">	
	
	
	

<header>
<div class ="innder-header">
	<a href="index.html"><img id="logo" src="images/logo.png" alt="logo"></a>
	<h2><a href="../index.php">Back to the Portal Page</a></h2>
<nav>
<!--
<ul>
<li><a href="">Home</a>
<li><a href="">About</a>
<li><a href="">Daily</a>
<li><a href="">People</a>
<li><a href="">Contact</a>
<li><a href="">Gallery</a>
</ul>	
-->
	
<ul>
    
<?php
echo makeLinks($nav);   
?>	
    

    
    
</ul>	
</nav>
</div>
</header>	
    
    
    
    
    
    
    
    