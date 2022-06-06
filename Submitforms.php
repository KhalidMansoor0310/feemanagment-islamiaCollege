<?php
$servername="localhost";
$username="root";
$password="";
$database="student";

$conn= mysqli_connect($servername,$username,$password,$database);

if($_SERVER['REQUEST_METHOD']=='POST'){


   
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

    $qer="INSERT INTO `studentrecords`(`sno`, `name`, `fname`, `rollno`, `department`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `tstamp`) VALUES ('value-1',' $name',' $fname',' $rollno','$department',' $s1',' $s2',' $s3',' $s4',' $s5',' $s6',' $s7',' $s8', current_timestamp())";

   if(mysqli_query($conn,$qer)){
       header('location:index.php');
      
   }
   
  
   
}
 
 

?>



<html>

<head>
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
    <link href="style/bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="style/jquery/jquery-3.6.0.min.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style/DataTables/DataTables-1.11.5/css/jquery.dataTables.min.css">
    <script src="style/DataTables/DataTables-1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="style/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="style/bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
    <style>
    .register {
        background: -webkit-linear-gradient(left, #3931af, #00c6ff);
        margin-top: 3%;
        padding: 3%;
    }

    .register-left {
        text-align: center;
        color: #fff;
        margin-top: 4%;
    }

    .register-left input {
        border: none;
        border-radius: 1.5rem;

        width: 60%;
        background: #f8f9fa;
        font-weight: bold;
        color: #383d41;
        margin-top: 30%;
        margin-bottom: 3%;
        cursor: pointer;
    }

    .register-right {
        background: #f8f9fa;
        border-top-left-radius: 10% 50%;
        border-bottom-left-radius: 10% 50%;
    }

    .register-left img {
        margin-top: 15%;
        margin-bottom: 5%;
        width: 25%;
        -webkit-animation: mover 2s infinite alternate;
        animation: mover 1s infinite alternate;
    }

    @-webkit-keyframes mover {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-20px);
        }
    }

    @keyframes mover {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-20px);
        }
    }

    .register-left p {
        font-weight: lighter;
        padding: 12%;
        margin-top: -9%;
    }

    .register .register-form {
        padding: 10%;
        margin-top: 3%;
    }

    .btnRegister {
        float: right;
        margin-top: 10%;
        border: none;
        border-radius: 1.5rem;
        padding: 2%;
        background: #0062cc;
        color: #fff;
        font-weight: 600;
        width: 50%;
        cursor: pointer;
    }

    .register .nav-tabs {
        margin-top: 3%;
        border: none;
        background: #0062cc;
        border-radius: 1.5rem;
        width: 28%;
        float: right;
    }

    .register .nav-tabs .nav-link {
        padding: 2%;
        height: 34px;
        font-weight: 600;
        color: #fff;
        border-top-right-radius: 1.5rem;
        border-bottom-right-radius: 1.5rem;
    }

    .register .nav-tabs .nav-link:hover {
        border: none;
    }

    .register .nav-tabs .nav-link.active {
        width: 100px;
        color: #0062cc;
        border: 2px solid #0062cc;
        border-top-left-radius: 1.5rem;
        border-bottom-left-radius: 1.5rem;
    }

    .register-heading {
        text-align: center;
        margin-top: 8%;
        margin-bottom: -15%;
        color: #495057;
    }
    input{
        text-transform:capitalize;
        
    }
    .pad{

        padding: auto;
        margin: 29px;
    }
    </style>
</head>

<body>
    <div class="container" style="text-align:center;" id="srecord"></div>
    <h1 style="text-align:center;">Add Student Record</h1>
    <div class="container register">
            <div class="row register-form " style="background:white;padding:20px;margin:20px; ">
                <div class="col-md-6" >
                    <form action="SubmitForms.php" method="post"  >
                        <div class="form-group pad" >
                            <input type="textbox" class="form-control" autocomplete="off" placeholder="Name" value="" name="name">
                        </div>
                        <div class="form-group pad">
                            <input type="number" class="form-control" autocomplete="off" placeholder="Roll No" value=""  name="rollno">
                        </div>
                        <div class="form-group pad">
                            <input type="number" class="form-control" autocomplete="off" placeholder="semester 1st" value="" name="s1">
                        </div>
                        <div class="form-group pad">
                            <input type="number" class="form-control" autocomplete="off" placeholder="semester 3rd" value="" name="s3">
                        </div>
                        <div class="form-group pad">
                            <input type="number" class="form-control" autocomplete="off" placeholder="semester 5th" value="" name="s5">
                        </div>
                        <div class="form-group pad">
                            <input type="number" class="form-control" autocomplete="off" placeholder="semester 7th" value="" name="s7">
                        </div>
                       


                </div>
                <div class="col-md-6">
                    <div class="form-group pad">
                        <input type="textbox" class="form-control" autocomplete="off" placeholder="F.Name" value="" name="fname">
                    </div>
                    <div class="form-group pad">
                        <input type="textbox"  name="department" class="form-control" autocomplete="off"
                            placeholder="Department" value="" >
                    </div>
                    <div class="form-group pad">
                        <input type="number" class="form-control" autocomplete="off" placeholder="semester 2nd" value="" name="s2">
                    </div>
                    <div class="form-group pad">
                        <input type="number" class="form-control" autocomplete="off" placeholder="semester 4th" value="" name="s4">
                    </div>
                    <div class="form-group pad">
                        <input type="number" class="form-control" autocomplete="off" placeholder="semester 6th" value="" name="s6">
                    </div>
                    <div class="form-group pad">
                        <input type="number" class="form-control" autocomplete="off" placeholder="semester 8th" value="" name="s8">
                    </div>
                    <br>
                    <input type="submit" class="form-control btn btn-primary" value="Add Record">
                 </form>
                </div>
            </div>
        </div>

</body>

</html>