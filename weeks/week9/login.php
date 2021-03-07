<?php // log in page will be pointing to the server.php page

include('server.php');

?>


<h1>Login!</h1>



<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
<fieldset>
<label>Username</label>
<input type="text" name="UserName" value="<?php if(isset($_POST['UserName']) echo htmlspecialchars($_POST['Username']));?>">
<label>Your Password</label>
<input type="password" name="Password">
    <?php include('includes/errors.php');?>
    
<button type="submit" class="btn" name="login_user">Login</button>
    
<button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>'">Reset</button>

</fieldset>    
    
</form> 

<p class="center">Haven't Registered?<a href="register.php">Register Here!</a></p>