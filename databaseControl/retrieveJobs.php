<?php
require "connect.php";
require "session.php";
function retrieveJobData($conn) {
    $data = array();
    $query = "SELECT id, job_title, job_subtitle FROM jobs_post";
    $result = mysqli_query($conn, $query);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {

            // Save the ID in a session variable
            // $_SESSION['selected_job_id'] = $row['id'];

            // Add the row to the data array
            $data[] = $row;
        }

        mysqli_free_result($result);
    } else {
        echo "Error retrieving data: " . mysqli_error($conn);
    }

    return $data;
}
$jobData = retrieveJobData($conn);

function processJobDetails($conn) {
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $jobId = $_GET['id'];

        $jobDetails = retrieveJobDetails($conn, $jobId);

        if ($jobDetails !== null) {
            // Store job details in session variables
            $_SESSION['job_details'] = $jobDetails;
            return $jobDetails; // Return job details upon success
        } else {
            return null; // Job not found
        }
    } else {
        return null; // Invalid job ID
    }
}

function retrieveJobDetails($conn, $jobId) {
    $query = "SELECT * FROM jobs_post WHERE id = $jobId";
    $result = mysqli_query($conn, $query);

    if ($result && $row = mysqli_fetch_assoc($result)) {
        mysqli_free_result($result);
        return $row;
    } else {
        return null; // Job not found
    }
}
$jobDetails = processJobDetails($conn);
