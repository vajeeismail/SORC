<?php
    include_once 'connection.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $staffID = $_POST['staffID'];
        $staffName = $_POST['staffName'];
        $staffPosition = $_POST['staffPosition'];
        $department = $_POST['department'];
        $staffMail = $_POST['staffMail'];

        $query = "SELECT DepID FROM department WHERE DepID = '$department'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 0) {
            echo '<script>
                window.location.href = "showStaff.php";
                alert("Error: Invalid Department ID. Please choose a valid Department ID.")
            </script>';
        } else {
            $updateQuery = "UPDATE stafftable SET 
                StaffName='$staffName', StaffPosition='$staffPosition', Department='$department', StaffMail='$staffMail'
                WHERE StaffID='$staffID'";

            if (mysqli_query($conn, $updateQuery)) {
                echo '<script>
                    window.location.href = "showStaff.php";
                    alert("Record updated successfully.")
                </script>';
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
    }
?>
