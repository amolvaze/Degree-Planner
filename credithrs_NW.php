<!-- Code developed by Author:- Amol Vaze (asv130130@utdallas.edu), Assignment -3 & 4, Due Date:- Aug 3, 2015, Time Noon -->
<?php 
			 require 'db.php';
			 $con=mysqli_connect('localhost','root','') or die(mysqli_error());
			 mysqli_select_db($con,'amol_db') or die("cannot select DB");
	$sql = "select sum(c.classhours) As classhours from class c JOIN grade g JOIN user u where u.userid = g.userid AND c.classid=g.classid AND g.classid IN ('6396','6352', '6359', '6378', '6390')AND u.username= '".$_SESSION['sess_user']."'  " ;		
						if ($result=mysqli_query($con,$sql))
						  {
						  while ($array=mysqli_fetch_array($result))
							{
							
							echo" Completed credit hours: ";
							printf("%s\n", $array['classhours']);
							 echo "<br/><br/>";
							echo" Pending credit hours: ";
							printf("%s\n",33-($array['classhours']));
							  
							
							}
							
				
						  // Free result set
						  mysqli_free_result($result);
						}			
?>