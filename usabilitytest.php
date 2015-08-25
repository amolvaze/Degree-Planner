<!-- Code developed by Author:- Amol Vaze (asv130130@utdallas.edu), Assignment -3 & 4, Due Date:- Aug 3, 2015, Time Noon -->
<html>
<head>
<title>UT Dallas USE Form</title>
<link rel="stylesheet" type="text/css" href="styles.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="validation.js"></script>
<script type="text/javascript" >
$(document).ready(function(){
$("#survey_button").click(function(){
					var q1=$('input[type="radio"]:checked').val();
	                 if($('input[type="radio"]:checked').length == "0" )
					{
					alert("Survey cannot be blank! ");
					}
      else if(! $('input:radio[name="' + name + '"]:checked').length) {
        alert('You must select altleast one for each !');
           return false;
               }
			else
			{
			$.ajax({
			type: "POST",
			url: "http://localhost/www21/survey_form.php",
			data: "q1="+q1,
			success: function()
			{
			 //$("#msg").addClass('bg');
			 //$("#msg").html("Your details have been saved. ");
			}
			});
			}
			return false;
			});
			});


</script>
</head>
<body>

<div class = "container">
<div class = "header">
<a href = "#" class = "tooltip" title= "UT Dallas Degree Planner" ><img src = "images/utd-logo.png" alt = "UT Dallas Degree Planner"></a>

</div>
 <div class = "navigation">
   <nav>
   <ul><li><a href = "http://localhost/www21/admin_profile.php" class= "tooltip" title= "USE" >Go Back! </a></li></ul>
   </nav> 
