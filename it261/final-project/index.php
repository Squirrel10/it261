<?php // index.php this is our wonderful home page that can only be reached if you login successfully!


session_start();
include('config.php');
include('includes/header.php');


if(!isset($_SESSION['UserName'])) {
    $_SESSION['msg'] = 'You must log in first';
    header('location:login.php');
}

if(isset($_GET['logout'])) {
       session_destroy();
       unset($_SESSION['UserName']);
       header('location:login.php');
}

//include('includes/header.php');

//Notification message
if(isset($_SESSION['success'])):?>
<div class="seccess">
<h3>
<?php echo $_SESSION['success'] ; 
  unset($_SESSION['success']);
?>
    
    
</h3>
</div>    
<?php endif; 

    
if(isset($_SESSION['UserName'])):?>     
<div class="welcome-logout">
<h3> Hello,
<?php echo $_SESSION['UserName'] ;?>   
</h3>    

<a href="index.php?logout='1' ">Log out!</a>        
</div>    
    <?php endif; ?>



        

<wrapper>
    
<div class="index-h1">Welcome to the home page!</div>
<div class="index-aside">
<div class="index-h21B">Yes, we take polaroid!</div>    
    
</div>        
<div class="index-main"> 
<img  src="images/abides.jpg" class="index-img" alt="The Dude Meme" width="455" height="400">
<div class="index-h21A">Signed:</div><div class="index-h2">the dude</div>  
</div>  

</wrapper>




</div>
<?php include('includes/footer.php');





























