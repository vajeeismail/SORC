<?php
include_once 'connection.php';

if (isset($_POST['btnCreate'])) {
    $studentID = $_POST['stuID'];
    $subCode = $_POST['subcode'];
    $subName = $_POST['subname'];
    $marks = $_POST['marks'];
    $department = $_POST['selectedDepartment'];
    $year = $_POST['selectedExYear'];
    $semester = $_POST['selectedSemester'];
    $stuBatch = $_POST['selectedBatch'];
    $exmYear = $_POST['selectedExmYear'];
    $code = $_GET['Code'];

    $query = "SELECT DepID FROM department WHERE DepID = '$department'";
    $query2 = "SELECT StudentID FROM student WHERE StudentID = '$studentID'";
    $query3 = "SELECT SubCode FROM subjects WHERE SubCode = '$subCode'";
    $result1 = mysqli_query($conn, $query);
    $result2 = mysqli_query($conn, $query2);
    $result3 = mysqli_query($conn, $query3);

    if (mysqli_num_rows($result1) == 0 || mysqli_num_rows($result2) == 0 || mysqli_num_rows($result3) == 0) {
        echo '<script>
            window.location.href = "createSubject.php";
            alert("Error: Invalid Department ID, Student ID, or Subject Code. Please choose valid values.")
        </script>';
    } else {
        $values = array();
        for ($i = 0; $i < count($subCode); $i++) {
            $values[] = "('$studentID', '{$subCode[$i]}', '{$subName[$i]}', '{$marks[$i]}', '$department', '$year', '$semester', '$stuBatch', '$exmYear')";
        }
        $valuesString = implode(',', $values);

        $sql = "INSERT INTO results (StudentID, SubCode, SubName, Marks, Department, Year, Semester, StuBatch, ExmYear)
            VALUES $valuesString WHERE Code = '$code'";
        if (mysqli_query($conn, $sql)) {
            echo '<script>
            window.location.href = "createResult.php";
            alert("New records created successfully.")
            </script>';
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
}
?>
