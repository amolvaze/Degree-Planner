<!-- Code developed by Author:- Amol Vaze (asv130130@utdallas.edu), Assignment -3 & 4, Due Date:- Aug 3, 2015, Time Noon -->
<?php 
session_start();
unset($_SESSION['sess_user']);
// destroying cookie
setcookie("user", $_SESSION['sess_user'], strtotime( '-5 days' ), '/');
session_destroy();
// header("location:login.php");
  header("location:index.php");
   
?>