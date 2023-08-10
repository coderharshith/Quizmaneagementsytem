<?php
    include "./php/config.php";
    include "loginCheck.php";
    include "head.php";
    error_reporting(0);

    $select = " SELECT * FROM students WHERE SchoolName = '$schoolsession'";
    $outPut = mysqli_query($conn, $select);
    if(mysqli_num_rows($outPut) > 0){
        $row = mysqli_fetch_array($outPut);
    }

    $sql = "SELECT * FROM subjects ";
	$result = mysqli_query($conn, $sql);
?>
<link rel="stylesheet" href="./assets/css/table.css"> 
<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <!-- Navbar Header start -->
    <?php include "header.php"?>
    <!-- End Navbar Header -->
    <!-- class="container py-1" -->
    <div class="main_container ">
    <div class="src">
     <a href="export.php"><button type="button" class="btn btn-success">Export</button></a>
    <input type="text" name="" class="search" id="searchuser" placeholder="search by student Id...." onkeyup= "StudentName()">
    <input type="text" name="" class="search" id="searchid" placeholder="search by student subjects....." onkeyup= "Student()">
</div>
<div class="table_container" id="table_con">

    <table class="table">
        <thead>
            <th>S.No</th>
            <th>Student Id</th>
            <th>Student Name</th>
            <th>Subject</th>
            <th>Correct Ans score</th>
            <th>View Result</th>
    </thead>
    <tbody>
 
    <?php



            $result = mysqli_query($conn,"SELECT DISTINCT subject,student_id FROM result ");
            $j = 0;
            $end = 100;

            while($i = mysqli_fetch_array($result)){
                $j++;
                if($j <= $end){
                    
                    $stu_id = $i['student_id'];
                    $weak =  "SELECT subject,COUNT(subject) FROM result WHERE student_id = $stu_id  AND student_answer = correct GROUP BY subject  HAVING COUNT(subject) > 0 ";
                    $sco = mysqli_query($conn, $weak);
                    while ($scorow = mysqli_fetch_assoc($sco)) { 
                             $outerscore = $scorow['COUNT(subject)'];
                    }

                    $studentname = "SELECT * FROM students  WHERE student_id  = $stu_id AND SchoolName = '$schoolsession'";  
                    $studentnameresult = mysqli_query($conn, $studentname);  
                    while ($studentnamelist = mysqli_fetch_array($studentnameresult)) { 
                      
                   


            ?>
                     <tr><td data-label='S.No'><?php echo $j ?></td>
                     <td data-label='UserId'><?php echo $i['student_id'] ?></td>
                     <td data-label='Name'><?php echo  $studentnamelist['studentName']; ?></td>
                      <td data-label='Subject'><?php echo$i['subject'] ?></td>
                      <td data-label='Score'><?php echo $outerscore ?></td>
                      <td>
                        <form method='post' action='./resultdis.php?viewId=<?php echo $i["student_id"];?>'>
                            <input type="text" name="ResultSubjectName" value='<?php echo $i["subject"];?>' hidden>
                        <input type="submit" name="submit" class='qEdit ed-rsult'value="View">
                    </form>
                    </td>
                      
            <?php  
             }
                }
                $rowcount = mysqli_num_rows( $result);
            }
            ?>
    </tbody>
</table>
</div>
<div class="navigation">

</div>
<?php  
            // echo  $rowcount ;
            mysqli_close($conn);
?>
<script src="assets/js/search_list.js"></script>
</body>
</html>