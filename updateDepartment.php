<?php
    include_once 'connection.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $depID = $_POST['depID'];
        $dep = $_POST['dep'];

        $sql = "UPDATE department SET Department='$dep' WHERE DepID='$depID'";

        if (mysqli_query($conn, $sql))
        {
            echo '<script>
            window.location.href = "showDepartment.php";
            alert("Record updated successfully.")
            </script>';
        }   
        else 
        {
            echo "Error: " . $sql . " " . mysqli_error($con);
        }
        mysqli_close($con);
    }
?>
