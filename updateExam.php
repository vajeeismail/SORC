<?php
include_once 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $exYear = $_POST['exYear'];
    $exSemi = $_POST['exSemi'];
    $department = $_POST['Department'];

    $query = "SELECT DepID FROM department WHERE DepID = '$department'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 0) {
        echo '<script>
            window.location.href = "showExam.php";
            alert("Error: Invalid Department ID. Please choose a valid Department ID.");
        </script>';
    } else {
        $updateQuery = "UPDATE exams SET ExYear='$exYear', Semester='$exSemi', Department='$department' 
        WHERE ExYear = '$exYear' AND Semester = '$exSemi' AND Department = '$department'";

        if (mysqli_query($conn, $updateQuery)) {
            echo '<script>
                window.location.href = "showExam.php";
                alert("Record updated successfully.");
            </script>';
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
}
?>
