<!-- Code developed by Author:- Amol Vaze (asv130130@utdallas.edu), Assignment -3 & 4, Due Date:- Aug 3, 2015, Time Noon -->
<!doctype html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<script type="text/javascript" src="validation.js"></script>
<div class = "container_reg">
<div class = "header">
<a href = "#" class = "tooltip" title= "UT Dallas Degree Planner" ><img src = "images/utd-logo.png" alt = "UT Dallas Degree Planner"></a>

</div>
<div class = "navigation">
<nav></nav> 
</div><br/><br/>
<div class = "main">
<h3 id = "text1"><a href="#">Register</a> | <a href="index.php">Sign In</a></h3><br/><br/>
<h3 id = "text">Registration Form</h3>
<form action="#" method="POST" id= "Registration_Form" name= "Registration_Form" onsubmit="return chkRegForm() && passcheck();">
<strong>Name:</strong><input type="text" name="name" id = "regname" placeholder = "Name"><br /><br />
<strong>Username:</strong><input type="text" name="user" id= "regusername" placeholder= "Username"><br /><br />
<strong>Password:</strong><input type="password" name="pass" id = "regpassword" placeholder= "Password"><br /><br />
<strong>Confirm:</strong><input type="password" name="confirm_pass" id = "confirm_pass" placeholder= "Confirm Password"><br /><br />
<strong>DegId: </strong><input type="text" name="degId" id= "regdegId" placeholder= "DegId" ><br /><br />	
<input type="submit" value="Register" id = "Register_Button" name="submit" />
</form>
</div>

<div class = "footer"> 
   <footer><!-- <a href="#">Home</a> | <a href="http://localhost/www21/degree-plan.php">Degree Plan</a> | <a href="http://localhost/www21/degree-req.php">Degree Requirements</a>| <a href="http://localhost/www21/courses.php">Courses</a><br/><br/>-->
  Copyright &copy; <?php echo date("Y"); ?> UT Dallas Degree Planner </footer>
   </div>

<?php
require 'db.php';
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass']) && !empty($_POST['name']) && !empty($_POST['degId'])) {
$user=$_POST['user'];
$pass=$_POST['pass'];
$name=$_POST['name'];
$degId=$_POST['degId'];
$pass= md5($pass);
$con=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($con,'amol_db') or die("cannot select DB");

//$query=mysqli_query($con, "SELECT * FROM user WHERE username='".$user."'" );
 $query=mysqli_query($con, "SELECT * FROM user WHERE username='".$user."' OR name='".$name."'" );
$numrows=mysqli_num_rows($query);
if($numrows >=1){
//echo "This user already exists! Please try again with another.";
echo "<script type='text/javascript'>alert('This user already exists! Please try again with another.')</script>";
}
else
{
$sql="INSERT INTO user(userid, name,username,password,degId) VALUES('','$name','$user','$pass','$degId')";

$result=mysqli_query($con, $sql);

if($result){
// echo "Account Successfully Created";
echo "<script type='text/javascript'>alert('Account Successfully Created')</script>";
} else {
//echo "Failure!";
echo "<script type='text/javascript'>alert('Failure!')</script>";

}

} 

} else {
// echo "All fields are required!";

echo "<script type='text/javascript'>alert('All fields are required!')</script>";

}
}
?>

</body>
</html>