</div><br/><br/>
<div class = "main">

  <div class = "login"><br/>
    <div id = "USE">Usability Test Management</div>
    <div id= "USE_Form">
	  <p><strong><center><font size = "4px" >Please rate your agreement with following statements. </font> </center></strong></p><br/>
	     <!--<ul id = "USE_LIST" ><li>Try to respond to all the items.</li><br/>
		     <li>For items that are not applicable, use: <b>NA</b></li><br/>
	           <li>Make sure these fields are filled in: <b>System:</b> <b>Email to: </b></li><br/>
	          <li>Add a comment about an item by clicking on its icon. Add a comment icon, or add comment fields for all items by clicking on: <b>Comment All.</b></li><br/>
	          <li>To mail in your results, click on: <b>Mail Data</b></li><br/>
	   </ul><br/>
	   <strong>System: <input type = "text" ></strong>  <strong>Email To: <input type = "text" ></strong><br/><br/>
	   <p>Optionally provide comments and your email address in the box. </p><br/>
	   <textarea name = "USETextarea" id = "USETextarea" rows= "4" cols= "100"></textarea><br/><br/>
	   <input type = "button" id = "maildata" name= "maildata"  value = "Mail Data" > <input type = "button" id = "commentall" name= "commentall"  value = "Comment All" ><br/><br/><br/><br/>-->
		<form method= "POST" name = "survey" action= "" >
			
			   <table id="ratings" cellspacing="1" cellpadding="2" border="1">
									<tbody>
									<tr valign="middle" bgcolor="#dddddd">
									<td colspan="2">
									<b>USEFULNESS</b></td>
									<td> </td>
									<th scope="col">1</th>
									<th scope="col">2</th>
									<th scope="col">3</th>
									<th scope="col">4</th>
									<th scope="col">5</th>
									<th scope="col">6</th>
									<th scope="col">7</th>
									<td> </td>
									<th>NA</th>
									</tr>
					<tr valign="top">
								<td align="right">
								<a name="q1">1.</a>
								</td>
								<td>
								<label for="q1">It helps me be more effective.</label>
								
								</td>
								<td align="right">
								<font size="-1">strongly disagree</font>
								</td>
								<td>
								<input id="q1_1" type="radio" value="1" title="1 (strongly disagree)" name="q1">
								</td>
								<td>
								<input id="q1_2" type="radio" value="2" title="2" name="q1">
								</td>
								<td>
								<input id="q1_3" type="radio" value="3" title="3" name="q1">
								</td>
								<td>
								<input id="q1_4" type="radio" value="4" title="4" name="q1">
								</td>
								<td>
								<input id="q1_5" type="radio" value="5" title="5" name="q1">
								</td>
								<td>
								<input id="q1_6" type="radio" value="6" title="6" name="q1">
								<td>
								<input id="q1_7" type="radio" value="7" title="7 (strongly agree)" name="q1">
					           <td align="left">
								<font size="-1">strongly agree</font>
								</td>
								<td>
								<input id="q1" type="radio" value="-1" name="q1" title="For items that are not applicable, use: NA">
								</td>
				</tr>
					<tr valign="top">
								<td align="right">
								<a name="q2">2.</a>
								</td>
								<td>
								<label for="q2">It helps me be more productive.</label>
								
								</td>
								<td align="right">
								<font size="-1">strongly disagree</font>
								</td>
								<td>
								<input id="q1_1" type="radio" value="1" title="1 (strongly disagree)" name="q2">
								</td>
								<td>
								<input id="q1_2" type="radio" value="2" title="2" name="q2">
								</td>
								<td>
								<input id="q1_3" type="radio" value="3" title="3" name="q2">
								</td>
								<td>
								<input id="q1_4" type="radio" value="4" title="4" name="q2">
								</td>
								<td>
								<input id="q1_5" type="radio" value="5" title="5" name="q2">
								</td>
								<td>
								<input id="q1_6" type="radio" value="6" title="6" name="q2">
								<td>
								<input id="q1_7" type="radio" value="7" title="7 (strongly agree)" name="q2">
					           <td align="left">
								<font size="-1">strongly agree</font>
								</td>
								<td>
								<input id="q2" type="radio" value="-1" name="q2" title="For items that are not applicable, use: NA">
								</td>
				</tr>
					<tr valign="top">
								<td align="right">
								<a name="q3">3.</a>
								</td>
								<td>
								<label for="q1">It is useful.</label>
								
								</td>
								<td align="right">
								<font size="-1">strongly disagree</font>
								</td>
								<td>
								<input id="q1_1" type="radio" value="1" title="1 (strongly disagree)" name="q3">
								</td>
								<td>
								<input id="q1_2" type="radio" value="2" title="2" name="q3">
								</td>
								<td>
								<input id="q1_3" type="radio" value="3" title="3" name="q3">
								</td>
								<td>
								<input id="q1_4" type="radio" value="4" title="4" name="q3">
								</td>
								<td>
								<input id="q1_5" type="radio" value="5" title="5" name="q3">
								</td>
								<td>
								<input id="q1_6" type="radio" value="6" title="6" name="q3">
								<td>
								<input id="q1_7" type="radio" value="7" title="7 (strongly agree)" name="q3">
					           <td align="left">
								<font size="-1">strongly agree</font>
								</td>
								<td>
								<input id="q3" type="radio" value="-1" name="q3" title="For items that are not applicable, use: NA">
								</td>
				</tr>
					<tr valign="top">
								<td align="right">
								<a name="q4">4.</a>
								</td>
								<td>
								<label for="q1">It gives me more control over the activities in my life.</label>
								
								</td>
								<td align="right">
								<font size="-1">strongly disagree</font>
								</td>
								<td>
								<input id="q1_1" type="radio" value="1" title="1 (strongly disagree)" name="q4">
								</td>
								<td>
								<input id="q1_2" type="radio" value="2" title="2" name="q4">
								</td>
								<td>
								<input id="q1_3" type="radio" value="3" title="3" name="q4">
								</td>
								<td>
								<input id="q1_4" type="radio" value="4" title="4" name="q4">
								</td>
								<td>
								<input id="q1_5" type="radio" value="5" title="5" name="q4">
								</td>
								<td>
								<input id="q1_6" type="radio" value="6" title="6" name="q4">
								<td>
								<input id="q1_7" type="radio" value="7" title="7 (strongly agree)" name="q4">
					           <td align="left">
								<font size="-1">strongly agree</font>
								</td>
								<td>
								<input id="q4" type="radio" value="-1" name="q4" title="For items that are not applicable, use: NA">
								</td>
				</tr>
					<tr valign="top">
								<td align="right">
								<a name="q5">5.</a>
								</td>
								<td>
								<label for="q1">It makes the things I want to accomplish easier to get done.</label>
								
								</td>
								<td align="right">
								<font size="-1">strongly disagree</font>
								</td>
								<td>
								<input id="q1_1" type="radio" value="1" title="1 (strongly disagree)" name="q5">
								</td>
								<td>
								<input id="q1_2" type="radio" value="2" title="2" name="q5">
								</td>
								<td>
								<input id="q1_3" type="radio" value="3" title="3" name="q5">
								</td>
								<td>
								<input id="q1_4" type="radio" value="4" title="4" name="q5">
								</td>
								<td>
								<input id="q1_5" type="radio" value="5" title="5" name="q5">
								</td>
								<td>
								<input id="q1_6" type="radio" value="6" title="6" name="q5">
								<td>
								<input id="q1_7" type="radio" value="7" title="7 (strongly agree)" name="q5">
					           <td align="left">
								<font size="-1">strongly agree</font>
								</td>
								<td>
								<input id="q5" type="radio" value="-1" name="q5" title="For items that are not applicable, use: NA">
								</td>
				</tr>
					<tr valign="top">
								<td align="right">
								<a name="q6">6.</a>
								</td>
								<td>
								<label for="q1">It saves me time when I use it.</label>
								
								</td>
								<td align="right">
								<font size="-1">strongly disagree</font>
								</td>
								<td>
								<input id="q1_1" type="radio" value="1" title="1 (strongly disagree)" name="q6">
								</td>
								<td>
								<input id="q1_2" type="radio" value="2" title="2" name="q6">
								</td>
								<td>
								<input id="q1_3" type="radio" value="3" title="3" name="q6">
								</td>
								<td>
								<input id="q1_4" type="radio" value="4" title="4" name="q6">
								</td>
								<td>
								<input id="q1_5" type="radio" value="5" title="5" name="q6">
								</td>
								<td>
								<input id="q1_6" type="radio" value="6" title="6" name="q6">
								<td>
								<input id="q1_7" type="radio" value="7" title="7 (strongly agree)" name="q6">
					           <td align="left">
								<font size="-1">strongly agree</font>
								</td>
								<td>
								<input id="q6" type="radio" value="-1" name="q6" title="For items that are not applicable, use: NA">
								</td>
				</tr>
					</tr>
					<tr valign="top">
								<td align="right">
								<a name="q7">7.</a>
								</td>
								<td>
								<label for="q1">It meets my needs.</label>
								
								</td>
								<td align="right">
								<font size="-1">strongly disagree</font>
								</td>
								<td>
								<input id="q1_1" type="radio" value="1" title="1 (strongly disagree)" name="q7">
								</td>
								<td>
								<input id="q1_2" type="radio" value="2" title="2" name="q7">
								</td>
								<td>
								<input id="q1_3" type="radio" value="3" title="3" name="q7">
								</td>
								<td>
								<input id="q1_4" type="radio" value="4" title="4" name="q7">
								</td>
								<td>
								<input id="q1_5" type="radio" value="5" title="5" name="q7">
								</td>
								<td>
								<input id="q1_6" type="radio" value="6" title="6" name="q7">
								<td>
								<input id="q1_7" type="radio" value="7" title="7 (strongly agree)" name="q7">
					           <td align="left">
								<font size="-1">strongly agree</font>
								</td>
								<td>
								<input id="q7" type="radio" value="-1" name="q7" title="For items that are not applicable, use: NA">
								</td>
				</tr>
				<tr valign="top">
								<td align="right">
								<a name="q8">8.</a>
								</td>
								<td>
								<label for="q1">It does everything I would expect it to do.</label>
								
								</td>
								<td align="right">
								<font size="-1">strongly disagree</font>
								</td>
								<td>
								<input id="q1_1" type="radio" value="1" title="1 (strongly disagree)" name="q8">
								</td>
								<td>
								<input id="q1_2" type="radio" value="2" title="2" name="q8">
								</td>
								<td>
								<input id="q1_3" type="radio" value="3" title="3" name="q8">
								</td>
								<td>
								<input id="q1_4" type="radio" value="4" title="4" name="q8">
								</td>
								<td>
								<input id="q1_5" type="radio" value="5" title="5" name="q8">
								</td>
								<td>
								<input id="q1_6" type="radio" value="6" title="6" name="q8">
								<td>
								<input id="q1_7" type="radio" value="7" title="7 (strongly agree)" name="q8">
					           <td align="left">
								<font size="-1">strongly agree</font>
								</td>
								<td>
								<input id="q8" type="radio" value="-1" name="q8" title="For items that are not applicable, use: NA">
								</td>
				</tr>
					<tbody>
									<tr valign="middle" bgcolor="#dddddd">
									<td colspan="2">
									<b>EASE OF USE</b></td>
									<td> </td>
									<th scope="col">1</th>
									<th scope="col">2</th>
									<th scope="col">3</th>
									<th scope="col">4</th>
									<th scope="col">5</th>
									<th scope="col">6</th>
									<th scope="col">7</th>
									<td> </td>
									<th>NA</th>
									</tr>			
				<tr valign="top">
								<td align="right">
								<a name="q9">9.</a>
								</td>
								<td>
								<label for="q1">It is easy to use.</label>
								
								</td>
								<td align="right">
								<font size="-1">strongly disagree</font>
								</td>
								<td>
								<input id="q1_1" type="radio" value="1" title="1 (strongly disagree)" name="q9">
								</td>
								<td>
								<input id="q1_2" type="radio" value="2" title="2" name="q9">
								</td>
								<td>
								<input id="q1_3" type="radio" value="3" title="3" name="q9">
								</td>
								<td>
								<input id="q1_4" type="radio" value="4" title="4" name="q9">
								</td>
								<td>
								<input id="q1_5" type="radio" value="5" title="5" name="q9">
								</td>
								<td>
								<input id="q1_6" type="radio" value="6" title="6" name="q9">
								<td>
								<input id="q1_7" type="radio" value="7" title="7 (strongly agree)" name="q9">
					           <td align="left">
								<font size="-1">strongly agree</font>
								</td>
								<td>
								<input id="q9" type="radio" value="-1" name="q9" title="For items that are not applicable, use: NA">
								</td>
				</tr>
				<tr valign="top">
								<td align="right">
								<a name="q10">10.</a>
								</td>
								<td>
								<label for="q1">It is simple to use.</label>
								
								</td>
								<td align="right">
								<font size="-1">strongly disagree</font>
								</td>
								<td>
								<input id="q1_1" type="radio" value="1" title="1 (strongly disagree)" name="q10">
								</td>
								<td>
								<input id="q1_2" type="radio" value="2" title="2" name="q10">
								</td>
								<td>
								<input id="q1_3" type="radio" value="3" title="3" name="q10">
								</td>
								<td>
								<input id="q1_4" type="radio" value="4" title="4" name="q10">
								</td>
								<td>
								<input id="q1_5" type="radio" value="5" title="5" name="q10">
								</td>
								<td>
								<input id="q1_6" type="radio" value="6" title="6" name="q10">
								<td>
								<input id="q1_7" type="radio" value="7" title="7 (strongly agree)" name="q10">
					           <td align="left">
								<font size="-1">strongly agree</font>
								</td>
								<td>
								<input id="q10" type="radio" value="-1" name="q10" title="For items that are not applicable, use: NA">
								</td>
				</tr>
				<tr valign="top">
								<td align="right">
								<a name="q11">11.</a>
								</td>
								<td>
								<label for="q1">It is user friendly.</label>
								
								</td>
								<td align="right">
								<font size="-1">strongly disagree</font>
								</td>
								<td>
								<input id="q1_1" type="radio" value="1" title="1 (strongly disagree)" name="q11">
								</td>
								<td>
								<input id="q1_2" type="radio" value="2" title="2" name="q11">
								</td>
								<td>
								<input id="q1_3" type="radio" value="3" title="3" name="q11">
								</td>
								<td>
								<input id="q1_4" type="radio" value="4" title="4" name="q11">
								</td>
								<td>
								<input id="q1_5" type="radio" value="5" title="5" name="q11">
								</td>
								<td>
								<input id="q1_6" type="radio" value="6" title="6" name="q11">
								<td>
								<input id="q1_7" type="radio" value="7" title="7 (strongly agree)" name="q11">
					           <td align="left">
								<font size="-1">strongly agree</font>
								</td>
								<td>
								<input id="q11" type="radio" value="-1" name="q11" title="For items that are not applicable, use: NA">
								</td>
				</tr>
				<tr valign="top">
								<td align="right">
								<a name="q12">12.</a>
								</td>
								<td>
								<label for="q1">It requires the fewest steps possible to accomplish what I want to do with it.</label>
								
								</td>
								<td align="right">
								<font size="-1">strongly disagree</font>
								</td>
								<td>
								<input id="q1_1" type="radio" value="1" title="1 (strongly disagree)" name="q12">
								</td>
								<td>
								<input id="q1_2" type="radio" value="2" title="2" name="q12">
								</td>
								<td>
								<input id="q1_3" type="radio" value="3" title="3" name="q12">
								</td>
								<td>
								<input id="q1_4" type="radio" value="4" title="4" name="q12">
								</td>
								<td>
								<input id="q1_5" type="radio" value="5" title="5" name="q12">
								</td>
								<td>
								<input id="q1_6" type="radio" value="6" title="6" name="q12">
								<td>
								<input id="q1_7" type="radio" value="7" title="7 (strongly agree)" name="q12">
					           <td align="left">
								<font size="-1">strongly agree</font>
								</td>
								<td>
								<input id="q12" type="radio" value="-1" name="q12" title="For items that are not applicable, use: NA">
								</td>
				</tr>
				<tr valign="top">
								<td align="right">
								<a name="q13">13.</a>
								</td>
								<td>
								<label for="q1">It is flexible.</label>
								
								</td>
								<td align="right">
								<font size="-1">strongly disagree</font>
								</td>
								<td>
								<input id="q1_1" type="radio" value="1" title="1 (strongly disagree)" name="q13">
								</td>
								<td>
								<input id="q1_2" type="radio" value="2" title="2" name="q13">
								</td>
								<td>
								<input id="q1_3" type="radio" value="3" title="3" name="q13">
								</td>
								<td>
								<input id="q1_4" type="radio" value="4" title="4" name="q13">
								</td>
								<td>
								<input id="q1_5" type="radio" value="5" title="5" name="q13">
								</td>
								<td>
								<input id="q1_6" type="radio" value="6" title="6" name="q13">
								<td>
								<input id="q1_7" type="radio" value="7" title="7 (strongly agree)" name="q13">
					           <td align="left">
								<font size="-1">strongly agree</font>
								</td>
								<td>
								<input id="q13" type="radio" value="-1" name="q13" title="For items that are not applicable, use: NA">
								</td>
				</tr>
				<tr valign="top">
								<td align="right">
								<a name="q14">14.</a>
								</td>
								<td>
								<label for="q1">Using it is effortless.</label>
								
								</td>
								<td align="right">
								<font size="-1">strongly disagree</font>
								</td>
								<td>
								<input id="q1_1" type="radio" value="1" title="1 (strongly disagree)" name="q14">
								</td>
								<td>
								<input id="q1_2" type="radio" value="2" title="2" name="q14">
								</td>
								<td>
								<input id="q1_3" type="radio" value="3" title="3" name="q14">
								</td>
								<td>
								<input id="q1_4" type="radio" value="4" title="4" name="q14">
								</td>
								<td>
								<input id="q1_5" type="radio" value="5" title="5" name="q14">
								</td>
								<td>
								<input id="q1_6" type="radio" value="6" title="6" name="q14">
								<td>
								<input id="q1_7" type="radio" value="7" title="7 (strongly agree)" name="q14">
					           <td align="left">
								<font size="-1">strongly agree</font>
								</td>
								<td>
								<input id="q14" type="radio" value="-1" name="q14" title="For items that are not applicable, use: NA">
								</td>
				</tr>
					<tr valign="top">
								<td align="right">
								<a name="q15">15.</a>
								</td>
								<td>
								<label for="q1">I can use it without written instructions.</label>
								
								</td>
								<td align="right">
								<font size="-1">strongly disagree</font>
								</td>
								<td>
								<input id="q1_1" type="radio" value="1" title="1 (strongly disagree)" name="q15">
								</td>
								<td>
								<input id="q1_2" type="radio" value="2" title="2" name="q15">
								</td>
								<td>
								<input id="q1_3" type="radio" value="3" title="3" name="q15">
								</td>
								<td>
								<input id="q1_4" type="radio" value="4" title="4" name="q15">
								</td>
								<td>
								<input id="q1_5" type="radio" value="5" title="5" name="q15">
								</td>
								<td>
								<input id="q1_6" type="radio" value="6" title="6" name="q15">
								<td>
								<input id="q1_7" type="radio" value="7" title="7 (strongly agree)" name="q15">
					           <td align="left">
								<font size="-1">strongly agree</font>
								</td>
								<td>
								<input id="q15" type="radio" value="-1" name="q15" title="For items that are not applicable, use: NA">
								</td>
				</tr>
                <tr valign="top">
								<td align="right">
								<a name="q16">16.</a>
								</td>
								<td>
								<label for="q1">I don't notice any inconsistencies as I use it.</label>
								
								</td>
								<td align="right">
								<font size="-1">strongly disagree</font>
								</td>
								<td>
								<input id="q1_1" type="radio" value="1" title="1 (strongly disagree)" name="q16">
								</td>
								<td>
								<input id="q1_2" type="radio" value="2" title="2" name="q16">
								</td>
								<td>
								<input id="q1_3" type="radio" value="3" title="3" name="q16">
								</td>
								<td>
								<input id="q1_4" type="radio" value="4" title="4" name="q16">
								</td>
								<td>
								<input id="q1_5" type="radio" value="5" title="5" name="q16">
								</td>
								<td>
								<input id="q1_6" type="radio" value="6" title="6" name="q16">
								<td>
								<input id="q1_7" type="radio" value="7" title="7 (strongly agree)" name="q16">
					           <td align="left">
								<font size="-1">strongly agree</font>
								</td>
								<td>
								<input id="q16" type="radio" value="-1" name="q16" title="For items that are not applicable, use: NA">
								</td>
				</tr>
              <tr valign="top">
								<td align="right">
								<a name="q17">17.</a>
								</td>
								<td>
								<label for="q1">Both occasional and regular users would like it.</label>
								
								</td>
								<td align="right">
								<font size="-1">strongly disagree</font>
								</td>
								<td>
								<input id="q1_1" type="radio" value="1" title="1 (strongly disagree)" name="q17">
								</td>
								<td>
								<input id="q1_2" type="radio" value="2" title="2" name="q17">
								</td>
								<td>
								<input id="q1_3" type="radio" value="3" title="3" name="q17">
								</td>
								<td>
								<input id="q1_4" type="radio" value="4" title="4" name="q17">
								</td>
								<td>
								<input id="q1_5" type="radio" value="5" title="5" name="q17">
								</td>
								<td>
								<input id="q1_6" type="radio" value="6" title="6" name="q17">
								<td>
								<input id="q1_7" type="radio" value="7" title="7 (strongly agree)" name="q17">
					           <td align="left">
								<font size="-1">strongly agree</font>
								</td>
								<td>
								<input id="q17" type="radio" value="-1" name="q17" title="For items that are not applicable, use: NA">
								</td>
				</tr>
             <tr valign="top">
								<td align="right">
								<a name="q18">18.</a>
								</td>
								<td>
								<label for="q1">I can recover from mistakes quickly and easily.</label>
								
								</td>
								<td align="right">
								<font size="-1">strongly disagree</font>
								</td>
								<td>
								<input id="q1_1" type="radio" value="1" title="1 (strongly disagree)" name="q18">
								</td>
								<td>
								<input id="q1_2" type="radio" value="2" title="2" name="q18">
								</td>
								<td>
								<input id="q1_3" type="radio" value="3" title="3" name="q18">
								</td>
								<td>
								<input id="q1_4" type="radio" value="4" title="4" name="q18">
								</td>
								<td>
								<input id="q1_5" type="radio" value="5" title="5" name="q18">
								</td>
								<td>
								<input id="q1_6" type="radio" value="6" title="6" name="q18">
								<td>
								<input id="q1_7" type="radio" value="7" title="7 (strongly agree)" name="q18">
					           <td align="left">
								<font size="-1">strongly agree</font>
								</td>
								<td>
								<input id="q18" type="radio" value="-1" name="q18" title="For items that are not applicable, use: NA">
								</td>
				</tr>				
				<tr valign="top">
								<td align="right">
								<a name="q19">19.</a>
								</td>
								<td>
								<label for="q1">I can use it successfully every time.</label>
								
								</td>
								<td align="right">
								<font size="-1">strongly disagree</font>
								</td>
								<td>
								<input id="q1_1" type="radio" value="1" title="1 (strongly disagree)" name="q19">
								</td>
								<td>
								<input id="q1_2" type="radio" value="2" title="2" name="q19">
								</td>
								<td>
								<input id="q1_3" type="radio" value="3" title="3" name="q19">
								</td>
								<td>
								<input id="q1_4" type="radio" value="4" title="4" name="q19">
								</td>
								<td>
								<input id="q1_5" type="radio" value="5" title="5" name="q19">
								</td>
								<td>
								<input id="q1_6" type="radio" value="6" title="6" name="q19">
								<td>
								<input id="q1_7" type="radio" value="7" title="7 (strongly agree)" name="q19">
					           <td align="left">
								<font size="-1">strongly agree</font>
								</td>
								<td>
								<input id="q19" type="radio" value="-1" name="q19" title="For items that are not applicable, use: NA">
								</td>
				</tr>				
						 <tbody>
									<tr valign="middle" bgcolor="#dddddd">
									<td colspan="2">
									<b>EASE OF LEARNING</b></td>
									<td> </td>
									<th scope="col">1</th>
									<th scope="col">2</th>
									<th scope="col">3</th>
									<th scope="col">4</th>
									<th scope="col">5</th>
									<th scope="col">6</th>
									<th scope="col">7</th>
									<td> </td>
									<th>NA</th>
									</tr>
             <tr valign="top">
								<td align="right">
								<a name="q20">20.</a>
								</td>
								<td>
								<label for="q1">I learned to use it quickly.</label>
								
								</td>
								<td align="right">
								<font size="-1">strongly disagree</font>
								</td>
								<td>
								<input id="q1_1" type="radio" value="1" title="1 (strongly disagree)" name="q20">
								</td>
								<td>
								<input id="q1_2" type="radio" value="2" title="2" name="q20">
								</td>
								<td>
								<input id="q1_3" type="radio" value="3" title="3" name="q20">
								</td>
								<td>
								<input id="q1_4" type="radio" value="4" title="4" name="q20">
								</td>
								<td>
								<input id="q1_5" type="radio" value="5" title="5" name="q20">
								</td>
								<td>
								<input id="q1_6" type="radio" value="6" title="6" name="q20">
								<td>
								<input id="q1_7" type="radio" value="7" title="7 (strongly agree)" name="q20">
					           <td align="left">
								<font size="-1">strongly agree</font>
								</td>
								<td>
								<input id="q20" type="radio" value="-1" name="q20" title="For items that are not applicable, use: NA">
								</td>
				</tr>
				<tr valign="top">
								<td align="right">
								<a name="q21">21.</a>
								</td>
								<td>
								<label for="q1">I easily remember how to use it.</label>
								
								</td>
								<td align="right">
								<font size="-1">strongly disagree</font>
								</td>
								<td>
								<input id="q1_1" type="radio" value="1" title="1 (strongly disagree)" name="q21">
								</td>
								<td>
								<input id="q1_2" type="radio" value="2" title="2" name="q21">
								</td>
								<td>
								<input id="q1_3" type="radio" value="3" title="3" name="q21">
								</td>
								<td>
								<input id="q1_4" type="radio" value="4" title="4" name="q21">
								</td>
								<td>
								<input id="q1_5" type="radio" value="5" title="5" name="q21">
								</td>
								<td>
								<input id="q1_6" type="radio" value="6" title="6" name="q21">
								<td>
								<input id="q1_7" type="radio" value="7" title="7 (strongly agree)" name="q21">
					           <td align="left">
								<font size="-1">strongly agree</font>
								</td>
								<td>
								<input id="q21" type="radio" value="-1" name="q21" title="For items that are not applicable, use: NA">
								</td>
				</tr>			
				<tr valign="top">
								<td align="right">
								<a name="q22">22.</a>
								</td>
								<td>
								<label for="q1">It is easy to learn to use it.</label>
								
								</td>
								<td align="right">
								<font size="-1">strongly disagree</font>
								</td>
								<td>
								<input id="q1_1" type="radio" value="1" title="1 (strongly disagree)" name="q22">
								</td>
								<td>
								<input id="q1_2" type="radio" value="2" title="2" name="q22">
								</td>
								<td>
								<input id="q1_3" type="radio" value="3" title="3" name="q22">
								</td>
								<td>
								<input id="q1_4" type="radio" value="4" title="4" name="q22">
								</td>
								<td>
								<input id="q1_5" type="radio" value="5" title="5" name="q22">
								</td>
								<td>
								<input id="q1_6" type="radio" value="6" title="6" name="q22">
								<td>
								<input id="q1_7" type="radio" value="7" title="7 (strongly agree)" name="q22">
					           <td align="left">
								<font size="-1">strongly agree</font>
								</td>
								<td>
								<input id="q22" type="radio" value="-1" name="q22" title="For items that are not applicable, use: NA">
								</td>
				</tr>			
					<tr valign="top">
								<td align="right">
								<a name="q23">23.</a>
								</td>
								<td>
								<label for="q1">I quickly became skilful with it.</label>
								
								</td>
								<td align="right">
								<font size="-1">strongly disagree</font>
								</td>
								<td>
								<input id="q1_1" type="radio" value="1" title="1 (strongly disagree)" name="q23">
								</td>
								<td>
								<input id="q1_2" type="radio" value="2" title="2" name="q23">
								</td>
								<td>
								<input id="q1_3" type="radio" value="3" title="3" name="q23">
								</td>
								<td>
								<input id="q1_4" type="radio" value="4" title="4" name="q23">
								</td>
								<td>
								<input id="q1_5" type="radio" value="5" title="5" name="q23">
								</td>
								<td>
								<input id="q1_6" type="radio" value="6" title="6" name="q23">
								<td>
								<input id="q1_7" type="radio" value="7" title="7 (strongly agree)" name="q23">
					           <td align="left">
								<font size="-1">strongly agree</font>
								</td>
								<td>
								<input id="q23" type="radio" value="-1" name="q23" title="For items that are not applicable, use: NA">
								</td>
				</tr>	
           				 <tbody>
									<tr valign="middle" bgcolor="#dddddd">
									<td colspan="2">
									<b>SATISFACTION</b></td>
									<td> </td>
									<th scope="col">1</th>
									<th scope="col">2</th>
									<th scope="col">3</th>
									<th scope="col">4</th>
									<th scope="col">5</th>
									<th scope="col">6</th>
									<th scope="col">7</th>
									<td> </td>
									<th>NA</th>
									</tr>
				<tr valign="top">
								<td align="right">
								<a name="q24">24.</a>
								</td>
								<td>
								<label for="q1">I am satisfied with it.</label>
								
								</td>
								<td align="right">
								<font size="-1">strongly disagree</font>
								</td>
								<td>
								<input id="q1_1" type="radio" value="1" title="1 (strongly disagree)" name="q24">
								</td>
								<td>
								<input id="q1_2" type="radio" value="2" title="2" name="q24">
								</td>
								<td>
								<input id="q1_3" type="radio" value="3" title="3" name="q24">
								</td>
								<td>
								<input id="q1_4" type="radio" value="4" title="4" name="q24">
								</td>
								<td>
								<input id="q1_5" type="radio" value="5" title="5" name="q24">
								</td>
								<td>
								<input id="q1_6" type="radio" value="6" title="6" name="q24">
								<td>
								<input id="q1_7" type="radio" value="7" title="7 (strongly agree)" name="q24">
					           <td align="left">
								<font size="-1">strongly agree</font>
								</td>
								<td>
								<input id="q24" type="radio" value="-1" name="q24" title="For items that are not applicable, use: NA">
								</td>
				</tr>	
                <tr valign="top">
								<td align="right">
								<a name="q25">25.</a>
								</td>
								<td>
								<label for="q1">I would recommend it to a friend.</label>
								
								</td>
								<td align="right">
								<font size="-1">strongly disagree</font>
								</td>
								<td>
								<input id="q1_1" type="radio" value="1" title="1 (strongly disagree)" name="q25">
								</td>
								<td>
								<input id="q1_2" type="radio" value="2" title="2" name="q25">
								</td>
								<td>
								<input id="q1_3" type="radio" value="3" title="3" name="q25">
								</td>
								<td>
								<input id="q1_4" type="radio" value="4" title="4" name="q25">
								</td>
								<td>
								<input id="q1_5" type="radio" value="5" title="5" name="q25">
								</td>
								<td>
								<input id="q1_6" type="radio" value="6" title="6" name="q25">
								<td>
								<input id="q1_7" type="radio" value="7" title="7 (strongly agree)" name="q25">
					           <td align="left">
								<font size="-1">strongly agree</font>
								</td>
								<td>
								<input id="q25" type="radio" value="-1" name="q25" title="For items that are not applicable, use: NA">
								</td>
 				</tr>		
           <tr valign="top">
								<td align="right">
								<a name="q26">26.</a>
								</td>
								<td>
								<label for="q1">It is fun to use.</label>
								
								</td>
								<td align="right">
								<font size="-1">strongly disagree</font>
								</td>
								<td>
								<input id="q1_1" type="radio" value="1" title="1 (strongly disagree)" name="q26">
								</td>
								<td>
								<input id="q1_2" type="radio" value="2" title="2" name="q26">
								</td>
								<td>
								<input id="q1_3" type="radio" value="3" title="3" name="q26">
								</td>
								<td>
								<input id="q1_4" type="radio" value="4" title="4" name="q26">
								</td>
								<td>
								<input id="q1_5" type="radio" value="5" title="5" name="q26">
								</td>
								<td>
								<input id="q1_6" type="radio" value="6" title="6" name="q26">
								<td>
								<input id="q1_7" type="radio" value="7" title="7 (strongly agree)" name="q26">
					           <td align="left">
								<font size="-1">strongly agree</font>
								</td>
								<td>
								<input id="q26" type="radio" value="-1" name="q26" title="For items that are not applicable, use: NA">
								</td>
 				</tr>		
				<tr valign="top">
								<td align="right">
								<a name="q27">27.</a>
								</td>
								<td>
								<label for="q1">It works the way I want it to work.</label>
								
								</td>
								<td align="right">
								<font size="-1">strongly disagree</font>
								</td>
								<td>
								<input id="q1_1" type="radio" value="1" title="1 (strongly disagree)" name="q27">
								</td>
								<td>
								<input id="q1_2" type="radio" value="2" title="2" name="q27">
								</td>
								<td>
								<input id="q1_3" type="radio" value="3" title="3" name="q27">
								</td>
								<td>
								<input id="q1_4" type="radio" value="4" title="4" name="q27">
								</td>
								<td>
								<input id="q1_5" type="radio" value="5" title="5" name="q27">
								</td>
								<td>
								<input id="q1_6" type="radio" value="6" title="6" name="q27">
								<td>
								<input id="q1_7" type="radio" value="7" title="7 (strongly agree)" name="q27">
					           <td align="left">
								<font size="-1">strongly agree</font>
								</td>
								<td>
								<input id="q27" type="radio" value="-1" name="q27" title="For items that are not applicable, use: NA">
								</td>
 				</tr>	
                  <tr valign="top">
								<td align="right">
								<a name="q28">28.</a>
								</td>
								<td>
								<label for="q1">It is wonderful.</label>
								
								</td>
								<td align="right">
								<font size="-1">strongly disagree</font>
								</td>
								<td>
								<input id="q1_1" type="radio" value="1" title="1 (strongly disagree)" name="q28">
								</td>
								<td>
								<input id="q1_2" type="radio" value="2" title="2" name="q28">
								</td>
								<td>
								<input id="q1_3" type="radio" value="3" title="3" name="q28">
								</td>
								<td>
								<input id="q1_4" type="radio" value="4" title="4" name="q28">
								</td>
								<td>
								<input id="q1_5" type="radio" value="5" title="5" name="q28">
								</td>
								<td>
								<input id="q1_6" type="radio" value="6" title="6" name="q28">
								<td>
								<input id="q1_7" type="radio" value="7" title="7 (strongly agree)" name="q28">
					           <td align="left">
								<font size="-1">strongly agree</font>
								</td>
								<td>
								<input id="q28" type="radio" value="-1" name="q28" title="For items that are not applicable, use: NA">
								</td>
 				</tr>		
              <tr valign="top">
								<td align="right">
								<a name="q29">29.</a>
								</td>
								<td>
								<label for="q1">I feel I need to have it.</label>
								
								</td>
								<td align="right">
								<font size="-1">strongly disagree</font>
								</td>
								<td>
								<input id="q1_1" type="radio" value="1" title="1 (strongly disagree)" name="q29">
								</td>
								<td>
								<input id="q1_2" type="radio" value="2" title="2" name="q29">
								</td>
								<td>
								<input id="q1_3" type="radio" value="3" title="3" name="q29">
								</td>
								<td>
								<input id="q1_4" type="radio" value="4" title="4" name="q29">
								</td>
								<td>
								<input id="q1_5" type="radio" value="5" title="5" name="q29">
								</td>
								<td>
								<input id="q1_6" type="radio" value="6" title="6" name="q29">
								<td>
								<input id="q1_7" type="radio" value="7" title="7 (strongly agree)" name="q29">
					           <td align="left">
								<font size="-1">strongly agree</font>
								</td>
								<td>
								<input id="q29" type="radio" value="-1" name="q29" title="For items that are not applicable, use: NA">
								</td>
 				</tr>						
		<tr valign="top">
								<td align="right">
								<a name="q30">30.</a>
								</td>
								<td>
								<label for="q1">It is pleasant to use.</label>
								
								</td>
								<td align="right">
								<font size="-1">strongly disagree</font>
								</td>
								<td>
								<input id="q1_1" type="radio" value="1" title="1 (strongly disagree)" name="q30">
								</td>
								<td>
								<input id="q1_2" type="radio" value="2" title="2" name="q30">
								</td>
								<td>
								<input id="q1_3" type="radio" value="3" title="3" name="q30">
								</td>
								<td>
								<input id="q1_4" type="radio" value="4" title="4" name="q30">
								</td>
								<td>
								<input id="q1_5" type="radio" value="5" title="5" name="q30">
								</td>
								<td>
								<input id="q1_6" type="radio" value="6" title="6" name="q30">
								<td>
								<input id="q1_7" type="radio" value="7" title="7 (strongly agree)" name="q30">
					           <td align="left">
								<font size="-1">strongly agree</font>
								</td>
								<td>
								<input id="q30" type="radio" value="-1" name="q30" title="For items that are not applicable, use: NA">
								</td>
 				</tr>	
			
			</table><br/><br/>
	<center><input type = "submit" name= "survey_button" id= "survey_button" value = "Submit" ></center>	
 </form>
		<div id="msg"></div>
			<!--<p>List the most <b>negative</b> aspect(s):</p><br/>
             <ol id = "USE_LIST">
			     <li><input type = "text" class = "text_neg" name= "text_neg"></li>
			     <li><input type = "text" class = "text_neg" name= "text_neg"></li>
				   <li><input type = "text" class = "text_neg" name= "text_neg"></li>
       			 </ol><br/>
             <p>List the most <b>positive</b> aspect(s):</p><br/>
             <ol id = "USE_LIST">
			     <li><input type = "text" class = "text_pos" name= "text_neg" ></li>
			     <li><input type = "text" class = "text_pos" name= "text_neg"></li>
				   <li><input type = "text" class = "text_pos" name= "text_neg"></li>
			 </ol><br/>		
 <input type = "button" id = "maildata" name= "maildata"  value = "Mail Data" > <input type = "button" id = "commentall" name= "commentall"  value = "Comment All" ><br/><br/>-->
			 
</div>	 
</div><br/><br/>
</div><br/><br/>
    <div class = "footer"> 
   <footer><a href = "http://localhost/www21/admin_profile.php" class= "tooltip" title= "USE" >Go Back! </a><br/><br/><!-- <a href="#">Home</a> | <a href="http://localhost/www21/degree-plan.php">Degree Plan</a> | <a href="http://localhost/www21/degree-req.php">Degree Requirements</a>| <a href="http://localhost/www21/courses.php">Courses</a><br/><br/>-->
  Copyright &copy; <?php echo date("Y"); ?> UT Dallas Degree Planner </footer>
   </div>

</div>


</body>
</html> 