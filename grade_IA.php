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
<title>View My Grades</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class = "container">
<div class = "header">
<a href = "#" class = "tooltip" title= "UT Dallas Degree Planner" ><img src = "images/utd-logo.png" alt = "UT Dallas Degree Planner"></a>

</div>
<div class = "navigation">
   <nav>
    <ul>
	     <!--<li><a href = "http://localhost/www21/index.php" class = "tooltip" title= "Home" >Home</a></li>-->
	      <!--<li><a href = "http://localhost/www21/degree-plan.php" class= "tooltip" title= "Degree Plan"> Degree Plan</a></li>-->
		  <li><a href = "http://localhost/www21/IA.php" class= "tooltip" title= "Go Back">Go Back!</a></li>
		  <!-- <li><a href = "http://localhost/www21/courses.php" class= "tooltip" title= "Courses" >Courses</a></li>-->
	</ul>
   
   </nav>
</div>
<div id = "viewmygrades">View Grades Of <u>"<?=$_SESSION['sess_user'];?>!"</u></div>
<table id = "grade_table" cellspacing="1" cellpadding="1" >
<tr>
 <th>ClassId</th>
 <th>ClassName</th>
 <th>Grade</th>
 <th>GradeLetter</th>
</tr>

<?php 
			 require 'db.php';
			 $con=mysqli_connect('localhost','root','') or die(mysqli_error());
			 mysqli_select_db($con,'amol_db') or die("cannot select DB");
			

 //$sql = "select * from class c JOIN user u JOIN grade g where c.classid = g.classid And u.userid = g.userid AND u.username= '".$_SESSION['sess_user']."' ";
  $sql = "select c.classid, c.classname, c.grade, g.gradeletter from class c JOIN grade g JOIN user u where g.classid= c.classid And u.userid = g.userid AND g.classid IN ('6324','6363', '6359') AND u.username= '".$_SESSION['sess_user']."'";			
						if ($result=mysqli_query($con,$sql))
						  { 
						      
								 while ($array=mysqli_fetch_assoc($result))
												{   
												//echo"<br/><br/>";	
												echo "<tr>";
												//echo "<td>".$array['classid']."</td>";
												echo "   ";
												//echo "<td>".$array['classname']."</td>";
												echo "   ";
												//echo "<td>".$array['grade']."</td>";
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
<div id = "grade_analysis">
<center><strong>Grade(GPA) Analysis Of Information Assurance Track</strong></center><br/><br/>
<center><strong><div id = "credit"><?php //include "credithrs_IA.php"; ?></div></strong></center><br/><br/>
<center><strong><div id = "prereq"><?php //include("classes-req_IA.php") ?></div></strong></center><br/>
<center><strong><div id = "transwaved"><?php //include("transwaved_IA.php") ?></div></strong></center><br/>
<center><strong>Core & Overall GPA Of <?=$_SESSION['sess_user'];?> are:- <div id = "result"><?php //include "coregpa_IA.php"; ?></div></strong></center>
</div>
<!-- <center><strong>Overall GPA Of <?=$_SESSION['sess_user'];?> is:- <div id = "result1"><?php //include "gpa.php"; ?></div></strong></center>-->

 <div class = "footer"> 
   <footer><!-- <a href="http://localhost/www21/index.php">Home</a><a href="http://localhost/www21/degree-plan.php">Degree Plan</a> |-->	 <a href="http://localhost/www21/IA.php">Go Back</a> <!--| <a href="http://localhost/www21/courses.php">Courses</a>--> <br/><br/>
  Copyright &copy; <?php echo date("Y"); ?> UT Dallas Degree Planner</footer>
   </div>
</div>
</body>
</html> 
<?php
}
?>