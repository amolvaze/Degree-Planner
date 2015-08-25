<!-- Code developed by Author:- Amol Vaze (asv130130@utdallas.edu), Assignment -3 & 4, Due Date:- Aug 3, 2015, Time Noon -->
<?php
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:login.php");
} else {
?>
<!doctype html>
<html>
<head>
<title>Admin Profile</title>
<link rel="stylesheet" type="text/css" href="styles.css">


</head>
<body>
<script type="text/javascript" src="validation.js"></script>
<script type="text/javascript" src="ajax.js"></script>

<div class = "container">
<div class = "header">
<a href = "#" class = "tooltip" title= "UT Dallas Degree Planner" ><img src = "images/utd-logo.png" alt = "UT Dallas Degree Planner"></a>

</div>
<div class = "navigation">
   <nav>
    <ul>
	     <!--<li><a href = "http://localhost/www21/index.php" class = "tooltip" title= "Home" >Home</a></li>-->
	      <!--<li><a href = "http://localhost/www21/degree-plan.php" class= "tooltip" title= "Degree Plan"> Degree Plan</a></li>-->
		  <!--<li><a href = "http://localhost/www21/degree-req.php" class= "tooltip" title= "Degree Requirements">Degree Requirements</a></li>
		  <li><a href = "http://localhost/www21/courses.php" class= "tooltip" title= "Courses" >Courses</a></li>-->
	</ul>
   
   </nav>
</div><br/><br/>
 <div class = "main">

  <div class = "login"><br/>
    <div id = "admin_profile">Admin Profile Page</div>
	<form  name = "admin_Form" id = "admin_Form"  >
	<strong><font size = "4px">Thank You for singing up. You can continue now!</font></strong><br/><br/>
	<strong>Welcome, <?=$_SESSION['sess_user'];?> !</strong> <a href="logout.php" id = "admin_logout">Logout</a>
	 
		 <ul id = "adminlist" >
		 <li><a href= "usermgmt.php"><input type = "button" name= "usermgmt" id = "usermgmt" value = "User Management"></a></li><br/><hr id = "hr"><br/>
		  <li><a href= "usabilitytest.php"><input type = "button" name= "usabilitymgmt" id = "usabilitymgmt" value = "Usability Test Management" ></a></li><br/><hr id = "hr" ><br/>
		   <li><a href= "userlist.php"><input type = "button" name= "userlist" id = "userlist" value = "User List" ></a></li><br/><br/>
		 </ul>
		</form>
       
	
	</div><br/><br/>
 </div><br/><br/>

   
    <div class = "footer"> 
   <footer><!-- <a href="http://localhost/www21/index.php">Home</a><a href="http://localhost/www21/degree-plan.php">Degree Plan</a> |	 <a href="http://localhost/www21/degree-req.php">Degree Requirements</a>| <a href="http://localhost/www21/courses.php">Courses</a><br/><br/>-->
  Copyright &copy; <?php echo date("Y"); ?> UT Dallas Degree Planner</footer>
   </div>

</div>
<!-- Current date. : <?php print (Date("l F d, Y")); ?>-->

</body>
</html> 
<?php
}
?>