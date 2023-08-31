<?php
include_once 'connection.php';

if (isset($_GET['delete'])) {
    $delete = urldecode($_GET['delete']);
    $parts = explode(',', $delete);
    $studentID = $parts[0];
    $stuBatch = $parts[1];
    $subjectCode = $parts[2];
    $department = $parts[3];
    $accYear = $parts[4];
    $accSemester = $parts[5];

    $deleteQuery = "DELETE FROM results WHERE StudentID = ? AND StuBatch = ? AND SubjectCode = ? AND Department = ? AND AccYear = ? AND AccSemester = ?";
    $stmt = $conn->prepare($deleteQuery);
    $stmt->bind_param("ssssss", $studentID, $stuBatch, $subjectCode, $department, $accYear, $accSemester);

    if ($stmt->execute()) {
        echo '<script>alert("Results record deleted successfully.");</script>';
        echo '<script>window.location.href = "showResult.php";</script>';
    } else {
        echo '<script>alert("Failed to delete results record. Please try again.");</script>';
        echo '<script>window.location.href = "showResult.php";</script>';
    }

    $stmt->close();
}
?>
