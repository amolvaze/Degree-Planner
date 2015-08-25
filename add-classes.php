<!-- Code developed by Author:- Amol Vaze (asv130130@utdallas.edu), Assignment -3 & 4, Due Date:- Aug 3, 2015, Time Noon -->
<html>
<head>
<title>UT Dallas Degree Planner</title>
<link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
<script type="text/javascript" src="validation.js"></script>
<div class = "container">
<div class = "header">
<a href = "#" class = "tooltip" title= "UT Dallas Degree Planner" ><img src = "images/utd-logo.png" alt = "UT Dallas Degree Planner"></a>

</div>
 <div class = "navigation">
   <nav>
   <!-- <ul>
	     <li><a href = "#" class = "tooltip" title= "Home" >Home</a></li>
	      <li><a href = "http://localhost/www21/degree-plan.php" class= "tooltip" title= "Degree Plan"> Degree Plan</a></li>
		  <li><a href = "http://localhost/www21/degree-req.php" class= "tooltip" title= "Degree Requirements">Degree Requirements</a></li>
		  <li><a href = "http://localhost/www21/courses.php" class= "tooltip" title= "Courses" >Courses</a></li>
	</ul> -->
   
   </nav> 
</div><br/><br/>
<div class = "main">

  <div class = "login"><br/>
  <div id = "addclasses">Manage Your Classes(CRUD)</div><br/><br/>
  <h3 id = "text1"><a href="login.php">Go Back!</a></h3><br/>
	           
			   <form  name = "add_Form" id = "add_Form" onsubmit="return validateForm();"  method="post" action = "">
			<strong>ClassId*: </strong><input type = "text" name = "classid" id = "classid1" placeholder="ClassId"><br/><br/>
			<strong>Classname*: </strong><input type = "text" name = "classname" id = "classname" placeholder="Classname"><br/><br/>
			<strong>ClassPrefix*: </strong><input type = "text" name = "classprefix" id = "classprefix" placeholder="Classprefix"><br/><br/>
			<strong>ClassHours*: </strong><input type = "text" name = "classhours" id = "classhours" placeholder="Classhours" ><br/><br/>
			<strong>DegId*: </strong><input type = "text" name = "degId" id = "degId" placeholder="DegreeId"><br/><br/>
			<strong>Grade*: </strong><input type = "text" name = "mygrade" id = "mygrade" placeholder="Grade"><br/><br/>
			
			<!--<strong>Enter Class-id Again For Core Requirement: </strong><br/><br/><center><input type = "text" id = "coretxt" name= "coretxt" placeholder= "Class Id" ><br/><br/>
	       <input type = "submit" id= "core" name= "core_button" value= "Check Core"></center><br/><div id= "checkcore" ><?php  //include "checkcore.php"; ?></div><br/>
   				<hr/><br/>-->
			
			<input id = "add_Form_Button" type = "submit" name = "add_Form_Button" value = "Add/Register"  ><br/><br/>
			<hr/><br/>
			<input id = "add_Form_Button" type = "submit" name = "drop_Form_Button" value = "Drop Class" ><div id = "drop"><?php include "drop-classes.php"; ?></div><br/><br/>
			<hr/><br/>
			<input id = "add_Form_Button" type = "submit" name = "update_Form_Button" value = "Update Class"  ><div id = "update"><?php include "update-classes.php"; ?></div><br/><br/>
	 </form>
			   
			   
	
		 <?php
									require 'db.php';
									
						if(isset($_POST["add_Form_Button"])){
                       
						if(!empty($_POST['classhours']) && !empty($_POST['classid']) &&  !empty($_POST['classname']) && !empty($_POST['classprefix']) && !empty($_POST['degId']) && !empty($_POST['mygrade'])     ) {
						$classid=$_POST['classid'];
						$classname=$_POST['classname'];
						$classprefix=$_POST['classprefix'];
						$classhours=$_POST['classhours'];
						$degId=$_POST['degId'];
						$grade=$_POST['mygrade'];
						$con=mysqli_connect('localhost','root','') or die(mysqli_error());
						mysqli_select_db($con,'amol_db') or die("cannot select DB");

						
						// $query=mysqli_query($con, "SELECT * FROM class WHERE username='".$user."' OR classid='".$classid."'" );
						$query=mysqli_query($con, "SELECT * FROM class WHERE classid='".$classid."'" );
						$numrows=mysqli_num_rows($query);
						if($numrows >=1){
						//echo "This user already exists! Please try again with another.";
						echo "<script type='text/javascript'>alert('This ClassId already exists! Please try different one')</script>";
						}
						else
						{
									
						$sql="INSERT INTO class(classid, classname,classprfx,classhours,degId,grade) VALUES('$classid','$classname','$classprefix','$classhours','$degId','$grade')";
						//$sql="INSERT INTO class(classid) VALUES('$classid')";
                       $sql2 = "INSERT into Grade values('','$classid',1,1,'$grade','','' )";
						$result=mysqli_query($con, $sql);
						$result2=mysqli_query($con, $sql2);

						if($result){
						// echo "Your Class have been successfully added";
						echo "<script type='text/javascript'>alert('Your Class have been successfully added')</script>";
						} else {
						//echo "Failure!";
						echo "<script type='text/javascript'>alert('Failure! Please try again later')</script>";

						}
						
						if($result2){
						// echo "Your Class have been successfully added";
						//echo "<script type='text/javascript'>alert('Your Class have been successfully added')</script>";
						} else {
						//echo "Failure!";
						echo "<script type='text/javascript'>alert('Failure! Please try again later')</script>";

						}

						} 

						} else {
						// echo "All fields are required!";

						echo "<script type='text/javascript'>alert('All fields are required!')</script>";

						}
						}		
            



			
											?>
	 
</div><br/><br/>
</div><br/><br/>
    <div class = "footer"> 
   <footer><!-- <a href="#">Home</a> | <a href="http://localhost/www21/degree-plan.php">Degree Plan</a> | <a href="http://localhost/www21/degree-req.php">Degree Requirements</a>| <a href="http://localhost/www21/courses.php">Courses</a><br/><br/>-->
  Copyright &copy; <?php echo date("Y"); ?> UT Dallas Degree Planner </footer>
   </div>

</div>


</body>
</html> 
