<?php
    include "./php/config.php";
    include "loginCheck.php";
	include "head.php";
	
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $query = "SELECT * FROM students WHERE id = $id";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) { 
			$studID = $row['student_id'];
			$stuName = $row['studentName'];
			$stuSchoolName = $row['SchoolName'];
			$stuPassword = $row['password'];
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
		<form action="./php/stuUpdate.php?update=<?php echo $id;?>" method="post" enctype="multipart/form-data">
			<div class="q-container">
				<div class="q-responsive">
				<div class="inputContainer Q-inputContainer">
					<label for="studentName">Student Name: *</label>
					<input type="text" id="studentName" name="studentName" value="<?php echo $stuName ?>" required>
				</div>
				</div>
				<div class="q-responsive">
				<div class="inputContainer Q-inputContainer">
					<label for="student_id">student Id: *</label>
					<input type="text" id="student_id" name="student_id" value="<?php echo $studID ?>" required>
				</div>
				</div>
				<div class="q-responsive">
				<div class="inputContainer Q-inputContainer">
					<label for="SchoolName">School Name: *</label>
					<input type="text" id="SchoolName" name="SchoolName" value="<?php echo $stuSchoolName ?>" required>
				</div>
				</div>
				<div class="q-responsive">
				<div class="inputContainer Q-inputContainer">
					<label for="password">Password: *</label>
					<input type="text" id="password" name="password" value="<?php echo $stuPassword ?>" required>
				</div>
				</div>
			</div>
			
			<div class="btns">
				<input type="submit" value="Submit">
				<a class="cancel" href="students">Cancel</a>
			</div>
            
		</form>
	</div>
</body>

</html>
