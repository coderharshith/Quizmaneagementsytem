<?php
    include "./php/config.php";
    include "loginCheck.php";
    include "head.php";

    $subject = 'Mathematics';

    $sql = "SELECT * FROM subjects ";
	$result = mysqli_query($conn, $sql);
?>
<style>

td,th{
    border: 1px solid black;
}
</style>
<div class="table_container" id="table_con">

    <table class="table">
                                <thead>
                    <th>Student Id</th>
                    <th>topic</th>
                    <th>wrong answers</th>
                </thead>

                <?php
                   $results = mysqli_query($conn,"SELECT DISTINCT subject,student_id FROM result ");
                   while($ji = mysqli_fetch_array($results)){
                    $stu_id = $ji['student_id'];
                    $weak =  "SELECT student_id,subject,topic,COUNT(topic) FROM result WHERE student_id = $stu_id AND student_answer != correct GROUP BY topic  HAVING COUNT(topic) > 0 ";
                    $resultss = mysqli_query($conn, $weak);
 
                    while ($row = mysqli_fetch_assoc($resultss)) { 
                        if($row['subject'] == $subject ){
                          
                          ?>

                         <tr>
                         <td><?php echo $row['student_id'] ?> </td>
                         <td><?php echo $row['topic'] ?></td>
                         <td><?php echo$row['COUNT(topic)']?></td>
                         </tr><br>
                    
                        <?php }
                    }
                }
                
                   ?>
        </div>
</body>

</html>