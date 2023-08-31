<?php
    include_once 'connection.php';

    if (isset($_GET['delete'])) {
        $delete = urldecode($_GET['delete']);
        $parts = explode(',', $delete);
        $year = $parts[0];
        $semi = $parts[1];
        $dep = $parts[2];
 
        $deleteQuery = "DELETE FROM exams WHERE ExYear = '$year' AND Semester = '$semi' AND Department = '$dep'";
        $result = mysqli_query($conn, $deleteQuery);

        if ($result) {
            echo '<script>alert("Exam record deleted successfully.");</script>';
            echo '<script>window.location.href = "showExam2.php";</script>';
        } else {
            echo '<script>alert("Failed to delete exam record. Please try again.");</script>';
            echo '<script>window.location.href = "showExam2.php";</script>';
        }
    }
?>
