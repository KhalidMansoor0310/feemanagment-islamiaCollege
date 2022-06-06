<?php
$servername="localhost";
$username="root";
$password="";
$database="student";

$conn= mysqli_connect($servername,$username,$password,$database);


   
    $name=$_POST['name'];
    $fname=$_POST['fname'];
    $rollno=$_POST['rollno'];
    $department=$_POST['department'];
    $s1=$_POST['s1'];
    $s2=$_POST['s2'];
    $s3=$_POST['s3'];
    $s4=$_POST['s4'];
    $s5=$_POST['s5'];
    $s6=$_POST['s6'];
    $s7=$_POST['s7'];
    $s8=$_POST['s8'];

    $qer="INSERT INTO `studentrecords`(`sno`, `name`, `fname`, `rollno`, `department`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `tstamp`) VALUES ('value-1',' $name',' $fname',' $rollno','$department',' $s1',' $s2',' $s3',' $s4',' $s5',' $s6',' $s7',' $s8','value-14')";

   mysqli_query($conn,$qer);
   
  
   
   header('location:Submitforms.php');
   document.getElementById("Submitforms.php/#srecord").innerHTML="record submitted";
   die();

?>

