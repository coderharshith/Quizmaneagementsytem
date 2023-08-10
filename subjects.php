<?php
    include "./php/config.php";
    include "loginCheck.php";
    include "head.php";
?>
<link rel="stylesheet" href="./assets/css/table.css"> 
<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <!-- Navbar Header start -->
    <?php include "header.php"?>
    <!-- End Navbar Header -->
    <!-- class="container py-1" -->
    <div class="main_container ">
    <div class="src">
<input type="text" name="" class="search" id="searchuser" placeholder="search by subject....." onkeyup= "searchfn()">
<a href="subjectAdd"><button class="addQBtn"><i class='bx bx-plus-medical'></i>Add New Subject</button></a>
</div>
<div class="table_container" id="table_con">
<p class="table-title">Subjects Table</p>
   <table class="table" id="tb_table">
        <thead>
        <th>S.No</th>
            <th>subjectsName</th>
            <th>class</th>
            <th>Edit</th>
            <th>Delete</th>
    </thead>
    <tbody>
<?php  
    if (! $conn) {  
    die("Connection failed" . mysqli_connect_error());  
        }  
    else {  
        mysqli_select_db($conn, 'xeledute1_online');  
    }  
  
    //define total number of results you want per page  
    $results_per_page = 10;  
    //find the total number of results stored in the database  
    $query = "select * from subjects ";  
    $result = mysqli_query($conn, $query);  
    $number_of_result = mysqli_num_rows($result);  
  
    //determine the total number of pages available  
    $number_of_page = ceil ($number_of_result / $results_per_page);  
    
    //determine which page number visitor is currently on  
    if (!isset ($_GET['page']) ) {  
        $page = 1;  
    } else {  
        $page = $_GET['page'];  
    }  
  
    //determine the sql LIMIT starting number for the results on the displaying page  
    $page_first_result = ($page-1) * $results_per_page;  
  
    //retrieve the selected results from database   
    $query = "SELECT *FROM subjects LIMIT " . $page_first_result . ',' . $results_per_page;  
    $result = mysqli_query($conn, $query);  
      $j = 0;
    //display the retrieved result on the webpage  
    while ($row = mysqli_fetch_array($result)) { 
        $j++; 
        ?>
        <!-- echo '<tr><td>'.$j . '</td><td> ' . $row['question'] . "</td><td><a href='qEdit?edit=".<?php echo $row['id'];?>."</td></tr>";   -->
        <tr>
            <td data-label='S.No'><?php echo $j ?></td>
            <td data-label='SubjectsName'><?php echo $row['subjectsName'] ?></td>
            <td data-label='Class'><?php echo $row['className'] ?></td>
            <td><a href='sEdit?edit=<?php echo $row["id"];?>' class='qEdit'>Edit</a></td>
            <td><a href='sDelete?delete=<?php echo $row["id"];?>' class='qDelete'>Delete</a></td>       
            </tr>
        <?php
    }    
  
?>  
</table>
</div>
<?php
for($page = 1; $page<= $number_of_page; $page++) {  
    echo '<div class="pagination"><a  href = "AddQuestions.php?page=' . $page . '">' . $page . ' </a>';  
}  
?>

    </div>
  </main>

  <!--   Core JS Files   -->
  <script src="./assets/js/search_list.js"></script>

  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
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