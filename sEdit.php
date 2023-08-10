<?php
      include "./php/config.php";
	  include "loginCheck.php";
	  include "head.php";

    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $query = "SELECT * FROM subjects WHERE id = $id";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
			$subjectName = $row['subjectsName'];
			$className = $row['className'];;
			
		}} 

?>
<link rel="stylesheet" href="./assets/css/qupdated.css">
<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <!-- Navbar Header start -->
  <?php include "header.php"?>
    <!-- End Navbar Header -->
    <div class="container-fluid py-4">
		<form action="./php/sUpdate.php?update=<?php echo $id;?>" method="post" enctype="multipart/form-data">
			<div class="q-container">
				<div class="q-responsive">
				<div class="inputContainer Q-inputContainer">
					<label for="subjectsName">subjectsName: *</label>
					<input type="text" id="subjectsName" name="subjectsName" value="<?php echo $subjectName ?>" required>
				</div>
				</div>
				<div class="q-responsive">
				<div class="inputContainer Q-inputContainer">
					<label for="className">Class Name: *</label>
					<input type="text" id="className" name="className" value="<?php echo $className?>" required>
				</div>
				</div>
			</div>
			
			<div class="btns">
				<input type="submit" value="Submit">
				<a class="cancel" href="subjects">Cancel</a>
			</div>
		</form>
	</div>
</body>

</html>
