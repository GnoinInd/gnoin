<?php
// Assuming you have a database connection established
$conn = mysqli_connect("localhost", "root", "", "gnoin");
// $conn = mysqli_connect("localhost","gnoin","Gnoin2023","gnoin");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['resume']) && isset($_FILES['panCard']) && isset($_FILES['aadhar'])) {
    // Retrieve form data for personal details
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
    
    // Retrieve form data for employment details
    $non_freshers_experience = $_POST["NonFreshersExperience"];
    $employment_type = $_POST["exampleRadios"];
    $total_experience = $_POST["TotalExperience"];
    $months = $_POST["Month"];
    $current_company = $_POST["CurrentCompany"];
    $current_designation = $_POST["CurrentDesignation"];
    $currency = $_POST["currency"];
    $price = $_POST["Price"];
    $notice_period = $_POST["NoticePeriod"];

    // Generate unique names for uploaded files
    $resumeName = $_FILES['resume']['name'];
    $panCardName = $_FILES['panCard']['name'];
    $aadharName = $_FILES['aadhar']['name'];
    $resumeTemp_name = $_FILES['resume']['tmp_name'];
    $panCardTemp_name = $_FILES['panCard']['tmp_name'];
    $aadharTemp_name = $_FILES['aadhar']['tmp_name'];
    $resumeUniqueName = uniqid('resume_', true) . '_' . $resumeName;
    $panCardUniqueName = uniqid('panCard_', true) . '_' . $panCardName;
    $aadharUniqueName = uniqid('aadhar_', true) . '_' . $aadharName;


    // Insert data into the employee_details table
    $sql = "INSERT INTO employee_data 
            (first_name, middle_name, last_name, current_address, highest_qualification, passing_year, dob, employee_in, experience, job_title, language, immediate_joiner, non_freshers_experience, employment_type, total_experience, months, current_company, current_designation, currency, price, notice_period, resume_tmp_name, panCard_tmp_name, aadhar_tmp_name) 
            VALUES 
            (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssisiisssssssssssssss", $first_name, $middle_name, $last_name, $current_address, $highest_qualification, $passing_year, $dob, $employee_in, $experience, $job_title, $language, $immediate_joiner, $non_freshers_experience, $employment_type, $total_experience, $months, $current_company, $current_designation, $currency, $price, $notice_period, $resumeUniqueName, $panCardUniqueName, $aadharUniqueName);




    // Execute the prepared statement
    if ($stmt->execute()) {
        // Move uploaded files to a permanent location with unique names
        move_uploaded_file($resumeTemp_name, "upload-document/" . $resumeUniqueName);
        move_uploaded_file($panCardTemp_name, "upload-document/" . $panCardUniqueName);
        move_uploaded_file($aadharTemp_name, "upload-document/" . $aadharUniqueName);

        echo "Record inserted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();

    $conn->close();
    header("Location: {$_SERVER['HTTP_REFERER']}?success=SUCCESS");
    exit();
}
?>
