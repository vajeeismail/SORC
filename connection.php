<?php
    $conn = new mysqli('localhost','root','','SORC');

    if(!$conn)
    {
        die("Error: Failed to connect to database");
    }
?>