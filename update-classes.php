<!-- Code developed by Author:- Amol Vaze (asv130130@utdallas.edu), Assignment -3 & 4, Due Date:- Aug 3, 2015, Time Noon -->
<?php
								require 'db.php';
								
					if(isset($_POST["update_Form_Button"])){

					if(!empty($_POST['classhours']) && !empty($_POST['classid']) &&  !empty($_POST['classname']) && !empty($_POST['classprefix']) && !empty($_POST['degId']) && !empty($_POST['mygrade'])    ) {
					$classid=$_POST['classid'];
					$classname=$_POST['classname'];
					$classprefix=$_POST['classprefix'];
					$classhours=$_POST['classhours'];
					$degId=$_POST['degId'];
					$grade=$_POST['mygrade'];
					$con=mysqli_connect('localhost','root','') or die(mysqli_error());
					mysqli_select_db($con,'amol_db') or die("cannot select DB");

					 $sql =  " UPDATE class SET grade='".$grade."' WHERE classid= '$classid' ";
					 $sql2 =  " UPDATE grade SET grade='".$grade."' WHERE classid= '$classid' ";

					$result=mysqli_query($con, $sql);
					$result2=mysqli_query($con, $sql2);

					if($result){
					
				
					echo "<script type='text/javascript'>alert('Your Class have been successfully updated')</script>";
					} else {
				
					echo "<script type='text/javascript'>alert('Failure! Please try again later')</script>";

					}
					
					if($result2){
					
				
					//echo "<script type='text/javascript'>alert('Your Class have been successfully updated')</script>";
					} else {
				
					echo "<script type='text/javascript'>alert('Failure! Please try again later')</script>";

					}

					

					} else {
				

					echo "<script type='text/javascript'>alert('All fields are required!')</script>";

					}
					}			
										?>