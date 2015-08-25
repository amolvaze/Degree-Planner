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
<title>UT Dallas Degree Planner</title>
<link rel="stylesheet" type="text/css" href="styles.css">


</head>
<body>
<script type="text/javascript" src="validation.js"></script>
<script type="text/javascript" src="ajax.js"></script>

<div class = "container">
<div class = "header">
<a href = "#" class = "tooltip" title= "UT Dallas Degree Planner" ><img src = "images/utd-logo.png" alt = "UT Dallas Degree Planner"></a>

</div>
<div class = "navigation">
   <nav>
    <ul>
	     <!--<li><a href = "http://localhost/www21/index.php" class = "tooltip" title= "Home" >Home</a></li>-->
	      <!--<li><a href = "http://localhost/www21/degree-plan.php" class= "tooltip" title= "Degree Plan"> Degree Plan</a></li>-->
		  <li><a href = "http://localhost/www21/degree-req.php" class= "tooltip" title= "Degree Requirements">Degree Requirements</a></li>
		  <li><a href = "http://localhost/www21/courses.php" class= "tooltip" title= "Courses" >Courses</a></li>
		  <li><a href = "http://localhost/www21/USE.php" class= "tooltip" title= "USE" >USE Form</a></li>
	</ul>
   
   </nav>
</div><br/><br/>
<div class = "main">

  <div class = "login"><br/>
    <div id = "profile">Profile Page</div>
		<form  name = "Planner_Form" id = "Planner_Form"  onsubmit="return validateForm2();"  method="post" action = "add-classes.php">
					<ol id = "list">
                    <strong><font size = "4px">Thank You for registering & choosing your track. You can continue with your profile now!</font></strong><br/><br/>
					Welcome, <?=$_SESSION['sess_user'];?> ! <a href="logout.php" id = "logout">Logout</a>
							<br/><br/>
				 <?php 
				           $cookie_name = "user";
                           $cookie_value = $_SESSION['sess_user'];
				    // setting cookie for each user
				 setcookie($cookie_name, $cookie_value, strtotime( '+30 days' ), "/", "", "", TRUE); 
				          //echo "Cookie '" . $cookie_name . "' is set!<br>";
						   //echo "Cookie Value is: " . $_COOKIE[$cookie_name];
				 ?>
							
							
							<li>To Check Degree Plan :- <a id = "links" href= "#selectTrack"><font size = "4px">Select Below </font></a> <br/><br/>
							</li><hr id = "hr"><br/><br/>
		                  <li>Select Your Degree Track* <br/><br/>
								<select id = "selectTrack" name="track"  onchange="gotoPage(this)">
								    <option> Select Your Track </option>
									<option value = "degree-plan.php" > CS Masters Data Science </option>
									<option value= "IA.php"> CS Masters Information Assurance </option>
									<option value = "IS.php" > CS Masters Intelligent Systems </option>
									<option value= "NW.php" > CS Masters Networks & Telecommunications </option>
									<option value= "Systems.php"> CS Masters Systems </option>
									<option value= "Traditional.php" > CS Masters Traditional </option>
								</select><br/><br/>
	<!--<input type = "submit" name = "select" id = "form_button_select" value= "Select"><br/><br/><br/>-->
							</li><hr id = "hr"><br/>
                       
							<li>Select Your Semester* : <br/><br/>
									  <select id = "selectSem" multiple="multiple" name="semester">
											  <option> Select</option>
											<option> Spring 2014 </option>
											<option> Summer 2014 </option>
											<option> Fall 2014 </option>
											<option> Spring 2015 </option>
											<option> Summer 2015 </option>
											<option> Fall 2015 </option>
										</select><br/><br/>
										<input type = "submit" name = "select" id = "form_button_select" value= "Select"><br/><br/><br/>
								</li><hr id = "hr"><br/>
								
		
								
								<li>
							ClassId*: <input type = "text" name = "classid" id = "classid" placeholder="Class Id"  ><br/><br/>
							
							<input type = "submit" id = "form_button_add" value= "Add Classes" onclick = "return isNumeric()";>
							</li><br/><br/><br/>
							<!-- <li>Classes Taken : <br/><br/>
							<div id = "result1">
							<?php // include "classes-taken.php"; ?></div></li><br/><br/>
							<li>Classes Required: <br/><br/>
							<div id = "result2">
							<?php // include "classes-req.php"; ?></div></li><br/><br/>-->
							<!-- <li> Grade*:<input type = "text" name = "grade" id = "grade" placeholder=" Enter Your Grade"><br/><br/>
                           <input type = "submit" name = "mygrade" id = "form_button_add"" value= " MyGrade"><br/><br/></li>-->
					</ol>
				
      
		 </form>
	
        
	
	</div><br/><br/>
</div><br/><br/>

   
    <div class = "footer"> 
   <footer><!-- <a href="http://localhost/www21/index.php">Home</a><a href="http://localhost/www21/degree-plan.php">Degree Plan</a> |-->	 <a href="http://localhost/www21/degree-req.php">Degree Requirements</a>| <a href="http://localhost/www21/courses.php">Courses</a> |<a href="http://localhost/www21/USE.php">USE Form</a><br/><br/>
  Copyright &copy; <?php echo date("Y"); ?> UT Dallas Degree Planner</footer>
   </div>

</div>
<!-- Current date. : <?php print (Date("l F d, Y")); ?>-->

</body>
</html> 
<?php
}
?>