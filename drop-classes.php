<!-- Code developed by Author:- Amol Vaze (asv130130@utdallas.edu), Assignment -3 & 4, Due Date:- Aug 3, 2015, Time Noon -->
<?php
								require 'db.php';
								
					if(isset($_POST["drop_Form_Button"])){

					if(!empty($_POST['classhours']) && !empty($_POST['classid']) &&  !empty($_POST['classname']) && !empty($_POST['classprefix']) && !empty($_POST['degId']) && !empty($_POST['mygrade'])   ) {
					$classid=$_POST['classid'];
					$classname=$_POST['classname'];
					$classprefix=$_POST['classprefix'];
					$classhours=$_POST['classhours'];
					$degId=$_POST['degId'];
					$grade=$_POST['mygrade'];
					$con=mysqli_connect('localhost','root','') or die(mysqli_error());
					mysqli_select_db($con,'amol_db') or die("cannot select DB");

					
					
 $sql =  "DELETE FROM class WHERE classid='".$classid."' AND classname='".$classname."' AND classprfx='".$classprefix."' AND classhours='".$classhours."' AND degId='".$degId."' AND grade='".$grade."' ";
	$sql2 =  "DELETE FROM grade WHERE classid='".$classid."' AND grade='".$grade."' ";
				

					$result=mysqli_query($con, $sql);
					$result2=mysqli_query($con, $sql2);

					if($result){
					
				
					echo "<script type='text/javascript'>alert('Your Class have been successfully deleted')</script>";
					} else {
				
					echo "<script type='text/javascript'>alert('Failure! Please try again later')</script>";

					}
					
					if($result2){
					
				
					//echo "<script type='text/javascript'>alert('Your Class have been successfully deleted')</script>";
					} else {
				
					echo "<script type='text/javascript'>alert('Failure! Please try again later')</script>";

					}
					
					

					

					} else {
				

					echo "<script type='text/javascript'>alert('All fields are required!')</script>";

					}
					}			
										?>