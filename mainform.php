<!-- Code developed by Author:- Amol Vaze (asv130130@utdallas.edu), Assignment -3 & 4, Due Date:- Aug 3, 2015, Time Noon -->
<html>
<head>
<title>UT Dallas Degree Planner</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<script type="text/javascript" src="validation.js"></script>
<div class = "container">
<div class = "header">
<a href = "#" class = "tooltip" title= "UT Dallas Degree Planner" ><img src = "images/utd-logo.png" alt = "UT Dallas Degree Planner"></a>

</div>
 <div class = "navigation">
   <nav>
   <!-- <ul>
	     <li><a href = "#" class = "tooltip" title= "Home" >Home</a></li>
	      <li><a href = "http://localhost/www21/degree-plan.php" class= "tooltip" title= "Degree Plan"> Degree Plan</a></li>
		  <li><a href = "http://localhost/www21/degree-req.php" class= "tooltip" title= "Degree Requirements">Degree Requirements</a></li>
		  <li><a href = "http://localhost/www21/courses.php" class= "tooltip" title= "Courses" >Courses</a></li>
	</ul> -->
   
   </nav> 
</div><br/><br/>
<div class = "main">

  <div class = "login"><br/>
    <div id = "text">Course Planner Registration Form</div>
		<form  name = "Login_Form1" id = "Login_Form" onsubmit="return validateForm1() && checkCheckBoxes();"  method="post" action = "">
			<strong>Username*: </strong><input type = "text" name = "Username" id = "Username" placeholder="Username" ><br/><br/>
			<strong>Password*: </strong><input type = "password" name = "Password" id = "Password" placeholder="Password"><br/><br/>
   <!-- Select Your Track:-<br/><br/>
				<input type="radio" name="radio" value="Data Science" >Data Science Track<br/>
				<input type="radio" name="radio" value="Information Assurance">Information Assurance Track<br/>
				<input type="radio" name="radio" value="Intelligent Systems" >Intelligent Systems Track<br/>
				<input type="radio" name="radio" value="Networks & Telecommunication" >Networks & Telecommunication Track<br/>
				<input type="radio" name="radio" value="Systems" >Systems Track<br/>
				<input type="radio" name="radio" value="Traditional" >Traditional Track<br/>
				<input id = "submit" type = "submit" name = "submit" value = "Login"  ></a>-->
				Select Your Track:-<br/><br/>
				<input type="checkbox" name="checkbox1" value="Data Science" > Data Science Track<br/>
				<input type="checkbox" name="checkbox2" value="Information Assurance"> Information Assurance Track<br/>
				<input type="checkbox" name="checkbox3" value="Intelligent Systems" > Intelligent Systems Track<br/>
				<input type="checkbox" name="checkbox4" value="Networks & Telecommunication" > Networks & Telecommunication Track<br/>
				<input type="checkbox" name="checkbox5" value="Systems" > Systems Track<br/>
				<input type="checkbox" name="checkbox6" value="Traditional" > Traditional Track<br/>
				<input id = "submit" type = "submit" name = "submit" value = "Login"  ><br/>
			
	 </form>
	 
	 <?php
						 require 'db.php';
					if(isset($_POST["submit"])){

					if(!empty($_POST['Username']) && !empty($_POST['Password'])) {
						$Username=$_POST['Username'];
						$Password=$_POST['Password'];

						$con=mysqli_connect('localhost','root','') or die(mysqli_error());
						mysqli_select_db($con,'amol_db') or die("cannot select DB");

						$query=mysqli_query($con, "SELECT * FROM user WHERE Username='".$Username."'" );
						$numrows=mysqli_num_rows($query);
						if($numrows!=0)
						{
						while($row=mysqli_fetch_assoc($query))
						{
						$dbusername=$row['Username'];
						$dbpassword=$row['Password'];
						}

						if($Username == $dbusername && $Password == $dbpassword)
						{
						session_start();
						$_SESSION['sess_user']=$Username;

			          
						/* Redirect browser */
						header("Location: login.php");
						//header("Location: mainform.php");
						}
						} else {
						//echo "Invalid Username or password!";
						echo "<script type='text/javascript'>alert('Invalid Username or password!')</script>";
						}

					} else {
						//echo "All fields are required!";
						echo "<script type='text/javascript'>alert('All fields are required!')</script>";

					}
					}
	?>
	
	 </div><br/><br/>
</div><br/><br/>
    <div class = "footer"> 
   <footer><!-- <a href="#">Home</a> | <a href="http://localhost/www21/degree-plan.php">Degree Plan</a> | <a href="http://localhost/www21/degree-req.php">Degree Requirements</a>| <a href="http://localhost/www21/courses.php">Courses</a><br/><br/>-->
  Copyright &copy; <?php echo date("Y"); ?> UT Dallas Degree Planner </footer>
   </div>

</div>


</body>
</html>
