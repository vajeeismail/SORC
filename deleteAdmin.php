<?php
    include_once 'connection.php';

    if (isset($_GET['delete'])) {
        $adminID = $_GET['delete'];
        
        // Delete the admin record from the database
        $deleteQuery = "DELETE FROM admintable WHERE AdminID = '$adminID'";
        $result = mysqli_query($conn, $deleteQuery);

        if ($result) {
            // Record deleted successfully
            echo '<script>alert("Admin record deleted successfully.");</script>';
            echo '<script>window.location.href = "showAdmin.php";</script>';
        } else {
            // Failed to delete the record
            echo '<script>alert("Failed to delete admin record. Please try again.");</script>';
            echo '<script>window.location.href = "showAdmin.php";</script>';
        }
    }
?>
