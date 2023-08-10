<?php
  include "./php/config.php";
  include "loginCheck.php";
  include "head.php";
	
    if (isset($_POST['studentAdd'])){
		$StuName = mysqli_real_escape_string($conn,$_POST['StuName']);
		$StudentId = mysqli_real_escape_string($conn,$_POST['StudentId']);
		$StudentPass = trim(mysqli_real_escape_string($conn,$_POST['StudentPass']));
		$StuSchoolName = trim(mysqli_real_escape_string($conn,$_POST['StuSchoolName']));
		$sql = "INSERT INTO students (studentName, student_id, SchoolName, password ) VALUES ('$StuName', '$StudentId','$StuSchoolName','$StudentPass')";
		if (mysqli_query($conn, $sql)) {
			header("location: ./students");
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
	<div class="src">
	<form  class="fileForm" method="post" action="import" enctype="multipart/form-data">
		<input type="file" name="importFile" id="importFile" class="fileInput" accept=".csv" required>
		<button class="addQBtn" type="submit"><i class='bx bx-plus-medical'></i>Add Bulk User</button></a>
</form>
</div>	
		<form  method="post" class="studentUploadFrom"enctype="multipart/form-data">
			<div class="q-container">
				<div class="q-responsive">
				<div class="inputContainer Q-inputContainer">
					<label for="StuName">Student Name: *</label>
					<input type="text" id="StuName" name="StuName" required>
				</div>
				</div>
				<div class="q-responsive">
				<div class="inputContainer Q-inputContainer">
				<label for="StuSchoolName">Student School Name: *</label>
						<?php
                                $sql = "SELECT * FROM teachers Where teacher_id = '$mainId' ";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) { 
                            ?>
							<input type="text" value="<?php echo $row['TeacherSchoolName']?>" name="StuSchoolName" required></Option>
                            <?php
                                }
                            ?>
				</div>
				</div>
			</div>
			
			<div class="correct_container">
			<label for="StudentId">Student Id: *</label>
			<input type="text" id="StudentId" name="StudentId" required>
			</div>
			<div class="correct_container">
			<label for="StudentPass">Student Password: *</label>
			<input type="text" id="StudentPass" name="StudentPass" required>
			</div>
			<div class="btns">
				<input type="submit" value="Submit" name="studentAdd">
				<a class="cancel" href="Students">Cancel</a>
			</div>
		</form>
							</main>
</body>

</html>























