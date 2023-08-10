<?php
    include "./php/config.php";
    include "loginCheck.php";
    include "head.php";
?>


<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100 styki"></div>
  <!-- Navbar Header start -->
  <?php include "header.php"?>
    <!-- End Navbar Header -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-10">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">No. of Students</p>
                    <h5 class="font-weight-bolder">
                    <?php
                          $sql = "SELECT * from students WHERE SchoolName = '$schoolsession'";
                          if ($result = mysqli_query($conn, $sql)) {
                              $rowcount = mysqli_num_rows( $result );
                              echo  $rowcount ;
                          }
                      ?>
                    </h5>
                  </div>
                </div>
                <div class="col-2 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="ni ni-single-02  text-sm opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-10">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">No. of subjects</p>
                    <h5 class="font-weight-bolder">
                    <?php
                        $sql = "SELECT * from subjects";
                        if ($result = mysqli_query($conn, $sql)) {
                            $rowcount = mysqli_num_rows( $result );
                            echo  $rowcount ;
                        }
                    ?>
                    </h5>
                  </div>
                </div>
                <div class="col-2 text-end">
                  <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-10">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">No. of TESTS</p>
                    <h5 class="font-weight-bolder">
                        <?php
                          $sql = "SELECT * from subjects";
                          if ($result = mysqli_query($conn, $sql)) {
                              $rowcount = mysqli_num_rows( $result );
                              echo  $rowcount ;
                          }
                        ?>
                    </h5>
                  </div>
                </div>
                <div class="col-2 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-10">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">no. of Class</p>
                    <h5 class="font-weight-bolder">
                    <?php
                        $sql = "SELECT * from class_details";
                        if ($result = mysqli_query($conn, $sql)) {
                            $rowcount = mysqli_num_rows( $result );
                            echo  $rowcount ;
                        }
                    ?>
                    </h5>
                  </div>
                </div>
                <div class="col-2 text-end">
                  <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                    <!-- <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i> -->
                    <i class='bx bxs-chalkboard text-lg'></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
          <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
              <!-- <h6 class="text-capitalize">Sales overview</h6> -->
              <p class="text-sm mb-0">
                <!-- <i class="fa fa-arrow-up text-success"></i> -->
                <!-- <span class="font-weight-bold">4% more</span> in 2021 -->
              </p>
            </div>
            <div class="card-body p-3">
              <div class="chart">
                <canvas id="chart-line" class="chart-canvas" height="400"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include "footer.php"?>
  </main>
  
  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
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
  <script src="./assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>