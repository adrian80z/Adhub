
<?php

if( isset($_SESSION["firstname"]) ) {
	$buttons = "<div class='userinfo'>Hello,<b> ".$_SESSION["firstname"]."</b></div>
	
	<div class='userpro'><a href='logout.php'>Logout</a> | <a href='profile.php'>Profile</a></div><a href='adform.php'><button type='submit' class='advertbutton'>Place Ad</button></a>";
}else{
	$buttons = "<div class='loginbuttons'><a href='login.php'>Login</a> | <a href='signup.php'>Sign Up</a></div>";
	
}
	echo $buttons; 
?>
