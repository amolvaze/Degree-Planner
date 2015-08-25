<!-- Code developed by Author:- Amol Vaze (asv130130@utdallas.edu), Assignment -3 & 4, Due Date:- Aug 3, 2015, Time Noon -->
<?php
require 'db.php';
if(isset($_POST["survey_button"])){

// if(!empty($_POST['q']) && isset($_POST['q']) ) 

if( isset($_POST['q1']) ) 
{
$choice=$_POST['q1'];

$con=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($con,'amol_db') or die("cannot select DB");

  //mysql_query("insert into survey values('','$choice')");

   $sql= "insert into survey values('','$choice')";
   $result=mysqli_query($con, $sql);

if($result){
// echo "Account Successfully Created";
echo "<script type='text/javascript'>alert('Form has been submitted')</script>";
} else {
//echo "Failure!";
echo "<script type='text/javascript'>alert('Failure!')</script>";

}

//} 

} else {
// echo "All fields are required!";

echo "<script type='text/javascript'>alert('All fields are required!')</script>";

}
}
?>