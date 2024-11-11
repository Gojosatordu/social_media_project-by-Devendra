<?php
// Include the database configuration file
include('config.php');
session_start(); // Start the session

// Check if the share post button is clicked
if(isset($_POST['share_post'])) {
    // Get form inputs
    $user_id = $_SESSION['user_id'];
    $content = $_POST['content'];
    // Insert the post content into the posts table
    $query = "INSERT INTO posts (user_id, content) VALUES ('$user_id', '$content')";
    mysqli_query($conn, $query);
    // Redirect to the profile page after sharing the post
    header('Location: profile.php');
}
?>
<!-- HTML form for sharing a post -->
<form method="post">
    What's on your mind?<br>
    <textarea name="content"></textarea><br>
    <input type="submit" name="share_post" value="Share">
</form>
