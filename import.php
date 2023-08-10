<?php
// MySQL database connection settings
$host = "localhost";
$username = "xeledute1_online";
$password = "Rootadmin@1";
$database = "xeledute1_online";

// Connect to the MySQL database
$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if a CSV file was uploaded
if (isset($_FILES['importFile'])) {
    $file = $_FILES['importFile']['tmp_name'];
    $handle = fopen($file, "r");

    // Read the CSV file
    while (($data = fgetcsv($handle, 1000, ",")) !== false) {
        // $id = mysqli_real_escape_string($conn, $data[0]); // Assuming column 1 in the CSV corresponds to the first column in the database table
        $studentName = mysqli_real_escape_string($conn, $data[0]); // Assuming column 2 in the CSV corresponds to the second column in the database table
        $student_id = mysqli_real_escape_string($conn, $data[1]); // Assuming column 2 in the CSV corresponds to the second column in the database table
        $SchoolName = mysqli_real_escape_string($conn, $data[2]); // Assuming column 2 in the CSV corresponds to the second column in the database table
        $password = mysqli_real_escape_string($conn, $data[3]); // Assuming column 2 in the CSV corresponds to the second column in the database table
        // Insert the data into the table
        $sql = "INSERT INTO students (studentName,student_id,SchoolName,password) VALUES ('$studentName','$student_id','$SchoolName','$password')";
        mysqli_query($conn, $sql);
    }

    // Close the file handle
    fclose($handle);
    header ("Location: StudentAdd");
    echo " data imported successfully!";
} else {
    echo "Error: Please upload a CSV file.";
}
mysqli_close($conn);
?>