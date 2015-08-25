<!-- Code developed by Author:- Amol Vaze (asv130130@utdallas.edu), Assignment -3 & 4, Due Date:- Aug 3, 2015, Time Noon -->
<?php
									require 'db.php';
									
						if( isset($_POST["core_button"] )  ){
                       
						if( !empty($_POST['coretxt'] ) ) {
						$classid=$_POST['coretxt'];
						
						$con=mysqli_connect('localhost','root','') or die(mysqli_error());
						mysqli_select_db($con,'amol_db') or die("cannot select DB");

						
						
						$query=mysqli_query($con, "SELECT * FROM class WHERE classid='".$classid."'" );
						$numrows=mysqli_num_rows($query);
						if($numrows >=1){
						
						echo "<script type='text/javascript'>alert('This core ClassId already exists! Please try different one')</script>";
						}
						else
						{
					//$trackname= "Data Science";	
            //switch($trackname)
            
	     //case "Data Science"
     $sql="select count(classid) AS core from class where classid IN ('6320', '6364', '6363', '6360', '6375')";
					
                     
						$result=mysqli_query($con, $sql);
						
						if ($result=mysqli_query($con,$sql))
						  {
						  while ($array=mysqli_fetch_array($result))
							{
							//printf("%s\n", $array['core']);
							 if($array['core']==5){
							
							print("You have completed Intelligent Systems core courses! ");
							 }
							 else {
							 print("Yet to finish core courses.");
							 echo "<br/>";
							 print("You must take at least 2 core courses per long semester.");
							 }
							  
							
							}
							
				
						  // Free result set
						  mysqli_free_result($result);
						}		
						
						

						} 

						} else {
						// echo "All fields are required!";

						echo "<script type='text/javascript'>alert('It should be filled!')</script>";

						}
						}		
            



			
											?>