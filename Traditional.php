<!-- Code developed by Author:- Amol Vaze (asv130130@utdallas.edu), Assignment -3 & 4, Due Date:- Aug 3, 2015, Time Noon -->
<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:degree-plan.php");
} else {
?>
<html>
<head>
<title>UT Dallas Degree Planner</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<script type="text/javascript" src="validation.js"></script>
<div class = "container">
<div class = "header">
<a href = "#" class = "tooltip" title= "UT Dallas Degree Planner"><img src = "images/utd-logo.png" alt = "UT Dallas Degree Planner"></a>

</div>
<div class = "navigation">
   <nav>
    <ul>
	     <li><a href = "http://localhost/www21/login.php" class = "tooltip" title= "Back To Profile">Back To Profile</a></li>
	      <li><a href = "#" class= "tooltip" title= "Degree Plan">Degree Plan</a></li>
		  <li><a href = "http://localhost/www21/degree-req.php" class= "tooltip" title= "Degree Requirements" >Degree Requirements</a></li>
		  <li><a href = "http://localhost/www21/courses.php" class= "tooltip" title= "Courses">Courses</a></li>
	</ul>
   
   </nav>
</div><br/><br/>
<div class = "degree">

 <p id = "title"><Strong>Degree Plan For Traditional Track</strong></p><br/><br/>
 </div>
  <div class = "degree-plan">
  <p> 
   
    <div id= "grades_text"><Center><Strong>  University Of Texas at Dallas </Strong></center><br/><br/>
	<Center><Strong> Master Of Computer Science </Strong></center><br/><br/>
	<Center><Strong> Traditional Track </Strong></center><br/><br/>
	<Center><Strong> Degree Plan for <?=$_SESSION['sess_user'];?> </Strong></center><br/><br/>
	<Center><Strong> Grades of <u>"<?=$_SESSION['sess_user'];?>"</u> are available<a id= "links" href = "grade_TR.php"> <strong> <font size = "5px">Here-> </font> </strong> </a></Strong></center></div><br/><br/>
	
	</p>
	
	
	 <table id = "gradetable" style="width:100%">
  <tr id = "toprow" >
    <th>Course Title</th>
    <th>Course No. </th> 
    <th>UTD Semester</th>
	 <th>Transfer/Waived/Prereq</th>
	  <th>Grade</th>
  </tr>
  <tr id = "row"> <td><strong>Core Courses (15 Credit Hours ) 3.19 Grade Point Average Required.</strong></td>
     <td></td>
	 <td></td>
	 <td></td>
	 <td></td>
  </tr>
  
  
  <tr>
    <td><strong>Design & Analysis Of Computer Algorithm</strong></td>
    <td><strong>CS 6363</strong></td> 
    <td><select id = "selectSemester" name="semester">
											<option> Select </option>
											<option> Spring 2014 </option>
											<option> Summer 2014 </option>
											<option> Fall 2014 </option>
											<option> Spring 2015 </option>
											<option> Summer 2015 </option>
											<option> Fall 2015 </option>
										</select><br/><br/></td>
	 <td><select id = "choose" name="choose" value= "grade_TR.php" onchange="gotoPage(this)">
											<option> Select </option>
											<option value= "grade_TR.php"> Transferred </option>
											<option value= "grade_TR.php"> Waived </option>
											<option value= "grade_TR.php"> Prereq </option>
										</select><br/><br/></td>
	 <td><Strong><a id = "links" href= "grade_TR.php"  >Check Grade=></a></strong><div id = "Grade_Algo"><?php //include "gpa.php"; ?></div></td>
  </tr>
  <tr>
    <td><strong>Advanced Computer Networks</strong></td>
    <td><strong>CS 6390</strong></td> 
    <td><select id = "selectSemester" name="semester">
											<option> Select </option>
											<option> Spring 2014 </option>
											<option> Summer 2014 </option>
											<option> Fall 2014 </option>
											<option> Spring 2015 </option>
											<option> Summer 2015 </option>
											<option> Fall 2015 </option>
										</select><br/><br/></td>
	 <td><select id = "choose" name="choose" value= "grade_TR.php" onchange="gotoPage(this)">
											<option> Select </option>
											<option value= "grade_TR.php"> Transferred </option>
											<option value= "grade_TR.php"> Waived </option>
											<option value= "grade_TR.php"> Prereq </option>
										</select><br/><br/></td>
	 <td><Strong><a id = "links" href= "grade_TR.php"  >Check Grade=></a></strong><div id = "Grade_ML"><?php //include "gpa.php"; ?></div></td>
  </tr>
   <tr>
    <td><strong>Advanced Operating Systems</strong></td>
    <td><strong>CS 6378</strong></td> 
    <td><select id = "selectSemester" name="semester">
											<option> Select </option>
											<option> Spring 2014 </option>
											<option> Summer 2014 </option>
											<option> Fall 2014 </option>
											<option> Spring 2015 </option>
											<option> Summer 2015 </option>
											<option> Fall 2015 </option>
										</select><br/><br/></td>
	 <td><select id = "choose" name="choose" value= "grade_TR.php" onchange="gotoPage(this)">
											<option> Select </option>
											<option value= "grade_TR.php"> Transferred </option>
											<option value= "grade_TR.php"> Waived </option>
											<option value= "grade_TR.php"> Prereq </option>
										</select><br/><br/></td>
	 <td><Strong><a id = "links" href= "grade_TR.php"  >Check Grade=></a></strong><div id = "Grade_ML"><?php //include "gpa.php"; ?></div></td>
  </tr>
   <tr id = "row"> <td>Two of the following 3 core courses.</td>
     <td></td>
	 <td></td>
	 <td></td>
	 <td></td>
  </tr>
  <tr>
    <td><strong>Compiler Construction</strong></td>
    <td><strong>CS 6353</strong></td> 
    <td> <select id = "selectSemester" name="semester">
	                                        <option> Select </option>
											<option> Spring 2014 </option>
											<option> Summer 2014 </option>
											<option> Fall 2014 </option>
											<option> Spring 2015 </option>
											<option> Summer 2015 </option>
											<option> Fall 2015 </option>
										</select><br/><br/></td>
	 <td><select id = "choose" name="choose" value= "grade_TR.php" onchange="gotoPage(this)">
											<option> Select </option>
											<option value= "grade_TR.php"> Transferred </option>
											<option value= "grade_TR.php"> Waived </option>
											<option value= "grade_TR.php"> Prereq </option>
										</select><br/><br/></td>
	 <td><Strong><a id = "links" href= "grade_TR.php" >Check Grade=></a></strong><div id = "Grade_BG"><?php //include "gpa.php"; ?></div></td>
  </tr>
  <tr>
    <td><strong>Database Design</strong></td>
    <td><strong>CS 6360</strong></td> 
    <td><select id = "selectSemester" name="semester">
	                                        <option> Select </option>
											<option> Spring 2014 </option>
											<option> Summer 2014 </option>
											<option> Fall 2014 </option>
											<option> Spring 2015 </option>
											<option> Summer 2015 </option>
											<option> Fall 2015 </option>
										</select><br/><br/></td>
	 <td><select id = "choose" name="choose" value= "grade_TR.php" onchange="gotoPage(this)">
											<option> Select </option>
											<option value= "grade_TR.php"> Transferred </option>
											<option value= "grade_TR.php"> Waived </option>
											<option value= "grade_TR.php"> Prereq </option>
										</select><br/><br/></td>
	 <td><Strong><a id = "links" href= "grade_TR.php" >Check Grade=></a></strong><div id = "Grade_ST"><?php //include "gpa.php"; ?></div></td>
  </tr>
  <tr>
    <td><strong>Advanced Programming Languages</strong></td>
    <td><strong>CS 6371</strong></td> 
    <td><select id = "selectSemester" name="semester">
	                                        <option> Select </option>
											<option> Spring 2014 </option>
											<option> Summer 2014 </option>
											<option> Fall 2014 </option>
											<option> Spring 2015 </option>
											<option> Summer 2015 </option>
											<option> Fall 2015 </option>
										</select><br/><br/></td>
	 <td><select id = "choose" name="choose" value= "grade_TR.php" onchange="gotoPage(this)">
											<option> Select </option>
											<option value= "grade_TR.php"> Transferred </option>
											<option value= "grade_TR.php"> Waived </option>
											<option value= "grade_TR.php"> Prereq </option>
										</select><br/><br/></td>
	 <td><Strong><a id = "links" href= "grade_TR.php" >Check Grade=></a></strong><div id = "Grade_ST"><?php //include "gpa.php"; ?></div></td>
  </tr>
  <tr>
    <td></td>
    <td></td> 
    <td></td>
	 <td></td>
	 <td>    </td>
  </tr>
  <tr>
    <td></td>
    <td></td> 
    <td></td>
	 <td></td>
	 <td></td>
  </tr>
   <tr id = "row"> <td><strong>5 Approved 6000 Level Electives. (15 Credit Hours) 3.0 Grade Point Average </strong></td>
     <td></td>
	 <td></td>
	 <td></td>
	 <td></td>
  </tr>
  <tr>
     <td><strong>Object-Oriented Analysis and Design</strong></td>
    <td><strong>CS 6359</strong></td> 
    <td><select id = "selectSemester" name="semester">
											<option> Select </option>
											<option> Spring 2014 </option>
											<option> Summer 2014 </option>
											<option> Fall 2014 </option>
											<option> Spring 2015 </option>
											<option> Summer 2015 </option>
											<option> Fall 2015 </option>
										</select><br/><br/></td>
	 <td><select id = "choose" name="choose" value= "grade_TR.php" onchange="gotoPage(this)">
											<option> Select </option>
											<option value= "grade_TR.php"> Transferred </option>
											<option value= "grade_TR.php"> Waived </option>
											<option value= "grade_TR.php"> Prereq </option>
										</select><br/><br/></td>
	 <td><Strong><a id = "links" href= "grade_TR.php"  >Check Grade=></a></strong></td>
  </tr>
  <tr>
    <td><strong>Computer Vision</strong></td>
    <td><strong>CS 6384</strong></td> 
    <td><select id = "selectSemester" name="semester">
											<option> Select </option>
											<option> Spring 2014 </option>
											<option> Summer 2014 </option>
											<option> Fall 2014 </option>
											<option> Spring 2015 </option>
											<option> Summer 2015 </option>
											<option> Fall 2015 </option>
										</select><br/><br/></td>
	 <td><select id = "choose" name="choose" value= "grade_TR.php" onchange="gotoPage(this)">
											<option> Select </option>
											<option value= "grade_TR.php"> Transferred </option>
											<option value= "grade_TR.php"> Waived </option>
											<option value= "grade_TR.php"> Prereq </option>
										</select><br/><br/></td>
	 <td><Strong><a id = "links" href= "grade_TR.php"  >Check Grade=></a></strong></td>
  </tr>
  <tr>
     <td><strong>Information Retrieval</strong></td>
    <td><strong>CS 6322</strong></td> 
     <td><select id = "selectSemester" name="semester">
											<option> Select </option>
											<option> Spring 2014 </option>
											<option> Summer 2014 </option>
											<option> Fall 2014 </option>
											<option> Spring 2015 </option>
											<option> Summer 2015 </option>
											<option> Fall 2015 </option>
										</select><br/><br/></td>
	 <td><select id = "choose" name="choose" value= "grade_TR.php" onchange="gotoPage(this)">
											<option> Select </option>
											<option value= "grade_TR.php"> Transferred </option>
											<option value= "grade_TR.php"> Waived </option>
											<option value= "grade_TR.php"> Prereq </option>
										</select><br/><br/></td>
	 <td><Strong><a id = "links" href= "grade_TR.php"  >Check Grade=></a></strong></td>
  </tr>
  <tr>
    <td><strong>4</strong></td>
    <td>   </td> 
    <td>    </td>
	 <td>   </td>
	 <td>    </td>
  </tr>
  <tr>
    <td><strong>5</strong></td>
    <td>   </td> 
    <td>    </td>
	 <td>   </td>
	 <td>    </td>
  </tr>
  <tr id = "row"> <td><strong>Additional Electives (3 Credit Hours Minimum ) </strong></td>
     <td></td>
	 <td></td>
	 <td></td>
	 <td></td>
	 
  </tr>
  <tr>
   <td></td>
	 <td></td>
	 <td></td>
	 <td></td>
	 <td></td>
   
  </tr>
  <tr>
   <td></td>
	 <td></td>
	 <td></td>
	 <td></td>
	 <td></td>
    
  </tr>
  <tr>
   <td></td>
	 <td></td>
	 <td></td>
	 <td></td>
     <td></td>
  </tr>
   <tr id = "row"> <td>Other Requirements.  </td>
     <td></td>
	 <td></td>
	 <td></td>
	 <td></td>
  </tr>
 
  <tr>
    <td>   </td>
    <td>   </td> 
    <td>    </td>
	 <td>   </td>
	 <td>    </td>
  </tr>
  <tr>
    <td>   </td>
    <td>   </td> 
    <td>    </td>
	 <td>   </td>
	 <td>    </td>
  </tr>
  
  <tr id = "row"> <td>Admission Prerequisites. 	 </td>
     <td></td>
	 <td></td>
	 <td></td>
	 <td></td>
  </tr>
  <tr>
    <td><strong>Computer Science 1</strong> </td>
    <td><strong>CS 5303</strong></td> 
    <td><select id = "selectSemester" name="semester">
											<option> Select </option>
											<option> Spring 2014 </option>
											<option> Summer 2014 </option>
											<option> Fall 2014 </option>
											<option> Spring 2015 </option>
											<option> Summer 2015 </option>
											<option> Fall 2015 </option>
										</select><br/><br/></td>
	 <td><select id = "choose" name="choose">
											<option> Select </option>
											<option> Transferred </option>
											<option> Waived </option>
											<option> Prereq </option>
										</select><br/><br/></td>
	 <td>    </td>
  </tr>
  <tr>
    <td><strong>Computer Science 2 </strong></td>
    <td><strong>CS 5330</strong></td> 
    <td><select id = "selectSemester" name="semester">
											<option> Select </option>
											<option> Spring 2014 </option>
											<option> Summer 2014 </option>
											<option> Fall 2014 </option>
											<option> Spring 2015 </option>
											<option> Summer 2015 </option>
											<option> Fall 2015 </option>
										</select><br/><br/></td>
	 <td><select id = "choose" name="choose">
											<option> Select </option>
											<option> Transferred </option>
											<option> Waived </option>
											<option> Prereq </option>
										</select><br/><br/></td>
	 <td>    </td>
  </tr>
  <tr>
    <td><strong>Discrete Structures</strong></td>
    <td><strong>CS 5333</strong></td> 
    <td><select id = "selectSemester" name="semester">
											<option> Select </option>
											<option> Spring 2014 </option>
											<option> Summer 2014 </option>
											<option> Fall 2014 </option>
											<option> Spring 2015 </option>
											<option> Summer 2015 </option>
											<option> Fall 2015 </option>
										</select><br/><br/></td>
	 <td><select id = "choose" name="choose">
											<option> Select </option>
											<option> Transferred </option>
											<option> Waived </option>
											<option> Prereq </option>
										</select><br/><br/></td>
	 <td>    </td>
  </tr>
  <tr>
    <td><strong>Algorithm Analysis & Data Structures</strong></td>
    <td><strong>CS 5343</strong></td> 
    <td><select id = "selectSemester" name="semester">
											<option> Select </option>
											<option> Spring 2014 </option>
											<option> Summer 2014 </option>
											<option> Fall 2014 </option>
											<option> Spring 2015 </option>
											<option> Summer 2015 </option>
											<option> Fall 2015 </option>
										</select><br/><br/></td>
	 <td><select id = "choose" name="choose">
											<option> Select </option>
											<option> Transferred </option>
											<option> Waived </option>
											<option> Prereq </option>
										</select><br/><br/></td>
	 <td>    </td>
  </tr>
  <tr>
    <td><strong>Operating System Concepts</strong></td>
    <td><strong>CS 5348</strong></td> 
    <td><select id = "selectSemester" name="semester">
											<option> Select </option>
											<option> Spring 2014 </option>
											<option> Summer 2014 </option>
											<option> Fall 2014 </option>
											<option> Spring 2015 </option>
											<option> Summer 2015 </option>
											<option> Fall 2015 </option>
										</select><br/><br/></td>
	 <td><select id = "choose" name="choose">
											<option> Select </option>
											<option> Transferred </option>
											<option> Waived </option>
											<option> Prereq </option>
										</select><br/><br/></td>
	 <td>    </td>
  </tr>
  <tr>
    <td><strong>Probability & Statistics in CS</strong></td>
    <td><strong>CS 3341</strong></td> 
    <td><select id = "selectSemester" name="semester">
											<option> Select </option>
											<option> Spring 2014 </option>
											<option> Summer 2014 </option>
											<option> Fall 2014 </option>
											<option> Spring 2015 </option>
											<option> Summer 2015 </option>
											<option> Fall 2015 </option>
										</select><br/><br/></td>
	 <td><select id = "choose" name="choose">
											<option> Select </option>
											<option> Transferred </option>
											<option> Waived </option>
											<option> Prereq </option>
										</select><br/><br/></td>
	 <td>    </td>
  </tr>

</table><br/><br/>
  <form name = "core_form" id= "core_form" method= "POST" action = "" >
  <center><strong>Core Requirement Of Traditional Track: </strong><br/><br/><center><input type = "text" id = "coretxt" name= "coretxt" placeholder= "Class Id" ><br/><br/>
	       <input type = "submit" id= "core" name= "core_button" value= "Check Core"></center><br/><div id= "checkcore" ><?php  include "checkcore_TR.php"; ?></div><br/>
   		</form><br/><br/><br/><br/>
 <center><p> <strong>* May include any 6000 or 7000 level CS course without prior permission. </strong></p></center>

</div>

 

    <div class = "footer"> 
   
    <footer><a href="http://localhost/www21/login.php">Back To Profile</a> | <a href="http://localhost/www21/degree-plan.php">Degree Plan</a> | <a href="http://localhost/www21/degree-req.php">Degree Requirements</a>| <a href="#">Courses</a><br/><br/>
  Copyright &copy; <?php echo date("Y"); ?> UT Dallas Degree Planner</footer>
   
   </div>

</div>
<!-- Current date. : <?php print (Date("l F d, Y")); ?>-->

</body>
</html> 
<?php
}
?>