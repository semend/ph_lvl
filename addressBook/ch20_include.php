//ch20_include.php
<?php
function doDB() {
global $mysqli;
//connect to server and select database; you may need it
$mysqli = mysqli_connect("localhost", "root", "b dgW123!", "php_basic_projects");

//if connection fails, stop script execution
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
}
?>
