<!-- Code developed by Author:- Amol Vaze (asv130130@utdallas.edu), Assignment -3 & 4, Due Date:- Aug 3, 2015, Time Noon -->	
	<html>
	<head>
	<title>Forgot Password</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	</head>

	<body>
	
	<div class = "container_reg">
<div class = "header">
<a href = "#" class = "tooltip" title= "UT Dallas Degree Planner" ><img src = "images/utd-logo.png" alt = "UT Dallas Degree Planner"></a>

</div>
<div class = "navigation">
<nav></nav> 
</div><br/><br/>
<div class = "main">
	<h3 id = "text">Reset Password Form</h3><br/><br/>
	<h3 id = "text1"><a href="usermgmt.php">Go Back!</a></h3><br/><br/>
	<form action="" method="post" id = "forgot_form">

	<label><center><strong><font id = "forgot_text">Please Enter Your Username</font></strong></center></label><br/><br/>

	<input id="Username" type="text" name="Username"  placeholder= "Username"/>

	<input id="submit1_button" type="submit" name="submit" value="Submit" />

	</form>
</div>

<div class = "footer"> 
   <footer><!-- <a href="#">Home</a> | <a href="http://localhost/www21/degree-plan.php">Degree Plan</a> | <a href="http://localhost/www21/degree-req.php">Degree Requirements</a>| <a href="http://localhost/www21/courses.php">Courses</a><br/><br/>-->
  Copyright &copy; <?php echo date("Y"); ?> UT Dallas Degree Planner </footer>
   </div>
<?php 
      require 'db.php';
			if(isset($_POST["submit"])){

					if(!empty($_POST['Username']) && !empty($_POST['submit'])) {
						$Username=$_POST['Username'];
						$submit=$_POST['submit'];

						$con=mysqli_connect('localhost','root','') or die(mysqli_error());
						mysqli_select_db($con,'amol_db') or die("cannot select DB");
                      
					  if($submit){
							 $query="select * from user where Username='$Username'";
							$result   = mysqli_query($con, $query);
							$count=mysqli_num_rows($result);
	
												 if($count!=0) {
												 // Generate new password for user
												 $random= rand(72891, 92729);
												 $new_Password= $random;
												 // Create copy of new password
												 $email_Password= $new_Password;
												 
												//Encrypt new password created	 
												 $new_Password= md5($new_Password);
												 
												/* $query = "Update user set Password= '".$new_Password."' where Username='$Username' ";
												 $result= $mysqli_query($con, $query ); */
											
										mysqli_query($con, "Update user set Password= '".$new_Password."' where Username='$Username' ");
												 
												 //Send password to the user
												 $subject = "New Login Credentials";
												 $message=  "Your Password has been changed to $email_Password";
												  $from= "From:admin@localhost.com";
												   
												 
														
												 
												 mail($Username, $subject, $message, $from);
												 //echo "Your new Password has been emailed to you";  
											echo "<script type='text/javascript'>alert('Your new Password has been emailed to you')</script>";

												}
	 
													 else {
													 //echo "Username does not exists!";
												echo "<script type='text/javascript'>alert('Username does not exists!')</script>";
													 }
	                      }
					  
					  
					  
						
					} else {
						//echo "All fields are required!";
						echo "<script type='text/javascript'>alert('Please enter your username!')</script>";

				}
			}
	
	
?>
	
					</body>

	</html>