<!-- Code developed by Author:- Amol Vaze (asv130130@utdallas.edu), Assignment -3 & 4, Due Date:- Aug 3, 2015, Time Noon -->
<!doctype html>
<html>
<head>
<title>User Management</title>
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
	      <li><a href = "http://localhost/www21/admin_profile.php" class= "tooltip" title= "Go Back"> Go Back! </a></li>
		  <!--<li><a href = "http://localhost/www21/degree-req.php" class= "tooltip" title= "Degree Requirements">Degree Requirements</a></li>
		  <li><a href = "http://localhost/www21/courses.php" class= "tooltip" title= "Courses" >Courses</a></li>-->
	</ul>
   
   </nav>
</div><br/><br/>
 <div class = "main">

  <div class = "login"><br/>
  
    <div id = "usermgmt_page">User Management Page</div>
	<form  name = "admin_Form" id = "admin_Form"  >
	
	<ul id = "usermgmtlist" >
		 <li><a href= "forgotpwd.php"><input type = "button" name= "forgotpwd" id = "forgotpwd" value = "Reset Password"></a></li><br/><hr id = "hr"><br/>
		  <li><a href = "lockmgmt.php"><input type = "button" name= "loginlock" id = "loginlock" value = "Login Lock/Unlock" ></a></li><br/><hr id = "hr" ><br/>
		   <li><a href = "manageuser.php"><input type = "button" name= "mgmuser" id = "mgmuser" value = "Manage Users" ></a></li><br/><br/>
		 </ul>
		</form>
       
	
	</div><br/><br/>
 </div><br/><br/>

   
    <div class = "footer"> 
   <footer><!-- <a href="http://localhost/www21/index.php">Home</a> <a href="http://localhost/www21/admin_profile.php">Go Back</a> |	 <a href="http://localhost/www21/degree-req.php">Degree Requirements</a>| <a href="http://localhost/www21/courses.php">Courses</a><br/><br/>-->
  Copyright &copy; <?php echo date("Y"); ?> UT Dallas Degree Planner</footer>
   </div>

</div>
<!-- Current date. : <?php print (Date("l F d, Y")); ?>-->

</body>
</html>