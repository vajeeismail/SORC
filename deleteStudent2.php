<?php
    include_once 'connection.php';

    if (isset($_GET['delete'])) {
        $stuID = $_GET['delete'];
        
        // Delete the admin record from the database
        $deleteQuery = "DELETE FROM student WHERE StudentID = '$stuID'";
        $result = mysqli_query($conn, $deleteQuery);

        if ($result) {
            // Record deleted successfully
            echo '<script>alert("Student record deleted successfully.");</script>';
            echo '<script>window.location.href = "showStudent2.php";</script>';
        } else {
            // Failed to delete the record
            echo '<script>alert("Failed to delete student record. Please try again.");</script>';
            echo '<script>window.location.href = "showStudent2.php";</script>';
        }
    }
?>
