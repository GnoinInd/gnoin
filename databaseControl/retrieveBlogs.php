<?php
// Function to retrieve blog posts from the database and store them in session variables
function retrieveAndStoreBlogPosts() {
    require "connect.php";
    // Your database connection code here...

    // Fetch the latest blog post (featured article)
    $sql_featured = "SELECT * FROM blog ORDER BY posted_At DESC LIMIT 1";
    $result_featured = $conn->query($sql_featured);

    // Initialize empty arrays for storing featured and recent blog posts
    $featuredPosts = [];
    $recentPosts = [];

    // Check if there are any featured blog posts
    if ($result_featured->num_rows > 0) {
        $row_featured = $result_featured->fetch_assoc();
        $featuredPosts[] = $row_featured;
    }

    // Fetch all recent blog posts
    $sql_recent = "SELECT * FROM blog ORDER BY posted_At DESC";
    $result_recent = $conn->query($sql_recent);

    // Check if there are any recent blog posts
    if ($result_recent->num_rows > 1) {
        while ($row_recent = $result_recent->fetch_assoc()) {
            // Skip the first post (featured article)
            if (empty($featuredPosts) || $row_recent['id'] != $featuredPosts[0]['id']) {
                $recentPosts[] = $row_recent;
            }
        }
    }
    $_SESSION['featured_posts'] = $featuredPosts;
    $_SESSION['recent_posts'] = $recentPosts;

    // Close database connection
    $conn->close();
}
?>