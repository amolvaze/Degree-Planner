<!-- Code developed by Author:- Amol Vaze (asv130130@utdallas.edu), Assignment -3 & 4, Due Date:- Aug 3, 2015, Time Noon -->
<?php 
			 require 'db.php';
			 $con=mysqli_connect('localhost','root','') or die(mysqli_error());
			 mysqli_select_db($con,'amol_db') or die("cannot select DB");
			
                		
 //$sql = "select p.classname, p.classid, p.classhours from user u JOIN prereq p where u.userid = p.userid AND u.username= '".$_SESSION['sess_user']."'"; 	
	
$sql = "select p.classname, p.classid, p.classhours from user u JOIN prereq p JOIN degreeplan d where u.userid = p.userid AND p.degid=d.degid AND p.degid= 6 "; 	
	
      	
		if ($result=mysqli_query($con,$sql))
			
					{
					
					if(empty(mysqli_num_rows($result)))
					{
					 echo "You don't have pre/co-req for this Track." ;
					}
					else {
			 echo "<center><strong>Your Prereq are as follows:- </strong></center>";
			 echo "<br/><br/>";
   
			  while ($array=mysqli_fetch_array($result))
						{
						
			
			printf("%s, %99s, %99s",$array["classname"], $array["classid"], $array["classhours"]);
								   echo "<br/>";
				}
							        
						}									
										// Free result set
										  mysqli_free_result($result);
					               
					    
					
					}
					
				
					 
                 					
                      
           
?>