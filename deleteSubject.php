<?php
    include_once 'connection.php';

    if (isset($_GET['delete'])) {
        $subcode = $_GET['delete'];
        
        // Delete the admin record from the database
        $deleteQuery = "DELETE FROM subjects WHERE SubCode = '$subcode'";
        $result = mysqli_query($conn, $deleteQuery);

        if ($result) {
            // Record deleted successfully
            echo '<script>alert("Subject record deleted successfully.");</script>';
            echo '<script>window.location.href = "showSubject.php";</script>';
        } else {
            // Failed to delete the record
            echo '<script>alert("Failed to delete subject record. Please try again.");</script>';
            echo '<script>window.location.href = "showSubject.php";</script>';
        }
    }
?>
