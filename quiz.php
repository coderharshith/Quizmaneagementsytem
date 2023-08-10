 <?php
    include "./php/questions.php";
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exl Edu Tech</title>
    <!-- FontAwesome CDN Link for Icons-->
    <link rel="stylesheet" href="./assets/css/quiz.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>
<body>
    <!-- start Quiz button -->
    <div class="start_btn"><button >Start Test</button></div>    
    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">Online Test</div>
            <div class="timer">
                <div class="time_left_txt">Time Left</div>
                <div class="timer_sec">60</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                <!-- Here I've inserted question from JavaScript -->
            </div>
            <div class="que_im">

            </div>
            <div class="option_list">
                <!-- Here I've inserted options from JavaScript -->
            </div>
        </section>

        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
                <!-- Here I've inserted Question Count Number from JavaScript -->
            </div>
            <button class="next_btn">Next Que</button>
            <button class="prev_btn">Next Que</button>
        </footer>
    </div>

    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">You've completed the Test!</div>
        <div class="score_text">
            <!-- Here I've inserted Score Result from JavaScript -->
        </div>
        <div class="buttons">
            <a href="./assets/js/result.php" rel="noopener noreferrer"><button class="quit">Show Result</button></a>
        </div>
    </div>

    <!-- Inside this JavaScript file I've coded all Quiz Codes -->
    <script src="./assets/js/quiz.js"></script>
        
</body>
</html>