<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user-id'])) {
    header("Location: login.php"); // Redirect to login page
    exit();
}

// Display dashboard content
echo "Welcome, " . $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
</head>
<body>
    <h1>Wellcome to Dashbord</h1>
</body>
</html>