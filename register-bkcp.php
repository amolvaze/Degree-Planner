		<?php 
		require 'db.php';
		//if(!loggedin())
		if(isset($_POST["submit"]))
		{
if ( isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirm_password']) && isset($_POST['firstname']) && isset($_POST['lastname']))
							 {
								   $username= $_POST['username'];
								   $password= $_POST['password'];
								   $confirm_password= $_POST['confirm_password'];
								   $firstname= $_POST['firstname'];
								   $lastname= $_POST['lastname'];
		   
			if(!empty($username) && !empty($password)&& !empty($confirm_password) && !empty($firstname) && !empty($lastname)){
			if($password!=$confirm_password){
			echo'Password do not match';
			} else {
			
			$query= "SELECT username from users WHERE username= '$username'";
			$qyeryrun= mysql_query($query);
													if(mysql_num_rows($qyeryrun) >=1 ){
													echo 'The username ' .$username .' already exists. ' ;
													}
																			else {
																		$query= "INSERT INTO users VALUES ('','".mysql_real_escape_string($Username)."','$Password','','')";
																		if($query_run == mysql_query($query)) {
																		header('Location: success.php');
																		}
																		else {
																		echo 'Failed to register! Try again.' ;
																		}
																			}
			 
			}
			
		   }
											else {
											echo'All fields are needed.';
										   }
		  }
		  

		

		?>

		<form action= "register.php" method = "post">
		Username: <input type = "text" name = "username" value = "<?php $username; ?>" ><br/><br/>
		Password: <input type = "password" name = "password" ><br/><br/>
		Confirm Password: <input type = "confirm_password" name = "confirm_password" ><br/><br/>
		Firstname: <input type = "text" name = "firstname" value = "<?php $firstname; ?>" ><br/><br/>
		Lastname: <input type = "text" name = "lastname" value = "<?php $lastname; ?>"><br/><br/>
		<input type = "Submit" value= "Register">
		<?php 
		} else if (loggedin())
		   {
		   echo 'You\' re already registered user.';
		   }
		?>