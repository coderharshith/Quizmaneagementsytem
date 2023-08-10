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
		<form action="./php/testinsert.php" method="post" enctype="multipart/form-data">
			<div class="q-container">
				<div class="q-responsive">
					<div class="inputContainer">
						<label for="testname">Test Name: *</label>
						<input type="text" id="testname" name="testname" required>
					</div>

					<div class="inputContainer">
						<label for="subject">Subject: *</label>
						<select id="subject" name="subject" required>
                        <Option value="">choose Subject</Option>
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
			</div>
			<div class="op">
			<div class="q-responsive">
				<div class="inputContainer">
					<label for="test_start_date">Start Date of Test</label>
					<input type="date" id="test_start_date" name="test_start_date" required>
				</div>
				
				<div class="inputContainer">
					<label for="test_end_date">End Date Of Test</label>
					<input type="date" id="test_end_date" name="test_end_date" required>
				</div>
				</div>
			</div>

			 <div class="correct_container">
             <div class="inputContainer radio">
					<label for="test_attempts">Unlimeted Test Attempts </label>
                    <div>
                        <label for="test_attempts_radio">Unlimeted</label>
                        <input type="radio" id="test_attempts_radio" name="test_attempts" value="O" required>
                        <label for="test_attempts_radios">Number Of Times</label>
                        <input type="radio" id="test_attempts_radios" name="test_attempts" required>
                        <p class="highlight-text">Check the rideo button before giving the value</p>
                    </div>
                    <div>
                        <label for="test_attempts_input">Number Of Times</label>
                        <input type="number" min="1" class="last-child" id="test_attempts_input" name="test_attempts" onchange="changeradioother()" required>
                    </div>
				</div>
			</div>
			<!---<div class="description_container">
			    <label for="description">Description</label>
				<textarea name="description" id="description"></textarea>
			</div> -->
			<div class="btns">
				<input type="submit" value="Submit">
				<a class="cancel" href="questions">Cancel</a>
			</div>
		</form>
	</main>
							</div>
    <script>
        function changeradioother() {
            var other = document.getElementById("test_attempts_radios");
            other.value = document.getElementById("test_attempts_input").value;
        }
    </script>
</body>

</html>