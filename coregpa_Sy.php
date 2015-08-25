<!-- Code developed by Author:- Amol Vaze (asv130130@utdallas.edu), Assignment -3 & 4, Due Date:- Aug 3, 2015, Time Noon -->
<?php 
			 require 'db.php';
			 $con=mysqli_connect('localhost','root','') or die(mysqli_error());
			 mysqli_select_db($con,'amol_db') or die("cannot select DB");
			
     //$sql= "select * from user u JOIN grade g JOIN class c where g.classid= c.classid AND g.userid= u.userid AND u.username= '".$_SESSION['sess_user']."'  group by g.userid  " ;
 $sql = "select c.classname, g.gradeletter from class c JOIN user u JOIN grade g where c.classid = g.classid And u.userid = g.userid AND g.classid IN ('6363','6378','6384','6396','6304','6360') AND u.username= '".$_SESSION['sess_user']."' ";      
						if ($result=mysqli_query($con,$sql))
						  { 
						        $numberGrade = 0.0;
								$totalGrade1=0.0;
								$avggrade1=0.0;
								$totalGrade2=0.0;
								$avggrade2=0.0;
								
								 while ($array=mysqli_fetch_assoc($result))
									{   
											//print_r($array);						
										//printf("%s\n", $array['gradeletter']);
										  if($array['gradeletter'] == 'A'){
										      $numberGrade=4.0;
										       //printf("%s\n", $numberGrade);
										   }
										   elseif($array['gradeletter'] == 'A-')
										        {
														 $numberGrade=3.67;
												   //printf("%s\n", $numberGrade);
												}
											elseif($array['gradeletter'] == 'B+')
										        {
														 $numberGrade=3.33;
												   //printf("%s\n", $numberGrade);
												}
													elseif($array['gradeletter'] == 'B')
													{
															 $numberGrade=3.0;
													   //printf("%s\n", $numberGrade);
													}
														elseif($array['gradeletter'] == 'B-')
														{
																 $numberGrade=2.67;
														   //printf("%s\n", $numberGrade);
														}
														  elseif($array['gradeletter'] == 'C+')
										                    {
														          $numberGrade=2.33;
												                     //printf("%s\n", $numberGrade);
												               }
															    elseif($array['gradeletter'] == 'C')
										                        {
														          $numberGrade=2;
												                     //printf("%s\n", $numberGrade);
												                 } 
																 elseif($array['gradeletter'] == 'C-')
										                          {
														          $numberGrade=1.67;
												                     //printf("%s\n", $numberGrade);
												                  } 
																    elseif($array['gradeletter'] == 'D')
										                              {
														                   $numberGrade=1;
												                            //printf("%s\n", $numberGrade);
												                       }
													                 else {
																	 $numberGrade=0.0;
																	  //printf("%s\n", $numberGrade);
																	 }
													 
											
if($array['classname'] == 'Computer Architecure' ||  $array['classname'] == 'Design and Analysis of Computer Algorithms' || $array['classname']== 'Real Time Systems' || $array['classname']== 'Advanced Operating Systems' || $array['classname']== 'Database Design')
					{
						$totalGrade1 = ($totalGrade1 + $numberGrade);
                           $avggrade1 = ($totalGrade1)/5.0; 
					}
								$totalGrade2 = ($totalGrade2 + $numberGrade);
                                       $avggrade2 = ($totalGrade2)/mysqli_num_rows($result); 					 
									   
									}
										echo"<br/>";
										printf("%s\n, %s\n", round($avggrade1,2), round($avggrade2,2));
										echo"<br/><br/>";
										if($avggrade1 >= 3.19 && $avggrade2 >=3.0){
										echo "You have satisfied both Core & Overall GPA criteria! ";
										echo"<br/><br/>";
										//echo "Congrats! You became eligible for graduation";
										}
                                        elseif($avggrade1>=3.19 && $avggrade2 <=3.0){
										echo "You have satisfied Core & not Overall GPA criteria! ";
										echo"<br/><br/>";
										echo "Please take one elective course!";
										}elseif($avggrade1<=3.19 && $avggrade2 >=3.0){
										echo "You have satisfied Overall & not Core GPA criteria! ";
										echo"<br/><br/>";
										echo "Please take either one extra course or repeat one core course!";
										}
										else
										{
									echo "You have not satisfied Core & Overall GPA criteria.";	
									echo"<br/><br/>";
									echo "Oops! You are not eligible for graduation";
										}
										// Free result set
											  mysqli_free_result($result);
					      }	
					
				
						//mysqli_free_result($result);				
?>