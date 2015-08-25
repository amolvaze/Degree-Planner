<!-- Code developed by Author:- Amol Vaze (asv130130@utdallas.edu), Assignment -3 & 4, Due Date:- Aug 3, 2015, Time Noon -->
<?php
require 'db.php';
if(isset($_POST["delete_user"])){

if(!empty($_POST['user']) && !empty($_POST['pass']) && !empty($_POST['name']) && !empty($_POST['degId'])) {
$user=$_POST['user'];
$pass=$_POST['pass'];
$name=$_POST['name'];
$degId=$_POST['degId'];
//$pass= md5($pass);
$con=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($con,'amol_db') or die("cannot select DB");

$sql="DELETE from user where name='".$name."' AND username='".$user."' AND password='".$pass."' AND degId='".$degId."' ";

$result=mysqli_query($con, $sql);

if($result){
// echo "Account Successfully Created";
echo "<script type='text/javascript'>alert('Account Successfully Deleted')</script>";
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