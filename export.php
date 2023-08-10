<?php
require('./php/config.php');
include "loginCheck.php";

$sql="SELECT DISTINCT subject,student_id FROM result";
$res=mysqli_query($conn,$sql);
$wrongnum =  "SELECT subject,topic,COUNT(topic) FROM result GROUP BY topic  HAVING COUNT(topic) > 0 ";
$wrongvalue = mysqli_query($conn, $wrongnum);
$html='<table border="1"><thead><tr><th >Student Id</th><th >Student Name</th><th >Subject</th><th >Correct Ans score</th>';

while ($wrong = mysqli_fetch_assoc($wrongvalue)) { 
	$html.='<th > Total wrong ans '.$wrong['topic'].'</th>'; 
}
$html.="</tr></thead>";

while($row=mysqli_fetch_assoc($res)){
	$stu_id = $row['student_id'];
	$studentname = "SELECT * FROM students  WHERE student_id  = $stu_id AND SchoolName = '$schoolsession'";
	$studentnameresult = mysqli_query($conn, $studentname);  
	while ($studentnamelist = mysqli_fetch_array($studentnameresult)) {
		$weak =  "SELECT subject,COUNT(subject) FROM result WHERE student_id = $stu_id  AND student_answer = correct GROUP BY subject  HAVING COUNT(subject) > 0 ";
		$sco = mysqli_query($conn, $weak);
		while ($scorow = mysqli_fetch_assoc($sco)) { 
			$outerscore = $scorow['COUNT(subject)'];
			$wrongnum =  "SELECT subject,topic,COUNT(topic) FROM result WHERE student_id = $stu_id AND student_answer != correct GROUP BY topic  HAVING COUNT(topic) > 0 ";
            $wrongvalue = mysqli_query($conn, $wrongnum);
			$html.='<tbody><tr><td >'.$row['student_id'].'</td><td >'.$studentnamelist['studentName'].'</td><td >'.$row['subject'].'</td><td >'.$outerscore.'</td>';
            while ($wrong = mysqli_fetch_assoc($wrongvalue)) {
			$html.= '<td >'.$wrong['COUNT(topic)'].'</td>';
            }
			$html.="</tr></tbody>";
		}
	}
}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=report.xls');
echo $html;
?>
