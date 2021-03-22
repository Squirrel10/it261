<?php // log in page will be pointing to the server.php page

include('server.php');
include('includes/header.php');
?>


<h1 class="center">Please login!</h1>



<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
<fieldset>
<label>Username</label>
<input type="text" name="UserName" value="<?php if(isset($_POST['UserName'])) echo $_POST['UserName'];?>">
<label>Your Password</label>
<input type="password" name="Password">
    
<?php include('includes/errors.php');?>
    
<button type="submit" class="btn" name="login_user">Login</button>
    
<button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>'">Reset</button>

</fieldset>    
    
</form> 

<p class="center">Haven't Registered?<a href="register.php"> Register Here!</a></p>

<img src="images/cookie.png" alt="cookie" width="300" height="200">




</div> <!--end wrapper-->
<?php 
    include('includes/footer.php');