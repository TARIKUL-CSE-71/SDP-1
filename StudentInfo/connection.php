<?php
    $conn = new mysqli("localhost","root","","student_info");
    if($conn->connect_error){
        echo "Connection Failed";
    }
?>