<!-- Code developed by Author:- Amol Vaze (asv130130@utdallas.edu), Assignment -3 & 4, Due Date:- Aug 3, 2015, Time Noon -->
<?php 

$db_host        = 'localhost';
$db_user        = 'root';
$db_pass        = '';
$db_database    = 'amol_db'; 

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_database);
/* checking the database connection */
if (mysqli_connect_errno()) {
printf("Could not connect to database!: %s\n", mysqli_connect_error());
exit();
}




?>