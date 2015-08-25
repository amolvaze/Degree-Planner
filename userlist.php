<!-- Code developed by Author:- Amol Vaze (asv130130@utdallas.edu), Assignment -3 & 4, Due Date:- Aug 3, 2015, Time Noon -->
<!doctype html>
<html>
<head>
<title>User List</title>
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
  
    <div id = "user_list">User List Page</div>
					 <div id = "list_layout">
	      <table id = "grade_table" cellspacing="1" cellpadding="1" >
<tr>
 <th>UserId</th>
 <th>UserName</th>
 <th>Graduation Status</th>
 
</tr>

<?php 
			 require 'db.php';
			 $con=mysqli_connect('localhost','root','') or die(mysqli_error());
			 mysqli_select_db($con,'amol_db') or die("cannot select DB");
			

 //$sql = "select * from class c JOIN user u JOIN grade g where c.classid = g.classid And u.userid = g.userid AND u.username= '".$_SESSION['sess_user']."' ";
  //$sql = "select c.classid, c.classname, c.grade, g.gradeletter from class c JOIN grade g JOIN user u where g.classid= c.classid And u.userid = g.userid AND g.classid IN ('6301', '6313', '6360', '6363', '6375', '6322', '6359', '6384') AND u.username= '".$_SESSION['sess_user']."' ";			
   $sql= "select userid, username, grad_status from graduation";	
	if ($result=mysqli_query($con,$sql))
						  { 
						      
								 while ($array=mysqli_fetch_assoc($result))
												{   
												//echo"<br/><br/>";	
												echo "<tr>";
												echo "<td>".$array['userid']."</td>";
												echo "   ";
												echo "<td>".$array['username']."</td>";
												echo "   ";
												echo "<td>".$array['grad_status']."</td>";
												echo "   ";
												//echo "<td>".$array['gradeletter']."</td>";
												 //printf("%s\n",$array["gradeletter"]);
												echo "</tr>"; 
													 
									}
											  // Free result set
											  mysqli_free_result($result);
					      }	
					
							
?>
</table>
					 
					 </div>
    
	</div><br/><br/>
 </div><br/><br/>

   
    <div class = "footer"> 
   <footer><!-- <a href="http://localhost/www21/index.php">Home</a><a href="http://localhost/www21/admin_profile.php">Go Back</a> |	 <a href="http://localhost/www21/degree-req.php">Degree Requirements</a>| <a href="http://localhost/www21/courses.php">Courses</a><br/><br/>-->
  Copyright &copy; <?php echo date("Y"); ?> UT Dallas Degree Planner</footer>
   </div>

</div>
<!-- Current date. : <?php print (Date("l F d, Y")); ?>-->

</body>
</html>