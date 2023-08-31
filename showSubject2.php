<?php
    include_once 'connection.php';
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

                        <li class="nav-item active dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Subjects
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:rgb(45, 45, 49);">
                                <a class="dropdown-item" href="createSubject2.php" style="color: darkgray;">Create New Subject</a>
                                <a class="dropdown-item active" href="showSubject2.php" style="color: darkgray; background-color:black;">Edit Subject</a>
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
    <?php $results = mysqli_query($conn, "SELECT * FROM subjects"); ?>
    <div id="includedContent"></div>
    <div class="jumbotron" style="background: smoke; padding-bottom:10px">
        <div class="row-12">
            <h1>SUBJECTS</h1>
            <footer class="blockquote-footer"><cite title="Source Title">Sliate - Sammanthurai (ATI)</cite></footer></blockquote>
        </div>
        <br>
        <div class="jumbotron" style="background: white; padding-bottom:10px">
            <div align="center" class="row-12">
                <footer class="blockquote-footer"><cite title="Source Title">The form shows records of subjects</cite></footer></blockquote>
            </div>
            <br>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr class="thead-dark">
                            <th>Code</th>
                            <th>Subject</th>
                            <th>GPA/NGPA</th>
                            <th>Credit</th>
                            <th>Department</th>
                            <th>Year</th>
                            <th>Semester</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_array($results)) { ?>
                            <tr>
                                <td><?php echo $row['SubCode']; ?></td>
                                <td><?php echo $row['SubName']; ?></td>
                                <td><?php echo $row['SubType']; ?></td>
                                <td><?php echo $row['Credit']; ?></td>
                                <td><?php echo $row['Department']; ?></td>
                                <td><?php echo $row['ExYear']; ?></td>
                                <td><?php echo $row['Semester']; ?></td>
                                <td>
                                <button class="btn btn-warning" onclick="openUpdateForm(
                                    '<?php echo $row['SubCode']; ?>',
                                    '<?php echo $row['SubName']; ?>',
                                    '<?php echo $row['SubType']; ?>',
                                    '<?php echo $row['Credit']; ?>',
                                    '<?php echo $row['Department']; ?>',
                                    '<?php echo $row['ExYear']; ?>',
                                    '<?php echo $row['Semester']; ?>'
                                    )">Edit
                                </button>
                                </td>
                                <td>
                                    <a href="deleteSubject2.php?delete=<?php echo $row['SubCode']; ?>" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this subject record?')">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <div class="modal fade" id="updateFormModal" tabindex="-1" role="dialog" aria-labelledby="updateFormModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="updateFormModalLabel">Update Subject Information</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="updateSubject.php" method="POST">
                                    <div class="form-group">
                                        <label for="subCode">Subject Code:</label>
                                        <input type="text" class="form-control" id="subCode" name="subCode" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="subName">Subject Name:</label>
                                        <input type="text" class="form-control" id="subName" name="subName" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="subType">Subject Type:</label>
                                        <select class="form-control" id="subType" name="subType">
                                            <option>GPA</option>
                                            <option>NGPA</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="credit">Subject Credit:</label>
                                        <input type="number" class="form-control" id="credit" name="credit" min="0" max="10">
                                    </div>

                                    <?php
                                    $sql = "SELECT DepID FROM department";
                                    $result = $conn->query($sql);
                                    ?>
                                    <div class="form-group">
                                        <label for="Department">Department:</label>
                                        <select name="Department" id="Department" class="form-control">
                                            <option value="">Select Department</option>
                                            <?php
                                            while ($row = $result->fetch_assoc()) {
                                                $depID = $row['DepID'];
                                                echo "<option value='$depID'>$depID</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <?php
                                        $sql = "SELECT DISTINCT ExYear FROM exams";
                                        $result = $conn->query($sql);
                                    ?>
                                    <div class="form-group">
                                        <label for="exyear">Year:</label>
                                        <select name="exyear" id="exyear" class="form-control" onchange="disableDefaultOption(this)">
                                            <option value="">Select Code</option>
                                            <?php
                                                while ($row = $result->fetch_assoc()) {
                                                    $year = $row['ExYear'];
                                                    echo "<option value='$year'>$year</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    
                                    <?php
                                        $sql = "SELECT DISTINCT Semester FROM exams";
                                        $result = $conn->query($sql);
                                    ?>
                                    <div class="form-group">
                                        <label for="semi">Semester:</label>
                                        <select name="semi" id="semi" class="form-control" onchange="disableDefaultOption(this)">
                                            <option value="">Select Code</option>
                                            <?php
                                                while ($row = $result->fetch_assoc()) {
                                                    $semi = $row['Semester'];
                                                    echo "<option value='$semi'>$semi</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    function openUpdateForm(subCode, subName, subType, credit, department, exYear, semester) {
 
                        document.getElementById('subCode').value = subCode;
                        document.getElementById('subName').value = subName;
                        document.getElementById('subType').value = subType;
                        document.getElementById('credit').value = credit;
                        document.getElementById('Department').value = department;
                        document.getElementById('exyear').value = exYear;
                        document.getElementById('semi').value = semester;

                        $('#updateFormModal').modal('show');
                    }
                </script>
            </div>
        </div>
    </div>
</div>

<br><br>

<div class="container-fluid">
    <div class="container">

        <div class="form-group">
            <div>
                <button type="button" class="btn btn-primary"><i class="fa fa-facebook-square"></i> Facebook <a href="#"></a></button>
                <button type="button" class="btn btn-info"><i class="fa fa-twitter-square"></i> Twitter <a href="#"></a></button>
                <button type="button" class="btn btn-danger"><i class="fa fa-google-plus"></i><a href="#"></a></button> 
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