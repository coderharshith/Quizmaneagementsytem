<?php
    session_start();
    include "./php/config.php";
    if(isset($_SESSION['teacher_identifier'])){
        header("location: dashboard");
    }

   $error = "";
   if(isset($_POST['submit'])){
   $StudentName = strtolower(mysqli_real_escape_string($conn, $_POST['teacherName']));
   $student_id = strtolower(mysqli_real_escape_string($conn, $_POST['teacher_id']));
   $schoolName = strtolower(mysqli_real_escape_string($conn, $_POST['School']));
   $password = strtolower(mysqli_real_escape_string($conn, $_POST['password']));

   $select = " SELECT * FROM teachers WHERE teacher_id = '$student_id'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result);
      if(strtolower($row['teacherName']) == $StudentName ){
        if(strtolower($row['TeacherSchoolName']) == $schoolName){
            if ($row['password'] == $password ) {
                $_SESSION['teacher_identifier'] = $row['teacher_id'];
                $_SESSION['schoolname'] = $row['TeacherSchoolName'];
                header('location: dashboard');
              }
              else {
                  echo "<script>alert('Password does not match');</script>";
              }
          } 
          else{
              echo '<script>alert("incorrect School Name");</script>';
          }
        }
        else{
               echo '<script>alert("incorrect Teacher Name");</script>';
          }
      }else{
              echo '<script>alert("incorrect Teacher Id");</script>';
      }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/logo.png">
  <title>
    Exl Edu Tech | Teacher Dashboard 
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Log In As Teacher</h4>
                  <p class="mb-0"></p>
                </div>
                <div class="card-body">
                  <form role="teacher" method="post">
                    <div class="mb-3">
                      <input type="text" class="form-control form-control-lg" placeholder="Your Name" name="teacherName">
                    </div>
                    <div class="mb-3">
                    <select id="subject" class="form-control form-control-lg" name="School" required>
                    <Option value="">Choose Your School Name</Option>
						        <?php
                                $sql = "SELECT * FROM schools_details ";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) { 
                            ?>
							        <Option value="<?php echo $row['School_name']?>"><?php echo $row['School_name']?></Option>
                            <?php
                                }
                            ?>
						        </select>
                    </div>
           
                    <div class="mb-3">
                      <input type="text" class="form-control form-control-lg" placeholder="Teacher ID" name="teacher_id">
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control form-control-lg" placeholder="Password" name="password">
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe">
                      <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0" name="submit">Log in</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    login as student
                    <a href="student/index" class="text-primary text-gradient font-weight-bold">Log In</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-left justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('assets/img/loginLMS.png');
          background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
                <img src="" alt="">
                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Learning more fun and easy with us"</h4>
                <p class="text-white position-relative">Xel EduTech is a Bangalore based online education company especially for schools, colleges and education training centres. We enhance the students and faculty performance through our unique training program called “I DEVELOP” using Artificial intelligence.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>