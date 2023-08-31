<?php
    include_once 'connection.php';

    if (isset($_GET['delete'])) {
        $depID = $_GET['delete'];
        
        // Delete the admin record from the database
        $deleteQuery = "DELETE FROM department WHERE DepID = '$depID'";
        $result = mysqli_query($conn, $deleteQuery);

        if ($result) {
            // Record deleted successfully
            echo '<script>alert("Department record deleted successfully.");</script>';
            echo '<script>window.location.href = "showDepartment.php";</script>';
        } else {
            // Failed to delete the record
            echo '<script>alert("Failed to delete Department record. Please try again.");</script>';
            echo '<script>window.location.href = "showDepartment.php";</script>';
        }
    }
?>
