<?php
$servername="localhost";
$username="root";
$password="";
$database="student";
$sno=$_GET['sno'];
$conn= mysqli_connect($servername,$username,$password,$database);


$res=mysqli_query($conn,"select * from `studentrecords` where sno='$sno'");
$row=mysqli_fetch_assoc($res);
$name=$row['name'];
$fname=$row['fname'];
$rollno=$row['rollno'];
$department=$row['department'];
$s1=$row['s1'];
$s2=$row['s2'];
$s3=$row['s3'];
$s4=$row['s4'];
$s5=$row['s5'];
$s6=$row['s6'];
$s7=$row['s7'];
$s8=$row['s8'];


    mysqli_query($conn, "UPDATE `studentrecords` SET `name`='$name',`fname`='$fname',`rollno`='$rollno',`department`='$department',`s1`='$s1',`s2`='$s2',`s3`='$s3',`s4`='$s4',`s5`='$s5',`s6`='$s6',`s7`='$s7',`s8`='$s8',`tstamp`= current_timestamp() WHERE sno='$sno' ");
 
    header('location:index.php');
    die();

    mysqli_close($conn);
?>