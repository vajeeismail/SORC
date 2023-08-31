<?php

include_once 'connection.php';

if(isset($_POST['btnChange']))
{
    $oldname = $_POST['oldname'];
    $oldpass = $_POST['oldpass'];
    $newname = $_POST['newname'];
    $newpass = $_POST['newpass'];

    $sql = "UPDATE loginadministator SET Username='$newname', Password='$newpass' WHERE Username='$oldname' AND Password='$oldpass'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) > 0)
    {
        echo '<script>
            window.location.href = "loginMainAdmin.php";
            alert("Password changed");
            alert("Try again for login !");
        </script>';
    }
    else
    {
        echo '<script>
            window.location.href = "loginMainAdmin.php";
            alert("Login failed: Invalid usename or password...!")
        </script>';
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

    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

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
                            <a class="nav-link" href="#" onclick="myFunction()" data-toggle="modal" data-target="#changeModal"> Change Login </a>
                        </li>
            
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
                        <li class="nav-item active">
                            <a class="nav-link" href="mainAdminHome.php"><i class="fa fa-fw fa-home"></i> Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Results
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:rgb(45, 45, 49);">
                                <a class="dropdown-item" href="createResult.php" style="color: darkgray;">Create New Results</a>
                                <a class="dropdown-item" href="showResult.php" style="color: darkgray;">Edit Results</a>
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
                                Departments
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:rgb(45, 45, 49);">
                                <a class="dropdown-item" href="createDepartment.php" style="color: darkgray;">Create New Department</a>
                                <a class="dropdown-item" href="showDepartment.php" style="color: darkgray;">Edit Department</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Subjects
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:rgb(45, 45, 49);">
                                <a class="dropdown-item" href="createSubject.php" style="color: darkgray;">Create New Subject</a>
                                <a class="dropdown-item" href="showSubject.php" style="color: darkgray;">Edit Subject</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Exams
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:rgb(45, 45, 49);">
                                <a class="dropdown-item" href="createExam.php" style="color: darkgray;">Create New Exam</a>
                                <a class="dropdown-item" href="showExam.php" style="color: darkgray;">Edit Exam</a>
                            </div>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Student
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:rgb(45, 45, 49);">
                                <a class="dropdown-item" href="createStudent.php" style="color: darkgray;">Create New Student</a>
                                <a class="dropdown-item" href="showStudent.php" style="color: darkgray;">Edit Student</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Staff
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:rgb(45, 45, 49);">
                                <a class="dropdown-item" href="createStaff.php" style="color: darkgray;">Create New Staff</a>
                                <a class="dropdown-item" href="showStaff.php" style="color: darkgray;">Edit Staff</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Admin
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:rgb(45, 45, 49);">
                                <a class="dropdown-item" href="createAdmin.php" style="color: darkgray;">Create New Admin</a>
                                <a class="dropdown-item" href="showAdmin.php" style="color: darkgray;">Edit Admin</a>
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

    <br><br>
    <div class="container">
        <script>
            function myFunction() {
                alert("It is a deafult login ID for dministrator...! only can change.");
                alert("Please don't forgot your cahnged password...!");
                }
        </script>

        <div class="modal fade" id="changeModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Administrator</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form action="mainAdminHome.php" method="POST">
                        <div class="modal-body">
                            <input type="text" name="oldname" class="form-control" style="width: 450px;" placeholder="Enter username here..." required> <br>
                            <input type="password" name="oldpass" class="form-control" style="width: 450px;" placeholder="Enter password here..." required> <br>
                            <hr>
                            <input type="text" name="newname" class="form-control" style="width: 450px;" placeholder="Enter new username here..." required> <br>
                            <input type="password" name="newpass" class="form-control" style="width: 450px;" placeholder="Enter new password here..." required> <br>  
                            <button type="submit" name="btnChange" class="btn btn-outline-primary">Change</button>  
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="form-group">
            <div>
                <p style="font-size: 35px;"> <i class='fa fa-user'></i> Administrator Management (SLIATE - Samanthurai) <p>
                <div class="progress" style="height: 2px; width: 820px;">
                    <div class="progress-bar bg-dark progress-bar-striped" style="width: 580px; height: 3px;"></div>
                </div>      
            </div>
        </div>

        <br><br><br>

        <div class="form-group">
            
        </div>

        <br><br><br>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <div>
                        <p style="font-size: 25px;"> Courses </p>
                        <div class="progress" style="height: 2px; width: 120px;">
                            <div class="progress-bar bg-secondary" style="width: 65px; height: 3px;"></div>
                        </div>      
                        <div> <br><br> 
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><a href="">Higher National Diploma in Accountancy - (HNDA)</a></td>  
                                    </tr>
                                    <tr>
                                        <td><a href="">Higher National Diploma in Information Technology - (HNDIT)</a></td> 
                                    </tr>
                                    <tr>
                                        <td><a href="">Higher National Diploma in English - (HNDE)</a></td>   
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div>
                        <p style="font-size: 25px;"> Contact </p>
                        <div class="progress" style="height: 2px; width: 120px;">
                            <div class="progress-bar bg-secondary" style="width: 65px; height: 3px;"></div>
                        </div>      
                        <div> <br><br> 
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Director</td>
                                        <td>Mr. S.L. Musthafa</td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>ATI Avenue, Samanthurai</td>
                                        </tr>
                                        <tr>
                                        <td>Telphone</td>
                                        <td>067-2261304<br>
                                            077-5153500</td>
                                    </tr>
                                    <tr>
                                        <td>Mail</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <br>

        <div claas="form-group">
            <p style="font-size: 25px;"> Location </p>
            <div class="progress" style="height: 2px; width: 120px;">
                <div class="progress-bar bg-secondary" style="width: 65px; height: 3px;">
                </div>
            </div>
            <br><br>
            <div  align="center">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="1200" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=ATI-Sammanthurai&t=&z=10&ie=UTF8&iwloc=&output=embed" 
                            frameborder="0" scrolling="no" marginheight="no" marginwidth="no">
                        </iframe>
                        <br>
                        <style>.mapouter{position:relative;text-align:right;height:510px;width:770px;}</style>
                        <style>.gmap_canvas {overflow:hidden;background:none!important;height:510px;width:770px;}</style>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <br><br>

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

    <div class="container-fluid">
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