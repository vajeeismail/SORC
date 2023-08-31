<?php
include_once 'connection.php';

// Check if the form is submitted
if (isset($_POST['btnSubmit'])) {
    $selectedDepartment = $_POST['selectedDepartment'];
    $stuID = $_POST['stuID'];

    // Redirect to the resultsFormStudent.php page with the selected details in the URL
    header("Location: reportFormStudent.php?department=$selectedDepartment&stuID=$stuID");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULTS (Sliate - Sammanthurai)</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    
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
                            <a class="nav-link" href="loginMainAdmin.php" style="color:white"> <i class="fa fa-user-circle-o"></i> Login <span class="sr-only">(current)</span></a> 
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
                            <a class="nav-link" href="home.php"><i class="fa fa-fw fa-home"></i> Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="resultsEnterStudent.php">Results</a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="reportEnterStudent.php">Report</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="" onclick="showAlert(event)">Exam Calendar</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Courses
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:rgb(45, 45, 49);">
                                <a class="dropdown-item" href="http://www.sliate.ac.lk/course/hndit" style="color: darkgray;">HNDA</a>
                                <a class="dropdown-item" href="http://www.sliate.ac.lk/course/hnda" style="color: darkgray;">HNDIT</a>
                                <a class="dropdown-item" href="http://www.sliate.ac.lk/course/hnd-in-english" style="color: darkgray;">HNDE</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item disabled" href="#">Will soon...</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="http://www.sliate.ac.lk/contact/contact">Contact</a>
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

<script>
    function showAlert(event) {
        event.preventDefault();
        Swal.fire({
            icon: 'info',
            title: '<span style="color: gold;">THE FEATURES NOT UPDTED</span>',
            html: '<span style="color: grey; text-shadow: 1px 1px 2px #000000;">It will be updated soon...</span>',
            confirmButtonText: 'OK',
            customClass: {
                popup: 'custom-popup-class',
                title: 'custom-title-class',
                content: 'custom-content-class',
                confirmButtonText: 'custom-confirm-button-class'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.close(); // Close the alert when "OK" button is clicked
            }
        });
    }
</script>

<style>
    /* Custom styles */
    .custom-popup-class {
        background-color:black;
        border: 5px solid grey;
        border-radius: 20px;
    }
    .custom-title-class {
        
    }
    .custom-content-class {
        color: black;
        text-shadow: 1px 1px 2px #000000;
    }
    .custom-confirm-button-class {
        color: goldenrod;
    }
</style>

    <br><br>

    <form id="resultForm" action="" method="POST">
        <div class="container">
            <div class="form-group">
                <div>
                    <p style="font-size: 35px;"> <i class="fa fa-graduation-cap"></i> Advanced Technological Institute Samanthurai <p>
                    <div class="progress" style="height: 2px; width: 820px;">
                        <div class="progress-bar bg-dark progress-bar-striped" style="width: 580px; height: 3px;"></div>
                    </div>      
                </div>
            </div>
            <br><br><br>
            <div class="container p-3 my-3 border">    
                <div class="jumbotron" style="background-color:whitesmoke;">
                    <div align="center" class="form-group">
                        <p style="font-size: 25px;">SLIATE EXAMINATION RESULTS - STUDENTES' CURRENT REPORT</p>
                    </div>
                    <br><br>

                    <div class="row">
                        <div class="col-sm-4">
                            <?php
                            $sql = "SELECT DISTINCT Department FROM student";
                            $result = $conn->query($sql);
                            ?>
                            <div class="form-group">
                                <label id="selectedDepartmentt" for="department">Department:</label>
                                <select name="selectedDepartment" id="selectedDepartment" class="form-control">
                                    <option value="">Select Department</option>
                                    <?php
                                    while ($row = $result->fetch_assoc()) {
                                        $dep = $row['Department'];
                                        echo "<option value='$dep'>$dep</option>";
                                    }
                                    ?>
                                </select>
                                <div class="invalid-feedback">Please select the department.</div>
                            </div>
                        </div>

                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="stuID">Reg.No:</label>
                                <input type="text" name="stuID" class="form-control" placeholder="Enter registration number here" required>
                                <div class="invalid-feedback">Please enter student ID:</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">    
                        <div class="form-group" align="right">
                            <button type="reset" value="Change" class="btn btn-outline-danger" style="width: 100px;">Reset</button>
                        </div>  
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <button type="submit" name="btnSubmit" value="Login" class="btn btn-outline-primary" style="width: 100px;">Submit</button>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </form>

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