<?php
include_once 'connection.php';
if (isset($_POST['btnCreate'])) {
    $stuid = $_POST['stuID'];
    $fname = $_POST['firstName'];
    $lname = $_POST['lastfName'];
    $nic = $_POST['nic'];
    $stumail = $_POST['stuMail'];
    $distric = $_POST['distric'];
    $city = $_POST['city'];
    $contact = $_POST['contact'];
    $studepartment = $_POST['Department'];
    $stubatch = $_POST['stuBatch'];
    
    $query = "SELECT DepID FROM department WHERE DepID = '$studepartment'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 0) {
        // DepID doesn't exist in the department table

        echo '<script>
            window.location.href = "createStudent2.php";
            alert("Error: Invalid Department ID. Please choose a valid Department ID.")
        </script>';
    } else {
        // DepID exists in the department table, proceed with the insert query
        $insertQuery = "INSERT INTO student (StudentID, FirstName, LastName, NIC, Mail, Distric, City, Contact, Department, Batch)
                        VALUES ('$stuid', '$fname', '$lname', '$nic', '$stumail', '$distric', '$city', '$contact', '$studepartment', '$stubatch')";
        if (mysqli_query($conn, $insertQuery)) {
            echo '<script>
            window.location.href = "createStudent2.php";
            alert("New record created successfully.")
            </script>';
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>RESULTS (Sliate - Sammanthurai)</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</head>
<body>
    
<div class="container-fluid">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="padding: 1px;">
        
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
               
            <div class="topnav" id="navbarSupportedContent"></div>
                <div class="topnav-right">
                    <ul class="navbar-nav mr-auto">
                        <li>
                            <a class="nav-link" href="#"> | </a>
                        </li>
                        <li>
                            <a class="nav-link" href="loginAdmin.php" style="color:white"> <i class="fa fa-user-circle-o"></i> Login <span class="sr-only">(current)</span></a> 
                        </li>
                        <li>
                            <a class="nav-link" href="#"> | </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    </div>

<div class="container-fluid">

    <div class="form-group" align="center" style="background-color: rgb(45, 45, 49);">

        <img src="Images/ATIlogo.png" alt="" width="800px">

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="padding: 1px;" id="navbar">
        
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                 
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="adminHome.php"><i class="fa fa-fw fa-home"></i> Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Results
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:rgb(45, 45, 49);">
                                <a class="dropdown-item" href="createResult2.php" style="color: darkgray;">Create New Results</a>
                                <a class="dropdown-item" href="showResult2.php" style="color: darkgray;">Edit Results</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Exam Calendars
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:rgb(45, 45, 49);">
                                <a class="dropdown-item disabled" href="createExamCalendar.php" style="color: darkgray;">Will soon: Create New Calendar</a>
                                <a class="dropdown-item disabled" href="showExamCaledar.php" style="color: darkgray;">Will soon: Edit Calendar</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Subjects
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:rgb(45, 45, 49);">
                                <a class="dropdown-item" href="createSubject2.php" style="color: darkgray;">Create New Subject</a>
                                <a class="dropdown-item" href="showSubject2.php" style="color: darkgray;">Edit Subject</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Exams
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:rgb(45, 45, 49);">
                                <a class="dropdown-item" href="createExam2.php" style="color: darkgray;">Create New Exam</a>
                                <a class="dropdown-item" href="showExam2.php" style="color: darkgray;">Edit Exam</a>
                            </div>
                        </li>
                        
                        <li class="nav-item active dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Student
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:rgb(45, 45, 49);">
                                <a class="dropdown-item active" href="createStudent2.php" style="color: darkgray;; background-color:black;">Create New Student</a>
                                <a class="dropdown-item" href="showStudent2.php" style="color: darkgray;">Edit Student</a>
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search here..." aria-label="Search" style="height: 25px;">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="height: 25px; padding-top: 2px; padding-bottom: 2px; padding-left: 5px; padding-right: 5px; font-size:small;">
                            Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</div>

    <br>
    <div class="container">
        <div class="jumbotron">
            <h1>CREATE STUDENT</h1>      
            <footer class="blockquote-footer"><cite title="Source Title">Sliate - Sammanthurai (ATI)</cite></footer></blockquote>
            <br>
            <form action="createStudent2.php" method="POST" class="needs-validation" novalidate>
                <div class="jumbotron" style="background: white; padding-bottom:10px">

                    <div align="center" class="row-12">
                        <footer class="blockquote-footer"><cite title="Source Title">Create new student in this form</cite></footer></blockquote>
                    </div>
                    <br>
                    
                    <div class="form-group">
                        <label for="stuID">Student ID:</label>
                        <input type="text" class="form-control" placeholder="SAM/Department/Batch/F or PT/0000" name="stuID" required>
                        <div class="invalid-feedback">Please fill out the student's id this field.</div>
                    </div>

                    <div class="form-group">
                        <label for="firstName">First Name:</label>
                        <input type="text" class="form-control" placeholder="Enter First Name" name="firstName" required>
                        <div class="invalid-feedback">Please fill out the student first name in this field.</div>
                    </div>

                    <div class="form-group">
                        <label for="lastfName">Last Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Last Name" name="lastfName" required>
                        <div class="invalid-feedback">Please fill out the student last in this field.</div>
                    </div>

                    <div class="form-group">
                        <label for="nic">Student NIC:</label>
                        <input type="text" class="form-control" placeholder="Enter NIC Number" name="nic" required>
                        <div class="invalid-feedback">Please fill out the student NIC in this field.</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="stuMail">Student Mail:</label>
                        <input type="email" class="form-control" placeholder="Enter Mail" name="stuMail" required>
                        <div class="invalid-feedback">Please fill out staff mail this field.</div>
                    </div>

                    <div class="form-group">
                        <label for="stuAddress">Student Address:</label>
                    </div>
                    <div class="form-group">
                        <label for="distric">District:</label>
                        <input type="text" class="form-control" placeholder="Enter Street" name="distric" required>
                        <div class="invalid-feedback">Please fill out the distric in this field.</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="city">City:</label>
                        <input type="text" class="form-control" placeholder="Enter City" name="city" required>
                        <div class="invalid-feedback">Please fill out the city in this field.</div>
                    </div> 

                    <div class="form-group">
                        <label for="contact">Student Contact:</label>
                        <input type="text" class="form-control" placeholder="Enter Contact Number" name="contact" required>
                        <div class="invalid-feedback">Please fill out the student contact in this field.</div>
                    </div>
                    
                    <?php
                        $sql = "SELECT DepID FROM department";
                        $result = $conn->query($sql);
                    ?>
                    <div class="form-group">
                        <label for="Department">Department:</label>
                        <select name="Department" class="form-control" onchange="disableDefaultOption(this)">
                            <option value="">Select Department</option>
                            <?php
                            while ($row = $result->fetch_assoc()) {
                                $depID = $row['DepID'];
                                echo "<option value='$depID'>$depID</option>";
                            }
                            ?>
                        </select>
                        <div class="invalid-feedback">Please select the subject's department this field.</div>
                    </div>

                    <?php
                        $sql = "SELECT ExYear, Semester FROM exams";
                        $result = $conn->query($sql);
                    ?>

                    <div class="form-group">
                        <label for="stuBatch">Student Batch:</label>
                        <input type="text" class="form-control" placeholder="Enter Batch" name="stuBatch" required>
                        <div class="invalid-feedback">Please fill out student batch this field.</div>
                    </div>
                    <br>

                    <div class="form-group">
                        <button type="submit" name="btnCreate" class="btn btn-outline-primary">Create</button>
                    </div>

                
                    <script>
                        function disableDefaultOption(selectElement) {
                            var defaultOption = selectElement.querySelector('option[value=""]');
                            defaultOption.disabled = true;
                        }
                    </script>
                    
                <script>
                // Disable form submissions if there are invalid fields
                    (function() {
                    'use strict';
                        window.addEventListener('load', function() {
                            // Get the forms we want to add validation styles to
                            var forms = document.getElementsByClassName('needs-validation');
                            // Loop over them and prevent submission
                            var validation = Array.prototype.filter.call(forms, function(form) {
                            form.addEventListener('submit', function(event) {
                                if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                                }
                                form.classList.add('was-validated');
                            }, false);
                            });
                        }, false);
                    })();
                </script>
                </div>
            </form> 
        </div>
    </div>


    <br><br>

    <div class="container-fluid">
    <div class="container">
        <div class="form-group">
            <div>
                <button type="button" class="btn btn-primary"><i class="fa fa-facebook-square"></i> Facebook <a href="#"></a></button>
                <button type="button" class="btn btn-info"><i class="fa fa-twitter-square"></i> Twitter <a href="#"></a></button>
                <button type="button" class="btn btn-danger"><i class="	fa fa-google-plus"></i><a href="#"></a></button> 
                <button type="button" class="btn btn-info"><i class="fa fa-linkedin-square"></i><a href="#"></a></button>   
            </div>
        </div>
    </div>

    <br><br><br><br>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="padding: 1px;">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
               
            <div class="topnav" id="navbarSupportedContent">
                <div class="topnav-centered"> 
                    <ul class="navbar-nav mr-auto">
                        <li>
                            <a class="nav-link" href="#"> | </a>
                        </li>
                        <li>
                            <a class="nav-link" href="http://sliate.ac.lk/" style="color:white">© 2023 SLIATE. All Rights Reserved. Powered by SLIATE
                                <span class="sr-only">(current)</span></a>
                        </li>
                        <li>
                            <a class="nav-link" href="#"> | </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    </div>

    <br><br><br><br><br><br>

</body>
</html>