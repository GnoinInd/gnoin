<?php
// Assuming you have a database connection established
//server connection
$conn = mysqli_connect("localhost","root","","gnoin");


// Create connection
//$conn = mysqli_connect("localhost","root","","gnoin");

// Check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $first_name = $_POST["FirstName"];
    $middle_name = $_POST["MIddleName"];
    $last_name = $_POST["LastName"];
    $current_address = $_POST["CurrentAddress"];
    $highest_qualification = $_POST["HIghestQualification"];
    $passing_year = $_POST["PassingYear"];
    $dob = $_POST["Dob"];
    $employee_in = $_POST["EmployeIn"];
    $experience = $_POST["Experience"];
    $job_title = $_POST["Jobtitle"];
    $language = $_POST["Language"];
    $immediate_joiner = $_POST["ImmediateJoiner"];
    // $resume_path = "path/to/uploaded/resume"; // Replace with the actual path

    // Insert data into the database
    $sql = "INSERT INTO employee_data 
            (first_name, middle_name, last_name, current_address, highest_qualification, passing_year, dob, employee_in, experience, job_title, language, immediate_joiner) 
            VALUES 
            ('$first_name', '$middle_name', '$last_name', '$current_address', '$highest_qualification', '$passing_year', '$dob', '$employee_in', '$experience', '$job_title', '$language', '$immediate_joiner')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
header("Location: {$_SERVER['HTTP_REFERER']}?success=SUCCESS");
    exit();
// Close the database connection
?>
