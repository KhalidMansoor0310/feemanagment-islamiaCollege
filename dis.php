<?php
$servername="localhost";
$username="root";
$password="";
$database="student";

$conn= mysqli_connect($servername,$username,$password,$database);

$sno=$_GET['sno'];
$total=8*31000;
$pay=0;
$required=8*31000;


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,800&display=swap"
      rel="stylesheet"
    />
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Student Detail </title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body style="background:#f5f5f5">
  <?php
  $v=1;
$sql ="SELECT * FROM `studentrecords` WHERE sno='$sno'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){?>
    <h2 class="heading-primary">Student Fee Details</h2>
    <div class="plan-section">
      <div class="plan basic">
        <h2 class="plan-heading">Student Details</h2>
       <br>
        <ul class="plan-features">
          <li class="plan-item">Name</br> <span><b><?php echo (strtoupper($row['name']))?></b></span></li>
          <li class="plan-item">F.NAME</br> <span><b><?php echo (strtoupper($row['fname']))?></b></span></li>
          <li class="plan-item">ROLL NO</br> <span><b><?php echo ($row['rollno'])?></b></span></li>
          <li class="plan-item">DEPARTMENT</br> <span><b><?php echo (strtoupper($row['department']))?></b></span></li>
          
        </ul>
        <br><br><br>
        <a href="index.php" class="btn buy-now">Show Records</a>
      </div>

      <div class="plan pro">
        <h2 class="plan-heading">Semester Fee Details</h2>
       <BR>
        <ul class="plan-features">
          <li class="plan-item">1st Semester fee <br><span><b><?php
          if($row['s1']==''){
            echo ("0 <span> &#10060;</span>");
          }
          else{

          $pay +=$row['s1'];
          $required -=$row['s1'];
          echo ($row['s1'].'<span style="font-size:28px; color:green;">&#x2705;</span>');
          }
          ?></b></span></li>

          <li class="plan-item">2nd Semester fee <br><span><b><?php  if($row['s2']==""){
            echo ("0 <span> &#x274c;</span>");
          }
          else{

          $pay +=$row['s2'];
          $required -=$row['s2'];
          echo ($row['s2'].'<span style="font-size:28px; color:green;">&#x2705;</span>');
          }?></b></span></li>


          <li class="plan-item">3rd Semester fee <br><span><b><?php  if($row['s3']==''){
            echo ("0 <span> &#10060;</span>");
          }
          else{

          $pay +=$row['s3'];
          $required -=$row['s3'];
          echo ($row['s3'].'<span style="font-size:28px; color:green;">&#x2705;</span>');
          }?></b></span></li>


          <li class="plan-item">4th Semester fee <br><span><b><?php  if($row['s4']==''){
            echo ("0 <span> &#10060;</span>");
          }
          else{

          $pay +=$row['s4'];
          $required -=$row['s4'];
          echo ($row['s4'].'<span style="font-size:28px; color:green;">&#x2705;</span>');
          }?></b></span></li>


          <li class="plan-item">5th Semester fee <br><span><b><?php  if($row['s5']==''){
            echo ("0 <span> &#10060;</span>");
          }
          else{

          $pay +=$row['s5'];
          $required -=$row['s5'];
          echo ($row['s5'].'<span style="font-size:28px; color:green;">&#x2705;</span>');
          }?></b></span></li>


          <li class="plan-item">6th Semester fee <br><span><b><?php  if($row['s6']==''){
            echo ("0 <span> &#10060;</span>");
          }
          else{

          $pay +=$row['s6'];
          $required -=$row['s6'];
          echo ($row['s6'].'<span style="font-size:28px; color:green;">&#x2705;</span>');
          }?></b></span></li>


          <li class="plan-item">7th Semester fee <br><span><b><?php  if($row['s7']==''){
            echo ("0 <span> &#10060;</span>");
          }
          else{

          $pay +=$row['s7'];
          $required -=$row['s7'];
          echo ($row['s7'].'<span style="font-size:28px; color:green;">&#x2705;</span>');
          }?></b></span></li>


          <li class="plan-item">8th Semester fee <br><span><b><?php  if($row['s8']==''){
            echo ("0 <span> &#10060;</span>");
          }
          else{

          $pay +=$row['s8'];
          $required -=$row['s8'];
          echo ($row['s8'].'<span style="font-size:28px; color:green;">&#x2705;</span>');
          }?></b></span></li>

        </ul>
      </div>

      <div class="plan master">
        <h2 class="plan-heading">Required Due/Action</h2>
      <br>
        <ul class="plan-features">
          <li class="plan-item">Total Due</br> <span><b><?php echo $total ?></b></span></li>
          <li class="plan-item">Pay</br> <span><b><?php echo $pay ?></b></span></li>
          <li class="plan-item">Required</br> <span><b><?php echo $required ?></b></span></li>
          <li class="plan-item">Last updated</br> <span><b><?php echo $row['tstamp'] ?></b></span></li>
         <br>
        </ul>
        <br>
        <a href='edit.php?sno=<?php  echo $row['sno']?>' class="btn buy-now text-success">Update</a>
        <a href='delete.php?sno=<?php  echo $row['sno']?>' class="btn buy-now text-success">Delete</a>
      </div>
    </div>
    <?php
}
?>
  </body>
</html>
   
   