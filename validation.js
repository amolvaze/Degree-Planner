// <!-- Code developed by Author:- Amol Vaze (asv130130@utdallas.edu), Assignment -3 & 4, Due Date:- Aug 3, 2015, Time Noon -->
// This function does client side validation of home page login
function validateForm(){

 var reg = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
  if(document.forms['Login_Form'].Username.value == "" || document.forms['Login_Form'].Password.value == "" || !reg.test(document.forms['Login_Form'].Username.value))
  {
    alert("Please fill the valid details!");
    return false;
  }
  
  
    return true;
	
	
}

// This function does validation for Ack Form
function validateAckForm(){

 var reg = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
  if(document.forms['Ack_Form'].studentname.value == "" || document.forms['Ack_Form'].UTDID.value == "" || document.forms['Ack_Form'].semester.value == ""  || document.forms['Ack_Form'].sign1.value == ""  || document.forms['Ack_Form'].sign2.value == "" )
  {
    alert("Please fill the valid details!");
    return false;
  }
  
  
    return true;
	
	
}

// This function does client side validation of Course Planner login
function validateForm1(){

 var reg = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
  if(document.forms['Login_Form1'].Username.value == "" || document.forms['Login_Form1'].Password.value == "" || !reg.test(document.forms['Login_Form1'].Username.value))
  {
    alert("Please fill the valid details!");
    return false;
  }
  
  
    return true;
	
	
}

// This function does client side validation of Profile page
function validateForm2(){

  // var reg = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
          //var reg = /^[0-9]+$/igm; 
  if(document.forms['Planner_Form'].classid.value == "" || document.forms['Planner_Form'].grade.value == "" )
  {
    alert("Please select above to proceed!");
    return false;
  }
  
    return true;
}

// function to validate classid should be only numbers &  not any characters

function isNumeric()  
   {  
			var numexp = /^[0-9]+$/;
			if(document.forms['Planner_Form'].classid.value.match(numexp)){
			return true;
					}
					
						else{
						alert("Entry must be a valid number");
						
						return false;
						}
   }   

// This function does client side validation of radio buttons for choosing degree tracks
function chkradio()
{
var buttons = document.Login_Form1.radio;
for (var i=0; i<buttons.length; i++) {
if (buttons[i].checked)
// break;
return true;
}
if (i==buttons.length)
 alert("Please Select Your Track!");
// alert("Radio Button " + (i+1) + " is checked.");
return false;
}

// This function does client side validation of username of Registration form
function chkRegForm(){

 var reg = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
  if( !reg.test(document.forms['Registration_Form'].user.value))
  {
    alert("Please fill the valid username!");
    return false;
  }
  
  
    return true;
	
	
}

// This function does the client side password & confirm password match validation

function passcheck() {
        var pass1 = document.getElementById("regpassword").value;
        var pass2 = document.getElementById("confirm_pass").value;
        if (pass1 != pass2) {
            alert("Passwords Do not match");
            //document.getElementById("pass1").style.backgroundColor = "#E34234";
            //document.getElementById("pass2").style.backgroundColor = "#E34234";
		return false;
        }
        else {
            alert("Passwords Match!!!");
			return true;
        }
		
    }

// This function does client side validation of check box buttons for choosing degree tracks

function checkCheckBoxes() {
	if (document.Login_Form1.checkbox1.checked == false && document.Login_Form1.checkbox2.checked == false && document.Login_Form1.checkbox3.checked == false && document.Login_Form1.checkbox4.checked == false && document.Login_Form1.checkbox5.checked == false && document.Login_Form1.checkbox6.checked == false )
	{
		alert ('You didn\'t choose any of the checkboxes!');
		return false;
	} 
	
	else { 	
		return true;
	}
}

// This function navigates to new page on selecting drop down list on Degree Plan page.

function gotoPage(select){
    window.location = select.value;
}

// This function does client side validation of radio buttons for survey form.
function chksurveyradio()
{
var buttons = document.survey.radio;
for (var i=0; i< buttons.length; i++) {
if (buttons[i].checked)
// break;
return true;
}
if (i==buttons.length)
 alert("Please Select at least one!");
// alert("Radio Button " + (i+1) + " is checked.");
return false;
}

