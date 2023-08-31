<?php

include_once 'connection.php';
if(isset($_POST['btnLogin']))
{
    $username = $_POST['username'];
    $password = $_POST['pass'];

    $sql = "SELECT LoginID, Username, Password, UserID, StaffID FROM stafflogin
    JOIN stafftable ON stafflogin.UserID = stafftable.StaffID WHERE Username = '$username' AND Password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count==1)
    {
        header("Location:staffHome.php");
    }
    else if($count==0)
    {
        echo '<script>
            window.location.href = "loginStaff.php";
            alert("Login failed: The login details not registered...!")
        </script>';
    }
    else
    {
        echo '<script>
            window.location.href = "loginStaff.php";
            alert("Login failed: Invalid username or password...!")
        </script>';
    }  
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>RESULTS (Sliate - Sammanthurai)</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                            <a class="nav-link" href="home.php" style="color:white"><i class="fa fa-fw fa-home"></i> Home <span class="sr-only">(current)</span></a>
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
                            <a class="nav-link" href="loginMainAdmin.php"> Administrator <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="loginAdmin.php"> Admin <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="loginStaff.php"> Staff <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

    <br>

    <div class="container">
        <form action="loginStaff.php" method="POST">
            <div class="row">
                <div class="col-sm-7">
                    <div class="form-group" align="center">
                        <h2><b> Staff </b></h2>
                        <footer class="blockquote-footer"><cite title="Source Title">Login form</cite></footer></blockquote>
                    </div>
                </div>
               
                <div class="col-sm-12">
                    <div class="form-group" align="center">
                        <div class="input-container">
                            <i class="fa fa-user icon"></i>
                            <input type="text" name="username" id="username" class="form-control" style="width: 600px;" placeholder="Username" required> <br>
                        </div>

                        <div class="input-container">
                            <i class="fa fa-key icon"></i>
                            <input type="password" name="pass" id="pass" class="form-control" style="width: 600px;" placeholder="Password" required>
                        </div>
                    </div>
                </div>
    
                <div class="col-sm-offset-2 col-sm-7" align="center">
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox"> Remember me
                        </label>
                    </div>
                </div>    
                 
                <div class="col-sm-offset-2 col-sm-12"> 
                    <div class="form-group" align="center">
                        <button type="submit" name="btnLogin" class="btn btn-outline-success btn-block" style="width: 600px;">Login</button>
                    </div>  
                </div>

                </div>

                <div class="col-sm-offset-2 col-sm-12" align="center" style="font-size: small;">
                    <div class="form-group">
                        <label>
                            Create new<a href="#createModal" data-toggle="modal" data-target="#createModal"> <i>account</i> </a>
                        </label> 
                        <br>
                        <label>
                            Forgot <a href="#"><i>username</i></a> or <a href="#"><i>password</i></a>
                        </label>
                    </div>
                </diV>
            </div>
        </form>
    </div>

    <div class="container">
        <form action="createStaffLogin.php" method="POST" class="needs-validation" novalidate>             
            <div class="modal fade" id="createModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Staff</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        
                        <div class="modal-body">
                            <div class="jumbotron" style="padding-top:20px; padding-buttom:20px; margin-bottom: 10px;">
                                <h3>Staff</h3>      
                                <footer class="blockquote-footer"><cite title="Source Title">Create New Staff's Account</cite></footer></blockquote>
                                <br>
                                <div class="jumbotron" style="background: white; padding-top:20px; padding-buttom:20px;">
                                    
                                    <div class="form-group">
                                        <label for="staffID">Staff ID:</label>
                                        <input type="text" class="form-control" placeholder="SAM/STAFF/00" name="staffID" required>
                                        <div class="invalid-feedback">Please fill out the staff id this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="staffUsername">Username:</label>
                                        <input type="text" class="form-control" placeholder="Enter Username" name="staffUsername" required>
                                        <div class="invalid-feedback">Please fill out a username for create in this field.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="staffPass">Password:</label>
                                        <input type="password" class="form-control" placeholder="Enter Password" name="staffPass" required>
                                        <div class="invalid-feedback">Please fill out a password for create in this field.</div>
                                    </div>
                                
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
                            </div>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                            <button type="submit" name="btnCreate" class="btn btn-primary">Create</button>
                        </div>
                    </div>
                </div>
            </div>             
        </form>
    </div>  

    <br>
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