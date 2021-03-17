<?php // index.php this is our wonderful home page that can only be reached if you login successfully!


session_start();
include('config.php');

if(!isset($_SESSION['UserName'])) {
    $_SESSION['msg'] = 'You must log in first';
    header('location:login.php');
}

if(isset($_GET['logout'])) {
       session_destroy();
       unset($_SESSION['UserName']);
       header('location:login.php');
}

include('includes/header.php'); ?>
<main>
<?php
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

<h1>Hi and welcome to the contact page!</h1>
<h2>This is the content in my main</h2>    

</main>
<aside>
<h3>This is the content in my aside</h3>

</aside>

</div>
<?php include('includes/footer.php');





























