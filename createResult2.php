<?php
include_once 'connection.php';

if (isset($_POST['btnAdd'])) {
    $department = $_POST['department'];
    $batch = $_POST['batch'];
    $exyear = $_POST['exyear'];
    $semi = $_POST['semi'];
    $stuID = $_POST['stuID'];
    $subcodes = $_POST['subcode'];
    $subnames = $_POST['subname'];
    $marks = $_POST['marks'];
    $exmyear = $_POST['exmYear'];
    $GPA = $_POST['GPA'];

    $checkStmt = $conn->prepare("SELECT StudentID FROM student WHERE StudentID = ?");
    $checkStmt->bind_param("s", $stuID);
    $checkStmt->execute();
    $checkResult = $checkStmt->get_result();

    if ($checkResult->num_rows === 0) {
        echo '<script>
            window.location.href = "createResult2.php";
            alert("Invalid Student ID.")
            </script>';
        exit();
    }

    $stmt = $conn->prepare("INSERT INTO results (StudentID, StuBatch, SubjectCode, Department, AccYear, AccSemester, Marks, ExaminationYear) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    $success = true;

    for ($i = 0; $i < count($subcodes); $i++) {
        $subcode = $subcodes[$i];
        $mark = $marks[$i];

        $stmt->bind_param("ssssssss", $stuID, $batch, $subcode, $department, $exyear, $semi, $mark, $exmyear);

        if (!$stmt->execute()) {
            $success = false;
            break;
        }
    }
    $stmt->close();

    if ($success) {
        echo '<script>
            window.location.href = "createResult2.php";
            alert("All records created successfully.")
            </script>';
    } else {
        echo '<script>
            window.location.href = "createResult2.php";
            alert("Error creating record.")
            </script>';
    }

    $sql = "INSERT INTO stugpa (StudentID, StudentBatch, Department, AccYear, AccSemester, GPA) 
    VALUES ('$stuID', '$batch', '$department', '$exyear', '$semi', '$GPA')";

    if (mysqli_query($conn, $sql)) {
        echo '<script>
            window.location.href = "createResult2.php";
            alert("GPA is added")
        </script>';
    } else {
        echo "Error: " . $sql . " " . mysqli_error($conn);
    }

    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>RESULTS (Sliate - Sammanthurai)</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

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

                        <li class="nav-item active dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Results
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:rgb(45, 45, 49);">
                                <a class="dropdown-item active" href="createResult2.php" style="color: darkgray; background-color:black;">Create New Results</a>
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
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Student
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:rgb(45, 45, 49);">
                                <a class="dropdown-item" href="createStudent2.php" style="color: darkgray;">Create New Student</a>
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
        <form id="createResultForm" action="createResult2.php" method="POST" class="needs-validation" novalidate>
            <h1>CREATE RESULTS</h1>
            <footer class="blockquote-footer"><cite title="Source Title">Sliate - Sammanthurai (ATI)</cite></footer>
            <br>
            <div>
                <div class="jumbotron" style="background: white; padding-bottom:10px">
                    <div align="center" class="row-12">
                        <footer class="blockquote-footer"><cite title="Source Title">Create results of students in this form</cite></footer>
                    </div>
                    <br>
                    <?php
                    $sql = "SELECT DISTINCT Department FROM student";
                    $result = $conn->query($sql);
                    ?>
                    <div class="form-group">
                        <label id="department" for="department">Department:</label>
                        <select name="department" class="form-control" onchange="disableDefaultOption(this)" required>
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
                    <?php
                    $sql = "SELECT DISTINCT Batch FROM student";
                    $result = $conn->query($sql);
                    ?>
                    <div class="form-group">
                        <label for="batch">Batch:</label>
                        <select name="batch" class="form-control" onchange="disableDefaultOption(this)" required>
                            <option value="">Select Batch</option>
                            <?php
                            while ($row = $result->fetch_assoc()) {
                                $stubatch = $row['Batch'];
                                echo "<option value='$stubatch'>$stubatch</option>";
                            }
                            ?>
                        </select>
                        <div class="invalid-feedback">Please select the student batch.</div>
                    </div>

                    <?php
                        $sql = "SELECT DISTINCT ExYear FROM exams";
                        $result = $conn->query($sql);
                    ?>
                    <div class="form-group">
                        <label for="exyear">Year:</label>
                        <select name="exyear" class="form-control" onchange="disableDefaultOption(this)">
                            <option value="">Select Year</option>
                            <?php
                                while ($row = $result->fetch_assoc()) {
                                    $year = $row['ExYear'];
                                    echo "<option value='$year'>$year</option>";
                                }
                            ?>
                        </select>
                        <div class="invalid-feedback">Please select the adademic year in this field.</div>
                    </div>
                    
                    <?php
                        $sql = "SELECT DISTINCT Semester FROM exams";
                        $result = $conn->query($sql);
                    ?>
                    <div class="form-group">
                        <label for="semi">Semester:</label>
                        <select name="semi" class="form-control" onchange="disableDefaultOption(this)">
                            <option value="">Select Semester</option>
                            <?php
                                while ($row = $result->fetch_assoc()) {
                                    $semi = $row['Semester'];
                                    echo "<option value='$semi'>$semi</option>";
                                }
                            ?>
                        </select>
                        <div class="invalid-feedback">Please select the adademic year in this field.</div>
                    </div>

                    <div class="form-group">
                        <label for="exmYear">Examination Year</label>
                        <input type="text" class="form-control" placeholder="Enter Examination Year" name="exmYear" required>
                        <div class="invalid-feedback">Please fill out the examination year in this field.</div>
                    </div>    
             
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <button type="submit" name="btnGo" class="btn btn-outline-light text-dark" onclick="showTable()">Go <i class="fa fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            if (isset($_POST['btnGo'])) {

                echo '<div class="jumbotron" style="background: white; padding-bottom:10px">';

                $department = $_POST['department'];
                $stubatch = $_POST['batch'];
                $sql = "SELECT StudentID FROM student WHERE Department = '$department' AND Batch = '$stubatch'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo '<select name="stuID" class="form-control" required>';
                    echo '<option value="">Select Student ID</option>';
                    while ($row = $result->fetch_assoc()) {
                        $stuID = $row['StudentID'];
                        echo "<option value='$stuID'>$stuID</option>";
                    }
                    echo '</select>';
                    echo '<div class="invalid-feedback">Please select the student ID.</div>';
                    echo '<br>';
                }
                echo '<div class="row">';
                echo '<div class="col-12">';
                echo '<table class="table table-hover">';
                echo '<thead>';
                echo '<tr class="thead">';
                echo '<th>Code</th>';
                echo '<th>Subject</th>';
                echo '<th>Marks</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';

                $department = $_POST['department'];
                $batch = $_POST['batch'];
                $exyear = $_POST['exyear'];
                $semi = $_POST['semi'];
                $exmyear = $_POST['exmYear'];

                $sql = "SELECT SubCode, SubName FROM subjects WHERE Department = '$department' AND ExYear = '$exyear' AND Semester = '$semi'";
                $results = $conn->query($sql);

                if ($results->num_rows > 0) {
                    while ($row = $results->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td><input type="hidden" name="subcode[]" value="' . $row['SubCode'] . '">' . $row['SubCode'] . '</td>';
                        echo '<td><input type="hidden" name="subname[]" value="' . $row['SubName'] . '">' . $row['SubName'] . '</td>';
                        echo '<td>';
                        echo '<select class="form-control" name="marks[]" id="marks[]">';
                        echo '<option>A+</option>';
                        echo '<option>A</option>';
                        echo '<option>A-</option>';
                        echo '<option>B+</option>';
                        echo '<option>B</option>';
                        echo '<option>B-</option>';
                        echo '<option>C+</option>';
                        echo '<option>C</option>';
                        echo '<option>C-</option>';
                        echo '<option>I(SE)</option>';
                        echo '<option>AB</option>';
                        echo '</select>';
                        echo '<div class="invalid-feedback">Please select the year in this field.</div>';
                        echo '</td>';
                        echo '</tr>';
                    }
                }
                echo '</tbody>';
                echo '</table>';
                echo '<input name="GPA" type="text" class="form-control" placeholder="Enter Final GPA" required>';
                echo '<div class="invalid-feedback">Please enter GPA.</div>';
                echo '<br>';
                echo '<div class="row">';
                echo '<div class="col-6"><div align="left"><a href="createResult.php" class="btn btn-outline-light text-dark" id="btnRestart"> <i class="fa fa-angle-left"></i> Restart</a></div></div>';
                echo '<div class="col-6"><div align="right"><button type="submit" name="btnAdd" class="btn btn-success">Add </button></div></div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            echo <<<SCRIPT
            <script>
                document.addEventListener('DOMContentLoaded', function() {

                    // Function to hide input fields and select fields
                    function hideFields() {
                        for (var i = 0; i < formGroups.length; i++) {
                            formGroups[i].style.display = 'none';
                        }
                    }

                    // Function to show the input fields and select fields
                    function showFields() {
                        for (var i = 0; i < formGroups.length; i++) {
                            formGroups[i].style.display = 'block';
                        }
                    }

                    // Attach event listener to the Go button
                    var goButton = document.querySelector('button[name="btnGo"]');
                    goButton.addEventListener('click', function() {
                        showTable();
                    });

                    // Show the fields on page load if all values are selected
                    var selectedDepartment = document.getElementsByName("department")[0].value;
                    var selectedBatch = document.getElementsByName("batch")[0].value;
                    var selectedExYear = document.getElementsByName("exmYear")[0].value;
                    var selectedSemester = document.getElementsByName("semester")[0].value;
                    var selectedExmYear = document.getElementsByName("exmYear")[0].value;

                    if (selectedDepartment && selectedBatch && selectedExYear && selectedSemester && selectedExmYear) {
                        showTable();
                    }
                });
            </script>
            SCRIPT;
            ?>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
  var goButton = document.querySelector('button[name="btnGo"]');
  goButton.addEventListener('click', function() {
    var department = document.getElementsByName("department")[0].value;
    var batch = document.getElementsByName("batch")[0].value;
    var exyear = document.getElementsByName("exyear")[0].value;
    var semi = document.getElementsByName("semi")[0].value;
    var exmYear = document.getElementsByName("exmYear")[0].value; // Get the exmYear value

    sessionStorage.setItem('selectedDepartment', department);
    sessionStorage.setItem('selectedBatch', batch);
    sessionStorage.setItem('selectedExYear', exyear);
    sessionStorage.setItem('selectedSemester', semi);
    sessionStorage.setItem('selectedExmYear', exmYear); // Store the exmYear value
  });

  var selectedDepartment = sessionStorage.getItem('selectedDepartment');
  var selectedBatch = sessionStorage.getItem('selectedBatch');
  var selectedExYear = sessionStorage.getItem('selectedExYear');
  var selectedSemester = sessionStorage.getItem('selectedSemester');
  var selectedExmYear = sessionStorage.getItem('selectedExmYear'); // Retrieve the exmYear value

  if (selectedDepartment && selectedBatch && selectedExYear && selectedSemester && selectedExmYear) {
    document.getElementsByName("department")[0].value = selectedDepartment;
    document.getElementsByName("batch")[0].value = selectedBatch;
    document.getElementsByName("exyear")[0].value = selectedExYear;
    document.getElementsByName("semi")[0].value = selectedSemester;
    document.getElementsByName("exmYear")[0].value = selectedExmYear; // Set the exmYear value
  }
});

</script>


    <br><br>

    <div class="container-fluid">
    <div class="container">
        <div>
            <button type="button" class="btn btn-primary"><i class="fa fa-facebook-square"></i> Facebook <a href="#"></a></button>
            <button type="button" class="btn btn-info"><i class="fa fa-twitter-square"></i> Twitter <a href="#"></a></button>
            <button type="button" class="btn btn-danger"><i class="	fa fa-google-plus"></i><a href="#"></a></button> 
            <button type="button" class="btn btn-info"><i class="fa fa-linkedin-square"></i><a href="#"></a></button>   
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