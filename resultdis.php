<?php
    include "./php/config.php";
    include "loginCheck.php";
    include "head.php";
  
    if(isset($_GET['viewId'])){
        $id = $_GET['viewId'];
        $subject = $_POST['ResultSubjectName'];
?>
    <link rel="stylesheet" href="./assets/css/myResult.css">
    <script type=”text/javascript” src=”http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML”></script>
    <title>MY Result</title>
</head>
<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100 styki"></div>
  <!-- Navbar Header start -->
  <?php include "./header.php"?>
    <!-- End Navbar Header -->
<div class="top-part">


        <div class="tatal-result">
                <?php
                    $checker = 0;
                    $weak =  "SELECT subject,topic,COUNT(topic) FROM result WHERE student_id = $id AND student_answer != correct GROUP BY topic  HAVING COUNT(topic) > 0 ";
                    $result = mysqli_query($conn, $weak);
                    while ($row = mysqli_fetch_assoc($result)) { 
                        if($row['subject'] == $subject ){
                            echo "Total Number of wrong answer in ".$row['topic']." ".$row['COUNT(topic)']."<br>";
                            $checker++;
                        }
                    }
                   ?>
                    <?php
                    if( $checker == 0){
                        ?>
                        <p class='ques'> He/she have given all Carrect Anwsers His/her score is OUT OF OUT</p><br>
                    <?php 
                    }
                    ?>
        </div>

    <!-- <div class="btn"> -->
        <a href="./result"><button class="top-btn">Go back</button></a>
    <!-- </div> -->
    </div>

        <?php
                $query = "SELECT * FROM result WHERE student_id = $id";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) { 
                    if($row['subject'] == $subject ){
                        if($row['student_answer'] != $row['correct']){
        ?>

        <div class='result-details'>
            <p class='ques'> Question no.  <?php echo $row['q_number']."). ";echo $row['questions']?></p><br>
            <p class='description'><span>Description:- </span><?php if($subject == "Maths"){ echo  base64_decode($row['description']);} else { echo  $row['description'];} ?></p><br>
            <p class='correct'>Correct Answer :-  <?php echo $row['correct'] ?></p><br>
            <p class='Wrong'>Student Anwsered :-  <?php echo $row['student_answer'] ?></p><br></div>
        </div>
 
        <?php
                        }
                    }
               }
            }
        ?>
      
    </div>

    <div class="btn">
        <a href="./result"><button>Go back</button></a>
    </div>
</body>

</html>