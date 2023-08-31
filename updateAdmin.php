<?php
    include_once 'connection.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $adminID = $_POST['adminID'];
        $adminName = $_POST['adminName'];
        $adminMobile = $_POST['adminMobile'];
        $adminMail = $_POST['adminMail'];

        $sql = "UPDATE admintable SET AdminName='$adminName', AdminMobile='$adminMobile', AdminMail='$adminMail' WHERE AdminID='$adminID'";

        if (mysqli_query($conn, $sql))
        {
            echo '<script>
            window.location.href = "showAdmin.php";
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
