 <?php

	session_start();
	require 'dbconnect.php';
	include 'includes/function.php';
	#print_r($_POST);
	#exit();
	
	
		if( isset($_POST["formname"])) {
			
			switch($_POST["formname"]) {
				
				case "login":
					$email 		= addslashes($_POST["email"]);
					$password 	= addslashes($_POST["password"]);
					
					loginUser($email, $password);
					break;
					
				case "signup":
					$firstname 	= addslashes($_POST["firstname"]);
					$lastname 	= addslashes($_POST["lastname"]);
					$email 		= addslashes($_POST["email"]);
					$password 	= addslashes($_POST["password"]);
					$county  = addslashes($_POST["county"]);
					$date = date('Y-m-d H:i:s');
					
					
					signUp($firstname, $lastname, $email, $password, $county, $date );
					break;
					
				case "profile":
					
					$target_dir	=	"img/users/";
					$target_file	=	$target_dir . basename($_FILES["profile_pic"]["name"]) ;
					$fileExt		=	strtolower( pathinfo($target_file,PATHINFO_EXTENSION) );
					$filename	=	$target_dir . date("YmdHis").$_SESSION["id_user"]."." .$fileExt;
					
					#echo $filename;	
					
					$uploadOk	=	1;
					$check = getimagesize($_FILES["profile_pic"]["tmp_name"]);
					if($check !== false)
					{
						$uploadOk = 1;
					}else{
						$uploadOk = 0;
					}
					
					// Check if file already exists
					if (file_exists($target_file)) {
						$uploadOk = 0;
					}
					
					$maxsize	= (2000000/1024);
					#echo $maxsize;
					// Check file size
					if ($_FILES["profile_pic"]["size"] > 2000000 ) {
						#echo "Sorry, your file is too large.";
						$uploadOk = 0;
					}
					
					// Allow certain file formats
					if( $fileExt!="jpg" && $fileExt!="png" && $fileExt!="jpeg" && $fileExt!="gif")
					{
						#echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br/>";
						$uploadOk = 0;
					}
					
					// Check if $uploadOk is set to 0 by an error
					if ($uploadOk == 0)
					{
						echo "Sorry, your file was not uploaded..<br/>";
						exit();
						// if everything is ok, try to upload file
					}else{
						if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $filename))
						{
							$uploadOk = 1;
							#echo "The file ". $filename . " has been uploaded..<br/>";
						}else{
							$uploadOk = 0;
							#echo "Sorry, there was an error uploading your file.<br/>";
						}
					}

					if($uploadOk==0){
						echo "Sorry, your file was not uploaded..<br/>";
						exit();
					}else{
				
					$firstname 	= addslashes($_POST["firstname"]);
					$lastname 	= addslashes($_POST["lastname"]);
					$email 		= addslashes($_POST["email"]);
					$phone 	= addslashes($_POST["phone"]);
					$password 	= addslashes($_POST["password"]);
					$id_county = addslashes($_POST["county"]);
					//$profile_pic = addslashes($_POST["profile_pic"]);

					updateUser($firstname, $lastname, $email, $phone, $password, $id_county, $filename);
					}
					break;
			
		
					
				case "adform":
				
					$target_dir	=	"img/products/";
					$target_file	=	$target_dir . basename($_FILES["mainpicture"]["name"]) ;
					$fileExt		=	strtolower( pathinfo($target_file,PATHINFO_EXTENSION) );
					$filename	=	$target_dir . date("YmdHis").$_SESSION["id_user"]."." .$fileExt;
					
					#echo $filename;	
					
					$uploadOk	=	1;
					$check = getimagesize($_FILES["mainpicture"]["tmp_name"]);
					if($check !== false)
					{
						$uploadOk = 1;
					}else{
						$uploadOk = 0;
					}
					
					// Check if file already exists
					if (file_exists($target_file)) {
						$uploadOk = 0;
					}
					
					$maxsize	= (2000000/1024);
					#echo $maxsize;
					// Check file size
					if ($_FILES["mainpicture"]["size"] > 2000000 ) {
						#echo "Sorry, your file is too large.";
						$uploadOk = 0;
					}
					
					// Allow certain file formats
					if( $fileExt!="jpg" && $fileExt!="png" && $fileExt!="jpeg" && $fileExt!="gif")
					{
						#echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br/>";
						$uploadOk = 0;
					}
					
					// Check if $uploadOk is set to 0 by an error
					if ($uploadOk == 0)
					{
						echo "Sorry, your file was not uploaded..<br/>";
						exit();
						// if everything is ok, try to upload file
					}else{
						if (move_uploaded_file($_FILES["mainpicture"]["tmp_name"], $filename))
						{
							$uploadOk = 1;
							#echo "The file ". $filename . " has been uploaded..<br/>";
						}else{
							$uploadOk = 0;
							#echo "Sorry, there was an error uploading your file.<br/>";
						}
					}

					if($uploadOk==0){
						echo "Sorry, your file was not uploaded..<br/>";
						exit();
					}else{	
				
					$title = addslashes($_POST["title"]);
					$price   = addslashes($_POST["price"]);
					$description   = addslashes($_POST["description"]);
					$location   = addslashes($_POST["location"]);
					//$main_picture   = addslashes($_POST["main_picture"]);
					$id_category   = addslashes($_POST["id_category"]);	
					$contact_byphone   = addslashes($_POST["contact_byphone"]);
					$message_center   = addslashes($_POST["message_center"]);
					$ad_type   = addslashes($_POST["ad_type"]);
					
					adAdverts($title, $price, $description, $location, $filename, $id_category, $contact_byphone, $message_center, $ad_type);
					}
					break;
			}
		}
			else {
				header("location:index.php");
			}
	
	
			function signUp($firstname, $lastname, $email, $password, $county, $date ) {
					global $link;
					$query = "INSERT INTO users 
						(firstname, lastname, email, password, id_county, date_registered) 
						VALUES
						('".$firstname."', '".$lastname."', '".$email."', '".$password."', '".$county."', '".$date."');";

					mysqli_query($link, $query);
					echo $query;	
					header("location: confirmation.php");
					#print_r($query);
			}
	
	
		/*	function pUpload($profile_pic) {
				global $link;
				$query = "UPDATE users set
						profile_pic = '".$profile_pic."'
						where id_user = '".$_SESSION["id_user"]."';"; 
						

		mysqli_query($link, $query);
		
			} */
	

		function adAdverts($title, $price, $description, $location, $filename, $id_category, $contact_byphone, $message_center, $ad_type) {
			
			global $link;
			$query = "INSERT INTO adverts 
						(title, price, description, location, main_picture, id_category, id_user, contact_byphone,
						message_center, ad_type, date_posted) 
						VALUES
						('".$title."', '".$price."', '".$description."', '".$location."', '".$filename."', '".$id_category."', '".$_SESSION["id_user"]."', '".$contact_byphone."', '".$message_center."', '".$ad_type."',now());";
						
			mysqli_query($link, $query);
			
			#echo($query);
			header("location:index.php");
		}
	
	
	
	
	
		function loginUser($email,$password)
		{
		global $link;
		$query = "select u.*, c.county 
						from users u  
						left JOIN counties c ON (u.id_county = c.id_county) 
							WHERE u.email = '$email' 
							AND u.password = '$password';";
		
		$result = mysqli_query($link, $query);
		$row 	= mysqli_fetch_array($result);
		
		if( $row ){
			#echo "check!";
			$_SESSION["email"] 				= $row["email"];
			$_SESSION["firstname"]		= $row["firstname"];
			$_SESSION["lastname"]		= $row["lastname"];
			$_SESSION["phone"]				= $row["phone"];
			$_SESSION["county"]		= $row["county"];
			$_SESSION["id_county"]		= $row["id_county"];
			$_SESSION["id_user"]		= $row["id_user"];
			$_SESSION["profile_pic"]		= $row["profile_pic"];
			
			
			
		$query2 = "UPDATE users SET last_login = now() WHERE id_user = '".$_SESSION["id_user"]."';";
		mysqli_query($link, $query2);
			
			
			header("location: index.php");
			
		}else{
			header("location: signup.php");
		}	
	}
	
	
	
	function updateUser($firstname, $lastname, $email, $phone, $password, $id_county, $profile_pic)
	{
		global $link;
		
		if($firstname==""){
			$firstname = $_SESSION["firstname"];
		}
		
		if($lastname==""){
			$lastname = $_SESSION["lastname"];
		}
		
		if($email==""){
			$email = $_SESSION["email"];
		}
		
		if($phone==""){
			$phone = $_SESSION["phone"];
		}
		
		if($password!=""){ 
			$sqlpassword = "password = '$password',";
		}else{
			$sqlpassword = "";			
		}
		
		if($id_county==""){
			$id_county = $_SESSION["id_county"];
		}
		
		if($profile_pic==""){
			$profile_pic = $_SESSION["profile_pic"];
		}
		
		$query = "UPDATE users SET 
						firstname = '$firstname',
						lastname = '$lastname',
						email 		= '$email', 
						".$sqlpassword." 
						phone 		= '$phone',
						id_county = '$id_county',
						profile_pic = '$profile_pic'
						WHERE id_user = '".$_SESSION["id_user"]."';";
					//echo $query ;
					//exit();						
			mysqli_query($link, $query);
		
			$_SESSION["email"] 		= $email;
			$_SESSION["firstname"]	= $firstname;
			$_SESSION["lastname"]	= $lastname;
			$_SESSION["phone"]		= $phone;
			$_SESSION["id_county"]  = $id_county;
			$_SESSION["county"]  = getCountyName($id_county);
			$_SESSION["profile_pic"] = $profile_pic;
			
			header("location: profile.php");
	}
	
	
	
				
       ?>
		
