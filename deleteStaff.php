<?php
    include_once 'connection.php';

    if (isset($_GET['delete'])) {
        $staffid = $_GET['delete'];
        
        // Delete the admin record from the database
        $deleteQuery = "DELETE FROM stafftable WHERE StaffID = '$staffid'";
        $result = mysqli_query($conn, $deleteQuery);

        if ($result) {
            // Record deleted successfully
            echo '<script>alert("Staff record deleted successfully.");</script>';
            echo '<script>window.location.href = "showStaff.php";</script>';
        } else {
            // Failed to delete the record
            echo '<script>alert("Failed to delete staff record. Please try again.");</script>';
            echo '<script>window.location.href = "showStaff.php";</script>';
        }
    }
?>
