<?php
include_once 'connection.php';

if (isset($_POST['btnCreate'])) {
    $Username = $_POST['staffUsername'];
    $Password = $_POST['staffPass'];
    $userid = $_POST['staffID'];

    $sqlCheck = "SELECT * FROM stafflogin WHERE UserID = '$userid'";
    $resultCheck = mysqli_query($conn, $sqlCheck);
    $countCheck = mysqli_num_rows($resultCheck);

    if ($countCheck > 0) {
        echo '<script>
                window.location.href = "loginStaff.php";
                alert("Login failed: Already the staff ID has an account...!")
            </script>';
    } else if ($countCheck == 0) {
        $sqlAdminTableCheck = "SELECT * FROM stafftable WHERE StaffID = '$userid'";
        $resultAdminTableCheck = mysqli_query($conn, $sqlAdminTableCheck);
        $countAdminTableCheck = mysqli_num_rows($resultAdminTableCheck);

        if ($countAdminTableCheck > 0) {
            $sqlInsert = "INSERT INTO stafflogin (Username, Password, UserID) VALUES ('$Username', '$Password', '$userid')";
            mysqli_query($conn, $sqlInsert);

            echo '<script>
                    window.location.href = "loginStaff.php";
                    alert("Login failed: Your user account was created...!")
                </script>';
        } else {
            echo '<script>
                    window.location.href = "loginStaff.php";
                    alert("Login failed: The staff ID was not registered...!")
                </script>';
        }
    }
}
?>
