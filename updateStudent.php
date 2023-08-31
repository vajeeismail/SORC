<?php
    include_once 'connection.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $stuid = $_POST['stuID'];
        $fname = $_POST['firstName'];
        $lname = $_POST['lastfName'];
        $nic = $_POST['nic'];
        $stumail = $_POST['stuMail'];
        $distric = $_POST['distric'];
        $city = $_POST['city'];
        $contact = $_POST['contact'];
        $studepartment = $_POST['Department'];
        $stubatch = $_POST['stuBatch'];

        $query = "SELECT DepID FROM department WHERE DepID = '$studepartment'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 0) {
            echo '<script>
                window.location.href = "showStudent.php";
                alert("Error: Invalid Department ID. Please choose a valid Department ID.")
            </script>';
        } else {
            $updateQuery = "UPDATE student SET 
                FirstName='$fname', LastName='$lname', NIC='$nic', Mail='$stumail', Distric='$distric', City='$city', 
                Contact='$contact', Department='$studepartment', Batch='$stubatch' WHERE StudentID='$stuid'";

            if (mysqli_query($conn, $updateQuery)) {
                echo '<script>
                    window.location.href = "showStudent.php";
                    alert("Record updated successfully.")
                </script>';
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
    }
?>
