<?php
include('config.php');
session_start();
if(isset($_POST['send_request'])) {
    $receiver_id = $_POST['receiver_id'];
    $sender_id = $_SESSION['user_id'];
    $query = "INSERT INTO friend_requests (sender_id, receiver_id) VALUES ('$sender_id', '$receiver_id')";
    if (mysqli_query($conn, $query)) {
        header('Location: profile.php');
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Send Friend Request</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<form method="post">
    <div class="form-group">
        <label for="receiver_id">Friend's User ID:</label>
        <input type="text" class="form-control" name="receiver_id" required>
    </div>
    <input type="submit" class="btn btn-primary" name="send_request" value="Send Request">
</form>
</body>
</html>
