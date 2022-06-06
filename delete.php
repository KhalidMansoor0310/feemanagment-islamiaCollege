<?php
$servername="localhost";
$username="root";
$password="";
$database="student";

$conn= mysqli_connect($servername,$username,$password,$database);

$sno=$_GET['sno'];
$qu="delete from `studentrecords` where sno='$sno'";
mysqli_query($conn,$qu);
header('location:index.php');
die();

?>