<?php
include_once 'connection.php';

if (isset($_POST['btnCreate'])) {
    $Username = $_POST['adminUsername'];
    $Password = $_POST['adminPass'];
    $userid = $_POST['adminID'];

    $sqlCheck = "SELECT * FROM adminlogin WHERE UserID = '$userid'";
    $resultCheck = mysqli_query($conn, $sqlCheck);
    $countCheck = mysqli_num_rows($resultCheck);

    if ($countCheck > 0) {
        echo '<script>
                window.location.href = "loginAdmin.php";
                alert("Login failed: Already the admin ID has an account...!")
            </script>';
    } else if ($countCheck == 0) {
        $sqlAdminTableCheck = "SELECT * FROM admintable WHERE adminID = '$userid'";
        $resultAdminTableCheck = mysqli_query($conn, $sqlAdminTableCheck);
        $countAdminTableCheck = mysqli_num_rows($resultAdminTableCheck);

        if ($countAdminTableCheck > 0) {
            $sqlInsert = "INSERT INTO adminlogin (Username, Password, UserID) VALUES ('$Username', '$Password', '$userid')";
            mysqli_query($conn, $sqlInsert);

            echo '<script>
                    window.location.href = "loginAdmin.php";
                    alert("Login failed: Your user account was created...!")
                </script>';
        } else {
            echo '<script>
                    window.location.href = "loginAdmin.php";
                    alert("Login failed: The admin ID was not registered...!")
                </script>';
        }
    }
}
?>
