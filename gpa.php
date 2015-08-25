<!-- Code developed by Author:- Amol Vaze (asv130130@utdallas.edu), Assignment -3 & 4, Due Date:- Aug 3, 2015, Time Noon -->
<?php 
			 require 'db.php';
			 $con=mysqli_connect('localhost','root','') or die(mysqli_error());
			 mysqli_select_db($con,'amol_db') or die("cannot select DB");
			
     //$sql= "select * from user u JOIN grade g JOIN class c where g.classid= c.classid AND g.userid= u.userid AND u.username= '".$_SESSION['sess_user']."'  group by g.userid  " ;
 $sql = "select g.gradeletter from class c JOIN user u JOIN grade g where c.classid = g.classid And u.userid = g.userid AND u.username= '".$_SESSION['sess_user']."' ";      
						if ($result=mysqli_query($con,$sql))
						  { 
						        $numberGrade = 0.0;
								$totalGrade=0.0;
								$avggrade=0.0;
								
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
													 
											$totalGrade = ($totalGrade + $numberGrade);
                                       $avggrade = ($totalGrade)/mysqli_num_rows($result); 
										
													 
									}
										echo"<br/>";
										printf("%s\n", $avggrade);
										echo"<br/><br/>";
										if($avggrade >= 3.0){
										echo "You have satisfied overall GPA criteria! ";
										}
										else
										{
									echo "You have not satisfied overall GPA criteria. It should be above 3.0!";	
										}
										// Free result set
											  mysqli_free_result($result);
					      }	
					
				
						//mysqli_free_result($result);				
?>