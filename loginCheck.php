<?php
    session_start();
if(isset($_SESSION['teacher_identifier'])){
		$mainId = $_SESSION['teacher_identifier'];
		$schoolsession = $_SESSION['schoolname'];
    }
    else{
        header("location: index");
    }
?>