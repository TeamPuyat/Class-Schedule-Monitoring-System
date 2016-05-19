<?php
require '../connection.php';
session_start();
if(isset($_SESSION['Room'])){
	$php = $_SESSION['Room'].'.php#roomtables';
}
$Section=$_SESSION['Section'];
$Dept=$_SESSION['Dept'];
$Subject_code=$_SESSION['Subject_code'];
$Year=$_SESSION['Year'];
$Instructor=$_SESSION['Instructor'];
$Time_start=$_SESSION['Time_start'];
$Room=$_SESSION['Room'];
$Day=$_SESSION['Day'];
$DELETE = "DELETE FROM schedule_table where Room='$Room' AND Day='$Day' AND Time_start='$Time_start' AND Section='$Section' AND Instructor='$Instructor' AND Year='$Year'";
$query6_5=mysqli_query($db, $DELETE);
header("Location: $php");
?>