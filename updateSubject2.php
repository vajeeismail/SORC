<?php
include_once 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $subCode = $_POST['subCode'];
    $subName = $_POST['subName'];
    $subType = $_POST['subType'];
    $credit = $_POST['credit'];
    $department = $_POST['Department'];
    $year = $_POST['exyear'];
    $semi = $_POST['semi'];

    $query = "SELECT DepID FROM department WHERE DepID = '$department'";
    $query2 = "SELECT ExYear, Semester FROM exams WHERE ExYear = '$year' AND Semester = '$semi'";
    $result1 = mysqli_query($conn, $query);
    $result2 = mysqli_query($conn, $query2);

    if (mysqli_num_rows($result1) == 0 || mysqli_num_rows($result2) == 0) {
        echo '<script>
            window.location.href = "showSubject2.php";
            alert("Error: Invalid Department ID or Code. Please choose valid values.")
        </script>';
    } else {
        $row = mysqli_fetch_assoc($result2);
        $exYear = $row['ExYear'];
        $semester = $row['Semester'];

        $updateQuery = "UPDATE subjects SET 
            SubName='$subName', SubType='$subType', Credit='$credit', Department='$department', ExYear='$exYear', Semester='$semester'
            WHERE SubCode='$subCode'";

        if (mysqli_query($conn, $updateQuery)) {
            echo '<script>
                window.location.href = "showSubject2.php";
                alert("Record updated successfully.")
            </script>';
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
}
mysqli_close($conn);
?>
