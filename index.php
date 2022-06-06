<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "student";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("sorry we failed to connect:");
}


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="style/bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="style/jquery/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style/DataTables/DataTables-1.11.5/css/jquery.dataTables.min.css">
    <script src="style/DataTables/DataTables-1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="style/DataTables/DataTables-1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

    <link rel="stylesheet" href="style.css">

    <title>Student Records</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-success bg-success p-3 ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Online Fee Management System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="Submitforms.php">Add Record</a>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <div class="container">
        <h1 style=" align-content: center; text-align:center;">Student Records</h1>
    </div>
    <div class="container shadow p-5 my-3">
        <table class="table" border="1" id="myTable" style="background:white;  color:black">
            <thead>
                <tr style="background:blue;color:white;">
                    <th scope="col">S.NO</th>
                    <th scope="col">ROLL NO</th>
                    <th scope="col">NAME</th>
                    <th scope="col">FNAME</th>


                    <th scope="col">DEPARTMENT</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody style="color:black;">
                <?php
                $v = 1;
                $sql = "SELECT `sno`, UPPER(`name`) AS name ,upper(`fname`) AS fname ,UPPER(`rollno`) AS rollno ,UPPER(`department`) AS department FROM `studentrecords`";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <th scope='row'><?php echo $v ?></th>
                        <th scope='row'><?php echo  $row['rollno'] ?></th>
                        <th scope='row'><?php echo  $row['name'] ?></th>

                        <th scope='row'><?php echo  $row['fname'] ?></th>
                        <th scope='row'><?php echo  $row['department'] ?></th>
                        <th scope='row'><a href='dis.php?sno=<?php echo $row['sno'] ?>'>view more</a></th>
                    </tr>
                <?php
                    $v++;
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="style/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="style/bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>