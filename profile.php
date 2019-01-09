<?php
	require('header.php');
?>


	<div class="container">
			<a href="#" class="scrollToTop"><i class="fa fa-arrow-up" id="arrow"></i></a>	
			<h3>Your profile details</h3>
			<hr />
		 <div class="personal">
		  <figure>
			 <img src="<?php echo $_SESSION["profile_pic"]; ?>" />
			
		 </figure>
		  
		 <div class="personaldetails">
		
		<p>First Name:<b> <?php echo $_SESSION["firstname"]; ?></b></p>
		<p>Last Name: <b><?php echo $_SESSION["lastname"]; ?></b></p>
		 <p>Email: <b><?php echo $_SESSION["email"]; ?></b></p>
		 <p>Phone: <b><?php echo $_SESSION["phone"]; ?></b></p>
		 <p>County: <b><?php echo $_SESSION["county"]; ?></b></p>
		 </div>
		 </div>
		 
		 
		 <button class="btn" type="button" id="show">Update personal details</button>
		 <form method="post" action="process.php" id="profile" enctype="multipart/form-data">
		<input type="hidden" name="formname" value="profile" readonly="readonly" />	
   
        <legend>Profile details</legend>
        <label>First Name:</label><input type="text" name="firstname" id="fName" value="<?php echo $_SESSION["firstname"]; ?>"  />
        <label>Last Name:</label><input type="text" name="lastname" id="lName" value="<?php echo $_SESSION["lastname"]; ?>" />
        <label>Email:</label><input type="email" name="email" id="email" disabled value="<?php echo $_SESSION["email"]; ?>" />
        <label>Phone:</label><input type="text" name="phone" id="phone" value="<?php echo $_SESSION["phone"]; ?>"  />
		<label>County:</label>
		<select name="county" >
					<option value="">Select your county</option>
					<?php
						echo displayCounties($_SESSION["id_county"]);
					?>
				</select>
		
        <label>Password:</label><input type="password" name="password" id="pswd" value="" />
       <label>Profile Image:</label><input class="uploadphoto" type="file" name="profile_pic"  />
        
		 <button class="btn" type="submit" >Update</button>
		</form>
	
		
	</div>
	<footer>
		<?php
			include 'footer.php';
		?>
	</footer>
	</div>
	
	<script>
		
			$(document).ready(function() {
				$("#show").click(function() {
					$("#profile").toggle(1000);
				});
				});
				
				</script>
				
	
	
</body>		
</html>