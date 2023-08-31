<?php
include_once 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $studentID = $_POST['studentID'];
    $stuBatch = $_POST['stuBatch'];
    $subjectCode = $_POST['subjectCode'];
    $department = $_POST['department'];
    $accYear = $_POST['accYear'];
    $accSemester = $_POST['accSemester'];
    $marks = $_POST['marks'];
    $examinationYear = $_POST['examinationYear'];

    $updateQuery = "UPDATE results SET 
        Marks = '$marks', ExaminationYear = '$examinationYear'
        WHERE StudentID = '$studentID' AND StuBatch = '$stuBatch' AND SubjectCode = '$subjectCode' AND Department = '$department' AND AccYear = '$accYear' AND AccSemester = '$accSemester'";

    if (mysqli_query($conn, $updateQuery)) {
        echo '<script>
            window.location.href = "showResult.php";
            alert("Record updated successfully.")
        </script>';
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>
