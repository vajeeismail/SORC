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

    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
                                <a class="dropdown-item" href="createStudent2.php" style="color: darkgray;">Create New Student</a>
                                <a class="dropdown-item active" href="showStudent2.php" style="color: darkgray; background-color:black;">Edit Student</a>
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

        <?php $results = mysqli_query($conn, "SELECT * FROM student"); ?>

        <div id="includedContent"></div>
            
        <div class="jumbotron" style="background: smoke; padding-bottom:10px">
            <div class="row-12">
                <h1>STUDENTS</h1>
                <footer class="blockquote-footer"><cite title="Source Title">Sliate - Sammanthurai (ATI)</cite></footer></blockquote>
            </div>

            <br>
            <div class="jumbotron" style="background: white; padding-bottom:10px">

                <div align="center" class="row-12">
                    <footer class="blockquote-footer"><cite title="Source Title">The form shows records of students</cite></footer></blockquote>
                </div>
                <br>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thread>
                            <tr class="thead-dark">
                                <th>Student ID</th>
                                <th >First_Name</th>
                                <th>Last_Name</th>
                                <th>NIC</th>
                                <th>Mail</th>
                                <th>District</th>
                                <th>City</th>
                                <th>Contact</th>
                                <th>Department</th>
                                <th>Batch</th>
                                <th colspan="2">Action</th>                               
                            </tr>
                        </thread>

                        <?php while ($row = mysqli_fetch_array($results)) { ?>
                            <tr>
                                <td><?php echo $row['StudentID'];?></td>
                                <td><?php echo $row['FirstName'];?></td>
                                <td><?php echo $row['LastName'];?></td>
                                <td><?php echo $row['NIC'];?></td>
                                <td><?php echo $row['Mail'];?></td>
                                <td><?php echo $row['Distric'];?></td>
                                <td><?php echo $row['City'];?></td>
                                <td><?php echo $row['Contact'];?></td>
                                <td><?php echo $row['Department'];?></td>
                                <td><?php echo $row['Batch'];?></td>
                                <td>
                                <button class="btn btn-warning" onclick="openUpdateForm(
                                    '<?php echo $row['StudentID'];?>',
                                    '<?php echo $row['FirstName'];?>',
                                    '<?php echo $row['LastName'];?>',
                                    '<?php echo $row['NIC'];?>',
                                    '<?php echo $row['Mail'];?>',
                                    '<?php echo $row['Distric'];?>',
                                    '<?php echo $row['City'];?>',
                                    '<?php echo $row['Contact'];?>',
                                    '<?php echo $row['Department'];?>',
                                    '<?php echo $row['Batch'];?>'
                                    )">Edit
                                </button>
                            </td>
                                <td>
                                    <a href="deleteStudent2.php?delete=<?php echo $row['StudentID']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student record?')">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>

                    <div class="modal fade" id="updateFormModal" tabindex="-1" role="dialog" aria-labelledby="updateFormModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="updateFormModalLabel">Update Student Information</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="updateStudent2.php" method="POST">
                                    <div class="form-group">
                                        <label for="stuID">Student ID:</label>
                                        <input type="text" class="form-control" name="stuID" id="stuID" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="firstName">First Name:</label>
                                        <input type="text" class="form-control" name="firstName" id="firstName" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="lastfName">Last Name:</label>
                                        <input type="text" class="form-control" name="lastfName" id="lastfName" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="nic">Student NIC:</label>
                                        <input type="text" class="form-control" name="nic" id="nic" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="stuMail">Student Mail:</label>
                                        <input type="email" class="form-control" name="stuMail" id="stuMail" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="stuAddress">Student Address:</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="distric">District:</label>
                                        <input type="text" class="form-control" name="distric" id="distric" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="city">City:</label>
                                        <input type="text" class="form-control" name="city" id="city" required>
                                    </div> 

                                    <div class="form-group">
                                        <label for="contact">Student Contact:</label>
                                        <input type="text" class="form-control" name="contact" id="contact" required>
                                    </div>
                                    
                                    <?php
                                        $sql = "SELECT DepID FROM department";
                                        $result = $conn->query($sql);
                                    ?>
                                    <div class="form-group">
                                        <label for="Department">Department:</label>
                                        <select name="Department" id="Department" class="form-control">
                                            <?php
                                                while ($row = $result->fetch_assoc()) {
                                                    $depID = $row['DepID'];
                                                    echo "<option value='$depID'>$depID</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="stuBatch">Student Batch:</label>
                                        <input type="text" class="form-control" name="stuBatch" id="stuBatch" required>
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
                        function openUpdateForm(studentID, firstName, lastName,nic, mail, district, city, contact, department, batch) {
                            document.getElementById("stuID").value = studentID;
                            document.getElementById("firstName").value = firstName;
                            document.getElementById("lastfName").value = lastName;
                            document.getElementById("nic").value = nic;
                            document.getElementById("stuMail").value = mail;
                            document.getElementById("distric").value = district; 
                            document.getElementById("city").value = city;
                            document.getElementById("contact").value = contact;
                            document.getElementById("Department").value = department;
                            document.getElementById("stuBatch").value = batch;

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