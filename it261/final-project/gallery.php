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
<h1>This page still needs some work and I need to add some more photos but here's the start!</h1>    
<div class="gallery-main">
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="images/cleese.jpg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="images/danson.jpg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="images/melissa.jpg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>    
    

</div>

</wrapper>


<script type="text/javascript" src="js/script.js"></script>

</div>
<?php include('includes/footer.php');





























