<!-- Code developed by Author:- Amol Vaze (asv130130@utdallas.edu), Assignment -3 & 4, Due Date:- Aug 3, 2015, Time Noon -->
<?php 
			 require 'db.php';
			 $con=mysqli_connect('localhost','root','') or die(mysqli_error());
			 mysqli_select_db($con,'amol_db') or die("cannot select DB");
 //$sql = "select c.classname, c.classid, g.grade, c.classhours from class c JOIN grade g where c.classid=g.classid AND g.userid IN('1', '2', '3', '4', '5', '6' ) order by g.grade desc" ;		
  $sql = "select c.classname, c.classid, g.grade, c.classhours from class c JOIN grade g JOIN user u where u.userid = g.userid AND c.classid=g.classid AND u.username= '".$_SESSION['sess_user']."'" ;		
						if ($result=mysqli_query($con,$sql))
						  {
						  while ($array=mysqli_fetch_array($result))
							{
							 //printf("%s, %99s, %99s, %99s ",$array["classname"], $array["classid"], $array["grade"], $array["classhours"]);
							   echo "<br/>";
							}
						  // Free result set
						  mysqli_free_result($result);
						}			
?>