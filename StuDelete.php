<?php
    include "./php/config.php";
    include "loginCheck.php";

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $sql  = "DELETE FROM students WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        header("location: students");
    }


?>