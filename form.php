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
<a href = "#" class = "tooltip" title= "UT Dallas Degree Planner"><img src = "images/utd-logo.png" alt = "UT Dallas Degree Planner"></a>

</div>
<div class = "navigation">
   <nav>
    <ul>
	     <li><a href = "http://localhost/www21/degree-req.php" class = "tooltip" title= "Go Back" >Go Back</a></li>
	      <!-- <li><a href = "http://localhost/www21/degree-plan.php" class= "tooltip" title= "Degree Plan">Degree Plan</a></li>
		  <li><a href = "http://localhost/www21/degree-req.php" class= "tooltip" title= "Degree Requirements" >Degree Requirements</a></li>
		  <li><a href = "http://localhost/www21/courses.php" class= "tooltip" title= "Courses">Courses</a></li>-->
	</ul>
   
   </nav>
</div><br/><br/>
<div class = "degree">

 <p id = "title"><Strong>Master’s Acknowledgment of Policies Form </strong></p><br/><br/>
 </div>
  <form name = "Ack_Form" id = "Ack_Form"  method="post" action = "#" onsubmit="return validateAckForm();">
   <strong>Name:(First, Last):</strong>- <input type = "text" name= "studentname" id= "studentname" placeholder = "Name" ><br/><br/>
   
   <strong>UTD ID:- </strong> <input type = "text" name= "UTDID" id ="UTDID" placeholder= "UTD ID"><br/><br/>
   
   <strong>Semester:- </strong> <input type = "text" name= "semester" id = "semester" placeholder= "First Semester"><br/><br/>
   
   <strong>Degree Plan (Please Check One):- </strong> <br/><br/>
                              <input type="checkbox" name="box" value="Traditional"> Traditional CS  <input type="checkbox" name="box" value="Networks"> Networks & Telecommunication<br/><br/>
                              <input type="checkbox" name="box" value="Intelligent"> Intelligent Systems  <input type="checkbox" name="box" value="Systems"> Systems<br/><br/>
							  <input type="checkbox" name="box" value="SE"> Software Engineering  <input type="checkbox" name="box" value="IA"> Information Assurance<br/><br/>
							  <input type="checkbox" name="box" value="Data Science"> Data Science  <input type="checkbox" name="box" value="IC"> Interactive Computing <br/><br/>
   
   <strong>Prerequisites I was assigned in my admission letter/email (check all that apply):- </strong> <br/><br/>
                              <input type="checkbox" name="box" value="CS1"> CS 5303 Computer Science 1  <input type="checkbox" name="box" value="Automata"> CS 5349 Automata Theory<br/><br/>
                              <input type="checkbox" name="box" value="CS2"> CS5330 Computer Science 2  <input type="checkbox" name="box" value="SE"> CS 5354 Software Engineering<br/><br/>
							  <input type="checkbox" name="box" value="DS"> CS 5333 Discrete Structures <input type="checkbox" name="box" value="CN"> CS 5390 Computer Networks<br/><br/>
							  <input type="checkbox" name="box" value="Data Structures"> CS 5343 Data Structures   <input type="checkbox" name="box" value="Prob"> CS 3341 Probability & Statistics <br/><br/>
							  <input type="checkbox" name="box" value="OS"> CS 5348 Operating Systems <br/><br/>

  <strong>By initialising each item below, I indicate that I understand the following policies of The University of Texas at Dallas and the Graduate Computer Science Department:- </strong> <br/><br/>
  <input type="checkbox" name="box" value="box"> I must take all my assigned prerequisites unless it has been officially waived by the department or is
not a requirement of my track/degree plan. <br/><br/>
   <input type="checkbox" name="box" value="box">  I must meet with a Faculty Academic Advisor at least once a year to be advised. <br/><br/>
   <input type="checkbox" name="box" value="box">  I know that I will not be allowed to enroll in a closed course. No exceptions. No waitlists. <br/><br/>
   <input type="checkbox" name="box" value="box">  There is a 6-year window to complete all coursework.  <br/><br/>
   <input type="checkbox" name="box" value="box">   GPA is calculated on the + and – scale (A, A-, B+, B, B-, C+, C).<br/><br/>
   <input type="checkbox" name="box" value="box">   I must have a core GPA = 3.19, an elective GPA = 3.0, and an overall GPA = 3.0 to graduate. <br/><br/>
    <input type="checkbox" name="box" value="box">  I may only repeat a course two times; I can only have a total of three repeats across all courses <br/><br/>
    <input type="checkbox" name="box" value="box">   I must make up any incomplete (I) grades by the deadline or it will turn into an F on my transcript. <br/><br/>
    <input type="checkbox" name="box" value="box">   I know I must complete additional paperwork to change my major/program from CS to SE or from
SE to CS at least two semesters prior to graduation.<br/><br/>
    <input type="checkbox" name="box" value="box">  I know that if I miss three or more lectures in the beginning of any semester, I may be dropped or
reassigned to another course in that semester. <br/><br/>
    <!--<input type = "text" id = "sign" name = "Sign1" placeholder= "Your Signature">    Student's Electronic Signature <br/><br/>
	<input type = "text" id = "sign" name = "Sign2" placeholder = "Advisor Signature">   Graduate Advisor's Signature --> <br/><br/>
	<input type = "Submit" name = "form_button" value = "Submit Form" id = "form_button">
</form>

 <div class = "footer"> 
   
    <footer><a href="http://localhost/www21/degree-req.php">Go Back</a> <!-- | <a href="http://localhost/www21/degree-plan.php">Degree Plan</a> | <a href="http://localhost/www21/degree-req.php">Degree Requirements</a>| <a href="#">Courses</a>--><br/><br/>
  Copyright &copy; <?php echo date("Y"); ?> UT Dallas Degree Planner</footer>
   
   </div>

</div>
<!-- Current date. : <?php print (Date("l F d, Y")); ?>-->

</body>
</html> 
