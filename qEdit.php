<?php
       include "./php/config.php";
	   include "loginCheck.php";
	   include "head.php";

    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $query = "SELECT * FROM questions WHERE id = $id";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) { 
			$topic = $row['topic'];
			$que = $row['question'];
			$qimage = $row['qimage'];
			$c1 = $row['choice1'];
			$c2 = $row['choice2'];
			$c3 = $row['choice3'];
			$c4 = $row['choice4'];
			$correct_ans = $row['correct_ans'];
			$descriptions = $row['descriptions'];
			// $subjects  = $row['subjects'];
		}
	}
?>
<link rel="stylesheet" href="./assets/css/qupdated.css">
<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <!-- Navbar Header start -->
  <?php include "header.php"?>
    <!-- End Navbar Header -->
    <div class="container-fluid py-4">
		<form action="./php/update.php?update=<?php echo $id;?>" method="post" enctype="multipart/form-data">
			<div class="q-container">
				<div class="q-responsive">
					<div class="inputContainer">
						<label for="topic">Topic: *</label>
						<input type="text" id="topic" name="topic" value="<?php echo $topic ?>" required>
                        <p></p>
					</div>

					<div class="inputContainer">
						<label for="subject">Subject: *</label>
						<select id="subject" name="subject" required>
                            <?php
                                $sub = "SELECT * FROM subjects";
                                $sub_result = mysqli_query($conn, $sub);
                                while ($subjects = mysqli_fetch_assoc($sub_result)) { 
                            ?>
							<Option value="<?php echo $subjects['subjectsName']?>"><?php echo $subjects['subjectsName']?></Option>
                            <?php
                                }
                            ?>
						</select>
					</div>
				</div>
				<div class="q-responsive">
				<div class="inputContainer Q-inputContainer">
					<label for="question">Question: *</label>
					<input type="text" id="question" name="question" value="<?php echo $que ?>" required>
				</div>
				</div>
				<div class="q-responsive">
					<div class="inputContainer">
						<label for="qimage">Question Image:</label>
						<input type="file" id="qimage" name="qimage" value="<?php echo $qimage ?>" >
					</div>
				</div>
			</div>
			<div class="op">
			<div class="q-responsive">
				<div class="inputContainer">
					<label for="choice1">Option 1: *</label>
					<input type="text" id="choice1" name="choice1" value="<?php echo $c1?>" required>
				</div>
				
				<div class="inputContainer">
					<label for="choice2">Option 2: *</label>
					<input type="text" id="choice2" name="choice2"  value="<?php echo $c2?>" required>
				</div>
				</div>
				<div class="q-responsive">
				<div class="inputContainer">
					<label for="choice3">Option 3:*</label>
					<input type="text" id="choice3" name="choice3" value="<?php echo $c3?>" required>
				</div>
				<div class="inputContainer">
					<label for="choice4">Option 4:*</label>
					<input type="text" id="choice4" name="choice4" value="<?php echo $c4?>" required>
				</div>
			</div>
			</div>

			<div class="correct_container">
			<label for="correct_ans">Correct Answer:</label>
			<input type="text" id="correct_ans" name="correct_ans" value="<?php echo $correct_ans?>" required>
			<p class="highlight-text">Enter the Answer same as Option </p>
			</div>
			<div class="description_container">
			<label for="description">Description</label>
				<textarea name="description" id="description" ><?php echo $descriptions; ?></textarea>
			</div>
			<div class="btns">
				<input type="submit" value="Submit">
				<a class="cancel" href="questions">Cancel</a>
			</div>
		</form>
	</div>
</body>

</html>
