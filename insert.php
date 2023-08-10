<?php
 include "./php/config.php";
 include "loginCheck.php";
 include "head.php";
    $j = 0;
    $end = 10;
?>
<link rel="stylesheet" href="./assets/css/qupdated.css">
	<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <!-- Navbar Header start -->
  <?php include "header.php"?>
    <!-- End Navbar Header -->
    <div class="container-fluid py-4">
		<form action="./php/insert.php" method="post" enctype="multipart/form-data">
			<div class="q-container">
				<div class="q-responsive">
					<div class="inputContainer">
						<label for="topic">Topic: *</label>
						<input type="text" id="topic" name="topic" required>
					</div>

					<div class="inputContainer">
						<label for="subject">Subject: *</label>
						<select id="subject" name="subject" required>
						<?php
                                $sql = "SELECT * FROM subjects ";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) { 
                            ?>
							<Option value="<?php echo $row['subjectsName']?>"><?php echo $row['subjectsName']?></Option>
                            <?php
                                }
                            ?>
						</select>
						<p class="highlight-text">Add Subject First to choose it</p>
					</div>
				</div>
				<div class="q-responsive">
				<div class="inputContainer Q-inputContainer">
					<label for="question">Question: *</label>
					<input type="text" id="question" name="question" required>
				</div>
				</div>
				<div class="q-responsive">
					<div class="inputContainer">
						<label for="qimage">Question Image:</label>
						<input type="file" id="qimage" name="qimage" >
					</div>
				</div>
			</div>
			<div class="op">
			<div class="q-responsive">
				<div class="inputContainer">
					<label for="choice1">Option 1: *</label>
					<input type="text" id="choice1" name="choice1" required>
				</div>
				
				<div class="inputContainer">
					<label for="choice2">Option 2: *</label>
					<input type="text" id="choice2" name="choice2" required>
				</div>
				</div>
				<div class="q-responsive">
				<div class="inputContainer">
					<label for="choice3">Option 3:*</label>
					<input type="text" id="choice3" name="choice3" required>
				</div>
				<div class="inputContainer">
					<label for="choice4">Option 4:*</label>
					<input type="text" id="choice4" name="choice4" required>
				</div>
			</div>
			</div>

			<div class="correct_container">
			<label for="correct_ans">Correct Answer:</label>
			<input type="text" id="correct_ans" name="correct_ans" required>
			<p class="highlight-text">Enter the Answer same as Option </p>
			</div>
			<div class="description_container">
			<label for="description">Description</label>
				<textarea name="description" id="description"></textarea>
			</div>
			<div class="btns">
				<input type="submit" value="Submit">
				<a class="cancel" href="questions">Cancel</a>
			</div>
		</form>
	</main>
							</div>
</body>

</html>