		
<!DOCTYPE html>
<html lang="en" class="js csstransitions">

<head>
    <title>Bus Ticket Reservation System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/normalize.css" />
   
<body>

<?php
	session_start();

	include_once 'dbconnect.php';
	include 'adminfunction.php';
?>
	
	<div id="signin">
		<h1>sign-in</h1>
                <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform" class="signin-form">
                    <div class="input-container">
                        <input type="email" name="signinEmail" placeholder="Email" class="input-field" id="signinEmail" autocomplete="off" required>
                        <label for="signinEmail" class="floating">Email</label>
                        <div class="input-field-shadow"></div>
                    </div>
                    <div class="input-container">
                        <input type="password" name="signinPassword" placeholder="Password" class="input-field" id="signinPassword" required>
                        <label for="signinPassword" class="floating">Password</label>
                        <div class="input-field-shadow"></div>
                    </div>
                    <div class="submit-container">
                        <input type="submit" name="submit-signin" value="Sign In" class="submit-btn">
                        <div class="submit-btn-shadow"></div>
                    </div>
                    <span class="text-danger"><?php if (isset($signinErrormsg)) { echo $signinErrormsg; } ?></span>
                </form>
<!--
                <footer class="forget-footer">
                    <div class="signin-forget"> <a href="#" id="forget-button">Forget Your Password ?</a> </div>
                    <div class="create-account"> <a href="#" id="create-button">Create New Account</a> </div>
                </footer>
-->
            </div>
	        
	
	</body>
	</html>
	