<?php
 include "./php/config.php";
 include "loginCheck.php";
 include "head.php";

    if (isset($_POST['addSub'])){
		$subject = mysqli_real_escape_string($conn,$_POST['subject']);
		$class = trim(mysqli_real_escape_string($conn,$_POST['class']));
		$sql = "INSERT INTO subjects (subjectsName, className) VALUES ('$subject', '$class')";
		if (mysqli_query($conn, $sql)) {
			header("location: ./subjects");
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
		<form  method="post" enctype="multipart/form-data">
			<div class="q-container">
				<div class="q-responsive">
					<div class="inputContainer">
						<label for="topic">Subject Name: *</label>
						<input type="text" id="topic" name="subject" required>
					</div>
					<div class="inputContainer">
						<label for="topic">class: *</label>
						<input type="text" id="topic" name="class" required>
					</div>
			<div class="btns">
				<input type="submit" value="Submit" name="addSub">
                <a class="cancel" href="subjects">Cancel</a>
			</div>
		</form>
	</div>
</body>

</html>